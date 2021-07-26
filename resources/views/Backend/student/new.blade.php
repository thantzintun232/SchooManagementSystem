<x-backend>
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-header">Student Form
				<div class="btn-actions-pane-right">
					<div role="group" class="btn-group-sm btn-group">
               <a href="{{route('backside.student.index')}}" class="btn btn-primary">
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
							
									<form action="{{route('backside.student.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
						 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Name</span>
                                  </div>
                                   <input type="text" class="form-control" name="name">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('name')}}
                                      </div>
                               </div>
                                <br>
								 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Phone</span>
                                  </div>
                                   <input type="text" class="form-control" name="phone">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('phone')}}
                                      </div>
                               </div>
                                <br>
								 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Email</span>
                                  </div>
                                   <input type="email" class="form-control" name="email">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
                               </div>
                               <br>
                                <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Password</span>
                                  </div>
                                   <input type="password" class="form-control" name="password">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
                               </div>
										
										 <br>
										  <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Address</span>
                                  </div>
                                   <input type="text" class="form-control" name="address">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
                               </div>
										
										 <br>
										 		  <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Father Name</span>
                                  </div>
                                   <input type="text" class="form-control" name="fname">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
                               </div>
										
										 <br>
										 	  <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Mother Name</span>
                                  </div>
                                   <input type="text" class="form-control" name="mname">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
                               </div>
										
										 <br>
										 	  <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">DOB</span>
                                  </div>
                                   <input type="date" class="form-control" name="dob">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
                               </div>
										
										 <br>
										 	  <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">NRC</span>
                                  </div>
                                   <input type="text" class="form-control" name="gnrc">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('end')}}
                                      </div>
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