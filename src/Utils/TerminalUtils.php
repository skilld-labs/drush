<?php

namespace Drush\Utils;

class TerminalUtils
{
    public static function stdinIsTerminal()
    {
        if (!function_exists('posix_isatty')) {
            return true;
        }

        return posix_isatty(STDIN);
    }
}
