@extends('layouts.app')
# @Date:   2019-12-08T16:12:13+00:00
# @Last modified time: 2019-12-08T17:37:21+00:00




@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          InsuranceCompany: {{ $insuranceCompany->title }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                      <td>Name</td>
                      <td>{{ $insuranceCompany->name }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('user.insuranceCompanies.index') }}" class="btn btn-default">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
