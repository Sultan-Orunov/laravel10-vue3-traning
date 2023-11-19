<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexeController extends Controller
{
    public function __invoke()
    {
        return inertia('Index/Index');
    }
}
