@extends('layouts.app')


@section('main-section')

<div class="wrap-table ">
	
	<a class="btn btn-mid btn-primary" href="{{url('register')}}">Registration</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>All Data</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						
						<th>Name</th>
						<th>Email</th>
						<th>Cell</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($students as $student)
					<tr>
						<td>{{$student->name}}</td>
						<td>{{$student->cell}}</td>
						<td>{{$student->email}}</td>
						<td>
							<a class="btn btn-sm btn-info" href="{{url('student-single/' . $student->id)}}">View</a>
							<a class="btn btn-sm btn-warning" href="{{url('student-edit/' . $student->id)}}">Edit</a>
							<!-- <a class="btn btn-sm btn-danger" href="{{url('student-delete/' . $student->id)}}">Edit</a> -->
							
							
							<form style="display: inline-block" action="{{url('student-delete/' . $student->id)}}">
							@csrf
							@method('DELETE')
								<button class="btn btn-sm btn-danger" >Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
					

				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
