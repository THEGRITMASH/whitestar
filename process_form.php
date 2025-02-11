<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Send Confirmation Email to User
    $user_subject = "Thank You for Signing Up!";
    $user_message = "Hi $name,\n\nThank you for joining Whitestar Skating Academy!\n\nBest Regards,\nWhitestar Team";
    mail($email, $user_subject, $user_message, "From: mashetikhumphrey@gmail.com");

    // Send Notification Email to Admin
    $admin_email = "mashetikhumphrey@gmail.com";
    $admin_subject = "New Skating Academy Signup";
    $admin_message = "New member signup:\n\nName: $name\nEmail: $email";
    mail($admin_email, $admin_subject, $admin_message, "From: noreply@whitestar.com");

    echo "Thank you for signing up!";
} else {
    http_response_code(405); // Set HTTP 405 error
    echo "Method Not Allowed";
}
?>
