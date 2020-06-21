@include('admin.content.header')
    <!-- Sidebar End -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main Container Start -->
    <main class="main--container">
        <section class="main--content">
            <div class="row gutter-20">
                <div class="col-md-12">
                    <!-- Panel Start -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">New Hotels</h3>
                        </div>

                        <div class="panel-content">
                            <!-- Form Group Start -->
                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Hotels Name</span>

                                <div class="col-md-10">
                                    <input type="text" name="text" class="form-control">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <hr>




                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">City Option</span>
                                <div class="col-md-10">
                                    <select name="select" class="form-control dataCity" id="matp">
                                        <option value="">--City--</option>
                                        @foreach(Session::get('city') as $data)
                                        <option value="{{$data->matp}}">{{$data->name_tp}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">District Option</span>
                                <div class="col-md-10">
                                    <select name="select" class="form-control dataDistrict" data-type="district" id="district">
                                        <option value="">--District--</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group End -->
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Commune Option</span>
                                <div class="col-md-10">
                                    <select name="select" class="form-control commune" id="commune">
                                        <option value="">--Commune--</option>
                                    </select>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Dich vu</span>

                                <div class="col-md-10">
                                    <input type="text" name="text" class="form-control">
                                </div>
                            </div>
                            <hr>


                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Textarea</span>

                                <div class="col-md-10">
                                    <textarea name="textarea" class="form-control" placeholder="Text input area"></textarea>
                                </div>
                            </div>
                            <hr>




                        </div>
                    </div>
                    <!-- Panel End -->
                </div>
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
<script src="{{asset('admin/js/admin/loadAddress.js')}}"></script>

<!-- Page Level Scripts -->

</body>
</html>
