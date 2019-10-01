<?php

use PhpSchool\Terminal\IO\ResourceInputStream;
use PhpSchool\Terminal\IO\ResourceOutputStream;
use Shape\Terminal\UnixTerminal;

require __DIR__ . '/../vendor/autoload.php';

$terminal = new UnixTerminal(new ResourceInputStream, new ResourceOutputStream);

$terminal->disableCursor();
$terminal->disableEchoBack();

$width = $terminal->getWidth() - 2;

$tpl = '[%s%s]';

// $str = sprintf($tpl, str_repeat(' ', $width - 2), '', '');
// $terminal->write($str);
// $terminal->write("\033[2K");
// $terminal->write("\033[100D");

for ($i = 0; $i <= $width; $i++) {
    $str = sprintf(
        $tpl, 
        sprintf("\033[36;m%s\033[0m", str_repeat(' ', $i)), 
        sprintf("\033[;100m%s\033[0m", str_repeat(' ', $width - $i))
    );

    $terminal->clearLine();
    $terminal->write("\033[100D");
    $terminal->write($str);

    usleep(50000);
}

// $str = substr_replace($str, '=', 1, 3);
// $terminal->write("\033[2K");
// $terminal->moveCursorToColumn(100);
// $terminal->write($str);

// for ($i = 0; $i < 98; $i++) {
    // $str = substr_replace($str, '=', 1, $i);
    // $terminal->write($str);
    // $terminal->clearLine();
// echo PHP_EOL;
    // usleep(100);
// }


$terminal->enableCursor();
$terminal->enableEchoBack();
