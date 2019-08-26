<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

function ddd($variable)
{
    $cloner = new VarCloner();

    $dumper = 'cli' === PHP_SAPI ? new CliDumper() : new HtmlDumper();
    $dumper->dump($cloner->cloneVar($variable));

    die(1);
} 



