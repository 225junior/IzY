@extends('layouts.app')

@section('content')

            <div class="row">

			<div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ __("Domaines d'activités")}}</h2>

                    <ul class="nav navbar-right panel_toolbox">
						<a href=" {{ Route('domaines.create') }}" class="btn btn-success">Creer</a>
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
                          <th width="30%">Domaine</th>
                          <th width="*">Etat</th>
                          <th width="*"></th>
                        </tr>
                      </thead>
                      <tbody>
					  	@foreach ($domaines as $domaine)
							<tr>
								<th scope="row">{{ $domaine->id }}</th>
								<td><a href="{{ route('domaines.show',$domaine->id )}}"> {{ $domaine->libelle }} </a></td>
								<th scope="row"> <i class="fa fa-toggle-{{ $domaine->active ==1 ?  'on' : 'off'}}"></i> </th>
								<td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-{{ $domaine->id }}">Supprimer</button>


                  <div class="modal fade modal-{{ $domaine->id }}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Supprimer  {{ $domaine->nom }}</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4>Attention !</h4>
                          <p>Voulez vou vraiment supprimer {{ $domaine->nom }} ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                          <form method="POST" action="{{ route('domaines.destroy',$domaine->id) }}" class="col-md-5">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-xs btn-danger" type="submit" value="🗑️">
                          </form>

                        </div>

                      </div>
                    </div>
                  </div>

								    <a class="btn btn-xs btn-info col-md-3" href="{{ route('domaines.edit',$domaine->id) }}">🖊️</a>
								</td>
							</tr>
						@endforeach

                      </tbody>
                    </table>

					{{ $domaines->links() }}




                  </div>
                </div>
              </div>
    	</div>
    </div>
</div>
@endsection
