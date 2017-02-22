<?php

namespace App\Api\Abstracts;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

abstract class BaseController extends Controller
{
    use Helpers;
}