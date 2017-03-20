<?php

// Lokal
namespace Lokal;
class URLShortener {
  public function __construct() {
    echo "Lokal Shortener...";
  }
}

// Bitly
namespace Bitly;
class URLShortener {
  public function __construct() {
    echo "Bitly Shortener...";
  }
}

$lokal = new \Lokal\URLShortener();
$bitly = new \Bitly\URLShortener();
?>
