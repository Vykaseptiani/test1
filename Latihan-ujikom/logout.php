<?php
//memulai session
session_start();

// menghancurkan session
session_destroy();

//mengalihkan halaman ke form login
header('location:./');
?>