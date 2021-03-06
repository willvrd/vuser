@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <passport-clients></passport-clients>
        </div>
    </div>

    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <passport-authorized-clients></passport-authorized-clients>
        </div>
    </div>

    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>

</div>
@endsection
