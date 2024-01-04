<?php
    if(isset($_POST['attendance'])) {
        $name = $_POST['name'] ; // Name field
        $attendance = $_POST['attendance'] ; // Attendance (Yes/No)
        $guest = $_POST['guest'] ;
        $number = $_POST['number']? $_POST['number'] : '-' ; // Phone number
    
        $query = "INSERT INTO rsvp (name, number, attend, guest) VALUES (?, ?, ?, ?)";
        $statement = $connect->prepare($query);
        $statement->execute([$name, $number, $attendance, $guest]);

    }
?>