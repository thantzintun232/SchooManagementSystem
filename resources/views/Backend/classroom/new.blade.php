<x-backend>
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-header">Classroom Form
				<div class="btn-actions-pane-right">
					<div role="group" class="btn-group-sm btn-group">
						<a href="{{route('backside.classroom.index')}}" class="btn btn-primary">
							<i class="pe-7s-back pe-2x"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
					<div class="row">
						<div class="col-md-12">
							<div class="main-card mb-3 card">
								<div class="card-body">
									<h5 class="card-title"></h5>
									<form action="{{route('backside.classroom.store')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="position-relative form-group">
											<label for="name" class="">Name</label>
											<input name="name" id="name" placeholder="Enter Classroom Name" type="text" class="form-control">
										</div>
										

										<div class="position-relative form-group"><label for="grade" class="">Grade</label>
											<select type="select" id="grade" name="grade" class="custom-select">
												<option> Choose Grade </option>
												@foreach($grades as $grade)
												<option value="{{ $grade->id }}"> {{ $grade->name }} </option>
												@endforeach

											</select>
										</div>
										<br>
										<button type="submit" class="mt-1 btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</x-backend>