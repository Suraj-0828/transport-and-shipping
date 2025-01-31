<?php

// Enable error reporting for debugging (optional)
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include('swiftmailer/vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = '<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';
    $data .= '<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;">Contact Form Enquiry Details :-</td></tr>';

    $data .= '<tr><td>Transportation By</td><td>' . htmlspecialchars($_POST['transportation']) . '</td></tr>';
    $data .= '<tr><td>Container Type</td><td>' . htmlspecialchars($_POST['container-type']) . '</td></tr>';
    $data .= '<tr><td>Container Quantity</td><td>' . htmlspecialchars($_POST['quantity']) . '</td></tr>';
    $data .= '<tr><td>Weight</td><td>' . htmlspecialchars($_POST['weight']) . '</td></tr>';
    $data .= '<tr><td>From</td><td>' . htmlspecialchars($_POST['from']) . '</td></tr>';
    $data .= '<tr><td>To</td><td>' . htmlspecialchars($_POST['to']) . '</td></tr>';
    $data .= '<tr><td>From and To</td><td>' . htmlspecialchars($_POST['from-to']) . '</td></tr>';
    $data .= '<tr><td>Ready To Load Date</td><td>' . htmlspecialchars($_POST['date']) . '</td></tr>';
    $data .= '<tr><td>Associated Services</td><td>' . htmlspecialchars($_POST['service']) . '</td></tr>';
    $data .= '<tr><td>Financing & payment deferral</td><td>' . htmlspecialchars($_POST['check']) . '</td></tr>';
    $data .= '<tr><td>Additional information</td><td>' . htmlspecialchars($_POST['information']) . '</td></tr>';
    $data .= '<tr><td>Name</td><td>' . htmlspecialchars($_POST['name']) . '</td></tr>';
    $data .= '<tr><td>Email</td><td>' . htmlspecialchars($_POST['email']) . '</td></tr>';
    $data .= '<tr><td>Phone No</td><td>' . htmlspecialchars($_POST['phone']) . '</td></tr>';
    $data .= '<tr><td>Subject</td><td>' . htmlspecialchars($_POST['subject']) . '</td></tr>';
    $data .= '<tr><td>Message</td><td>' . htmlspecialchars($_POST['message']) . '</td></tr>';
    $data .= '<tr><td>IP Address</td><td>' . $_SERVER['REMOTE_ADDR'] . '</td></tr>';
    $data .= '</table>';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('mail.hvsshipping.com', 465, 'ssl'))
        ->setUsername('no-reply@hvsshipping.com')
        ->setPassword('VC*ShkG3Bmpz');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message())
        ->setSubject('Contact Form Enquiry')
        ->setFrom(['no-reply@hvsshipping.com' => 'Contact Form Enquiry'])
        ->setTo(['suraj.itarsia@gmail.com' => 'Contact Form Enquiry'])
        ->setBody($data)
        ->setContentType("text/html");

    // Send the message
    $result = $mailer->send($message);

    if ($result) { ?>

        <script>
            window.location.href = 'success.php';
        </script>

    <?php } else { ?>

        <script>
            window.location.href = 'failed.php';
        </script>

<?php
    }
}
?>