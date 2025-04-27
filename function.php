<?php

include 'connection.php';

//add user to database
if (isset($_POST['add_user'])) {


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // query to insert the data
    $query = "INSERT INTO `information` (`username`, `email`, `password`) VALUES ('$username','$email','$password')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("Location: index.php");
        exit(0);
    } else {
        header("Location: index.php");
        exit(0);
    }

    // $conn->close();
}

//edit user data to database
if (isset($_POST['edit_user'])) {

    $user_id = mysqli_real_escape_string($conn, $_POST['id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = ("UPDATE `information` SET `username` = '$username', `email` = '$email', `password` = '$password' WHERE `id` = '$user_id'");

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("Location: index.php");
        exit(0);
    }
}

//Delete user
if (isset($_POST['delete_user'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "DELETE FROM information where id = $user_id";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    }
}
