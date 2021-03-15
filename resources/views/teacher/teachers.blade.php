<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table ">
	
        <a class="btn btn-mid btn-primary" href="{{url('/teacher/new')}}">Registration</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							
							<th>Name</th>
							<th>Department</th>
							<th>Cell</th>
							<th>Email</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                    @foreach($teachers as $teacher)
						<tr>
							<td>{{$teacher->teacher_name}}</td>
							<td>{{$teacher->teacher_dept}}</td>
							<td>{{$teacher->cell}}</td>
							<td>{{$teacher->email}}</td>
							<td>
								<a class="btn btn-sm btn-info" href="{{url('teacher-single/' . $teacher->id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{url('teacher-edit/' . $teacher->id)}}">Edit</a>
								<!-- <a class="btn btn-sm btn-danger" href="#">Delete</a> -->
								<form style="display:inline-block" action="{{url('teacher-delete/' . $teacher->id)}}" method="post">
									@csrf
									@method('DELETE')
									<button class="btn btn-sm btn-danger">Delete</button>
								</form>
							</td>
						</tr>
                    @endforeach
						

					</tbody>
				</table>
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