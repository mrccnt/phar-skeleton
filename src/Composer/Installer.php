<?php

namespace PharSkel\Composer;

use Composer\Script\Event;

/**
 * Class Installer
 * @package PharSkel\Composer
 */
class Installer
{
    const ERR = 'Make sure your php.ini setting "phar.readonly" is set to "Off"';

    const OPTION_ON = 'On';
    const OPTION_ONE = 1;

    /**
     * @param Event $event
     * @return null|boolean
     */
    public static function preInstall(Event $event)
    {
        return self::checkIniSetting($event);
    }

    /**
     * @param Event $event
     * @return null|boolean
     */
    public static function preUpdate(Event $event)
    {
        return self::checkIniSetting($event);
    }

    /**
     * @param Event $event
     * @return null|boolean
     */
    private static function checkIniSetting(Event $event)
    {
        $value = ini_get('phar.readonly');
        if ($value==self::OPTION_ON || intval($value)==self::OPTION_ONE) {
            $console = $event->getIO();
            $console->write('');
            $console->writeError(self::ERR);
            exit;
        }
        return true;
    }
}
