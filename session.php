<?php
// Start the session

$_SESSION['guestMode'] = true;
$_SESSION['editMode'] = false;


// Check if the 'to' parameter is set in the URL
if(isset($_GET['to'])) {
    $user = $_GET['to'];
    $_SESSION['user'] = $user;
    $_SESSION['guestMode'] = false;

    $query = "SELECT * FROM `guest` WHERE `name` = ? AND `attendance` = 'answered'";
        $statement = $connect->prepare($query);
        $statement->execute([$_SESSION['user']]);
        $rowCount = $statement->rowCount();

		if ($rowCount > 0) {
            $_SESSION['editMode'] = true;
        }
} else {
    $_SESSION['user'] = "Guest";
}
?>
