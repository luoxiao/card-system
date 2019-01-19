<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $spaf19c1 = urldecode($_GET['data']); QRcode::png($spaf19c1);