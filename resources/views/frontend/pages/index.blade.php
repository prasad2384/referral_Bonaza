@extends('frontend.layout')
@section('title', 'Referral Bonaza')
@section('content')
    <!-- ======================= Main Banner START -->
        <section class="position-relative overflow-hidden pb-0 pt-xl-9 banner-section">
            <div class="container pt-4 pt-sm-5">
                <div class="row pb-5 g-xl-5">
                    <!-- Hero content START -->
                    <div class="col-xl-7 col-md-6 col-sm-12 mb-5 mb-xl-0">
                        <div class="pe-xxl-4">
                            <!-- Title -->
                            <h1 class="mt-3">
                                Referral Codes <br /><span
                                    ><i>Use & Earn</i></span
                                >
                            </h1>
                            <p class="mb-0 mt-4 mt-md-5">
                                Earn money by opening up new accounts.
                            </p>
                        </div>
                    </div>
                    <!-- Hero content END -->

                    <!-- Hero Image START -->
                    <div
                        class="col-md-6 col-sm-12 col-xl-5 position-relative mx-auto mt-7 mt-xl-0"
                    >
                        <!-- Hero image -->
                        <img
                            src="{{asset('frontend/images/banner.png')}}"
                            class="rounded"
                            alt="hero-img"
                        />
                    </div>
                    <!-- Hero Image END -->
                </div>
            </div>
        </section>

        <!-- ======================= Main Banner END -->
        <!-- ======================= Feature START -->
        <section class="pt-5 pb-5 feature-section">
            <div class="container">
                <h2 class="text-center pb-4">Its Pretty Simple. How?</h2>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-3 g-4">
                    <!-- Item -->
                    <div class="col">
                        <div class="d-flex rounded p-4 feature-box">
                            <div
                                class="justify-content-center text-center feature-count"
                            >
                                <h5>1</h5>
                            </div>
                            <div class="text-left feature-content">
                                <p class="mb-0">
                                    Click on referral links of other users to
                                    open up an account.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="d-flex rounded p-4 feature-box">
                            <div
                                class="justify-content-center text-center feature-count"
                            >
                                <h5>2</h5>
                            </div>
                            <div class="text-left feature-content">
                                <p class="mb-0">
                                    Referrer gets a referral bonus
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="d-flex rounded p-4 feature-box">
                            <div
                                class="justify-content-center text-center feature-count"
                            >
                                <h5>3</h5>
                            </div>
                            <div class="text-left feature-content">
                                <p class="mb-0">
                                    Referrer share the referral bonus with you
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Feature END -->
        <!-- ======================= Banking START -->
        <section class="pt-5 pb-5 banking-section">
            <div class="container pb-5">
                <div class="d-flex pb-4 banking-header">
                    <h3 class="text-center">Banks</h3>
                    <button class="button-primary">View All</button>
                </div>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 g-4">
                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5">
                <div class="d-flex pb-4 banking-header">
                    <h3 class="text-center">Credit Cards</h3>
                    <button class="button-primary">View All</button>
                </div>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 g-4">
                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5">
                <div class="d-flex pb-4 banking-header">
                    <h3 class="text-center">Latest Additions</h3>
                    <button class="button-primary">View All</button>
                </div>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 g-4">
                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img src="{{asset('frontend/images/img1.png')}}" alt="moomoo" />
                            <h5 class="pt-3">MooMoo</h5>
                            <h6>$10</h6>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <div class="rounded p-4 banking-box">
                            <img
                                src="{{asset('frontend/images/img2.png')}}"
                                alt="Private Internet Access"
                            />
                            <h5 class="pt-3">Private Internet Access</h5>
                            <h6>$10</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Banking END -->
        <!-- ======================= Rewards START -->
        <section class="pt-5 pb-5 reward-section">
            <div class="container pb-5">
                <h2 class="text-center pb-4">
                    Rewards with 6,000+ apps & brands
                </h2>
                <div class="d-flex pb-4 reward-data">
                    <div class="dropdown">
                        <button
                            class="btn btn-secondary dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Add Your Own
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li><a class="dropdown-item" href="#">Item</a></li>
                        </ul>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        value="Explore 7,000+ Brand Referrals"
                        aria-label="Search"
                        aria-describedby="button-addon2"
                    />
                    <button
                        class="button-primary"
                        type="submit"
                        id="button-addon2"
                    >
                        Search
                    </button>
                </div>
            </div>
        </section>
        <!-- ======================= Rewards END -->
        <!-- Referral Codes Section START -->
        <section class="about">
            <div class="container">
                <div class="row g-4 align-items-xl-center">
                    <div class="col-lg-5">
                        <img src="{{asset('frontend/images/img8.png')}}" alt="referral-img" />
                    </div>
                    <div class="col-lg-7 about-content">
                        <h3>Let others use your referral codes</h3>
                        <p>
                            Neatly organize all your referral codes on your
                            Invitation profile. People searching for deals will
                            be able to discover your posts. You are going to
                            earn rewards.
                        </p>
                        <button class="button-primary mt-3">
                            GET STARTED, IT'S FREE
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Referral Codes Section END -->
        <!-- Bonus Section START -->
        <section class="about pt-5">
            <div class="container">
                <div class="row g-4 align-items-xl-center">
                    <div class="col-lg-7 about-content">
                        <h3>Never miss another signup bonus.</h3>
                        <p>
                            When signing up to a new service or purchasing
                            something online, the browser extension shows you
                            the best referral deals posted by your friends and
                            the community.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{asset('frontend/images/img4.png')}}" alt="referral-img" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Bonus Section END -->
        <!-- Tribe Section START -->
        <section class="about pt-5">
            <div class="container">
                <div class="row g-4 align-items-xl-center">
                    <div class="col-lg-5">
                        <img src="{{asset('frontend/images/img5.png')}}" alt="referral-img" />
                    </div>
                    <div class="col-lg-7 about-content">
                        <h3>Build your tribe</h3>
                        <p>
                            Follow your friends, exchange referrals, promote
                            products you love, discuss creative ways to earn
                            online, cash in cryptos and earn valuable rewards on
                            autopilot.
                        </p>
                        <button class="button-primary mt-3">GET STARTED</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tribe Section END -->
        <!-- Game Section START -->
        <section class="about pt-5 pb-5">
            <div class="container">
                <div class="row g-4 align-items-xl-center">
                    <div class="col-lg-7 about-content">
                        <h3>Step up your referral game</h3>
                        <p>
                            Track your progress on your dashboard and climb up
                            the leaderboard. Boost your posts visibility by
                            being active in the community and on-boarding other
                            users.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{asset('frontend/images/img6.jfif')}}" alt="referral-img" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Game Section END -->
@endsection
