<?php

// Lokal
class Lokal_URLShortener {
  public function __construct() {
    echo "Lokal Shortener...";
  }
}

// Bitly
class Bitly_URLShortener {
  public function __construct() {
    echo "Bitly Shortener...";
  }
}

$shortener = new Lokal_URLShortener();
?>
