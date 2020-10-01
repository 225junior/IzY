@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Creation de VILLE</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<form data-parsley-validate="" action="{{route('villes.store')}}" method="POST" class="form-horizontal form-label-left" novalidate="">
					@csrf
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom de la ville <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-9 ">
							<input type="text" id="first-name" min="2" required name="libelle" class="form-control" value="{{ old('libelle') }}">
							@if ($errors->has('libelle'))
								<p class="text-danger">{{ $errors->first('libelle') }}</p>
							@endif
						</div>
					</div>



					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Région</label>
						<div class="col-md-6 col-sm-9 ">
							<select class="select2_single form-control" tabindex="-1" name="region_id">
								@foreach ($regions as $region)
									<option value="{{ $region->id }}">{{ $region->libelle }}</option>
								@endforeach
							</select>
						</div>
					</div>






					<div class="item form-group">
						<label class="col-form-label offset-md-3 col-md-2 col-sm-3 label-align" for="check">Active On/Off</label>
						<div class="col-md-1 col-sm-2 ">
							<input type="checkbox" id="check" name="active" class="form-control">
						</div>
					</div>


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-4">
							<a href="{{ route('villes.index')}}" class="btn btn-primary" type="button"><i class="fa fa-arrow-left"></i></a>
							<button class="btn btn-primary" type="reset">Effacer</button>
							<input type="submit" class="btn btn-success">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection