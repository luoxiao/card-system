<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $sp833b34 = urldecode($_GET['data']); QRcode::png($sp833b34);