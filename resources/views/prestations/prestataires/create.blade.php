@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Enregistrement de Prestataire</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<form data-parsley-validate="" action="{{route('prestataires.store')}}" method="POST" class="form-horizontal form-label-left" novalidate="">
					@csrf

					<!-- name= nom -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom <span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="text" id="first-name" min="2" autofocus tabindex="1" required name="nom" class="form-control" value="{{ old('nom') }}">
							@if ($errors->has('nom'))
								<p class="text-danger">{{ $errors->first('nom') }}</p>
							@endif
						</div>
					</div>


					<!-- name= prenoms -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Prénoms <span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="text" id="last-name" min="2" tabindex="2" required name="prenoms" class="form-control" value="{{ old('prenoms') }}">
							@if ($errors->has('prenoms'))
								<p class="text-danger">{{ $errors->first('prenoms') }}</p>
							@endif
						</div>
					</div>

					<!-- name= tel -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="tel">Téléphone <span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="tel" id="tel" min="2" tabindex="3" required name="tel" class="form-control" value="{{ old('tel') }}">
							@if ($errors->has('tel'))
								<p class="text-danger">{{ $errors->first('tel') }}</p>
							@endif
						</div>
					</div>

					<!-- name= date_naiss -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="date_naiss">Date de Naissance <span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="date" id="date_naiss" min="2" tabindex="4" required name="date_naiss" class="form-control" value="{{ old('date_naiss') }}">
							@if ($errors->has('date_naiss'))
								<p class="text-danger">{{ $errors->first('date_naiss') }}</p>
							@endif
						</div>
					</div>

					<!-- name= quartier_id -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Quartier</label>
						<div class="col-md-6 col-sm-9 ">
							<select class="select2_single form-control" tabindex="5" name="quartier_id">
								@foreach ($quartiers as $quartier)
									<option value="{{ $quartier->id }}">{{ $quartier->libelle }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<!-- name= card -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Type de carte</label>
						<div class="col-md-6 col-sm-9 ">
							<select class="select2_single form-control" tabindex="6" name="card_id">
								@foreach ($cards as $card)
									<option value="{{ $card->id }}">{{ $card->libelle }}</option>
								@endforeach
							</select>
						</div>
					</div>


					<!-- name= numero de carte -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="numCard">Numéro de carte <span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="string" id="numCard" min="2" tabindex="7" required name="numCard" class="form-control" value="{{ old('numCard') }}">
							@if ($errors->has('numCard'))
								<p class="text-danger">{{ $errors->first('numCard') }}</p>
							@endif
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
							<a href="{{ route('prestataires.index')}}" class="btn btn-primary" type="button"><i class="fa fa-arrow-left"></i></a>
							<button class="btn btn-primary" type="reset">Effacer</button>
							<input type="submit" class="btn btn-success" value="Enregistrer">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection