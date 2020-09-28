@extends('layouts.app')

@section('content')

            <div class="row">

			<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des Regions</h2>

                    <ul class="nav navbar-right panel_toolbox">
						<a href=" {{ Route('regions.create') }}" class="btn btn-success">Creer</a>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
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
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
					  	@foreach ($regions as $region)
							<tr>
								<th scope="row">{{ $region->id }}</th>
								<td>{{ $region->libelle }}</td>
								<td>the Bird</td>
								<td>@twitter</td>
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
