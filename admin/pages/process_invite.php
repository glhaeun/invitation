<?php
if (isset($_POST['invite'])) {
    include '../component/connect.php';

    $guestName = $_POST['guestName'];

    $query = "SELECT * FROM guest WHERE name ='$guestName' ";
    $get_user = $connect->prepare($query);
    $get_user->execute();


    if($get_user->rowCount() > 0) {
        $_SESSION['alreadyExist'] = true;
    } else {
        $query = "INSERT INTO guest (name) VALUES (:guestName)";
        $statement = $connect->prepare($query);
        $statement->bindParam(':guestName', $guestName);
        $statement->execute();

        $_SESSION['successfullyAdded'] = true;
    }

    header("Location: guest.php");
    exit();

    
}
?>
