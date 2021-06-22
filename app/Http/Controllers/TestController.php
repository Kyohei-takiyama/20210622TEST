<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //[/buildeing -> 建物です]
    public function building () {

        return '建物です';

    }

    //[/building -> 部屋番号は$roomです]
    public function room ( $room ) {

        return "部屋番号は".$room."です";

    }

}
