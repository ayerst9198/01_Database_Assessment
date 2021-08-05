<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");
    include("functions.php");

    // Connect to database...

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno())

    {
        echo "Connection failed:".mysqli_connect_error();
         exit;
    }

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Reviews">
    <meta name="keywords" content="Books, reading, fiction, non-fiction, genre, reviews">
    <meta name="author" content="Toby Ayers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Some Books With Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/no_side.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">

        <div class="box banner">

            <a href="index.php">
                <div class="box logo"  title="Logo - Click here to go to the Home Page">
                <img class="img-circle" src="images\chair_logo_green.jpg" width="177" height="150" alt="generic logo" />
                
                </div>    <!-- / logo -->
            </a>

            <h1><a href="index.php" class="title">Orchid Readings</a> </h1>
        </div>    <!-- / banner -->

        