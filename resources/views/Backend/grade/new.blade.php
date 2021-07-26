<x-backend>
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-header">Grade Form
				<div class="btn-actions-pane-right">
					<div role="group" class="btn-group-sm btn-group">
						<a href="{{route('backside.grade.index')}}" class="btn btn-primary">
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
									
									<form action="{{route('backside.grade.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
						 <div class="input-group">
                                  <div class="input-group-prepend"><span class="input-group-text" style="width: 100px">Grade</span>
                                  </div>
                                   <input type="text" class="form-control" name="grade">
                                   	 <div class="text-danger form-control-feedback">
                                          {{$errors->first('grade')}}
                                      </div>
                               </div>
                                <br>
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