@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    </br>

                    </br>
                    

                    <form method="POST" action="{{ url('/display/search') }}">
                      {{ csrf_field() }}
                      <p>Enter Source:</p>
                      <input type="text" name="search"  placeholder="Source" >

                      <p>Enter Destination:</p>
                      <input type="text" name="destination"  placeholder="Destination" >
                      </br>
                      </br>

                      <button class="btn btn-lg btn-primary" type="submit">Search</button>
                    </form>
                    </br>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
