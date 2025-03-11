<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="card shadow">
                        <div class="text-center">
                            <h4 class="card-header bg-primary">Report</h4>
                        </div>

                        <div class="card-body">
                            <form method="post" action="Action.php">

                                <!--Post title-->
                                <div class="mb-3">
                                    <label class="form-label">Corruption Title</label>
                                    <input type="text" name="title" class="form-control" required placeholder="Type title"/>
                                </div>

                                <!--Image File Upload-->
                                <div class="mb-3">
                                    <label class="form-label">Image Upload</label>
                                    <input type="file" name="imageOne" class="form-control" required placeholder="Upload Image"/>
                                </div>

                                <!--Video Upload-->
                                <div class="mb-3">
                                    <label class="form-label">Video Upload</label>
                                    <input type="file" name="VideoOne" class="form-control" required placeholder="Upload Video"/>
                                </div>

                                <!--Post description-->
                                <div class="mb-3">
                                    <label class="form-label">Corruption Description</label>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <textarea name="description" id="classic-editor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Corruption Range -->
                                <div class="mb-3">
                                    <label class="form-label">Range</label>
                                    <select class="form-select" name="Curruption Range">
                                        <option value="1">High</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Low</option>
                                    </select>
                                </div>

                                <div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1 text-center">
                                            Submit Corruption Information
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

<script>
    ClassicEditor.create(document.querySelector('#classic-editor')).catch(error => {
        console.error(error);
    });
</script>

<style>
    .main-content {
        padding: 20px;
    }
    .card {
        border-radius: 10px;
    }
</style>
