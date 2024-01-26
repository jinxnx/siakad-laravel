<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;


class TampilanSiswaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

}
