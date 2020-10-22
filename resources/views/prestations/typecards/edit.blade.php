@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Modiffication de {{ $typeCard->libelle }}</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br>
<!-- <?php dd($typeCard);?> -->
				<form data-parsley-validate="" action="{{route('typecards.update',$typeCard->id)}}" method="POST" class="form-horizontal form-label-left">
					@csrf
					@method('PUT')

					<!-- name= type de typeCard -->
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Type de Carte<span class="required">*</span></label>
						<div class="col-md-6 col-sm-9 ">
							<input type="text" id="first-name" min="2" autofocus tabindex="1" required name="name" class="form-control" value="{{ $typeCard->libelle }}">
							@if ($errors->has('name'))
								<p class="text-danger">{{ $errors->first('name') }}</p>
							@endif
						</div>
					</div>


					<div class="item form-group">
						<label class="col-form-label offset-md-3 col-md-2 col-sm-3 label-align" for="check">Active On/Off</label>
						<div class="col-md-1 col-sm-2 ">
							<input type="checkbox" id="check" name="active" tabindex="3" class="form-control" {{ $typeCard->active ==1 ?  'checked' : ''}}>
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-4">
							<a href="{{ route('typeCards.index')}}" class="btn btn-primary" tabindex="4" type="button"><i class="fa fa-arrow-left"></i></a>
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
