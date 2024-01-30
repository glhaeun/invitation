<?php
// Start the session

$_SESSION['guestMode'] = true;
$_SESSION['editMode'] = false;


// Check if the 'to' parameter is set in the URL
if(isset($_GET['to'])) {
    $user = $_GET['to'];

    if (isUserInGuestDB($user, $connect)) {
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
        $_SESSION['guestMode'] = true;
        $_SESSION['user'] = "Guest";
    }

    

} else {
    $_SESSION['user'] = "Guest";
}

function isUserInGuestDB($user, $connect) {
    $query = "SELECT COUNT(*) as count FROM guest WHERE name = ?";
    $result = $connect->prepare($query);
    $result->execute([$user]);

    if ($result) {
        // Fetch the result
        $row = $result->fetch(PDO::FETCH_ASSOC);

        return ($row['count'] > 0);
    } else {
        // Handle the query error
        die('Error in query: ' . $result->errorInfo()[2]);
    }
}
