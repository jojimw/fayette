<?php
if (empty($_POST)) {
    die("Error");
}
// $to = 'sachin@fayetteinnovations.com';
$to = 'matriscare@gmail.com';
$subject = "Contact Request";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $htmlContent = '
    <!DOCTYPE html>
<html>
<head>
    <title>Fayette Innovations Contact Request</title>
</head>
<body style="margin: 0; padding: 30px; background-color: #fff; font-family: Tahoma, Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #212121;">
<div style="max-width: 600px; margin:20px auto; background-color: #f5f5f5; border-radius: 8px;">
    <div style="padding:30px 30px 20px; border-bottom: 1px solid #e0e0e0; background-color: #004a99;border-radius: 8px 8px 0 0 ;">
        <a href="https://www.fayetteinnovations.com/" style="color: #fff; text-decoration: none; font-weight: bold;">
            Fayette Innovations Pvt Ltd
        </a>
    </div>

    <div style="padding: 0 30px;">
        <h3>Thank you for contacting Fayette Innovations</h3>
        <p>We have received your contact request,<br/> we will contact you within 2 working days.</p>
        <h4>Your contact details are as follows:</h4>
        <table cellspacing="0" style="min-width: 300px; min-height: 200px;">
            <tr>
                <th>Name:</th><td>' . $_POST["name"] . '</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>' . $_POST["email"] . '</td>
            </tr>
            <tr>
                <th>Message:</th><td>' . $_POST["message"] . '</td>
            </tr>
        </table>
    </div>

    <div style="padding: 10px; border-radius: 0px 0px 8px 8px; background-color: #004a99; border-top: 1px solid #e0e0e0;">
        <table style="border: none; border-collapse: collapse; width: 100%; table-layout: fixed; font-size: 12px; color: #f9f9f9;">
            <tr>
                <td style="vertical-align: top; text-align: right;">
                    &copy; <strong>Fayette Innovations</strong>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>';

    // Set content-type header for sending HTML email
    $headers = "From: Fayette Innovations<no-reply@server203.web-hosting.com>" . "\r\n";
    $headers .= "Reply-To: Fayette Innovations<support@fayetteinnovations.com>" . "\r\n";
    $headers .= "CC:  " . $_POST['email'] . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    if (mail($to, $subject, $htmlContent, $headers))
        $Msg = 'OK';
    else
        $Msg = 'ERROR';
    echo $Msg;
} else {
    echo "ERROR";
}
