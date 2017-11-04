@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">

                @if($user = Auth::user())

					Name: {{ $user->name }}
					</br>
					Address: {{ $user->address }}
					</br>
					Phone: {{ $user->phone }}
					</br>
					email: {{ $user->email }}
					</br>

				@endif
                     </br>
                    </br>

                    <form class="form" method="GET" action="/profile/edit">
                            {{ csrf_field() }}
                            <button class="btn btn-lg btn-primary" type="submit">Edit</button>
                    </form>
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