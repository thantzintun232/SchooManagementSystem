<x-backend>
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-header">Timetable Form
				<div class="btn-actions-pane-right">
					<div role="group" class="btn-group-sm btn-group">
                        <a href="{{route('backside.timetable.index')}}" class="btn btn-primary">
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
									
									<form action="{{route('backside.timetable.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                	<div class="col-md-4">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Day</label>
                                			<select type="select" id="exampleCustomSelect" name="day" class="custom-select">
                                			<option value="">Select</option>
                                			<option>Monday</option>
                                			<option>Tuesday</option>
                                			<option>Wednesday</option>
                                			<option>Thursday</option>
                                			<option>Friday</option>

                                		</select>
                                	</div>
                                </div>

                                 <div class="col-md-4">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Start Time</label>
                                			<select type="select" id="exampleCustomSelect" name="start" class="custom-select">
                                			<option value="">Select</option>
                                			<option>9:00</option>
                                			<option>10:00</option>
                                			<option>11:00</option>
                                			<option>1:00</option>
                                			<option>2:00</option>

                                		</select>
                                	</div>
                                </div>

                                <div class="col-md-4">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">End Time</label>
                                			<select type="select" id="exampleCustomSelect" name="end" class="custom-select">
                                			<option value="">Select</option>
                                			<option>10:00</option>
                                			<option>11:00</option>
                                			<option>12:00</option>
                                			<option>2:00</option>
                                			<option>3:00</option>

                                		</select>
                                	</div>
                                </div>
                                	<div class="col-md-6">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Academic Year</label>
                                			<select type="select" id="exampleCustomSelect" name="academic" class="custom-select">
                                			<option value="">Select</option>
                                			@foreach($academics as $academic)
                                			<option value="{{$academic->id}}">{{$academic->year}}</option>
                                			@endforeach
`
                                		</select>
                                	</div>
                                </div>

                                <div class="col-md-6">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Subject</label>
                                			<select type="select" id="exampleCustomSelect" name="subject" class="custom-select">
                                		
                                			<option value="">Select</option>
                                			@foreach($subjects as $subject)
                                			<option value="{{$subject->id}}">{{$subject->name}}</option>
                                			
                                		@endforeach
                                		</select>
                                	</div>
                                </div>

                                  

                                <div class="col-md-6">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Teacher</label>
                                			<select type="select" id="exampleCustomSelect" name="teacher" class="custom-select">
                                			
                                			<option value="">Select</option>
                                			@foreach($teachers as $teacher)
                                			<option value="{{$teacher->id}}">{{$teacher->user->name}}</option>
                                			
                                			@endforeach
                                		</select>
                                	</div>
                                </div>

                                <div class="col-md-6">
                                		<div class="position-relative form-group"><label for="exampleCustomSelect" class="">Class</label>
                                			<select type="select" id="exampleCustomSelect" name="class" class="custom-select">
                                			<option value="">Select</option>
                                			@foreach($classrooms as $classroom)
                                			<option value="{{$classroom->id}}">{{$classroom->name}}</option>
                                			
                                			@endforeach
                                		</select>

                                	</div>
                                </div>
                                </div>
						
								
                               
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