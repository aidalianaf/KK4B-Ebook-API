<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119006,
        'name' => 'Aida Liana',
        'gender' => 'Female',
        'phone' => '081215614915',
        'class' => 'XII RPL 1'];
  }
}