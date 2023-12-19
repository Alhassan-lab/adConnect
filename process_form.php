<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $surname = $_POST["inputSurname"];
    $firstName = $_POST["inputFirstName"];
    $businessName = $_POST["inputBusinessName"];
    $email = $_POST["inputEmail"];
    $location = $_POST["inputLocation"];
    $businessNumber = $_POST["inputBusinessNumber"];
    $authentication = $_POST["inputAuthentication"];
    $businessType = $_POST["selectBusinessType"];

    // Validate and process the data (you can add your own validation logic here)

    // Compose the email message
    $to = "recipient@example.com";  // Replace with the recipient's email address
    $subject = "Business Information Form Submission";
    $message = "Surname: $surname\n";
    $message .= "First Name: $firstName\n";
    $message .= "Business Name: $businessName\n";
    $message .= "Email: $email\n";
    $message .= "Location: $location\n";
    $message .= "Business Number: $businessNumber\n";
    $message .= "Authentication: $authentication\n";
    $message .= "Business Type: $businessType\n";

    // Send the email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>
