@include('admin.content.header')
<link rel="stylesheet" href="{{asset('admin/css/date.css')}}">
<!-- Sidebar End -->

<!-- Main Container Start -->
<main class="main--container">
    <!-- Main Content Start -->
    <section class="main--content">
        <div class="row gutter-20">
            <div class="col-lg-8">
                <!-- Panel Start -->
                <div class="panel profile-cover">
                    <div class="profile-cover__img">
                        <img src="https://i.pinimg.com/236x/3b/97/12/3b97121288b009ba0cad5a911de46248.jpg" alt="">
                        <h3 class="h3">{{Session::get('firstname')}} {{Session::get('lastname')}}</h3>
                    </div>

                    <div class="profile-cover__action"
                         data-bg-img="https://www.gstatic.com/meet/bananaleavesatdawn_primary_546d211272a14d2c73edda82d2190762.jpg"
                         data-overlay="0.3">
                        <button class="btn btn-rounded btn-info">
                            <i class="fa fa-plus"></i>
                            <span>Follow</span>
                        </button>

                        <button class="btn btn-rounded btn-info">
                            <i class="fa fa-comment"></i>
                            <span>Message</span>
                        </button>
                    </div>

                    <div class="profile-cover__info">
                        <ul class="nav">
                            <li><strong>26</strong>Projects</li>
                            <li><strong>33</strong>Followers</li>
                            <li><strong>136</strong>Following</li>
                        </ul>
                    </div>
                </div>
                <!-- Panel End -->

                <!-- Panel Start -->
                <!-- Panel End -->
                @if(Session::get('messagesError'))
                    <div class="col-md-12">
                        <div
                            style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; padding: .75rem 1.25rem;">
                            {{Session::get('messagesError')}}
                        </div>
                    </div>
                @endif

                @if(Session::get('messagesSuccess'))
                    <div class="col-md-12">
                        <div
                            style="color: #265725;font-weight: 800; background-color: #d1ecf1; border-color: #bee5eb; padding: .75rem 1.25rem;">
                            {{Session::get('messagesSuccess')}}
                        </div>
                    </div>
                @endif
                <br>
                <form action="{{ route('updateAdmin', Session::get('admin_id')) }}" method="post" name="myForm" onsubmit="return validateForm()">
                    @csrf
                    @foreach(Session::get('data') as $data)
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-content">
                                    <div class="form-group row">
                                        <span class="label-text col-md-2 col-form-label text-md-right">Email</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                </div>

                                                <input type="text" name="email" class="form-control"
                                                       value="{{$data->email}}" disabled>
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group row">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">First Name</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                </div>

                                                <input type="text" name="firstname" class="form-control"
                                                       value="{{$data->firstname}}">
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="form-group row">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">Last Name</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                </div>

                                                <input type="text" name="lastname" class="form-control"
                                                       value="{{$data->lastname}}">
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="form-group row">
                                        <span class="label-text col-md-2 col-form-label text-md-right">Phone</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                                </div>

                                                <input type="text" name="phone" class="form-control"
                                                       value="{{$data->phone}}">
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="form-group row">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">Address</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                </div>

                                                <input type="text" name="address" class="form-control"
                                                       value="{{$data->address}}">
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="form-group row">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">Birthday</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-birthday-cake"></i>
                                                </span>
                                                </div>

                                                <input type="date" name="birthday" class="form-control"
                                                       value="{{$data->birthday}}">
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>

                                    <hr>


                                    <div class="form-group row">
                                        <span class="label-text col-md-2 col-form-label text-md-right">Gender</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-venus-double"></i>
                                                </span>
                                                </div>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="0"
                                                            @if ($data->gender == '0') selected="selected" @endif>Nam
                                                    </option>
                                                    <option value="1"
                                                            @if ($data->gender == '1') selected="selected" @endif>Nu
                                                    </option>
                                                    <option value="2"
                                                            @if ($data->gender == '2') selected="selected" @endif>Khac
                                                    </option>
                                                </select>
                                            </div>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group row" aria-required="true">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">Your Password</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                </div>

                                                <input type="password" name="password" class="form-control" required>
                                            </div>

                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group row" aria-required="true">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">New Password</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                </div>

                                                <input type="password" name="newPassword" class="form-control" required>
                                            </div>
                                            <span style="color: red; margin-left: 56px" id="errorNewPassword"></span>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group row" aria-required="true">
                                            <span
                                                class="label-text col-md-2 col-form-label text-md-right">Password Confirmation</span>
                                        <div class="col-md-10">
                                            <!-- Input Group Start -->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                </div>

                                                <input type="password" name="confipassword" class="form-control" >
                                            </div>
                                            <span style="color: red; margin-left: 56px" id="confipassword"></span>
                                            <!-- Input Group End -->
                                        </div>
                                    </div>

                                    <div class="panel-content">
                                        <button class="btn btn-block btn-info" value="{{Session::get('admin_id')}}">
                                            Save
                                        </button>
                                    </div>
{{--                                    <div class="panel-content">--}}
{{--                                        <a href="#vCenteredModal" class="btn btn-block btn-info" data-toggle="modal">Change--}}
{{--                                            Password</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </form>
                <!-- Panel End -->
            </div>


{{--            <div id="vCenteredModal" class="modal fade">--}}
{{--                <div class="modal-dialog modal-dialog-centered">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h5 class="modal-title">Modal Title</h5>--}}

{{--                            <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                        </div>--}}


{{--                            <div style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; padding: .65rem 1.10rem; margin-top: 20px; width: 70%; margin-left: 40px">--}}
{{--                                gref--}}
{{--                            </div>--}}


{{--                        <div class="modal-body">--}}
{{--                            <div class="panel-content">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>--}}
{{--                                        <span class="label-text">Password</span>--}}
{{--                                        <input type="password" name="email" placeholder="Enter Your Password..."--}}
{{--                                               class="form-control" id="dataPass">--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label>--}}
{{--                                        <span class="label-text">New Password</span>--}}
{{--                                        <input type="password" name="password" placeholder="Enter New Password..."--}}
{{--                                               class="form-control" id="newPass">--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>--}}
{{--                                        <span class="label-text">Enter New Password</span>--}}
{{--                                        <input type="password" name="password" placeholder="Enter New Password..."--}}
{{--                                               class="form-control" id="confimPass">--}}
{{--                                        <span class="confim" style="color: red"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="modal-footer">--}}
{{--                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}

{{--                            <button type="button" class="btn btn-success" id="changePass" data-admin-id="{{Session::get('admin_id')}}">Save</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


            @foreach(Session::get('data') as $data)
                <div class="col-lg-4">
                    <!-- Panel Start -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">About Me</h3>
                        </div>

                        <div class="panel-content panel-about">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem odit esse quae, et
                                praesentium eligendi, corporis minima repudiandae similique voluptatum dolorem
                                temporibus doloremque.</p>

                            <table>
                                <tr>
                                    <th><i class="fas fa-briefcase"></i>Occupation</th>
                                    <td>UI/UX Designer</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-birthday-cake"></i>Date of Birth</th>
                                    <td>{{$data->birthday}}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-map-marker-alt"></i>Locatoin</th>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-mobile-alt"></i>Mobile No.</th>
                                    <td><a href="tel:7328397510" class="btn-link">{{$data->phone}}</a></td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-globe"></i>Website</th>
                                    <td><a href="mailto:example.com" class="btn-link">example.com</a></td>
                                </tr>
                            </table>
                        </div>

                        <div class="panel-social">
                            <ul class="nav">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Panel End -->

                    <!-- Panel Start -->
                    <div class="panel">
                        <div class="weather--panel text-white bg-blue">
                            <div class="weather--title">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>Dhaka, Bangladesh</span>
                            </div>

                            <div class="weather--info">
                                <i class="wi wi-rain-wind"></i>
                                <span>33°C</span>
                            </div>
                        </div>
                    </div>
                    <!-- Panel End -->

                    <!-- Panel Start -->
                    <div class="panel">
                        <div class="weather--panel text-white bg-orange">
                            <div class="weather--title">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>Melbourne, Autoria</span>
                            </div>

                            <div class="weather--info">
                                <i class="wi wi-hot"></i>
                                <span>35°C</span>
                            </div>
                        </div>
                    </div>
                    <!-- Panel End -->
                </div>
            @endforeach
        </div>
    </section>
    <!-- Main Content End -->

    <!-- Main Footer Start -->
    <footer class="main--footer main--footer-light">
        <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
    </footer>
    <!-- Main Footer End -->
</main>
<!-- Main Container End -->
</div>
<!-- Wrapper End -->

<!-- Scripts -->
@include('admin.content.jsdefault')
<script src="{{asset('admin/js/admin/changePasswordAdmin.js')}}"></script>

<!-- Page Level Scripts -->

</body>
</html>
