<?php
    if(isset($_GET['delete']) && !empty($_GET['delete'])) {
        $deleteId = $_GET['delete'];

        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
        <script>
            // Function to confirm deletion using SweetAlert
            function confirmDelete() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        deleteUser(<?php echo $deleteId; ?>);
                    }
                });
            }

            window.onload = function() {
                confirmDelete();
            };

            function deleteUser(deleteId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState === 4) {
                    if (this.status === 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Your guest has been deleted successfully.',
                            showConfirmButton: false,
                            timer: 1000
                        }).then(() => {
                            window.location = "guest.php"; // Redirect regardless of user action
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.cancel) {
                                window.location = "guest.php"; // Redirect if canceled
                            }
                        });
                    }
                }
            };

            xhr.open("POST", "process_deleteGuest.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("deleteId=" + deleteId);
        }

        </script>
        <?php
    }
?>
