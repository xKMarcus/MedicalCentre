@extends('layouts.app')
# @Date:   2019-12-08T16:12:13+00:00
# @Last modified time: 2019-12-08T16:51:18+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new insurance
          </div>
          <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.insurances.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="patient_id">Patient_id</label>
                <input type="text" class="form-control" id="patient_id" name="patient_id" value="{{ old('patient_id') }}" />
              </div>
              <div class="form-group">
                <label for="insuranceCompany_id">InsuranceCompany_id</label>
                <input type="text" class="form-control" id="insuranceCompany_id" name="insuranceCompany_id" value="{{ old('insuranceCompany_id') }}" />
              </div>
              <div class="form-group">
                <label for="policy_Number">Policy_Number</label>
                <input type="text" class="form-control" id="policy_Number" name="policy_Number" value="{{ old('policy_Number') }}" />
              </div>
              <a href="{{ route('admin.insurances.index') }}" class="btn btn-link">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
