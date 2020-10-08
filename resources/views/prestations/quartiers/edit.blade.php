@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Modiffication de {{$quartier->libelle}}</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>

				<form data-parsley-validate="" action="{{route('quartiers.update',$quartier->id)}}" method="POST" class="form-horizontal form-label-left" novalidate="">
					@csrf
					@method('PUT')
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="libelle">Nom du Quartier <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="libelle" min="2" required name="libelle" class="form-control" value="{{ $quartier->libelle }}">
							@if ($errors->has('libelle'))
								<p class="text-danger">{{ $errors->first('libelle') }}</p>
							@endif
						</div>
					</div>



					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Commune</label>
						<div class="col-md-6 col-sm-9 ">
							<select class="select2_single form-control" tabindex="-1" name="commune_id">
								@foreach ($communes as $commune)
									<option value="{{ $commune->id }}">{{ $commune->libelle }}</option>
								@endforeach
									<option selected value="{{ $quartier->commune->id }}">{{ $quartier->commune->libelle }}</option>
							</select>
						</div>
					</div>


					<div class="item form-group">
						<label class="col-form-label offset-md-3 col-md-2 col-sm-3 label-align" for="check">Active On/Off</label>
						<div class="col-md-1 col-sm-2 ">
							<input type="checkbox" id="check" name="active" class="form-control" {{ $quartier->active ==1 ?  'checked' : ''}}>
						</div>
					</div>


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-4">
							<a href="{{ route('quartiers.index')}}" class="btn btn-primary" type="button"><i class="fa fa-arrow-left"></i></a>
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
