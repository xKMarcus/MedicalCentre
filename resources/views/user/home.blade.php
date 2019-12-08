@extends('layouts.app')
# @Date:   2019-10-29T22:16:45+00:00
# @Last modified time: 2019-12-08T18:00:42+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an user!
                    </br></br></br>
                    <a href="{{route('user.users.index')}}">Users</a>
                    </br></br>
                    <a href="{{route('user.visits.index')}}">Visits</a>
                    </br></br>
                    <a href="{{route('user.insuranceCompanies.index')}}">Insurance Companies</a>
                    </br></br>
                    <a href="{{route('user.insurances.index')}}">Insurance Policies</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
