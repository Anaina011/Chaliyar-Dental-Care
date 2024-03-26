<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Compose email message
    $to = "manastom670@gmail.com";
    $subject = "Appointment Request";
    $message = "Name: $name\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Email Address: $email\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";

    // Additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your appointment request has been submitted successfully. We will contact you shortly.";
    } else {
        echo "Failed to send appointment request. Please try again later.";
    }
}
?>
