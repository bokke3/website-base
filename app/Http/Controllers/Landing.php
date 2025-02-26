<?php
// filepath: /var/www/app/Http/Controllers/Landing.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends Controller
{
    public function __invoke()
    {
        return view('landing');
    }
}