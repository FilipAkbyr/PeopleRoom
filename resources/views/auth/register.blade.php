<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register Page</title>	
	<link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">	
	<link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">	
	<link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">  
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"/>
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-10 col-xl-10 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-6 pr-md-0">
                  <div class="auth-left-wrapper">
                   <div class="logoback">
                    <a href="#" class="puzzle-ui-logo d-block "><img src="../../assets/images/logo.svg" alt="logo"></a>
                    <h5 class="text-muted font-weight-normal">Welcome back! <br> Log in to your account.</h5>
                   </div>
                  </div>
                </div>
                <div class="col-md-6 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf   
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    
                          </div> 
                          <div class="form-group">
                            <label for="exampleInputEmail1">Sur Name </label>
                            <input type="text" class="form-control @error('sur_name') is-invalid @enderror" name="sur_name" value="{{ old('sur_name') }}" required autocomplete="sur_name" autofocus>
    
                            @error('sur_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    
                          </div>                
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>                   
                      <div class="mt-3">
                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-lg-0 text-white">Register</a>                       
                      </div>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<script src="{{asset('assets/vendors/core/core.js')}}"></script>	
	<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/template.js')}}"></script>	
</body>
</html>