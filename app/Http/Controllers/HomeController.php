<?php
# @Date:   2019-10-29T15:18:09+00:00
# @Last modified time: 2019-10-30T00:21:26+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $home = 'user.home';

        if ($user->hasRole('admin')){
          $home = 'admin.home';
        }
        else if ($user->hasRole('doctor')){
          $home = 'doctor.home';
        }
        else{
          $home = 'user.home';
        }

        return redirect()->route($home);
    }
}
