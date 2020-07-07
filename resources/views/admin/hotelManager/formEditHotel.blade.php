@include('admin.content.header')
<link rel="stylesheet" href="{{asset('admin/css/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/summernote-bs4-overrides.css')}}">
<!-- Sidebar End -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Main Container Start -->
<main class="main--container">
    <section class="main--content">
        <div class="row gutter-20">
            <div class="col-md-12">
                @foreach(Session::get('data') as $value)
                <form>
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
                                    <input type="text" name="text" class="form-control" id="hotelName" value="{{$value->hotel_name}}">
                                </div>
                            </div>
                            <!-- Form Group End -->

                            <hr>

                            <input value="{{Session::get('admin_id')}}" id="admin_id" hidden>


                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">City Option</span>
                                <div class="col-md-10">
                                    <select name="select" class="form-control dataCity" id="matp">
                                        <option value="">--City--</option>
                                        @foreach(Session::get('city') as $city)
                                            <option value="{{$city->matp}}" {{ old('matp', $city->matp) == $value->matp ? 'selected' : ''  }} >{{$city->name_tp}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">District Option</span>
                                <div class="col-md-10">
                                    <select name="select" class="form-control dataDistrict" data-type="district"
                                            id="district">
                                        @foreach(Session::get('quanHuyen') as $quanHuyen)
                                            <option value="{{$quanHuyen->maqh}}" {{ old('maqh', $quanHuyen->maqh) == $value->maqh ? 'selected' : ''  }} >{{$quanHuyen->name_qh}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group End -->
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Commune Option</span>
                                <div class="col-md-10">
                                    <select name="select" class="form-control commune" id="commune">
                                        @foreach(Session::get('xaPhuong') as $xaPhuong)
                                            <option value="{{$xaPhuong->xaid}}" {{ old('xaid', $xaPhuong->xaid) == $value->xaid ? 'selected' : ''  }} >{{$xaPhuong->name_xa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Dich vu</span>

                                <div class="col-md-10">
                                    <div class="col-md-10">
                                        @foreach(Session::get('services') as $services)
                                        @foreach(Session::get('sevice') as $services1)
                                            @if($services->services_id == $services1)
                                            <label class="form-check">
                                                <input type="checkbox" name="location[]" value="{{$services->services_id}}"
                                                       class="form-check-input" checked>
                                                <span class="form-check-label">{{$services->name_services}}</span>
                                            </label>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Description</span>

                                <div class="col-md-10">
                                    <textarea name="mail_message" class="form-control" data-trigger="summernote"
                                              id="description">{{$value->describe}}</textarea>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Image Hotel</span>

                                <div class="col-md-10">
                                    <input type="hidden" autocomplete="OFF" name="item_images" id="item_images"
                                           placeholder="" class="form-control input-sm" value="{{Session::get('imageData')}}" required/>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#myModal">
                                        <i class="fa fa-image"></i> Upload Images Hotel
                                    </button>
                                    <br>
                                    <div id="img" style="color: red;"></div>
                                </div>
                            </div>
                            <hr>
                            <hr>


                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right"></span>

                                <div class="col-md-10">
                                    <button class="btn btn-block btn-info" id="saveHotel">Save Hotel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                @endforeach
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


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Images</h4>
            </div>
            <div class="modal-body">
                <form action="" class="dropzone" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if(Session::get('imageHotel'))
                        @foreach(Session::get('imageHotel') as $img)
                        <img src="{{'../../../public/images/item_images/'.$img->name_images_hotel}}" style="width: 150px; height: 150px; margin-left: 35px"><span style="margin-left: 10px"></span>
                        @endforeach
                    @endif
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- Scripts -->
@include('admin.content.jsdefault')
<script src="{{asset('admin/js/admin/loadAddress.js')}}"></script>
<script src="{{asset('admin/js/admin/addHotel.js')}}"></script>
<script src="{{asset('admin/js/summernote-bs4.min.js')}}"></script>
<script src="{{asset('admin/js/summernote-bs4-init.js')}}"></script>
{{--<script src="{{asset('admin/js/admin/loadServices.js')}}"></script>--}}

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Dropzone.autoDiscover = false;
    var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
    // imageDataArray variable to set value in crud form
    var imageDataArray = new Array;
    // fileList variable to store current files index and name
    var fileList = new Array;
    var i = 0;

    $(function(){

        uploader = new Dropzone(".dropzone",{
            url: "{{url('item/image/upload')}}",
            paramName : "file",
            uploadMultiple :false,
            acceptedFiles : "image/*,video/*,audio/*",
            addRemoveLinks: true,
            forceFallback: false,
            maxFilesize: 256, // Set the maximum file size to 256 MB
            parallelUploads: 100,

        });//end drop zone

        uploader.on("success", function(file,response) {
            imageDataArray.push(response)
            fileList[i] = {
                "serverFileName": response,
                "fileName": file.name,
                "fileId": i
            };
            i += 1;
            $('#item_images').val(imageDataArray);
        });

        uploader.on("removedfile", function(file) {
            var rmvFile = "";
            for (var f = 0; f < fileList.length; f++) {

                if (fileList[f].fileName == file.name) {

                    // remove file from original array by database image name
                    imageDataArray.splice(imageDataArray.indexOf(fileList[f].serverFileName), 1);
                    $('#item_images').val(imageDataArray);

                    // get removed database file name
                    rmvFile = fileList[f].serverFileName;

                    // get request to remove the uploaded file from server
                    $.get( "{{url('item/image/delete')}}", { file: rmvFile } )
                        .done(function( data ) {
                            //console.log(data)
                        });

                    // reset imageDataArray variable to set value in crud form

                    console.log(imageDataArray)
                }
            }

        });


    });
</script>

<!-- Page Level Scripts -->

</body>
</html>
