@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <form action="/company/" method="post">
                        {{csrf_field()}}<!--for correct form submission-->
                        <input type="text" name="name" id="name">
                        <button type="submit">Add Company</button>
                    </form>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
