@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    
                    PNR: {{ $ticket->id }}
					</br>
					</br>


					Passenger Name: {{ $ticket->name }}
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

					Bus Time: {{ $bus->time }}
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

                    
                
                 ARE YOU SURE YOU WANT TO CANCEL THIS TICKET?
                 </br>
                 <a href="{{url('/ticket/cancelled/' . $ticket->id) }}"><button class="btn btn-lg btn-primary" type="submit">YES</button></a>

                <a href="{{url('/ticket/all') }}"><button class="btn btn-lg btn-primary" type="submit">NO</button></a>


                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection