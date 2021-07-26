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
          <div class="card-header">Teachers

            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    <a href="" class="btn btn-primary">
                        <i class="pe-7s-back pe-2x"></i>
                    </a>
                    <a href="{{route('backside.teacher.create')}}" class="btn btn-success">
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

                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($teachers as $teacher)
                    @php

                    $address=$teacher->address;
                    $phone=$teacher->phone;
                    $id=$teacher->id;
                    $name=$teacher->user->name;
                    $email=$teacher->user->email;

                    @endphp
                    <tr>
                       <td class="text-center text-muted">{{$i++}}</td>
                       <td>
                        <div class="widget-content p-0">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left mr-3">

                              </div>
                              <div class="widget-content-left flex2">
                                <div class="widget-heading">{{$name}}</div>

                            </div>
                        </div>
                    </div>
                </td>
                <td class="text-center">{{$email}}</td>
                <td class="text-center">
                 {{$address}}
             </td>
             <td class="text-center">
                {{$phone}}
            </td>
            <td class="text-center">

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