@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    {{ $married }}
                    <p>Your age is: {{ $age }}</p>
                    <p>Your age is: @age([1984, 7, 9])</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
