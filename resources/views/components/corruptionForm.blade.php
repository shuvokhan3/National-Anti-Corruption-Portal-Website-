<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card animated fadeIn">
                <div class="card-header bg-primary text-white">
                    <h4>Report</h4>
                </div>
                <div class="card-body" id="update-form">


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
                                <option value="High">High</option>
                                <option value="Low">Low</option>
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
                            <button onclick="submit()" type="submit" class="btn btn-primary">Submit Report</button>
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

<script>



    async function submit(){
        let reportTitle = document.getElementById('reportTitle').value;
        let description = document.getElementById('description').value;
        let range = document.getElementById('range').value;
        let corruptionImg = document.getElementById('corruptionImg').files[0];
        let corruptionVideo = document.getElementById('corruptionVideo').files[0];



        if(reportTitle.length === 0){
            errorToast('Report Field Must Be Required !');
        }
        else if(description.length === 0){
            errorToast('Description Field Must Be Required !');
        }
        else if(range.length === 0){
            errorToast('Range Field Must Be Required !');
        }
        else if(!corruptionImg){
            errorToast('Image Must Be Required !');
        }else if(!corruptionVideo){
            errorToast('Video Must Be Required !');
        }else{


            let formData = new FormData();

            formData.append('title',reportTitle)
            formData.append('description',description)
            formData.append('severity',range)
            formData.append('img',corruptionImg)
            formData.append('video',corruptionVideo)


            const config = {
                headers:{
                    'content-type':'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post('/createReport',formData,config);
            hideLoader();

            if(res.status === 201){
                successToast('Form Submit Successfully !');
            }else{
                errorToast("Request Fail !");
            }
        }

    }



</script>
