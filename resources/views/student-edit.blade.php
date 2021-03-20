<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Update</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

</head>

<body>


	

	<div class="wrap ">
    <a class="btn btn-mid btn-primary" href="{{url('students')}}">All Students</a>

		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				@include('validation')
				<form action="{{url ('student-update/' . $edit_student->id) }}" method="POST">
                @csrf
				@method('PATCH')
					<div class="form-group">
						<label for="">Full Name</label>
						<input name="name" class="form-control" value="{{$edit_student -> name}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input name="cell" class="form-control" value="{{$edit_student -> cell}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{$edit_student -> email}}" type="text">
					</div>
			
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Edit Student">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!-- JS FILES  -->
@include('layouts.partials.scripts')
</body>
</html>