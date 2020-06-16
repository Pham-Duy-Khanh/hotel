
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
                            <h3 class="h3">{{Session::get('username')}}</h3>
                        </div>

                            <div class="profile-cover__action" data-bg-img="https://www.gstatic.com/meet/bananaleavesatdawn_primary_546d211272a14d2c73edda82d2190762.jpg" data-overlay="0.3">
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
                                <li><strong></strong></li>
                                <li><strong></strong></li>
                                <li><strong></strong></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Panel End -->

                    <!-- Panel Start -->
                    <!-- Panel End -->
                    @foreach(Session::get('data') as $data)
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Email</span>

                                    <div class="col-md-10">
                                        <input type="text" name="text" class="form-control" value="{{$data->email}}" disabled>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">First Name</span>

                                    <div class="col-md-10">
                                        <input type="text" name="text" class="form-control" value="{{$data->firstname}}">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Last Name</span>

                                    <div class="col-md-10">
                                        <input type="text" name="text" class="form-control" value="{{$data->lastname}}">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Phone</span>

                                    <div class="col-md-10">
                                        <input type="text" name="text" class="form-control" value="{{$data->phone}}">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Address</span>

                                    <div class="col-md-10">
                                        <input type="text" name="text" class="form-control" value="{{$data->address}}">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Birthday</span>

                                    <div class="col-md-10">
                                        <input type="date" name="text" class="form-control" value="{{$data->birthday}}">
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Gender</span>

                                    <div class="col-md-10">
                                        <input type="text" name="text" class="form-control" value="{{$data->gender}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Panel End -->
                </div>

                @foreach(Session::get('data') as $data)
                <div class="col-lg-4">
                    <!-- Panel Start -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">About Me</h3>
                        </div>

                        <div class="panel-content panel-about">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem odit esse quae, et praesentium eligendi, corporis minima repudiandae similique voluptatum dolorem temporibus doloremque.</p>

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
@include('admin.content.jsdefault');

<!-- Page Level Scripts -->

</body>
</html>
