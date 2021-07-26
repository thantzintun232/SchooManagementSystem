<x-backend>
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-header">Academic Form
				<div class="btn-actions-pane-right">
					<div role="group" class="btn-group-sm btn-group">
						<a href="{{route('backside.academic.index')}}" class="btn btn-primary">
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
									<form action="{{route('backside.academic.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
						 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Year</span>
                                  </div>
                                   <input type="text" class="form-control" name="year">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('year')}}
                                      </div>
                               </div>
                                <br>
								 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Start Date</span>
                                  </div>
                                   <input type="date" class="form-control" name="start">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('start')}}
                                      </div>
                               </div>
                                <br>
								 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">End Date</span>
                                  </div>
                                   <input type="date" class="form-control" name="end">
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