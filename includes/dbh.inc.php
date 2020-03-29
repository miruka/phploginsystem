
<?php

$conn = mysqli_connect('localhost', 'pmauser', 'Dypers1481*', 'phploginsystem');

if (!$conn) {
    die("Connection Failed" . mysqli_connect_errno());
}
