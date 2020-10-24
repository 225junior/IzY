@extends('layouts.app')

@section('content')

            <div class="row">

			<div class="col-md-10 offset-md-1 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Les services </h2>

                    <ul class="nav navbar-right panel_toolbox">
						<a href=" {{ Route('services.create') }}" class="btn btn-success">Creer</a>
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
                          <th width="40%">Service</th>
                          <th width="20%">Domaine</th>
                          <th width="10%">État</th>
                          <th width="20%"></th>
                        </tr>
                      </thead>
                      <tbody>
					  	@foreach ($services as $service)
							<tr>
								<th  style="padding:1px;"  scope="row">{{ $service->id }}</th>
								<td style="padding:1px;" ><a href="{{ route('services.show',$service->id )}}"> {{ $service->libelle }} </a></td>
								<td style="padding:1px;" > {{ $service->domaine->libelle }} </td>
								<th style="padding:1px;"  scope="row"> <i class="fa fa-toggle-{{ $service->active ==1 ?  'on' : 'off'}}"></i> </th>
								<td style="padding:1px;" >
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal-{{ $service->id }}">Supprimer</button>


                  <div class="modal fade modal-{{ $service->id }}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Supprimer  {{ $service->libelle }}</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4>Attention !</h4>
                          <p>Voulez vou vraiment supprimer {{ $service->libelle }} ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                          <form method="POST" action="{{ route('services.destroy',$service->id) }}" class="col-md-5">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-xs btn-danger" type="submit" value="🗑️">
                          </form>

                        </div>

                      </div>
                    </div>
                  </div>

								    <a class="btn btn-xs btn-info col-md-3" href="{{ route('services.edit',$service->id) }}">🖊️</a>
								</td>
							</tr>
						@endforeach

                      </tbody>
                    </table>
					{{ $services->links() }}





                  </div>
                </div>
              </div>
    	</div>
    </div>
</div>
@endsection
