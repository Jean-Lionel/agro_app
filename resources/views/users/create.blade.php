@extends('layouts.base')

@section('content')

<div>
	
	<!-- Add Modal -->
	<div class="" id="Add_Specialities_details" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ajouter un Agent</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="row form-row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Specialities</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Image</label>
									<input type="file"  class="form-control">
								</div>
							</div>

						</div>
						<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop