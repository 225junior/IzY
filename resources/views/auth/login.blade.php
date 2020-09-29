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
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<h1>Connexion</h1>

						<div>
							<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div>
							<input type="password" name="password" required class="form-control  @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="mot de passe" required="" />
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div>
							<button type="submit" class="btn btn-primary submit">Connexion</button>
							@if (Route::has('password.request'))
								<a class="reset_pass" href="{{ route('password.request') }}">Mot de passe Oublié ?</a>
							@endif

						</div>

						<div class="clearfix"></div>

						<div class="separator">
							<p class="change_link">Vous êtes nouveau ?
								<a href="{{ route('register') }}" class="to_register"> Créez un compte</a>
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
