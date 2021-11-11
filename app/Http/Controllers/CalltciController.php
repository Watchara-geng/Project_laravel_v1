<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class CalltciController extends Controller
{
    public function run()
    {
        print_r("asdadsad");
        $process = new Process(['python', base_path() . '/python.py']);
        $process->run();
        return $process->getOutput();
    }
}


