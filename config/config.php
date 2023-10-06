<?php

    try
    {
        // Host:
        define("HOST", "localhost");

        // DB name:
        define("DBNAME", "forum");

        // User:
        define("USER", "root");

        // Password:
        define("PASS", "");

        // Establish connection to DB:
        $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);

        // Below code will handle the Error which occurs while connecting to DB:
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Below code just to check DB is coonected or not:
        // if($conn == true)
        // {
        //     echo "db connection is success";
        // }
        // else
        // {
        //     echo "error";
        // }
    }
    catch(PDOException $Exception)
    {
        echo $Exception->getMessage();
    }