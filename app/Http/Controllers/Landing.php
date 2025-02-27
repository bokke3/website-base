<?php
// filepath: /var/www/app/Http/Controllers/Landing.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Adjust the namespace as needed

class Landing extends Controller
{
    public function __invoke()
    {
        $images = Image::all(); // Fetch images from the database
        return view('landing', compact('images'));
    }
}