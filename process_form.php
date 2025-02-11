<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $level = $_POST["level"];

    // Admin email
    $admin_email = "mashetikhumphrey@gmail.com";

    // Send confirmation email to user
    $subject_user = "Welcome to Whitestar Skating Academy!";
    $message_user = "Dear $name,\n\nThank you for signing up for our skating classes! We are excited to have you on board.\n\nYour Details:\nName: $name\nEmail: $email\nPhone: $phone\nSkating Level: $level\n\nWe will get in touch with you soon!\n\nBest regards,\nWhitestar Skating Academy Team";
    $headers_user = "From: no-reply@whitestarskating.com";

    mail($email, $subject_user, $message_user, $headers_user);

    // Send notification email to admin
    $subject_admin = "New Skating Registration";
    $message_admin = "A new student has registered:\n\nName: $name\nEmail: $email\nPhone: $phone\nSkating Level: $level";
    $headers_admin = "From: no-reply@whitestarskating.com";

    mail($admin_email, $subject_admin, $message_admin, $headers_admin);

    // Redirect to a thank-you page
    header("Location: thank-you.html");
    exit();
}
?>
