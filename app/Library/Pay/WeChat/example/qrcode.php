<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $sp7a0d0d = urldecode($_GET['data']); QRcode::png($sp7a0d0d);