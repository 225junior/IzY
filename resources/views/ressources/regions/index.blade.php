@extends('layouts.app')

@section('content')

            <div class="row">

			<div class="col-md-8 offset-md-2 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des Regions</h2>

                    <ul class="nav navbar-right panel_toolbox">
						<a href=" {{ Route('regions.create') }}" class="btn btn-success">Creer</a>
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
                          <th width="10%">#</th>
                          <th width="40%">Nom de Région</th>
                          <th width="25%"></th>
                        </tr>
                      </thead>
                      <tbody>
					  	@foreach ($regions as $region)
							<tr>
								<th scope="row">{{ $region->id }}</th>
								<td><a href="{{ route('regions.show',$region->id )}}"> {{ $region->libelle }} </a></td>
								<td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-{{ $region->id }}">Supprimer</button>


                  <div class="modal fade modal-{{ $region->id }}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Supprimer  {{ $region->libelle }}</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4>Attention !</h4>
                          <p>Voulez vou vraiment supprimer {{ $region->libelle }} ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                          <form method="POST" action="{{ route('regions.destroy',$region->id) }}" class="col-md-5">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-xs btn-danger" type="submit" value="🗑️">
                          </form>

                        </div>

                      </div>
                    </div>
                  </div>

								    <a class="btn btn-xs btn-info col-md-3" href="{{ route('regions.edit',$region->id) }}">🖊️</a>
								</td>
							</tr>
						@endforeach

                      </tbody>
                    </table>






                  </div>
                </div>
              </div>
    	</div>
    </div>
</div>
@endsection
