@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          InsuranceCompanys
          <a href="{{ route('admin.insuranceCompanies.create') }}" class="btn btn-primary float-right">Add</a>
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
                          <a href="{{ route('admin.insuranceCompanies.show', $insuranceCompany->id) }}" class="btn btn-default">View</a>
                          <a href="{{ route('admin.insuranceCompanies.edit', $insuranceCompany->id) }}" class="btn btn-warning">Edit</a>
                          <form style="display:inline-block" method="POST" action="{{ route('admin.insuranceCompanies.destroy', $insuranceCompany->id) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="form-control btn btn-danger">Delete</a>
                         </form>
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
