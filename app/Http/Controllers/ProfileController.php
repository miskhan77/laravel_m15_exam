<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Prepare data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Create cookie
        $cookie = cookie(
            'access_token',          // Cookie name
            '123-XYZ',               // Cookie value
            1,                       // Expiration in minutes
            '/',                     // Path
            $_SERVER['SERVER_NAME'],  // Domain
            false,                   // Secure (false)
            true                     // HttpOnly (true)
        );

        // Return response with data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
