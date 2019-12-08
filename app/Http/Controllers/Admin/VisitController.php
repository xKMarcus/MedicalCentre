<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: VisitController.php
# @Last modified by:
# @Last modified time: 2019-12-08T17:30:32+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
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
        $visits = Visit::all();

        return view('admin.visits.index')->with([
          'visits' => $visits
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
          'doctor_id' => 'required|max:191',
          'patient_id' => 'required|max:191',
          'duration' => 'required|min:0',
          'cost' => 'required|min:0'
        ]);

        $visit = new Visit();
        $visit->doctor_id = $request->input('doctor_id');
        $visit->patient_id = $request->input('patient_id');
        $visit->duration = $request->input('duration');
        $visit->cost = $request->input('cost');

        $visit->save();

        return redirect()->route('admin.visits.index');
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

        return view('admin.visits.show')->with([
          'visit' => $visit
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
        $visit = Visit::findOrFail($id);

        return view('admin.visits.edit')->with([
          'visit' => $visit,
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

        $visit = Visit::findOrFail($id);

        $request->validate([
          'doctor_id' => 'required|max:191',
          'patient_id' => 'required|max:191',
          'duration' => 'required|min:0',
          'cost' => 'required|min:0'
        ]);

        $visit = new Visit();
        $visit->doctor_id = $request->input('doctor_id');
        $visit->patient_id = $request->input('patient_id');
        $visit->duration = $request->input('duration');
        $visit->cost = $request->input('cost');

        $visit->save();

        return redirect()->route('admin.visits.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $visit = Visit::findOrFail($id);

      $visit->delete();

      return redirect()->route('admin.visits.index');
    }
}
