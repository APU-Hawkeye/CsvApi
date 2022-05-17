<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class Countries extends Controller
{
    public function index()
    {
        return \App\Models\Countries::all();
    }
}