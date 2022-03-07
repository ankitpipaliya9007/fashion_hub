<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url("fontend/id-244604---kasteeltje.svg")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('fontend/CSS/style.css')}}">
    <title>Fashion Hub - Fashion On Your Own choise</title>
</head>
<body>
    <div class="header_center">
    <header class="header" id="header">
        <div class="header__NavLogo">
            <nav class="header__NavLogo--nav">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul>
                        <li class="li_itemsFirst">
                            <a href="home">
                            <img src="{{url('fontend/Img/5542c9c2-18a3-4955-9eb7-60989d7a7ecb.png')}}" alt="Logo" class="li_itemsFirst-img"></a>
                            @if ($LoggedUserInfo)
                                <p>{{ $LoggedUserInfo->username }}</p>
                            @else
                                <p>Guest</p>
                            @endif
                        </li>
                        <li class="li_items mr-top"><a href="home">Home</a></li>
                        <li class="li_items"><a href="about">About</a></li>
                        <li class="li_items"><a href="services">Services</a></li>
                        @if (!session()->has('LoggedIn')) 
                            <li class="li_items"><a href="contect_us">Contact Us</a></li>
                            <li class="li_items"><a href="terms_conditions">Terms & Conditions</a></li>
                            <li class="li_items"><a href="privacy_policy">Privacy Policy</a></li>
                            <li class="li_items"><a href="login">Login</a></li>
                            <li class="li_items"><a href="register">Register</a></li>
                        @else
                            <li class="li_items"><a href="contect_us">Contact Us</a></li>
                            <li class="li_items"><a href="privacy_policy">Privacy Policy</a></li>
                            <li class="li_items"><a href="terms_conditions">Terms & Conditions</a></li>
                            <li class="li_items"><a href="logout">Log out</a></li>
                        @endif
                        
                    </ul>
                </div>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img  class="header__NavLogo--nav-navimg" src="{{url('fontend/Img/navigation.png')}}" alt="NavigationIcon"></span>
            </nav>
            <div class="header__NavLogo--logo">
                <a href="home"><img class="header__NavLogo--logo-logoimg" src="{{url('fontend/Img/5542c9c2-18a3-4955-9eb7-60989d7a7ecb.png')}}" alt="logo"></a>
            </div>
        </div>
        <div class="header__SearchCart">
            <div class="header__SearchCart--search">
                <img src="{{url('fontend/Img/search.png')}}" alt="search" class="header__SearchCart--search-searchimg">
            </div>
            <div class="header__SearchCart--cart">
                <img src="{{url('fontend/Img/add-cart.png')}}" alt="add-cart" class="header__SearchCart--cart-cartimg">
            </div>
        </div>
    </header>
    </div>