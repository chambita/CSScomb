#!/usr/bin/php
<?php
/**
 * CSScomb
 * @version: 2.10 (build 1202191448)
 * @author: Vyacheslav Oliyanchuk (miripiruni)
 * @web: http://csscomb.com/
 */
require_once($_ENV['TM_BUNDLE_SUPPORT'].'/csscomb.php');
$input = file_get_contents('php://stdin');
$c = new csscomb();
echo $c->csscomb($input);?>
