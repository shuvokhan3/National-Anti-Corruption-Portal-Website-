<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card animated fadeIn">
                <div class="card-header bg-primary text-white">
                    <h4>Report</h4>
                </div>
                <div class="card-body">


                    <div class="col-12 p-1">

                        <!--Title -->
                        <div class="form-group mb-3">
                            <label for="reportTitle">Corruption Title</label>
                            <input type="text" class="form-control" id="reportTitle" placeholder="Type title">
                        </div>

                        <!--Description-->
                        <div class="form-group mb-3">
                            <label for="description">Corruption Description</label>
                            <div class="rich-text-editor">
                                <textarea class="form-control" id="description" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Corruption Range -->
                        <div class="mb-3">
                            <label class="form-label">Range</label>
                            <select class="form-select" name="Curruption Range" id="range">
                                <option value="1">High</option>
                                <option value="2">Low</option>
                            </select>
                        </div>

                        <!--image upload form-->
                        <br/>
                        <img class="w-15" id="newImg" src="{{asset('assets/img/default.jpg')}}"/>
                        <br/>
                        <label class="form-label">Image</label>
                        <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="corruptionImg">

                        <!-- Video Preview and Upload -->
                        <div class="mb-3" >
                            <video id="videoPreview" class="w-15 mt-5" controls style="display:none; max-width: 300px;"></video>
                            <br/>
                            <label class="form-label">Video</label>
                            <input type="file" class="form-control" id="corruptionVideo" accept="video/*">
                        </div>


                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary">Submit Report</button>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript for video preview
    document.getElementById('corruptionVideo').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const videoElement = document.getElementById('videoPreview');
            const videoURL = URL.createObjectURL(file);

            videoElement.src = videoURL;
            videoElement.style.display = 'block';

            // Clean up the URL object when no longer needed
            videoElement.onload = function() {
                URL.revokeObjectURL(videoURL);
            };
        }
    });
</script>
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
