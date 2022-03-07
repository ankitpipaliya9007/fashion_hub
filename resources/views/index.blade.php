@extends('fontend.main')

@section('main_container')
    <div class="header_center">
    <section class="slidesec">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <a href="#">
                <div class="dark"></div>
              <img class="bannerimg" src="{{url('fontend/Img/fashion_hub-banner1.jpg')}}" style="width:100%">
              <div class="myslide_text"><h2>Flexible return</h2>
                <p style="width: 70%;">Retun if you don't like in 7 days</p>
                <button class="button">See All</button></div>
                </a>
            </div>
            
            <div class="mySlides fade">
                <a href="#">
                <div class="dark"></div>
              <img class="bannerimg" src="{{url('fontend/Img/fashion_hub-banner2.jpg')}}" style="width:100%">
              <div class="myslide_text"><h2>Free shipping</h2>
                <p style="width:50%;">Free shipping in India</p>
                <button class="button">See All</button></div>
                </a>
            </div>
            
        </div>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span>
        </div>
    </section>

    <section class="sec2_mainprod">
        <div class="mainprod_saree">
            <img src="{{url('fontend/Img/mainprod_designer-saree.jpg')}}" alt="mainprod_designer-saree">
            <figcaption>saree</figcaption>
        </div>
        <div class="mainprod_bla">
            <img src="{{url('fontend/Img/mainprod_designer-blouse.jpg')}}" alt="mainprod_designer-blouse">
            <figcaption>blouse</figcaption>
        </div>
    </section>

    <section class="sec3_secoprod">
        <div class="mainprod_1">
            <img src="{{url('fontend/Img/secoprod_all1.jpg')}}" alt="mainprod_designer-saree">
            <figcaption>All</figcaption>
        </div>
        <div class="mainprod_2">
            <img src="{{url('fontend/Img/secoprod_banarasi2.jpg')}}" alt="mainprod_designer-blouse">
            <figcaption>Banarasi</figcaption>
        </div>
        <div class="mainprod_3">
            <img src="{{url('fontend/Img/secoprod_kanchi3.jpg')}}" alt="mainprod_designer-saree">
            <figcaption>kanchipuram</figcaption>
        </div>
        <div class="mainprod_4">
            <img src="{{url('fontend/Img/secoprod_silk4.jpg')}}" alt="mainprod_designer-blouse">
            <figcaption>Silk</figcaption>
        </div>
        <div class="mainprod_5">
            <img src="{{url('fontend/Img/secoprod_paithani5.jpg')}}" alt="mainprod_designer-saree">
            <figcaption>Paithani</figcaption>
        </div>
        <div class="mainprod_6">
            <img src="{{url('fontend/Img/secoprod_bandhani6.jpg')}}" alt="mainprod_designer-blouse">
            <figcaption>Bandhani</figcaption>
        </div>
        <div class="mainprod_7">
            <img src="{{url('fontend/Img/secoprod_patola7.jpg')}}" alt="mainprod_designer-saree">
            <figcaption>Patola</figcaption>
        </div>
        <div class="mainprod_8">
            <img src="{{url('fontend/Img/secoprod_cotton8.jpg')}}" alt="mainprod_designer-blouse">
            <figcaption>Cotton</figcaption>
        </div>
    </section>    

    <section class="sec4_paydai">
        <div class="box">
            <div>
                <span class="box-title">COD</span>
                <p>Cash on delivery available.</p>
            </div>
        </div>
        <div class="box">
            <div>
                <span class="box-title">Easy return</span>
                <p>7 days easy return/exchange.</p>
            </div>
        </div>
        <div class="box">
            <div>
                <span class="box-title">Refund</span>
                <p>100% refund in case of return.</p>
            </div>
        </div>
        <div class="box">
            <div>
                <span class="box-title">Security</span>
                <p>You are on 100% secure place.</p>
            </div>
        </div>
    </section>
    </div>

@endsection