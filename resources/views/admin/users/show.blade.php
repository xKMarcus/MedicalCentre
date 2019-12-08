@extends('layouts.app')
# @Date:   2019-12-08T16:12:13+00:00
# @Last modified time: 2019-12-08T16:56:38+00:00




@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          User: {{ $user->title }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                      <td>Name</td>
                      <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>{{ $user->address }}</td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td>{{ $user->password }}</td>
                    </tr>
                    <tr>
                      <td>Insurance</td>
                      <td>{{ $user->insurance }}</td>
                    </tr>
                    <tr>
                      <td>StartDate</td>
                      <td>{{ $user->startDate }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">Back</a>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            <form style="display:inline-block" method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
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
