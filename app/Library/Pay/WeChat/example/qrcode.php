<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $sp78f833 = urldecode($_GET['data']); QRcode::png($sp78f833);