<?php
require_once "includes/mail.php";

$name = $_POST['cs_name'];
$email = $_POST['cs_email'];
$phone = $_POST['cs_phone'];
$bizname = $_POST['cs_bizname'];
$location = $_POST['cs_location'];
$source = $_POST['cs_source'];

$duration = $_POST['cs_duration'];
$message = $_POST['cs_message'];

if ( empty($_POST['cs_name']) || empty($_POST['cs_email']) || empty($_POST['cs_phone']) || empty($_POST['cs_message']) ) {
    echo json_encode(array("status"=>"ERROR", "data"=>"Please fill out the required fields."));
}

$name = strip_tags($name);
$receiver = strip_tags(strtolower($email));
$subject = "JAS Chat Group - Contact Form";

$message = "
Name: $name
Email: $email
Phone: $phone
Business Name: $bizname
Location: $location
How did you hear about us: $source
How long has your Legal Business Entity been established: $duration

Message: $message

";


$message = nl2br($message);
$MailResponse = sendEmail($name, $receiver, $subject, $message, $admin_html_email);

if ($MailResponse['status'] == 'OK') {
    echo json_encode(array("status"=>"OK", "data"=>"Your message has been received, we will get back to you shortly."));
}else {
    echo json_encode(array("status"=>"ERROR", "data"=>"Please fill out the required fields."));
}

?>