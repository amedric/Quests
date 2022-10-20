<?php

require '../vendor/autoload.php';
include '../src/Wcs/Hello.php';

use message as helloWorld;

echo helloWorld\Hello::talk();