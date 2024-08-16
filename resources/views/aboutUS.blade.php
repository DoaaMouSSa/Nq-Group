@extends('layouts.pages')
@section('content')
<section id='sec-1'>
        <div class="container">
            <h2 class="section-title mb-3">About Us</h2>
            <div class="row p-4 justify-content-between align-items-start">
                <div class="col-lg-6 " >
                    <figure class="circle-bg">
                    <img src="{{asset('assets/images/hero.jpeg')}}" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto text-start ">
                    <div class="mb-4">
                        <h3 class="h3 mb-4 text-black">For the next great business</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.</p>
                    </div>
                    <div class="mb-4">
                        <ul class=" ul-check success">
                        <li><i class="fas fa-check"></i> Officia quaerat eaque neque</li>
                        <li> <i class="fas fa-check"></i> Possimus aut consequuntur incidunt</li>
                        <li> <i class="fas fa-check"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fas fa-check"></i> Consectetur adipisicing elit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
      <section id='sec-1'>
        <div class="container">
            <h2 class="section-title mb-3">Our Team</h2>
            <div class="teams row justify-content-center">
                <div class="team col-md-3">
                    <div class="image-part">
                        <img src="{{asset('assets/images/team1.jpeg')}}" alt="">
                    </div>
                    <div class="text">
                    <h5>Jana Deo</h5>
                    <small>CEO & Founder</small>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam saepe  </p>
                    <p>ceo@gmail.com</p>
                    <a href=""> contact</a>
                    </div>
                </div>
            <div class="team col-md-3">
                <div class="image-part">
                   <img src="{{asset('assets/images/team1.jpeg')}}" alt="">
                </div>
                <div class="text">
                    <h5>Jana Deo</h5>
                    <small>CEO & Founder</small>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam saepe  </p>
                    <p>ceo@gmail.com</p>
                    <a href=""> contact</a>
                </div>
            </div>
               <div class="team col-md-3">
                    <div class="image-part">
                    <img src="{{asset('assets/images/team1.jpeg')}}" alt="">
                    </div>
                    <div class="text">
                        <h5>Jana Deo</h5>
                        <small>CEO & Founder</small>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam saepe  </p>
                        <p>ceo@gmail.com</p>
                        <a href=""> contact</a>
                    </div>
               </div>
               </div>
        </div>
      </section>

@endsection