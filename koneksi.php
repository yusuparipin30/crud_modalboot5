<?php

//koneksi data base
$server = "localhost";
$user = "root";
$password = "";
$database = "dbpalm_modaldb";

//membuat koneksi ke data base
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));



?>