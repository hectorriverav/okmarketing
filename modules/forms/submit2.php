<?php
// Define an initial message variable
$confirmationMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $site = $_POST["site"];
    $email = $_POST["email"];

    // Validate data (you can add more validation as needed)
    if (empty($site) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $confirmationMessage = "Error: Invalid input. Please fill in all fields correctly.";
    } else {
        // Set up email parameters
        $to = "your_email@example.com"; // Replace with your email address
        $subject = "New Form Submission";
        $message = "Site: $site\nEmail: $email";

        // Send email
        if (mail($to, $subject, $message)) {
            // Set the confirmation message
            $confirmationMessage = "Success: Form submitted successfully!";
        } else {
            $confirmationMessage = "Error: Unable to submit the form. Please try again later.";
        }
    }
}
?>