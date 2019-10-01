<?php

namespace Shelf\Util;

use PhpSchool\Terminal\Terminal;
use PhpSchool\Terminal\UnixTerminal;
use PhpSchool\Terminal\IO\ResourceInputStream;
use PhpSchool\Terminal\IO\ResourceOutputStream;

class TerminalFactory
{
    public static function fromSystem(): Terminal
    {
        return new UnixTerminal(new ResourceInputStream, new ResourceOutputStream);
    }
}

