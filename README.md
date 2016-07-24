# Phar-Skeleton

Skeleton for creating a PHAR application using symfony console. 

## Requirements

First thing is, that you need the `phar` extension enabled in your build environment.

As a second thing you need to check the `phar.readonly` setting in your `php.ini`. By default this value is set to `On` so PHP can not write .phar files. To enable writing .phar files set it to `phar.readonly = Off`. Remeber to edit the CLI settings and not the ones for your httpd.

## Installation

Install everything using composer:

    curl -sS https://getcomposer.org/installer | php
    ./composer.phar install

## Build

Use [Phing](https://www.phing.info) to build the .phar file:

    vendor/bin/phing
