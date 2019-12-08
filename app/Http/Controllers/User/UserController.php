<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: UserController.php
# @Last modified by:
# @Last modified time: 2019-12-08T17:00:36+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.users.index')->with([
          'users' => $users
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        //$insurances = $user->insurance()->get();

        return view('user.users.show')->with([
          'user' => $user
          //'insurance' => $insurances
        ]);
    }
}
