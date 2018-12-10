<?php
error_reporting(E_ERROR); require_once 'phpqrcode/phpqrcode.php'; $spadfef0 = urldecode($_GET['data']); QRcode::png($spadfef0);