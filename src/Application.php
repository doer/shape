<?php

namespace Shelf;

use Shelf\Input\Argument;
use PhpSchool\Terminal\Terminal;
use Shelf\Util\TerminalFactory;

/**
 * Shelf application
 *
 * @property Style $style
 * @property Color $color
 */
class Application
{
    /**
     * @var Terminal
     */
    protected $terminal;

    /**
     * @var Argument
     */
    protected $argument;

    public function __construct(Argument $argument, Terminal $terminal = null)
    {
        $this->argument = $argument;
        $this->terminal = $terminal ?? TerminalFactory::fromSystem();
    }
}
