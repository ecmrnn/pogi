<?php

// remove and destroy all session variables
session_start();
session_destroy();
header("Location: ../login.php");