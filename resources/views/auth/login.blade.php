<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="">
		<meta name="keywords" content="">
        <meta name="author" content="Click A Whisky">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - Oxygene</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="{{ asset('img/logo2.png') }}" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->

					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>

							<!-- Account Form -->
							@if (session('danger'))
							<div class="alert alert-danger">
								<a href="#" data-dismiss="alert" class="close">&times;</a>
								<p>{{ session('danger') }}</p>
							</div>
							@endif
							<form action="{{ route('login.store') }}" method="POST">
								@csrf
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="email" name="email">
									@error('email')
										<p class="text-danger">{{ $message }}</p>
									@enderror
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										{{-- <div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Forgot password?
											</a>
										</div> --}}
									</div>
									<input class="form-control" type="password" name="password">
									@error('password')
										<p class="text-danger">{{ $message }}</p>
									@enderror
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
							</form>
							<!-- /Account Form -->
                             <p>Go to <a href="{{ route('index') }}">main website</a></p>
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
