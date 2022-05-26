<?php

namespace App\Controllers\Index;

use App\Controllers\BaseController;

class IndexController extends BaseController
{
    public function view() {

        return view('index/works');
    }

}