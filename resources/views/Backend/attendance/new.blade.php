<x-backend>
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-header">Attendance Form
				<div class="btn-actions-pane-right">
					<div role="group" class="btn-group-sm btn-group">
            <a href="{{route('backside.attendance.index')}}" class="btn btn-primary">
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

             <form action="{{route('backside.attendance.store')}}" method="POST" enctype="multipart/form-data">
              @csrf                       

              <div class="position-relative form-group"><div class="position-relative form-group"><label for="grade" class="">Academic Year</label>
                <select type="select" id="academic" name="academic" class="custom-select">
                  <option> Choose Year </option>
                  @foreach($academics as $academic)
                  <option value="{{ $academic->id }}"> {{ $academic->year }} </option>
                  @endforeach

                </select>
              </div>

              <div class="position-relative form-group"><div class="position-relative form-group"><label for="grade" class="">Classroom</label>
                <select type="select" id="classroom" name="classroom" class="custom-select">
                  <option> Choose Classroom </option>
                  @foreach($classrooms as $classroom)
                  <option value="{{ $classroom->id }}"> {{ $classroom->name }} </option>
                  @endforeach

                </select>
              </div>

              <div class="position-relative form-group"><div class="position-relative form-group"><label for="grade" class="">Student</label>
                <select type="select" id="student" name="student" class="custom-select">
                  <option> Choose Student </option>
                  @foreach($students as $student)
                  <option value="{{ $student->id }}"> {{ $student->user->name }} </option>
                  @endforeach

                </select>
              </div>

              <div class="position-relative form-group">
                <label for="date" class="">Date</label>
                <input name="date" id="date" type="date" class="form-control">
              </div>

              <div class="position-relative form-group">
                <label for="status" class="">Status</label><br>
                <input name="status" id="status" type="radio" value="Present" class="col-6">Present
                <input name="status" id="status" type="radio" value="Absent" class="col-6">Absent
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