@extends('frontend.layout')
@section('title', 'User Profile')
@section('content')
    @if (isset($error))
        <div class=" pt-5 mt-5">
            <div class="alert alert-danger mt-5">
                {{ $error }}
            </div>
        </div>
    @else
        <!-- ======================= Main Profile START -->
        <section class="position-relative overflow-hidden pb-0 pt-xl-9 profile-section">
            <div class="container pt-4 pt-sm-5">
                <div class="row pb-5  mb-5">
                    <!-- Hero Image START -->
                    <div class="col-sm-12 col-lg-3 profile-img">
                        <!-- Hero image -->
                        @if ($data->logo == '')
                            <img src="{{ asset('images/default_user_logo.png') }}" alt="profile-img">
                        @else
                            <img src="{{ asset('images/' . $data->logo) }}" alt="profile-img">
                        @endif
                    </div>
                    <!-- Hero Image END -->
                    <div class="col-sm-12 col-lg-9 profile-details">
                        <div class="d-flex profile-info">
                            <div class="profile-data">
                                <h2>{{ $data->firstname }} {{ $data->lastname }}</h2>
                                <h4 class="d-flex">
                                    <span class="user-select-none">referralcodes.com/{{ $data->id }} </span><img
                                        src="{{ asset('images/img-9.png') }}" class="rounded" id="copyImage" alt="box-icon">
                                    <span class="notification rounded-pill fs-6 p-2 d-none bg-black text-white"
                                        id="notification"> copied!</span>
                                </h4>
                                {{-- <h4>referralcodes.com/ladygray80<img src="{{ asset('images/img-9.png') }}"
                                        class="rounded" alt="box-icon">
                                </h4> --}}
                            </div>
                            <div class="profile-btn">
                                <button class="msg-btn"><img src="{{ asset('images/message-icon.png') }}" class="rounded"
                                        alt="msg-icon">Message</button>
                            </div>
                        </div>
                        <p><img src="{{ asset('images/img-10.png') }}" alt="rating" /><span><img
                                    src="{{ asset('images/img-11.png') }}" /></span></p>
                        <div class="profile-list">
                            <p class="pl-1">Member Since {{ $data->created_at->format('Y') }} |
                                <span>{{ $referral_links_count }} </span>Referral Codes Created | <span>100
                                </span>Clicks Received
                            </p>
                            <p class="pl-2"><span>$500 </span>Bonus Shared | <span>$1500 </span>Bonus Shared In Last 1
                                Year
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ======================= Main Profile END -->
        <!-- ======================= Main Profile body START -->
        <section class="position-relative overflow-hidden pb-0 pt-xl-9 referal-sec">
            <div class="container pt-4 pt-sm-5">
                <div class="row pb-5 px-3 mb-5">
                    <h4 class="heading-underline mb-5 text-uppercase"> {{ $data->firstname }} {{ $data->lastname }}’
                        REFERRALS
                    </h4>
                    <div class="referral-table mb-5 table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">WEBSITE</th>
                                    <th scope="col">OFFER AMOUNT</th>
                                    <th scope="col">REFERRED ON</th>
                                    <th scope="col">TRANSACTION RATING</th>
                                    <th scope="col">TRANSACTION COMMENTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($referral_links as $referral_link)
                                    <tr>
                                        <td><img src="{{ asset('images/' . $referral_link->logo) }}" alt="name">
                                        </td>
                                        <td>${{ $referral_link->expected_payout }}</td>
                                        <td>{{ $referral_link->created_at->format('d-m-Y') }}</td>
                                        <td><img src="{{ asset('images/img-10.png') }}" alt="rating" /></td>
                                        <td>Lorem ipsum dolor sit amet consectetur. </td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="12" class="text-center">Referral Link Not Found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>

                    </div>
                    <div class="px-3 pt-3">{{ $referral_links->links() }}</div>
                    {{-- <nav aria-label="...">
                    <ul class="pagination justify-content-end table-pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item " aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next <span aria-hidden="true">&raquo;</span></a>

                        </li>
                    </ul>
                </nav> --}}
                </div>
            </div>

        </section>

        <!-- ======================= Main Profile body END -->
    @endif
@endsection
@section('scripts')
    <script>
        document.getElementById('copyImage').addEventListener('click', function() {

            @if (!empty($data))
                const url = `{{ url('user_profile/' . $data->id) }}`;

                // Create a temporary input to hold the text
                const tempInput = document.createElement('input');
                tempInput.value = url;
                document.body.appendChild(tempInput);

                // Select the text and copy it
                tempInput.select();
                document.execCommand('copy');

                // Remove the temporary input
                document.body.removeChild(tempInput);

                // Show the notification
                const notification = document.getElementById('notification');
                notification.classList.remove('d-none');

                // Hide the notification after 1 second
                setTimeout(() => {
                    notification.classList.add('d-none');
                }, 1000);
            @endif

        });
    </script>
@endsection
