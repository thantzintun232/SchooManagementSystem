<x-backend>
  <div class="col-md-12">
    <div class="main-card mb-3 card">
      <div class="card-header">Student Record Form
        <div class="btn-actions-pane-right">
          <div role="group" class="btn-group-sm btn-group">
            <a href="{{route('backside.record.index')}}" class="btn btn-primary">
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

                  <form action="{{route('backside.record.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Student</span>
                      </div>
                      <select type="select" id="exampleCustomSelect" name="student" class="custom-select">
                        <option value="">Select</option>
                        @foreach($students as $student)
                        <option value="{{$student->id}}">{{$student->user->name}}</option>

                        @endforeach
                      </select>
                      <div class="text-danger form-control-feedback">
                        {{$errors->first('grade')}}
                      </div>
                    </div>
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Academics</span>
                      </div>
                      <select type="select" id="exampleCustomSelect" name="academic" class="custom-select">
                        <option value="">Select</option>
                        @foreach($academics as $academic)
                        <option value="{{$academic->id}}">{{$academic->year}}</option>

                        @endforeach
                      </select>
                      <div class="text-danger form-control-feedback">
                        {{$errors->first('grade')}}
                      </div>
                    </div>
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Class</span>
                      </div>
                      <select type="select" id="exampleCustomSelect" name="class" class="custom-select">
                        <option value="">Select</option>
                        @foreach($classrooms as $classroom)
                        <option value="{{$classroom->id}}">{{$classroom->name}}</option>

                        @endforeach
                      </select>
                      <div class="text-danger form-control-feedback">
                        {{$errors->first('grade')}}
                      </div>
                    </div><br>


                    <div class="position-relative form-group">
                      <label for="status" class="">Status</label><br>
                      <input name="status" id="status" type="radio" value="Pass" class="col-6">Pass
                      <input name="status" id="status" type="radio" value="Fail" class="col-6">Fail
                    </div>

                    <button type="submit" class="mt-1 btn btn-primary">Save</button>
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