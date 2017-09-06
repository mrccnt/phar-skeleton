<?php

namespace Skeleton\Composer;

use Composer\Script\Event;

/**
 * Class Helper
 * @package Skeleton\Composer
 */
class Helper
{
    const ERR = 'Make sure your php.ini setting "phar.readonly" is set to "Off"';

    const OPTION_ON = 'On';
    const OPTION_ONE = 1;

    /**
     * @param Event $event
     * @return bool
     */
    public static function checkPharReadonly(Event $event)
    {
        $value = ini_get('phar.readonly');
        if (ucfirst(strtolower($value))==self::OPTION_ON || intval($value)==self::OPTION_ONE) {
            $console = $event->getIO();
            $console->write('');
            $console->writeError(self::ERR);
            exit;
        }
        return true;
    }
}
