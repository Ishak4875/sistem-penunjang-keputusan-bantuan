<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasyarakatModel;
class MasyarakatController extends Controller
{
    private $MasyarakatModel;
    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
    }

    public function add()
    {
        return view('v_add');
    }
}
