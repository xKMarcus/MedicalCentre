<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: InsuranceCompanyController.php
# @Last modified by:
# @Last modified time: 2019-12-08T17:29:58+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InsuranceCompany;

class InsuranceCompanyController extends Controller
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
        $insuranceCompanies = InsuranceCompany::all();

        return view('admin.insuranceCompanies.index')->with([
          'insuranceCompanies' => $insuranceCompanies
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
          'name' => 'required|max:191'
        ]);

        $insuranceCompany = new InsuranceCompany();
        $insuranceCompany->name = $request->input('name');

        $insuranceCompany->save();

        return redirect()->route('admin.insuranceCompanies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insuranceCompany = InsuranceCompany::findOrFail($id);

        return view('admin.insuranceCompanies.show')->with([
          'insuranceCompany' => $insuranceCompany
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
        $insuranceCompany = InsuranceCompany::findOrFail($id);

        return view('admin.insuranceCompanies.edit')->with([
          'insuranceCompany' => $insuranceCompany
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

        $insuranceCompany = InsuranceCompany::findOrFail($id);

        $request->validate([
          'name' => 'required|max:191',
        ]);

        $insuranceCompany = new InsuranceCompany();
        $insuranceCompany->name = $request->input('name');

        $insuranceCompany->save();

        return redirect()->route('admin.insuranceCompanies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $insuranceCompany = InsuranceCompany::findOrFail($id);

      $insuranceCompany->delete();

      return redirect()->route('admin.insuranceCompanies.index');
    }
}
