<?php
spl_autoload_register();
$lokal = new \Lokal\URLShortener();
$bitly = new \Bitly\URLShortener();
$login = new \Bitly\Auth\Login();
?>
