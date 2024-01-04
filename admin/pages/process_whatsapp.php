<?php

if (isset($_POST['whatsapp'])) {
    include '../component/connect.php';

    $name = $_POST['name'];
    $encodedName = str_replace(' ', '%20', $name);
    $WA = $_POST['guestWA'];
    $invitationLink = "http://localhost/invitation/index.php?to=" . $encodedName;


    $message = $_POST['message']."\n\n\nYou are invited to our wedding event. For invitation details, please check: " . $invitationLink;

    $encodedMessage = urlencode($message);
    $url = "https://api.whatsapp.com/send?phone=$WA&text=$encodedMessage&autoload=1&app_absent=0";

    header("Location: $url");
    exit();
}
?>