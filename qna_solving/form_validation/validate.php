<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password on the server side
    if (validateUsername($username) && validatePassword($password)) {
        // Registration successful
        $response = array("message" => "Registration successful!");
    } else {
        // Registration failed
        $response = array("message" => "Registration failed. Invalid username or password format.");
    }

    echo json_encode($response);
}

function validateUsername($username) {
    // Implement your server-side username validation rules here
    // Return true if the username is valid, false otherwise
    // Example: Username must be at least 4 characters long and can contain letters, numbers, and underscores.
    return preg_match('/^[a-zA-Z0-9_]{4,}$/', $username);
}

function validatePassword($password) {
    // Implement your server-side password validation rules here
    // Return true if the password is valid, false otherwise
    // Example: Password must be at least 8 characters long and contain at least one special character.
    return preg_match('/^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/', $password);
}
?>
