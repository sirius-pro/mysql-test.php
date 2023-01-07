<?php
$link = mysqli_connect('localhost', 'username', 'password');
if (!$link) {
die('Nie można połączyć z bazą danych MySQL: ' . mysqli_error());
}
echo 'Połączono z bazą danych MySQL.';
mysqli_close($link);
?>