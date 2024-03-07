<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer-master/src/Exception.php";
require_once "PHPMailer-master/src/PHPMailer.php";
require_once "PHPMailer-master/src/SMTP.php";

$doc_root = $_SERVER['DOCUMENT_ROOT'];
$SITE_MASTER_FOLDER = explode(DIRECTORY_SEPARATOR, dirname(__DIR__));
$SITE_MASTER_FOLDER = end($SITE_MASTER_FOLDER);
//images to be used
$logo = $doc_root.DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."favicon.png";

function sendEmail($name, $receiver, $subject, $message, $admin_html_email) {

    $smtp_host = "mail.jaschatgroup.com";
    $site_email = "no-reply@jaschatgroup.com";
    $site_password = "DxzPUwerty93!";
    $site_port = 465;

    global $logo;
    $mail = new PHPMailer;                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $smtp_host;  // Specify main and backup SMTP servers (www185-62-136-14.a2hosted.com)
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $site_email;                 // SMTP username
    $mail->Password = $site_password;                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $site_port;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($site_email, "JAS Chat Group");
    $mail->addAddress($receiver, $name);// Add a recipient
    $mail->addReplyTo($site_email, "JAS Chat Group");
    //Inline Images
    $mail->addEmbeddedImage($logo, 'logoimg', 'favicon.png');// attach file logo.jpg, and later link to it using identfier logoimg
    //Content
    $mail->isHTML(true);// Set email format to HTML
    $mail->Subject = $subject;
    //body
    $admin_html_email = $admin_html_email;

    require_once "tt_template.php";

    $admin_text_email = $message;

    $mail->Body    = $admin_html_email;
    $mail->AltBody = $admin_text_email;

    if(!$mail->send()) {
        $err = "Mailer Error: " . $mail->ErrorInfo;
        $msg = "Message could not be sent. ($err)";
        $res = array("status"=>"ERROR","data"=>$msg);
    }else{
        $msg = "Your message has been received, we will get back to you shortly.";
        $res = array("status"=>"OK","data"=>$msg);
    }
    return $res;
}
?>