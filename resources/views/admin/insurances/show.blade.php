@extends('layouts.app')
# @Date:   2019-12-08T16:12:13+00:00
# @Last modified time: 2019-12-08T17:16:50+00:00




@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Insurance: {{ $insurance->title }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                      <td>Patient_id</td>
                      <td>{{ $insurance->patient_id }}</td>
                    </tr>
                    <tr>
                      <td>Duration</td>
                      <td>{{ $insurance->insuranceCompany_id }}</td>
                    </tr>
                    <tr>
                      <td>Cost</td>
                      <td>{{ $insurance->policy_Number }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('admin.insurances.index') }}" class="btn btn-default">Back</a>
            <a href="{{ route('admin.insurances.edit', $insurance->id) }}" class="btn btn-warning">Edit</a>
            <form style="display:inline-block" method="POST" action="{{ route('admin.insurances.destroy', $insurance->id) }}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="form-control btn btn-danger">Delete</a>
           </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
