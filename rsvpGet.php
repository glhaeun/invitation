<?php

    $query = "SELECT id FROM `guest` WHERE `name` = ? AND `attendance` = 'answered'";
    $statement = $connect->prepare($query);
    $statement->execute([$_SESSION['user']]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $id = $result['id'];

    $query = "SELECT * FROM `rsvp` WHERE   `guestId` = ?";
    $statement = $connect->prepare($query);
    $statement->execute([$id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $name = $result['name'];
    $attendance = $result['attend'];
    $number = $result['number'];
    $guest = $result['guest'];


?>
