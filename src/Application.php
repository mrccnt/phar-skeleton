<?php

namespace PharSkel;

use PharSkel\Command\Develop\Main;
use Symfony\Component\Console\Application as ConsoleApp;

/**
 * Class Application
 * @package Mrccnt\Icinga2
 */
class Application
{
    const VERSION = '0.1.0';
    const NAME = 'Phar-Skeleton';

    public static function run()
    {
        // Create the instance
        $app = new ConsoleApp();
        $app->setName(self::NAME);
        $app->setVersion(self::VERSION);

        // Remove default options. We only keep help & version.
        $options = $app->getDefinition()->getOptions();
        $options = [$options['version'], $options['help']];
        $app->getDefinition()->setOptions($options);

        // TODO: Use a more comfortable way to handle included commands (configuration file / autoload / whatever)

        // Add some commands
        $app->add(new Main());

        // Lets go...
        $app->run();
    }
}