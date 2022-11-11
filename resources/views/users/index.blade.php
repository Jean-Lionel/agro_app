@extends('layouts.base')

@section('content')

<div>
	
	<div class="card">
		<div class="card-body">

			<div>
				<a href="{{route('users.create')}}">Ajouter un Agent</a>
			</div>
			<div class="table-responsive">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">

					<table class="datatable table table-hover table-center mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
					<thead>
						<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Doctor Name: activate to sort column descending" style="width: 261.688px;">Doctor Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Speciality: activate to sort column ascending" style="width: 115.75px;">Speciality</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Member Since: activate to sort column ascending" style="width: 157.203px;">Member Since</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Earned: activate to sort column ascending" style="width: 85.4062px;">Earned</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Account Status: activate to sort column ascending" style="width: 168.953px;">Account Status</th></tr>
					</thead>

					<tbody>
						
					@foreach ($users as $element)
						{{-- expr --}}
						<tr role="row" class="odd">
							<td class="sorting_1">
								<h2 class="table-avatar">
									<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"></a>
									<a href="profile.html">{{$element->prenom   }} {{ $element->nom }}</a>
								</h2>
							</td>
							<td>{{$element->id}}</td>
							
							<td>{{$element->nom}}</td>
							<td>{{$element->prenom}}</td>
							<td>{{$element->name}}</td>
							<td>{{$element->email}}</td>
							
							
							<td>
								<div class="status-toggle">
									<input type="checkbox" id="status_1" class="check" checked="">
									<label for="status_1" class="checktoggle">checkbox</label>
								</div>
							</td>
						</tr>
					@endforeach

						
					</tbody>

					</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
				</div>
			</div>
		</div>
	</div>
	@stop