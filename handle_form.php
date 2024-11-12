<?php
// Check if form data was submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Display a confirmation message
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We have received your message:</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<p>We will get back to you at <strong>$email</strong>.</p>";
} else {
    echo "<p>No data received. Please submit the form.</p>";
}
?>
