<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
       .main{
           color:rgb(25, 95, 89);
           background-color:rgb(225, 239, 245);
           text-align: center;
           } 
       .front{
           padding-left: 358px;
           width: 100%;
       }
       input{
        background-color:rgb(225, 239, 245);
       }
    </style>
</head>
<body>
    <div class="col-sm-6 ">
        @if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> Please select atleast one of the option.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					{{-- <li>{{ $error }}</li> --}}
					@endforeach
				</ul>
			</div>
		@endif

    <div class="main">
        <h3>Welcome to Polling For This Epidamic</h3>
        <form class="form-group" action="{{url('/storevote')}}" method="POST">
           @csrf 
            
                {{-- <label for="inputlg">input-lg</label> --}}
                <input class="form-control input-lg" id="inputlg" type="text" placeholder="By how many days should  the Lockdown be increased" disabled>
                <p>Please select date:</p>
                <input type="radio" id="date1" name="date" value="30">
                <label for="age1">01 - 30 Days</label><br>
                <input type="radio" id="date2" name="date" value="60">
                <label for="age2">31 - 60 Days</label><br>  
                <button class="btn btn-success" type="submit">Submit</button>
        </form>

    </div>
    <div>
        @if (session('successs'))
            <div class="alert alert-success">
              
                {{ session('successs') }}
        @endif
        </div>
</div>



</body>
</html>