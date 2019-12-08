@extends('layouts.app')
# @Date:   2019-12-08T16:12:13+00:00
# @Last modified time: 2019-12-08T19:22:53+00:00




@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Visit: {{ $visit->title }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                      <td>Doctor_id</td>
                      <td>{{ $visit->doctor_id }}</td>
                    </tr>
                    <tr>
                      <td>Patient_id</td>
                      <td>{{ $visit->patient_id }}</td>
                    </tr>
                    <tr>
                      <td>Duration</td>
                      <td>{{ $visit->duration }}</td>
                    </tr>
                    <tr>
                      <td>Cost</td>
                      <td>{{ $visit->cost }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('user.visits.index') }}" class="btn btn-default">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
