@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    </br>



                    </br>

                    @if('bus')

                    @foreach($bus as $bus)

                    Source:  {{ $bus->source }}
                    </br>

                    Destination: {{$bus->destination}}
                    </br>

                    Availability: {{ $bus->availability }}
                    </br>

                    Make: {{ $bus-> make }}
                    </br>

                    Date: {{ $bus->date }} 

                    @endforeach

                    @endif

                    <form method="POST" action="{{ url('/ticket/booked/'.$bus->id) }}">
                      {{ csrf_field() }}
                      <h4>Enter the Passenger Details</h4>
                      <label for="inputName">Name</label>
				        <input type="text" name="name" value = "{{ Auth::user()->name }}">
				        </br>
				        

				        </br>
						<label for="text" class="">email</label>
				        <input type="text" id="email" class="" placeholder="" name = "email"
				               	value = <?php if ((Auth::User()->email == "NULL")):
				        		else:  ?>"{{ Auth::User()->email }}"
				        			
				        		<?php endif ?>>

				        </br>
				        </br>
				        <label for="text" class="">Phone No.</label>
				        <input type="text" id="phone" class="" placeholder="" name = "phone"
				        	value = <?php if ((Auth::User()->phone == "0")):
				        		else:  ?>"{{ Auth::User()->phone }}"
				        			
				        		<?php endif ?>>

				        </br>
				        </br>

                        <label for="text" class="">Number of seats</label>
                        <input type="text" id="seats" class="" placeholder="" name = "seats" value="1">

                        </br>
                        </br>
				        	
				        
                      <button class="btn btn-lg btn-primary" type="submit">Confirm</button>
                    </form>
                    </br>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection