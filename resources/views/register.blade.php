<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Registration</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


	

	<div class="wrap ">
    <a class="btn btn-mid btn-primary" href="{{url('students')}}">All Students</a>

		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				
				@include('validation')
				<form action="/store" method="POST">
                @csrf
					<div class="form-group">
						<label for="">Full Name</label>
						<input name="name" class="form-control" type="text" value="{{old('name')}}">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input name="cell" class="form-control" type="text" value="{{old('cell')}}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="{{old('email')}}">
					</div>
			
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Register Student">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>