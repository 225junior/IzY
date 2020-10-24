@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Modiffication de {{$service->libelle}}</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>

				<form data-parsley-validate="" action="{{route('services.update',$service->id)}}" method="POST" class="form-horizontal form-label-left" novalidate="">
					@csrf
					@method('PUT')
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="libelle">Service<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" autofocus tabindex="1" id="libelle" min="2" required name="libelle" class="form-control" value="{{ $service->libelle }}">
							@if ($errors->has('libelle'))
								<p class="text-danger">{{ $errors->first('libelle') }}</p>
							@endif
						</div>
					</div>



					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Domaine</label>
						<div class="col-md-6 col-sm-9 ">
							<select class="select2_single form-control" tabindex="2" name="domaine_id">
								@foreach ($domaines as $domaine)
									<option value="{{ $domaine->id }}">{{ $domaine->libelle }}</option>
								@endforeach
									<option selected value="{{ $service->domaine->id }}">{{ $service->domaine->libelle }}</option>
							</select>
						</div>
					</div>


					<div class="item form-group">
						<label class="col-form-label offset-md-3 col-md-2 col-sm-3 label-align" for="check">Active On/Off</label>
						<div class="col-md-1 col-sm-2 ">
							<input type="checkbox" tabindex="3" id="check" name="active" class="form-control" {{ $service->active ==1 ?  'checked' : ''}}>
						</div>
					</div>


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-4">
							<a href="{{ route('services.index')}}" class="btn btn-primary" tabindex="4" type="button"><i class="fa fa-arrow-left"></i></a>
							<input class="btn btn-primary" type="reset" tabindex="5">
							<input type="submit" class="btn btn-success" value="Valider" tabindex="6">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
