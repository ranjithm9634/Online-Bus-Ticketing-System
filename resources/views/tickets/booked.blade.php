@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                @if($available)
                    
                    PNR: {{ $ticket->id }}
					</br>
					</br>


					Passenger Name: {{ $ticket->name }}
					</br>
					</br>

					Seats: {{ $ticket->seats }}
					</br>
					</br>


					Phone: {{ $ticket->phone }}
					</br>
					</br>


					email ID:{{ $ticket->email }}
					</br>
					</br>


					Source: {{ $bus->source }}
					</br>
					</br>


					Destination: {{ $bus->destination }}
					</br>
					</br>


					Bus Make: {{ $bus->make }}
					</br>
					</br>


					Date of Booking: {{ $ticket->booking_date }}
					</br>
					</br>


					Date of Travel: {{ $ticket->travel_date }}
					</br>
					</br>

					@else

					TICKETS ARE NOT AVAILABLE IN THIS BUS

					@endif
                    
                
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