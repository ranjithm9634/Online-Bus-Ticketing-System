@extends('layouts.app')

@section('content')

<div class="container">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Please give us your feedback</div>
                	

                <div class="panel-body">

					  <form method="POST" action="{{ url('/suggested') }}">
					                              {{ csrf_field() }}


					    <label for="name">Name</label>
					    <input type="text" id="name" name="name" placeholder="Your name..">

					    </br>
					    </br>

					    <label for="subject">Feedback</label>
					    <textarea id="feedback" name="feedback" placeholder="Give us your feedback.." style="height:200px"></textarea>
					    </br>

					    <input type="submit" value="Submit">

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