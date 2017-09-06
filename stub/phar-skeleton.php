#!/usr/bin/env php
<?php

try {
    Phar::mapPhar('phar-skeleton.phar');
    include 'phar://phar-skeleton.phar/bin/phar-skeleton.php';
} catch (PharException $e) {
    echo $e->getMessage();
    echo 'Cannot initialize Phar';
    exit(1);
}

__HALT_COMPILER();
