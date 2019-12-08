@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          InsuranceCompanys
          <a href="{{ route('user.insuranceCompanies.create') }}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
          @if (count($insuranceCompanies) === 0)
            <p>There are no insuranceCompanies!</p>
          @else
            <table id="table-insuranceCompanies" class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($insuranceCompanies as $insuranceCompany)
                      <tr data-id="{{ $insuranceCompany->id }}">
                        <td>{{ $insuranceCompany->name }}</td>
                        <td>
                          <a href="{{ route('user.insuranceCompanies.show', $insuranceCompany->id) }}" class="btn btn-default">View</a>
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
