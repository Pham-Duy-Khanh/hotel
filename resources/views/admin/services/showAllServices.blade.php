@include('admin.content.header')
    <!-- Sidebar End -->

    <!-- Main Container Start -->
    <main class="main--container">
        <!-- Main Content Start -->
        <section class="main--content">
            <div class="panel" style="margin-left: 750px; background: red; width: 20%">
                <a href="#vCenteredModal" class="btn btn-rounded btn-block btn-success" data-toggle="modal">Add Services</a>
            </div>

            @if(Session::get('messagesService'))
                <div class="col-md-12">
                    <div
                        style="color: #265725;font-weight: 800; background-color: #d1ecf1; border-color: #bee5eb; padding: .75rem 1.25rem;">
                        {{Session::get('messagesService')}}
                    </div>
                </div>
            @endif
            <br>

            <div class="panel">
                <!-- Records List Start -->
                <div class="records--list" data-title="Orders Listing">
                    <table id="recordsListView">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Describe</th>
                            <th class="not-sortable">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Session::get('data') as $data)
                        <tr>
                            <td>
                                <a href="#" class="btn-link">#{{$data->services_id}}</a>
                            </td>
                            <td>
                                <a href="#" class="btn-link">{{$data->name_services}}</a>
                            </td>
                            <td>{{$data->describe}}</td>
                            <td>
                                <div class="dropleft">
                                    <a href="#" class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                    <div class="dropdown-menu">
{{--                                        <a href="#" class="dropdown-item">Edit</a>--}}
                                        <a href="{{route('deleteServices', $data->services_id) }}" class="dropdown-item">Delete</a>
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

<div id="vCenteredModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Services</h5>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="{{route('addServices')}}" method="GET">
                <div class="modal-body">
                    <div class="modal-body pt-4">
                        <div class="form-group">
                            <label>
                                <span class="label-text">Name Services</span>
                                <input type="text" name="name" placeholder="Enter Your Name..." class="form-control" id="name" required>
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <span class="label-text">description</span>
                                <textarea class="form-control" id="description" placeholder="Enter Your Description..." name="description" required></textarea>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-success" id="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Wrapper End -->

<!-- Scripts -->
@include('admin.content.jsdefault')
<script src="{{asset('admin/js/admin/checkValidateServices.js')}}"></script>

<!-- Page Level Scripts -->

</body>
</html>
