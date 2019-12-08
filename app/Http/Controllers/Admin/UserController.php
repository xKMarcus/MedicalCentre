<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: UserController.php
# @Last modified by:
# @Last modified time: 2019-12-08T17:00:36+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index')->with([
          'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $insurances = Insurance::all();
        //
        // return view('admin.users.create')->with([
        //   'Insurance' => $insurances
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required|max:191',
          'email' => 'required|max:191',
          'phone' => 'required|min:0',
          'address' => 'required|max:1900',
          'password' => 'required|max:191',
          'insurance' => 'required|numeric|min:0',
          'startDate' => 'required|max:191'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->insurance = $request->input('insurance');
        $user->startDate = $request->input('startDate');

        $user->save();

        return redirect()->route('admin.users.index');
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

        return view('admin.users.show')->with([
          'user' => $user
          //'insurance' => $insurances
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$insurances = Insurance::all();
        $user = User::findOrFail($id);

        return view('admin.users.edit')->with([
          'user' => $user,
          //'insurance' => $insurances
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $request->validate([
          'name' => 'required|max:191',
          'email' => 'required|max:191',
          'phone' => 'required|min:0',
          'address' => 'required|max:1900',
          'password' => 'required|max:191',
          'insurance' => 'required|numeric|min:0',
          'startDate' => 'required|max:191'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->insurance = $request->input('insurance');
        $user->startDate = $request->input('startDate');

        $user->save();

        return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);

      $user->delete();

      return redirect()->route('admin.users.index');
    }
}
