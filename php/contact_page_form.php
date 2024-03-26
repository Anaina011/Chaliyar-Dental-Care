<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);

    // Validate form data (you can add more specific validation as needed)
    if (empty($name) || empty($phone) || empty($date) || empty($time)) {
        // Handle empty fields (you can customize this error handling)
        echo "All fields are required. Please fill out the form completely.";
    } else {
        // Form data is valid, construct the email message
        $to = "anainass011@gmail.com"; // Change this to your email address
        $subject = "New Appointment Request";
        $message = "A new appointment request has been submitted.\n\n";
        $message .= "Name: $name\n";
        $message .= "Phone Number: $phone\n";
        $message .= "Appointment Date: $date\n";
        $message .= "Time: $time\n";

        // Send email
        $headers = "From: anainass011@gmail.com"; // Change this to your email address
        if (mail($to, $subject, $message, $headers)) {
            echo "Your appointment request has been submitted. We will contact you shortly.";
        } else {
            echo "Failed to send appointment request. Please try again later.";
        }
    }
} else {
    // Handle if form is not submitted
    echo "Form not submitted.";
}
?>