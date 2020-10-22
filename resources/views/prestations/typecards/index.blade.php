@extends('layouts.app')

@section('content')

            <div class="row">

			<div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Les types de Cartes</h2>

                    <ul class="nav navbar-right panel_toolbox">
						<a href=" {{ Route('typecards.create') }}" class="btn btn-success">Creer</a>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th width="*">#</th>
                          <th width="30%">Type</th>
                          <th width="*">État</th>
                          <th width="*"></th>
                        </tr>
                      </thead>
                      <tbody>
					  	@foreach ($typeCards as $typeCard)
							<tr>
								<th scope="row">{{ $typeCard->id }}</th>
								<td><a href="{{ route('typecards.show',$typeCard->id )}}"> {{ $typeCard->libelle }} </a></td>

								<th scope="row"> <i class="fa fa-toggle-{{ $typeCard->active ==1 ?  'on' : 'off'}}"></i> </th>
								<td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-{{ $typeCard->id }}">Supprimer</button>


                  <div class="modal fade modal-{{ $typeCard->id }}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Supprimer  {{ $typeCard->libelle }}</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4>Attention !</h4>
                          <p>Voulez vous vraiment supprimer {{ $typeCard->libelle }} ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                          <form method="POST" action="{{ route('typecards.destroy',$typeCard->id) }}" class="col-md-5">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-xs btn-danger" type="submit" value="🗑️">
                          </form>

                        </div>

                      </div>
                    </div>
                  </div>

								    <a class="btn btn-xs btn-info col-md-3" href="{{ route('typecards.edit',$typeCard->id) }}">🖊️</a>
								</td>
							</tr>
						@endforeach

                      </tbody>
                    </table>

					{{ $typeCards->links() }}




                  </div>
                </div>
              </div>
    	</div>
    </div>
</div>
@endsection
