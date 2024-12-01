<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function sum(int $a, int $b) {
        return $a + $b;
    }

    public function subtract(int $a, int $b) {
        return $a - $b;
    }
}
