<?php
    // opens a new file to write
    $data_file = fopen("info.json", "a");

    $username = $_POST["username"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $repeat_password = $_POST["repeat_password"];
    $text_to_write = $username. " " .$email . "  " . $psw . "  " . $repeat_password;

    // write data to server side file
    fwrite($data_file, $text_to_write);
    fclose($data_file);
?>
<head>
    <link rel="stylesheet" href="signup.css">
    <script src="script.js"></script>
</head>
<h1>Congratultions you are now signed up!</h1>
<p>Thanks for signing up, I hope you'll stick with us. You may now head to the home page.</p>
<button><a href="home.html">Home</a></button>