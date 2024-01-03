<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $site = $_POST["site"];
    $email = $_POST["email"];

    // Validate data (you can add more validation as needed)
    if (empty($site) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid input. Please fill in all fields correctly.";
        exit;
    }

    // Set up email parameters
    $to = "email@okmarketing.xyz"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Site: $site\nEmail: $email";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Success: Form submitted successfully!";
    } else {
        echo "Error: Unable to submit the form. Please try again later.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
