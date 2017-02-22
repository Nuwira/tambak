<?php

namespace App\Api\V1\Controllers\Welcome;

use App\Api\Abstracts\BaseController as Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller {
    public function get(Request $request) {
        return ["Hello" => "World"];
    }
}