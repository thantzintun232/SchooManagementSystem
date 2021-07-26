<x-backend>
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Classrooms
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">      
                        <a href="{{route('backside.classroom.create')}}" class="btn btn-success">
                            <i class="pe-7s-plus pe-2x"></i>
                        </a>
                    </div>
                </div>
            </div>

            @if(session('successMsg')!= NULL)
            <div class="alert alert-success" role="alert">
                {{session('successMsg')}}
            </div>
            @endif
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Grade</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                     @php $i=1; @endphp
                     @foreach($classrooms as $classroom)
                     @php 
                     $id=$classroom->id;
                     $name=$classroom->name;
                     $grade=$classroom->grade_id;

                     @endphp
                     <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $name }}</td>
                        <td>{{ $grade }}</td>
                    <td>
                    <a href="" class="btn btn-outline-info">
                        <i class="pe-7s-info pe-2x"></i>
                    </a>
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