<?php
    if(isset($_POST['attend'])) {
        $name = $_POST['name'] ; // Name field
        $attendance = $_POST['attendance'] ; // Attendance (Yes/No)
        $guest = $_POST['guest'] ;
        $number = $_POST['number']; // Phone number
        $id = 0;
        if ($attendance == 'No') {
            $guest = 0 ;
            $number = '-'; 
        }
        
        

        if (!$_SESSION['guestMode'] && isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $query = "UPDATE `guest` SET `attendance`='answered' WHERE name = ?";
            $statement = $connect->prepare($query);
            $statement->execute([$user]);

            $query = "SELECT id FROM `guest` WHERE `name` = ?   ";
            $statement = $connect->prepare($query);
            $statement->execute([$_SESSION['user']]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $id = $result['id'];
    
        }

        $query = "INSERT INTO rsvp (name, number, attend, guest, guestId) VALUES (?, ?, ?, ?, ?)";
        $statement = $connect->prepare($query);
        $statement->execute([$name, $number, $attendance, $guest, $id]);

    } else if (isset($_POST['edit'])) {
            $name = $_POST['name'] ; // Name field
            $attendance = $_POST['attendance'] ; // Attendance (Yes/No)
            $guest = $_POST['guest'] ;
            $number = $_POST['number']; // Phone number
            if ($attendance == 'No') {
                $guest = 0 ;
                $number = '-'; 
            }

        if (!$_SESSION['guestMode'] && isset($_SESSION['user'])) {
            $query = "SELECT id FROM `guest` WHERE `name` = ?   ";
            $statement = $connect->prepare($query);
            $statement->execute([$_SESSION['user']]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $id = $result['id'];

            $query = "UPDATE `rsvp` SET name = ?, number = ?, attend = ?, guest =? WHERE guestId = ?";
            $statement = $connect->prepare($query);
            $statement->execute([$name, $number, $attendance, $guest, $id]);
    
        }
    }

    ?>
