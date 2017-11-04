@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">

                <form class="" method = "POST" action = "{{ url('profile/saved') }}">
						{{ csrf_field() }}
				        <h2 class="">Profile Details</h2>
				        <label for="inputName">Name</label>
				        <input type="text" name="name" value = "{{ Auth::User()->name }}">
				        </br>
				        
				        <label for="inputName">email</label>
				        <input type="text" name="email" value = "{{ Auth::User()->email }}">

				        </br>	       
				        
				        <label for="text" class="">Address</label>
				        <input type="text" id="address" class="" placeholder="" name = "address"
				               	value = <?php if ((Auth::User()->address == "NULL")):
				        		else:  ?>"{{ Auth::User()->address }}"
				        			
				        		<?php endif ?>>

				        </br>

				        <label for="text" class="">Phone No.</label>
				        <input type="text" id="phone" class="" placeholder="" name = "phone"
				        	value = <?php if ((Auth::User()->phone == "0")):
				        		else:  ?>"{{ Auth::User()->phone }}"
				        			
				        		<?php endif ?>>

				        </br>
				        	
				        
				        <button class="btn btn-lg btn-primary" type="submit">Save</button>
				</form>

                   

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection