<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card animated fadeIn">
                <div class="card-header bg-primary text-white">
                    <h4>Report</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="reportTitle">Corruption Title</label>
                            <input type="text" class="form-control" id="reportTitle" placeholder="Type title">
                        </div>

                        <div class="form-group mb-3">
                            <label for="imageUpload">Image Upload</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="imageUpload">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="videoUpload">Video Upload</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="videoUpload">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Corruption Description</label>
                            <div class="rich-text-editor">
                                <textarea class="form-control" id="description" rows="5"></textarea>
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

                        <button type="submit" class="btn btn-primary">Submit Report</button>
                    </form>
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
