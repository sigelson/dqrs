@extends('layouts.appd', ['class' => 'bg-gradient-white'])

@section('content')
    <div class="header bg-gradient-white pt-3">
        <div class="container-fluid">
           <div class="row">
               <div class="col-sm-12 d-none d-md-block text-center mb-3">
                <img src="{{ asset('assets/argon') }}/img/brand/logo-red.png" class="img-fluid w-25"  alt="...">
               </div>
               <div class="col-sm-12 d-sm-block d-md-none text-center mb-3">
                <img src="{{ asset('assets/argon') }}/img/brand/logo-red.png" class="img-fluid w-50" alt="...">
               </div>
               <div class="col-sm-12 col-md-8  d-none d-md-block text-center">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1Q1cZYhobhc?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <div class="col sm-12 col-md-3 offset-md-1 text-center">
                    <h1 class="display 1 font-weight-bold"><strong>NOW SERVING</strong></h1>
                  <div class="card bg-lighter mt-3 shadow">
                      <div class="card-header-lg">
                          <h3 class="text-default ">Registrar</h3>
                      </div>
                      <div class="card-body-sm">
                          <h1 class="display-1 font-weight-bold"><strong>R-34</strong></h1>
                      </div>
                      <div class="card-footer-sm">
                        <p class="text-warning font-weight-bold">Please proceed to CASHIER 2</p>
                      </div>
                  </div>
                  <div class="card bg-lighter shadow mt-3">
                    <div class="card-header-lg">
                        <h3 class="text-default ">ACCOUNTING</h3>
                    </div>
                    <div class="card-body-sm">
                        <h1 class="display-1 font-weight-bold"><strong>A-65</strong></h1>
                    </div>
                    <div class="card-footer-sm">
                        <p class="text-warning font-weight-bold">Please proceed to CASHIER 1</p>
                    </div>
                </div><div class="card bg-lighter shadow mt-3">
                    <div class="card-header-lg">
                        <h3 class="text-default ">CASHIER</h3>
                    </div>
                    <div class="card-body-sm">
                        <h1 class="display-1 font-weight-bold"><strong>C-24</strong></h1>
                    </div>
                    <div class="card-footer-sm">
                        <p class="text-warning font-weight-bold">Please proceed to CASHIER 2</p>
                    </div>
                </div>
               </div>

           </div>

           <div class="py-5"></div>

           <div class="d-none d-md-block bg-dark p-0">
            {{-- <marquee behavior="" direction="left"><h1 class="display-1 text-white">TESTING NOTIFICATION DQRS TESTING</h1></marquee> --}}

            <nav class="navbar-lg bg-white">
                <div class="p-0">
             <marquee behavior="" direction="left"><h1 class=" display-1 text-dark">TESTING NOTIFICATION DQRS TESTING</h1></marquee>
                 </div>
          </nav>

            </div>

        <div class="d-sm-block d-md-none p-0">
           <nav class="navbar-sm fixed-bottom bg-lighter">
               <div>
            <marquee behavior="" direction="left"><h1 class="display-md-1 text-red">TESTING NOTIFICATION DQRS TESTING</h1></marquee>
                </div>
         </nav>
        </div>

        </div>
        {{-- <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-light" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div> --}}
    </div>


@endsection
