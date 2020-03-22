<?php
/**
 * Created by PhpStorm.
 * User: niwang
 * Date: 3/22/20
 * Time: 9:51 PM
 */

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function getIndex()
    {
        return 'Test Latihan';
    }
}
