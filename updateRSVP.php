<?php
$edit = false; // Set initial value to false

if (!$_SESSION['guestMode'] && isset($_SESSION['user'])) {
    $query = "SELECT * FROM `guest` WHERE `name` = ? AND `attendance` = 'answered'";
    $statement = $connect->prepare($query);
    $statement->execute([$_SESSION['user']]);
    $rowCount = $statement->rowCount();

    if ($rowCount > 0) {
        $edit = true;
    }
}

// Save the $edit value to the session
$_SESSION['edit'] = $edit;

// Send back the updated edit status
echo json_encode(['edit' => $edit]);
?>
