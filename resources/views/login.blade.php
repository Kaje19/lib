<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Login</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="background-color: #f5f5dc;">
    @if (session('message'))
        <div class="alert">{{ session('message') }}</div>
    @endif
    <div class="login-page" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="container">
                    <h3 class="mb-3 text-center">User Log In</h3>
                    <div class="bg-white shadow rounded">

                        
                                <div class="form-left h-100 py-5 px-5">
                                    <form method="post" action="{{ route('librarian.authentication') }}" class="row g-4">
                                        
                                        @csrf
                                            <div class="col-12 custom-gap">
                                                <label>Username<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                                </div>
                                            </div>

                                            <div class="col-12 custom-gap">
                                                <label>Password<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                    <input type="text" name="password" class="form-control" placeholder="Enter Password">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 custom-gap">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                    <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!--<a href="#" class="float-end text-primary">Forgot Password?</a>-->
                                            </div>

                                        
                                                 <button type="submit" class="btn-custom center-btn">Login</button>
                                        
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
