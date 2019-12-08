@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Visits
          <a href="{{ route('user.visits.create') }}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
          @if (count($visits) === 0)
            <p>There are no visits!</p>
          @else
            <table id="table-visits" class="table table-hover">
                <thead>
                    <th>Doctor_id</th>
                    <th>Patient_id</th>
                    <th>Duration</th>
                    <th>Cost</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($visits as $visit)
                      <tr data-id="{{ $visit->id }}">
                        <td>{{ $visit->doctor_id }}</td>
                        <td>{{ $visit->patient_id }}</td>
                        <td>{{ $visit->duration }}</td>
                        <td>{{ $visit->cost }}</td>
                        <td>
                          <a href="{{ route('user.visits.show', $visit->id) }}" class="btn btn-default">View</a>
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
