# Phar-Skeleton

Skeleton for creating PHAR applications from scratch including testing, reporting and building.

## Requirements

You need to modify your CLI `php.ini`. Otherwise we will not be able to "write" phar packages.
    
    phar.readonly=Off

## Install, Build and Run

    $ composer install
    $ composer build

Use the `phar` file:

    $ php dist/phar-skeleton.phar
    TODO: Do something

Use the `deb` file:

    $ sudo dpkg -i dist/phar-skeleton.deb
    Preparing to unpack dist/phar-skeleton.deb ...
    Unpacking phar-skeleton (1.0.0) ...
    Setting up phar-skeleton (1.0.0) ...
    
    $ phar-skeleton
    TODO: Do something
    
    $ which phar-skeleton
    /usr/local/bin/phar-skeleton
    
    $ sudo dpkg -r phar-skeleton
    Removing phar-skeleton (1.0.0) ...
    dpkg: warning: while removing phar-skeleton, directory '/usr/local/bin' not empty so not removed