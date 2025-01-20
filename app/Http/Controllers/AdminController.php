<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function index()
  {
      // Pastikan pengguna login
      if (Auth::id()) {
          $usertype = Auth::user()->usertype; // Gunakan Auth::user() dengan benar
          
          if ($usertype == 'user') {
              return view('home.index');
          } elseif ($usertype == 'admin') {
              return view('admin.index');
          } else {
             
              return redirect()->back();
          }
      } else {
          // Redirect ke halaman login jika pengguna belum login
          return redirect('login')->with('error', 'You must be logged in.');
      }
  }
  




}

