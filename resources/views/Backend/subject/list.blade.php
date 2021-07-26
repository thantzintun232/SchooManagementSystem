<x-backend>
<div class="col-md-12">
<div class="main-card mb-3 card">
     @if(session('successMsg')!=NULL)
                        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> <strong>Well done!</strong></h4>
  <p>{{session('successMsg')}}</p>
  <hr>
  
</div>
@endif
    <div class="card-header">Subject List

        <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
               
                <a href="{{route('backside.subject.create')}}" class="btn btn-success">
                    <i class="pe-7s-plus pe-2x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    
                    <th class="text-center">Subjects</th>
                    <th class="text-center">Grades</th>
                  <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                                        $i=1;
                                        @endphp
                                        @foreach($subjects as $subject)
                                        @php
                                        $name=$subject->name;
                                       $grade=$subject->grade->name;
                                        $id=$subject->id;

                                        @endphp
                <tr>
                    <td class="text-center text-muted">{{$i++}}</td>
                    <td class="text-center">{{$name}}</td>
                    <td class="text-center">{{$grade}}</td>
                  
                   
                    <td class="text-center">
                        
                     
                    <a href="" class="btn btn-outline-warning">
                        <i class="pe-7s-config pe-2x"></i>
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class="pe-7s-close pe-2x"></i>
                    </a>

                    
                </td>
            </tr>
          @endforeach
            </tbody>
        </table>
    </div>
    
</div>
</div>
</div>
</x-backend>