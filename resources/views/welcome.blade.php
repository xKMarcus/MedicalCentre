@extends('layouts.app')
# @Date:   2019-10-29T22:17:12+00:00
# @Last modified time: 2019-11-04T20:37:44+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    Welcome to MarcusHospital
                    <br/>
                    Learn more <a href="{{route('about')}}">about us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
