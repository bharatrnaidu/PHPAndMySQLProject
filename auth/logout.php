<?php

session_start();

// below code wil remove all the values present in session object
session_unset();
// below code wil delete the session object
session_destroy();

// redirect user to index.php page
header("location: http://localhost/forum");
