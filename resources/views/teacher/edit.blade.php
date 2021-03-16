<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher Registration</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>
<body>

<!-- 
@if (session('edit_message'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('edit_message') }}
            </div>
@endif -->
	

	<div class="wrap ">
    <a class="btn btn-mid btn-primary" href="{{url('teachers')}}">All Teacher</a>

		<div class="card shadow">
			<div class="card-body">
				<h2>Update {{ $edit_teacher -> teacher_name}} এর Data</h2>
				
				<!-- @include('validation') -->
				<form action="{{url ('teacher-update/' . $edit_teacher->id) }}" method="POST">
                @csrf
				@method('PATCH')
					<div class="form-group">
						<label for="">Full Name</label>
						<input name="teacher_name" class="form-control" value="{{ $edit_teacher -> teacher_name}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Department Name</label>
						<input name="teacher_dept" class="form-control" value="{{ $edit_teacher -> teacher_dept}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input name="cell" class="form-control" value="{{ $edit_teacher -> cell}}" type="tel">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{ $edit_teacher -> email}}" type="email">
					</div>
			
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Update Data">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>