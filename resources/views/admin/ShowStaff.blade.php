@include("admin.content.header")
    <!-- Sidebar End -->

    <!-- Main Container Start -->
    <main class="main--container">

        <!-- Main Content Start -->
        <section class="main--content">
            <div class="col-md-4">

                <!-- Panel Start -->
                <div class="panel" style="margin-left: 700px; background: red; width: 80%">
                    <a href="#formInModal" class="btn btn-rounded btn-block btn-success" data-toggle="modal">Add Admin</a>
                </div>

                @if (session('messages'))
                    <div class="callout callout-info" style="color: green">
                        {{ session('messages') }}
                    </div>
                @endif

                <div id="showText" style="color: green; font-size: 20px"></div>
                <!-- Panel End -->

                <!-- Modal Start -->
                <div id="formInModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal Form</h5>

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body pt-4">
                                <div id="text" style="color: red;"></div><br>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">First Name</span>
                                        <input type="text" name="email" placeholder="Enter First Name..." class="form-control" id="firestname">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Last Name</span>
                                        <input type="text" name="email" placeholder="Enter Last Name..." class="form-control" id="lastname">
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Email Address</span>
                                        <input type="email" name="email" placeholder="Enter Your Email..." class="form-control" id="email">
                                    </label>
                                </div>

                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right py-0">Gender</span>

                                    <div class="col-md-10">
                                        <label class="form-radio">
                                            <input type="radio" name="radio01" value="1" class="form-radio-input gender" checked>
                                            <span class="form-radio-label">Nam</span>
                                        </label>

                                        <label class="form-radio">
                                            <input type="radio" name="radio01" value="2" class="form-radio-input gender">
                                            <span class="form-radio-label">Nu</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Password</span>
                                        <input type="password" name="password" placeholder="Enter Your Password..." class="form-control" id="pass">
                                    </label>
                                </div>

                                <input type="submit" value="Submit" class="btn btn-sm btn-rounded btn-success" id="addAdmin">
                                <button type="button" class="btn btn-sm btn-rounded btn-outline-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End -->
            </div>

            <div id="myDIV" style="color:green;">
            </div>
            <div class="panel">
                <!-- Records List Start -->
                <div class="records--list" data-title="Product Listing">
                    <table id="recordsListView">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Birthday</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th class="not-sortable">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Session::get('data') as $data)
                            <tr>
                                <td>
                                    <a href="#" class="btn-link">{{$data->admin_id}}</a>
                                </td>
                                <td>
                                    <a href="#" class="btn-link">
                                        {{$data->name}} {{$data->username}}
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="btn-link">{{$data->email}}</a>
                                </td>
                                <td>
                                    <a href="#" class="btn-link">{{$data->phone}}</a>
                                </td>
                                <td>
                                    <span class="label label-success">{{$data->address}}</span>
                                </td>
                                <td>
                                    <span class="label label-success">{{$data->birthday}}</span>
                                </td>
                                @if($data->gender == "0")
                                    <td>
                                        <a href="#" class="btn-link">Nam</a>
                                    </td>
                                @elseif($data->gender == "1")
                                    <td>
                                        <a href="#" class="btn-link">Nu</a>
                                    </td>
                                @else
                                    <td>
                                        <a href="#" class="btn-link">Khac</a>
                                    </td>
                                @endif
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
                                            <a href="{{ route('lockAccount', $data->admin_id) }}" class="dropdown-item">Lock account</a>
                                            <a href="{{ route('deleteAdmin', $data->admin_id) }}" class="dropdown-item" id="deleteAdmin">Delete</a>
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
@include("admin.content.jsdefault")
<script src="{{asset('admin/js/admin/addAdmin.js')}}"></script>
<!-- Page Level Scripts -->

</body>
</html>
