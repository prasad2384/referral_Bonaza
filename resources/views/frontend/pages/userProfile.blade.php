@extends('frontend.layout')
@section('title', 'Edit Profile')
@section('content')
    <!-- ======================= Edit Profile START -->
    <section class="position-relative overflow-hidden pb-0 pt-xl-9 profile-section">
        <div class="container pt-4 pt-sm-5">
            <div class="row pb-5 g-xl-5">
                <!-- Hero Image START -->
                <div class="col-sm-12  col-lg-3 my-auto profile-img">
                    <!-- Hero image -->
                    @if ($data->logo == '')
                        <img src="{{ asset('images/default_user_logo.png') }}" style="height:210px width:210px"
                            alt="profile-img" class="rounded rounded-circle">
                    @else
                        <img src="{{ asset('images/' . $data->logo) }}">
                    @endif
                </div>
                <!-- Hero Image END -->
                <div class="col-sm-12 col-lg-9 profile-details">
                    <div class="d-md-flex d-block profile-info">
                        <div class="profile-data">
                            <h2>Hi {{ $data->firstname }} {{ $data->lastname }}</h2>
                            <h4 class="d-flex">
                                <span class="user-select-none">referralcodes.com/{{ $data->id }} </span><img
                                    src="{{ asset('images/img-9.png') }}" class="rounded" id="copyImage" alt="box-icon">
                                <span class="notification rounded-pill fs-6 p-2 d-none bg-black text-white"
                                    id="notification"> copied!</span>
                            </h4>

                        </div>
                        <div class="profile-btn">
                            <a class="edit-btn" href="{{ url('user/edit_profile/' . $data->id) }}"><img
                                    src="{{ asset('images/img13.png') }}" class="rounded" alt="msg-icon">Edit
                                profile
                            </a>
                        </div>
                    </div>
                    <p><img src="{{ asset('images/img-10.png') }}" alt="rating" /></p>
                    <div class="profile-list">
                        <p class="pl-1">Member Since {{ $data->created_at->format('Y') }} |
                            <span>{{ $referral_links_count }} </span>Referral Codes Created |
                            <span>100
                            </span>Clicks Received |<span> 50 </span> Bonus Received
                        </p>
                        <p class="pl-1 pl-data">{{ $data->about }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Edit Profile END -->
    <!-- ======================= Edit Profile body START -->
    <section class="position-relative overflow-hidden pb-0 pt-xl-9 referal-sec">
        <div class="container pt-4 pt-sm-5">
            <div class="row pb-5 mt-5 mb-5 mx-1">
                <h4 class="heading-underline mb-5">YOUR CLICKS</h4>
                <div class="editProfile-table mb-5 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">WEBSITE</th>
                                <th scope="col">DATE</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">EXPECTED PROMO</th>
                                <th scope="col">APPLIED</th>
                                <th scope="col">APPLICATION SCREENSHOT</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                            <tr>
                                <td>George Aads</td>
                                <td>01-01-2024</td>
                                <td>Karan</td>
                                <td>HELLO10</td>
                                <td><span class="mark-label">Mark As Applied</span></td>
                                <td><span class="upload-label">Upload Screenshot</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <nav aria-label="...">
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
                </nav>
            </div>
        </div>
    </section>

    <!-- ======================= Edit Profile body END -->
    <section class="position-relative overflow-hidden pb-0 pt-xl-9 comment-section">
        <div class="container pt-4 pt-sm-5">
            <div class="row pb-5 mt-5 mb-5">
                <h4 class="heading-underline">RATINGS & COMMENTS</h4>
                <div class="row ">
                    <div class="col-lg-4">
                        <div class="d-flex rating-img">
                            <img src="{{ asset('images/img-10.png') }}" alt="rating-img">
                            <h5>10 Average Ratings</h5>
                        </div>
                        <img src="{{ asset('images/img14.png') }}" alt="referral-img">
                    </div>
                    <div class="col-lg-8">
                        <div class="rating-content">
                            <h5>User Reviews</h5>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="d-flex pb-5 rating-labels">
                                <span><i class="fa-solid fa-circle-check"></i>Ease Of Use</span>
                                <span><i class="fa-solid fa-circle-check"></i>Good Value</span>
                                <span><i class="fa-solid fa-circle-check"></i>Would Recommend</span>
                            </div>
                        </div>
                        <div class="pt-5 pb-5 rating-content">
                            <h5>Top High Ratings</h5>
                            <div class="pt-4 d-flex">
                                <div class="row  g-xl-5">
                                    <div class=" col-lg-3 pr-0 rating-profile-img">
                                        <img src="{{ asset('images/img15.png') }}" alt="profile-img">
                                    </div>
                                    <div class="col-lg-9 px-2 rating-profile-details">
                                        <div class="d-flex rating-profile-info">
                                            <div class="rating-profile-data">
                                                <h5>Andrew Marsh</h5>
                                            </div>
                                        </div>
                                        <p class="mb-0"><img src="{{ asset('images/img-10.png') }}" alt="rating">
                                        </p>
                                        <p class="mb-3 review-label">Reviewed on 29 April 2024</p>
                                    </div>

                                </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                            <span>Verified User : Yes</span>
                        </div>
                        <div class="pt-5 pb-5 rating-content">
                            <div class="d-flex">
                                <div class="row  g-xl-5">
                                    <div class=" col-lg-3 pr-0 rating-profile-img">
                                        <img src="{{ asset('images/img15.png') }}" alt="profile-img">
                                    </div>
                                    <div class="col-lg-9 px-2 rating-profile-details">
                                        <div class="d-flex rating-profile-info">
                                            <div class="rating-profile-data">
                                                <h5>Andrew Marsh</h5>
                                            </div>
                                        </div>
                                        <p class="mb-0"><img src="{{ asset('images/img-10.png') }}" alt="rating">
                                        </p>
                                        <p class="mb-3 review-label">Reviewed on 29 April 2024</p>
                                    </div>

                                </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                            <span>Verified User : Yes</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.getElementById('copyImage').addEventListener('click', function() {
            const url = `localhost:8000/user_profile/{{ $data->id }}`;

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

            // Hide the notification after 2 seconds
            setTimeout(() => {
                notification.classList.add('d-none');
            }, 2000);
        });
       
    </script>
@endsection
