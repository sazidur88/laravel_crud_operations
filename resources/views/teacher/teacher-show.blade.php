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
        
        .single, .card{
            max-width:700px;
            
        }
          
    </style>
</head>
<body>
	
	

	<div class="wrap-table ">
	
        <a class="btn btn-mid btn-primary" href="{{url('teacher/new')}}">Registration</a>
		<div class="card shadow">
			<div class="card-body single">
            
            <!-- $ekla_teacher Comes from || public function show($id) || -->
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