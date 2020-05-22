<?php
include("./class.phpmailer.php");

if(isset($_POST['sendmail']))
{
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

    $email_message = "Email Id : ".$email."<br/>"."Name: ".$name."<br/>"."Phone: ".$phone."<br/>"."Message: ".$message;
    $subject="Quickbooks enquiry from website";
    

    $to = "official@qbcontact.com";
    
    $mail = new PHPMailer("true");
    $mail->IsHTML(true);
    
    //$mail->Charset = "iso-8859-1";
    $mail->CharSet = "UTF-8";
    $mail->From = "official@qbcontact.com";
    $mail->FromName = "official@qbcontact.com";
    $mail->Subject = "Quickbooks enquiry from website";
    $mail->Body = $email_message;
    $mail->AddAddress("official@qbcontact.com");
    
    
    if($mail->Send())
    {
       
        ?>
        <script>
        window.location.href = "./thank-you.html";
        // alert("form submitted");
        // header('Location: thank-you.html');
        </script>
    
        <?php
    }
}
?>
