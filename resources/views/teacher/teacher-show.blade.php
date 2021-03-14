<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        
        .single{
            width:600px;
        }
    </style>
</head>
<body>
	
	

	<div class="wrap-table shadow">
	
        <a class="btn btn-mid btn-primary" href="{{url('teacher-register')}}">Registration</a>
		<div class="card">
			<div class="card-body single">
				<h2>{{$ekla_teacher -> teacher_name}}</h2>
				<table class="table">
                    <tr>
                        <td>Name</td>
                        <td>{{$ekla_teacher -> teacher_name}}</td>
                    </tr>

                    <tr>
                        <td>Department</td>
                        <td>{{$ekla_teacher -> teacher_dept}}</td>
                    </tr>

                    <tr>
                        <td>Cell</td>
                        <td>{{$ekla_teacher -> cell}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$ekla_teacher -> email}}</td>
                    </tr>
					



				</table>
			</div>
		</div>
	</div>
	

	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>