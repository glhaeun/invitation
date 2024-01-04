<?php include '../component/connect.php';
      include 'guestDelete.php';

    if (isset($_SESSION['email_sent']) && $_SESSION['email_sent']) {
        unset($_SESSION['email_sent']);
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Email sudah dikirim!',
            });
        </script>
        <?php
    } else if (isset($_SESSION['alreadyExist']) && $_SESSION['alreadyExist']) {
        unset($_SESSION['alreadyExist']);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'warning',
                title: 'You have already invited this guest!',
                target: 'body' // Specify the target element here
            });
        });
    </script>
    <?php
    } else if (isset($_SESSION['successfullyAdded']) && $_SESSION['successfullyAdded']) {
        unset($_SESSION['successfullyAdded']);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'You have successfully the guest!',
                target: 'body'
            });
        });
    </script>
    <?php
    }    
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wedding Admin</title>

    <link href="../component/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css">

    <link href="../component/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    .yellow {
        background-image: linear-gradient(to right, #FAD983 0%, #FAD983 100%);

    }
    .black {
        color: black;
    }
</style>

</head>

<body id="page-top">

    <div id="wrapper">

        <?php include '../component/sidebar.php' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Guest list</h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add Guest
                        </button>
                    </div>
                    

                    <div class="card shadow mb-4 w-100">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <!-- <th>Email</th> -->
                                            <!-- <th>Attend</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


<?php 

    $query ="SELECT * FROM guest";
    $select_user =  $connect->prepare($query);
    $select_user -> execute();

    $index = 1;
    if($select_user->rowCount()>0){
        while ($fetch_user = $select_user ->fetch(PDO::FETCH_ASSOC)){
            ?>
                        <tr>
                            <td><?=$index?></td>
                            <td><?=$fetch_user['name']?></td>
                            <!-- <td><?=$fetch_user['email']?></td> -->
                            <!-- <td><?=$fetch_user['attendance']?></td>  -->
                            <td>
                            <a href="guest.php?delete=<?=$fetch_user['id']?>"><i class="fas fa-trash"></i></a>
                            <a href="#" onclick="sendUserNameWA('<?=$fetch_user['name']?>')" data-toggle="modal" data-target="#whatsappModal"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#" onclick="sendUserName('<?=$fetch_user['name']?>')" data-toggle="modal" data-target="#emailModal"><i class="fa-solid fa-envelope"></i></a>
                            <a href="#" onclick="copy('<?=$fetch_user['name']?>')" ><i class="fa-solid fa-share-nodes"></i></a>
                        </td>      
                    <?php
                        $index++;
        }
    }
                                    
?>

                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                    <?php 
                        include 'guestAdd.php';
                        include 'email.php';
                        include 'whatsapp.php';
                    ?>
                </div>
                <!-- /.container-fluid -->
                <!-- Modal -->
                

            </div>
            <!-- End of Main Content -->

            <?php include '../component/footer.php' ?>


        </div>
        <!-- End of Content Wrapper -->
        
    </div>
    <!-- End of Page Wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script>
        function sendUserName(name) {
            document.getElementById('userName').innerHTML = name;
            document.getElementById('hiddenUserName').value = name;
        }

        function sendUserNameWA(name) {
            document.getElementById('nameWA').innerHTML = name;
            document.getElementById('hiddenNameWA').value = name;
        }

        function copy(parameter) {
            const baseUrl = 'http://localhost/invitation/index.php?to=';
            const encodedParameter = encodeURIComponent(parameter); // Encode the parameter
            const link = baseUrl + encodedParameter;

            const tempInput = document.createElement('input');
            tempInput.value = link;
            document.body.appendChild(tempInput);

            tempInput.select();
            document.execCommand('copy');

            document.body.removeChild(tempInput);

            Swal.fire({
                icon: 'success',
                title: 'Link successfully copied',
            });

        }

        
    </script>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->

    <!-- Page level plugins -->

    <!-- Page level custom scripts -->
    <!-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>