<?php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];
$comment = $_POST['comment'];

// Validate data (optional)

// Process and display data
echo "<h1>Contact Information</h1>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Issue: $issue</p>";
echo "<p>Comment: $comment</p>";

// Additional processing (e.g., save to database)

?>