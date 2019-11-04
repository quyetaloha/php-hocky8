<?php
session_start();
unset($_SESSION["checklogin"]);
session_destroy();
header( 'Location: ../nalika/login.html' );