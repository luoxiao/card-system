<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $spdfc1ea = urldecode($_GET['data']); QRcode::png($spdfc1ea);