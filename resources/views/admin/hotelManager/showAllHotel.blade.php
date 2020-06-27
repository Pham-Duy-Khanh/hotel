@include('admin.content.header')
    <!-- Sidebar End -->

    <!-- Main Container Start -->
    <main class="main--container">

        <!-- Main Content Start -->
        <section class="main--content">
            <div class="panel" style="margin-left: 700px; background: red;">
                <a href="{{route('createNewHotel')}}" class="btn btn-rounded btn-block btn-success">Create New Hotel</a>
            </div>
            <div class="panel">
                <!-- Records Header Start -->
                <div class="records--header">
                    <div class="title fa-shopping-bag">
                        <h3 class="h3">General Hotel</h3>
                        <p>Found Total {{count(Session::get('data'))}} Hotel</p>
                    </div>

                    <div class="actions">
                        <form action="#" class="search">
                            <input type="text" class="form-control" placeholder="Order ID or Customer Name..." required>
                            <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Records Header End -->
            </div>

            @if(Session::get('messageHotel'))
                <div class="col-md-12">
                    <div
                        style="color: #265725;font-weight: 800; background-color: #d1ecf1; border-color: #bee5eb; padding: .75rem 1.25rem;">
                        {{Session::get('messageHotel')}}
                    </div>
                </div>
            @endif
            <br>

            <div class="panel">
                <!-- Records List Start -->
                <div class="records--list" data-title="Orders Hotel">
                    <table id="recordsListView">
                        <thead>
                        <tr>
                            <th>Hotel ID</th>
                            <th>Hotel Image</th>
                            <th>Creator</th>
                            <th>Hotel Name</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Wards</th>
                            <th>Create At</th>
                            <th>Status</th>
                            <th class="not-sortable">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach(Session::get('data') as $data)
                        <tr data-function="page">
                            <td>
                                <a href="#" class="btn-link">#{{$data->hotel_id}}</a>
                            </td>
                            <td>
                                <img src="{{asset('public/images/item_images/'.$data->avatar_hotel)}}">
                            </td>
                            <td>
                                <a href="#" class="btn-link">{{$data->firstname}} {{$data->lastname}}</a>
                            </td>
                            <td>{{$data->hotel_name}}</td>
                            <td>{{$data->name_tp}}</td>
                            <td>{{$data->name_qh}}</td>
                            <td>{{$data->name_xa}}</td>
                            <td>{{ \Carbon\Carbon::parse($data->create_at)->format('d/m/Y')}}</td>

                            @if($data->status == "1")
                                <td>
                                    <span class="label label-success">Active</span>
                                </td>
                            @else
                                <td>
                                    <span class="label label-danger">No Active</span>
                                </td>
                            @endif
                            <td>
                                <div class="dropleft">
                                    <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Edit</a>
                                        <a href="#" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Records List End -->
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

<!-- Page Level Scripts -->

</body>
</html>
