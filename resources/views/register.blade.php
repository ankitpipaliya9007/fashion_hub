<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{url("fontend/id-244604---kasteeltje.svg")}}" type="image/x-icon">
        <link rel="stylesheet" href="{{url('fontend/CSS/LogReg.css')}}">
        <title>Fashion Hub - Fashion On Your Own choise</title>
    </head>

    <body>

        <div class="leftParent"></div>
        <div class="rightParent"></div>
        <div class="innerChild">
            <form action="register" method="POST" name="RegForm"> 
                @csrf
                @if (Session::get('success'))
                    <div style="color: green; text-align:center; z-index:1; font-size:20px; background-color:rgba(0, 128, 0, 0.5); padding:8px; margin:8px; border-radius:8px;">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div style="color: red; text-align:center; z-index:1; font-size:20px; background-color:rgba(255, 0, 0, 0.5); padding:8px; margin:8px; border-radius:8px;">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                <div class="form_container">
                    <a href="home"><img src="{{url('fontend/Img/5542c9c2-18a3-4955-9eb7-60989d7a7ecb.png')}}" alt="logo" style="width: 100px; height: 70px; margin:auto; display:block"></a>
                    <h1>Sign Up</h1>
                    
                    <input type="text" placeholder="Enter Name" name="username" id="name" value="{{old('username')}}">
                    <span style="color: red">@error('username')
                        {{$message}}
                    @enderror</span>
                    <input type="text" placeholder="Enter Phone No." name="phoneno" id="phoneno" value="{{old('phoneno')}}">
                    <span style="color: red">@error('phoneno')
                        {{$message}}
                    @enderror</span>
                    <input type="email" placeholder="Enter Email" name="email" id="email" value="{{old('email')}}">
                    <span style="color: red">@error('email')
                        {{$message}}
                    @enderror</span>
                    <input type="password" placeholder="Enter Password" name="password" id="password">
                    <span style="color: red">@error('password')
                        {{$message}}
                    @enderror</span>
                    <input type="password" placeholder="Repeat Password" name="password_confirmation" id="password_confirmation">
                    <span style="color: red">@error('password_confirmation')
                        {{$message}}
                    @enderror</span>

                    <div class="clearfix">
                        <a href="login"><button type="button" class="loginbtn btn">login</button></a>
                        <button type="submit" class="signupbtn btn">Sign Up</button>
                    </div>
                </div>
            </form>

        </div>
    </body>
    
</html>