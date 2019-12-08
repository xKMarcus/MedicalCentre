<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: InsuranceController.php
# @Last modified by:
# @Last modified time: 2019-12-08T18:15:25+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Insurance;

class InsuranceController extends Controller
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
        $insurances = Insurance::all();

        return view('user.insurances.index')->with([
          'insurances' => $insurances
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
        $insurance = Insurance::findOrFail($id);

        return view('user.insurances.show')->with([
          'insurance' => $insurance
        ]);
    }
}
