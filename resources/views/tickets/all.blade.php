@extends('layouts.app')

@section('content')

@if(Auth::check())


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tickets</div>
                	@if($tickets)
						

					   <table>
						  <tr>
						    <th>PNR</th>
						    <th>Passenger Name</th>
						    <th>Bus Number</th>
						    <th>Seats</th>
						    <th>Travel Date</th>
						  </tr>
						  @foreach($tickets as $ticket)
						  <tr>
						  	<td>{{ $ticket->id }}</td>
						    <td>{{ $ticket->name }}</td>
						    <td>{{ $ticket->busID }}</td>
						    <td>{{ $ticket->seats }}</td>
						    <td>{{ $ticket->travel_date }}</td>
						    <td><a href="{{ url('/ticket/view/' . $ticket->id) }}">View</a></td>					 
						  </tr>
						   @endforeach

						 
						</table>
					@endif

                <div class="panel-body">
                    
               
                
                 </div>
            </div>
        </div>
    </div>
</div>


@else

PLEASE LOGIN TO VIEW THIS SECTION

@endif

@endsection