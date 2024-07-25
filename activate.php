<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $activation_code = htmlspecialchars($_POST['activation_code']);

    // Here you can add code to process the activation, e.g., save to a database, send an email, etc.
    
    // For now, let's just display a confirmation message
    echo "<h1>Activation Successful!</h1>";
    echo "<p>Thank you, $name. Your package has been activated.</p>";
    echo "<p>An email confirmation has been sent to $email.</p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>There was a problem with your submission. Please try again.</p>";
}
?>
