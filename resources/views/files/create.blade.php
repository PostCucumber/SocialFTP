@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload</div>
                    <form action="/files/" method="post">
                    {{csrf_field()}}<!--for correct form submission-->
                        <input type="file" name="name" id="name">
                        <button type="submit">Upload</button>
                    </form>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
