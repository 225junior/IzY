@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Creation de Type de Carte</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
				<form data-parsley-validate="" action="{{route('typecards.store')}}" method="POST" class="form-horizontal form-label-left" novalidate="">
					@csrf

					<!-- name= type de carte -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom De Carte <span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="text" id="first-name" min="2" autofocus tabindex="1" required name="name" class="form-control" value="{{ old('name') }}">
							@if ($errors->has('name'))
								<p class="text-danger">{{ $errors->first('name') }}</p>
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
							<a href="{{ route('domaines.index')}}" class="btn btn-primary" type="button"><i class="fa fa-arrow-left"></i></a>
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