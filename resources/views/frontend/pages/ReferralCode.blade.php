@extends('frontend.layout')
@section('title', 'Referral Code')
@section('content')
    <!-- ======================= Edit Profile START -->
    <section class="position-relative overflow-hidden pb-0 pt-xl-9 profile-section text-center">
        <div class="container pt-4 pt-sm-5">
            <div class="row pb-5 g-5 g-xl-5">
                <div class="name-img">
                    <img src="{{ asset('images/img-12.png') }}" alt="">
                </div>
                <h2>Asda (George) Referral Codes</h2>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden pb-0 pt-xl-9 referralcode-section text-center">
        <div class="container pt-4 pt-sm-5 ">
            <div class="row pb-5 g-5 g-xl-5 pt-5">
                <div class="refferal-box">
                    <h5>Offer Id</h5>
                    <h4 class="code">QU9292112299303</h4>
                    <h6 class="category">Category: Employee Referral | Expires On 24-07-2024</h6>
                    <p>Terms & Conditions : Lorem ipsum dolor sit amet consectetur. Amet etiam maecenas ut pellentesque
                        morbi non fermentum nulla vel. Non amet non velit risus fusce tortor leo faucibus. Faucibus
                        condimentum in commodo auctor tempor volutpat. Molestie cras eget cras nullam metus malesuada arcu
                        pulvinar. Lorem ipsum dolor sit amet consectetur. Amet etiam maecenas ut pellentesque morbi non
                        fermentum nulla vel. Non amet non velit risus fusce tortor leo faucibus. Faucibus condimentum in
                        commodo auctor tempor volutpat. Molestie cras eget cras nullam metus malesuada arcu pulvinar.Lorem
                        ipsum dolor sit amet consectetur. Amet etiam maecenas ut pellentesque morbi non fermentum nulla vel.
                        Non amet non velit risus fusce tortor leo faucibus. Faucibus condimentum in commodo auctor tempor
                        volutpat. Molestie cras eget cras nullam metus malesuada arcu pulvinar.</p>
                    <div class="offer-box d-flex mt-5 ">
                        <img src="{{ asset('images/img16.png') }}" alt="">
                        <h3 class="offer mb-0">Offer Amount $100</h3>
                    </div>
                    <h3 class="status mb-5">Status : Active</h3>
                    <button class="button-primary">continue to asda george</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= Edit Profile END -->
@endsection
