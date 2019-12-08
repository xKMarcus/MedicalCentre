<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: VisitController.php
# @Last modified by:
# @Last modified time: 2019-12-08T19:28:11+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
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
        $visits = Visit::all();

        return view('user.visits.index')->with([
          'visits' => $visits
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
        $visit = Visit::findOrFail($id);
        //$insurances = $visit->insurance()->get();

        return view('user.visits.show')->with([
          'visit' => $visit
          //'insurance' => $insurances
        ]);
    }
}
