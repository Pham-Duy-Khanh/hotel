@include('admin.content.header');
    <!-- Sidebar End -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main Container Start -->
    <main class="main--container">
        <!-- Main Content Start -->
        <div id="basicModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal Title</h5>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <p style="color: green">Deleted Customer</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="okdelete">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="main--content">
            <div class="panel">
                <!-- Records List Start -->
                <div class="records--list" data-title="Customers">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
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
                                <a href="#" class="btn-link">{{$data->customer_id}}</a>
                            </td>
                            <td>
                                <a href="#" class="btn-link">
                                    {{$data->name}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn-link">{{$data->email}}</a>
                            </td>
                            <td>
                                <a href="#" class="btn-link">{{$data->phone}}</a>
                            </td>
                            <td>
                                <a href="#" class="btn-link">{{$data->address}}</a>
                            </td>
                            <td>
                                <a href="#" class="btn-link">{{$data->birthday}}</a>
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
                                        <a href="#" class="dropdown-item">Edit</a>
                                        <a class="dropdown-item delete_customer" data-customer-id="{{$data->customer_id}}">Delete</a>
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
<script src="{{asset('admin/js/admin/deleteCustomer.js')}}"></script>

<!-- Page Level Scripts -->

</body>
</html>
