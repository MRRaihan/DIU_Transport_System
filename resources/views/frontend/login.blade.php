{{--
<!DOCTYPE html>
<html>

<head>
    <title>Login :: DIU_Transport_System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/style/loginregistration.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
</head>

<body>
<img class="wave" src="{{asset('assets/frontend/images/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{asset('assets/frontend/images/as.png')}}" style="width: 290px;">
    </div>
    <div class="login-content">
        <form action="{{route('login')}}" method="post">
            @csrf
            <img src="{{asset('assets/frontend/images/logo.png')}}" style="width: 70%">
            <h2 class="title">DIU Transport</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus >
                </div>
            </div>
            @error('email')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" >
                </div>
            </div>
            @error('password')
            <div style="color: red;">{{ $message }}</div>
            @enderror
            <div class="check">
                <input type="checkbox" id="vehicle1" name="vehicle1" style="margin-left: -250px;margin-top:15px;">
                <label for="vehicle1" style=" color: #999;
                    font-size: 0.9rem; "> I have a bike</label><br>
                <a href="{{route('student.registration')}}">Registration</a>
            </div>

            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/loginregistration.js')}}"></script>
</body>

</html>
--}}
<!DOCTYPE html>
<html>

<head>
    <title>Login :: DIU_Transport_System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/style/lon.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/lonc.css')}}">
</head>

<body>
<img class="wave" src="{{asset('assets/frontend/images/wave.png')}}">
<div class="container">

    <div class="img">
        <img src="{{asset('assets/frontend/images/as.png')}}" style="width: 289px;">
    </div>
    <div class="login-content">

        <form action="{{route('login')}}" method="POST" class="sign-in-form">
            @csrf

            <img src="{{asset('assets/frontend/images/profilepic.png')}}">
            <h2 class="login-title">DIU Transport</h2>
            <div class="login-input-field">
                <i class="fas fa-envelope"></i>
                <input  id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email" />
            </div>
                @error('email')
                <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password" />
            </div>
                @error('password')
                <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="vehicle1" style=" color: #999;
                    font-size: .9rem; "><small>Remember!</small></label>
                <a href="#"><small>Forgot Password?</small></a>
            </div><br>
            <button name="login-btn" class="btn">LOGIN</button><br><br>
            <p><small> (<a href="{{route('student.registration')}}" style="color: red;
                    font-size: 0.9rem;"> Create account now</a>) Assist the driver and helper by showing the Daffodil Internatinal University
                    ID card. Be cooperative with drivers, helpers and other passengers.</small>
            </p>


        </form>

    </div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/lonc.js')}}"></script>
</body>

</html>
