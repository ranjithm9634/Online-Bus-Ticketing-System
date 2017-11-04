@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                	@if($buses)
						
                		</br>
                           		</br>

					   <table>
						  <tr>
						    <th>Source</th>
						    <th>Destination</th>
						    <th>Make</th>
						    <th>Date</th>
						    <th>Time</th>
						  </tr>
						  @foreach($buses as $bus)
						  <tr>
						    <td>{{ $bus->source }}</td>
						    <td>{{ $bus->destination }}</td>
						    <td>{{ $bus->make }}</td>
						    <td>{{ $bus->date }}</td>
						    <td>{{ $bus->time }}</td>
						  </tr>
						   @endforeach

						 
						</table>
					@endif

                <div class="panel-body">
                    
               
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