<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Compose email message
    $to = "manastom670@gmail.com";
    $subject = "Dentist Appointment Request";
    $message = "Name: $name\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";

    // Additional headers
    $headers = "From: $name\r\n";
    $headers .= "Reply-To: $name <$phone>\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your appointment request has been submitted successfully. We will contact you shortly.";
    } else {
        echo "Failed to send appointment request. Please try again later.";
    }
}
?>
