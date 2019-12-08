@extends('layouts.app')
# @Date:   2019-12-08T17:52:08+00:00
# @Last modified time: 2019-12-08T18:07:35+00:00




@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Insurances
          <a href="{{ route('user.insurances.create') }}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
          @if (count($insurances) === 0)
            <p>There are no insurances!</p>
          @else
            <table id="table-insurances" class="table table-hover">
                <thead>
                    <th>Doctor_id</th>
                    <th>Patient_id</th>
                    <th>Duration</th>
                    <th>Cost</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($insurances as $insurance)
                      <tr data-id="{{ $insurance->id }}">
                        <td>{{ $insurance->patient_id }}</td>
                        <td>{{ $insurance->insuranceCompany_id }}</td>
                        <td>{{ $insurance->policy_Number }}</td>
                        <td>
                          <a href="{{ route('user.insurances.show', $insurance->id) }}" class="btn btn-default">View</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
