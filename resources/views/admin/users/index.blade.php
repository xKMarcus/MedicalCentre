@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Users
          <a href="{{ route('admin.users.create') }}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
          @if (count($users) === 0)
            <p>There are no users!</p>
          @else
            <table id="table-users" class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Insurance</th>
                    <th>startDate</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                      <tr data-id="{{ $user->id }}">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->insurance }}</td>
                        <td>{{ $user->startDate }}</td>
                        <td>
                          <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-default">View</a>
                          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                          <form style="display:inline-block" method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
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
