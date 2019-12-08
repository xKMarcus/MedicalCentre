<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: InsuranceController.php
# @Last modified by:
# @Last modified time: 2019-12-08T18:15:25+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Insurance;

class InsuranceController extends Controller
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
        $insurances = Insurance::all();

        return view('admin.insurances.index')->with([
          'insurances' => $insurances
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
          'patient_id' => 'required|max:191',
          'insuranceCompany_id' => 'required|max:191',
          'policy_Number' => 'required|min:0'
        ]);

        $insurance = new Insurance();
        $insurance->patient_id = $request->input('patient_id');
        $insurance->insuranceCompany_id = $request->input('insuranceCompany_id');
        $insurance->policy_Number = $request->input('policy_Number');

        $insurance->save();

        return redirect()->route('admin.insurances.index');
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

        return view('admin.insurances.show')->with([
          'insurance' => $insurance
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
        $insurance = Insurance::findOrFail($id);

        return view('admin.insurances.edit')->with([
          'insurance' => $insurance,
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

        $insurance = Insurance::findOrFail($id);

        $request->validate([
          'patient_id' => 'required|max:191',
          'insuranceCompany_id' => 'required|min:0',
          'policy_Number' => 'required|min:0'
        ]);

        $insurance = new Insurance();
        $insurance->patient_id = $request->input('patient_id');
        $insurance->insuranceCompany_id = $request->input('insuranceCompany_id');
        $insurance->policy_Number = $request->input('policy_Number');

        $insurance->save();

        return redirect()->route('admin.insurances.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $insurance = Insurance::findOrFail($id);

      $insurance->delete();

      return redirect()->route('admin.insurances.index');
    }
}
