@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Modiffication de {{$region->libelle}}</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>

				<form data-parsley-validate="" action="{{route('regions.update',$region->id)}}" method="POST" class="form-horizontal form-label-left" novalidate="">
					@csrf
					@method('PUT')
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom de la région <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="first-name" min="2" required name="libelle" class="form-control" value="{{ $region->libelle }}">
							@if ($errors->has('libelle'))
								<p class="text-danger">{{ $errors->first('libelle') }}</p>
							@endif
						</div>
					</div>


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-4">
							<a href="{{ route('regions.index')}}" class="btn btn-primary" type="button"><i class="fa fa-arrow-left"></i></a>
							<input class="btn btn-primary" type="reset">
							<input type="submit" class="btn btn-success" value="Valider">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
