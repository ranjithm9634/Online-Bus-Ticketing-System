@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    
                    THE TICKET HAS BEEN DELETED SUCCESSFULLY
					</br>
					</br>

                

                 <form class="form" method="GET" action="/home">
                            {{ csrf_field() }}
                            <button class="btn btn-lg btn-primary" type="submit">Home</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection