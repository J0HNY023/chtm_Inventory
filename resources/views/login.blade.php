@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1 style="text-align:center;">CHTM INVENTORY </h1>
			</div>
			<div class="card-body">
				@isset($error)
					<li class="alert alert-danger">{{ $error }}</li>
				@endisset
				<form action="/login" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" class="form-control" name='username'>
					</div>
					<div class="form-group">
						<label for="">Password:</label>
						<input type="password" class="form-control" name='password'>
					</div>
					<button class="btn btn-primary" style="margin-left: 45%;">Login</button>
					
				</form>
					<br>
					<button  class="btn btn-primary" style="margin-left: 40%;" >Change Password</button>


			</div>
		</div>
	</div>


@endsection