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

                            <div class="form-group row">
                                <span class="label-text col-md-2 col-form-label text-md-right">Textarea</span>

                                <div class="col-md-10">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-image"></i> Upload Images
                                    </button>
                                </div>
                            </div>




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
