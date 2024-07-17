@extends('frontend.layout')
@section('title', 'Terms Condition');
@section('content')
    <!-- ======================= Hero section START -->
    <section class="position-relative overflow-hidden pb-0 pt-xl-9 terms-section">
        <div class="container pt-4 pt-sm-5">
            <div class="row pb-5 g-5 g-xl-5">
                <!-- Hero Image START -->
                <div class="col-sm-12 col-lg-3 tc-profile-img">
                    <!-- Hero image -->
                    <div class="tc-profile-btn">
                        <button class="tc-btn"><img src="{{asset('images/'. $data->logo)}}" class="rounded" alt="name"></button>
                    </div>
                </div>
                <!-- Hero Image END -->
                <div class="col-sm-12 col-lg-9 tc-profile-details">
                    <div class="d-flex tc-profile-info">
                        <div class="profile-data">
                            <h2>{{$data->display_name}}</h2>
                        </div>
                    </div>
                    <div class="profile-list">

                        <p class="pl-1 pl-data"> Terms & Conditions : Lorem ipsum dolor sit amet consectetur. Amet etiam
                            maecenas ut pellentesque morbi non fermentum nulla vel. Non amet non velit risus fusce tortor
                            leo faucibus. Faucibus condimentum in commodo auctor tempor volutpat. Molestie cras eget cras
                            nullam metus malesuada arcu pulvinar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Hero section  END -->
    <!-- ======================= TC body START -->
    <section class="position-relative overflow-hidden pb-0 pt-xl-9 tc-sec">
        <div class="container pt-4 pt-sm-5">
            <div class="row pb-5 g-4 g-xl-5">
                <h4 class="heading-underline ml-5">{{$data->display_name}}</h4>
                <div class="card tc-card">
                    <div class="d-flex container d-flex flex-row py-4 tc-card-data">
                        <img src="{{asset('images/img15.png')}}" alt="profile-img" class="rounded-circle img-fluid  tc-card-img">
                        <h5 class="px-3">Andrew Marsh<br><img src="{{asset('images/img-10.png')}}" alt="rating" /></h5>
                        <h4 class="px-5">50 Points</h4>
                        <button type="button" class="button-primary tc-card-btn">Refer Now</button>
                    </div>
                </div>
                <div class="card tc-card">
                    <div class="d-flex container d-flex flex-row py-4 tc-card-data">
                        <img src="{{asset('images/img-16.png')}}" alt="profile-img" class="rounded-circle img-fluid  tc-card-img">
                        <h5 class="px-3">Andrew Marsh<br><img src="{{asset('images/img-10.png')}}" alt="rating" /></h5>
                        <h4 class="px-5">50 Points</h4>
                        <button type="button" class="button-primary tc-card-btn">Refer Now</button>
                    </div>
                </div>
                <div class="card tc-card">
                    <div class="d-flex container d-flex flex-row py-4 tc-card-data">
                        <img src="{{asset('images/img-17.png')}}" alt="profile-img" class="rounded-circle img-fluid  tc-card-img">
                        <h5 class="px-3">Andrew Marsh<br><img src="{{asset('images/img-10.png')}}" alt="rating" /></h5>
                        <h4 class="px-5">50 Points</h4>
                        <button type="button" class="button-primary tc-card-btn">Refer Now</button>
                    </div>
                </div>
                <div class="card tc-card">
                    <div class="d-flex container d-flex flex-row py-4 tc-card-data">
                        <img src="{{asset('images/profile-pic.png')}}" alt="profile-img" class="rounded-circle img-fluid  tc-card-img">
                        <h5 class="px-3">Andrew Marsh<br><img src="{{asset('images/img-10.png')}}" alt="rating" /></h5>
                        <h4 class="px-5">50 Points</h4>
                        <button type="button" class="button-primary tc-card-btn">Refer Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= TC body END -->
@endsection
