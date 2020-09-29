<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
      	<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<h1>Creation de Compte</h1>

						<div>
							<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom d'utilisateur"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>


						<div>
							<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail"  name="email" value="{{ old('email') }}" required autocomplete="email"/>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>


						<div>
							<input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe"  name="password" value="{{ old('password') }}" required autocomplete="new-password"/>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div>
							<input type="password" class="form-control" placeholder="Confirmez le mot de passe"  name="password_confirmation" required autocomplete="new-password"/>
						</div>

						<div>
							<button type="submit" class="btn btn-primary submit"> {{ __("S'enregistrer") }}</button>
						</div>

						<div class="clearfix"></div>
						<div class="separator">
						<p class="change_link">Avez Vous déjà un Compte ?
							<a href="{{ route('login') }}" class="to_register"> Se connecter</a>
						</p>

						<div class="clearfix"></div>
						<br />
						<div>
							<h1><i class="fa fa-paw"></i> 3Dev-Groupe</h1>
							<p>©2016 All Rights Reserved. 3DevGroupe!  The innovative Startup</p>
						</div>
						</div>
                    </form>
				</section>
			</div>
      	</div>
    </div>
</body>
</html>
