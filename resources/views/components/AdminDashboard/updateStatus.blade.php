<div class="modal animated zoomIn" id="update-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class="mt-3 text-warning">Update Status !</h3>
                <p class="mb-3">Do You Sure Want To Update Status?</p>
                <p>Current Status: <span id="statusText"></span></p>
                <input id="updateID" style="display:none;"/>
                <input id="updateStatus" style="display:none;"/>
            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="delete-modal-close" class="btn bg-gradient-success mx-2" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="itemUpdate()" type="button" id="confirmUpdate" class="btn bg-gradient-danger">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>




    async function FillUpUpdateForm(id, statusValue) {
        document.getElementById('updateID').value = id;

        // Get the paragraph element where we'll display the status
        let statusText = document.getElementById('statusText');

        // Set the status text based on the value
        if (statusValue === "1") {
            statusText.textContent = "Resolved";
        } else {
            statusText.textContent = "Under Review";
        }
    }

    async function itemUpdate(){
        // Get values from hidden inputs
        const id = document.getElementById('updateID').value;
        const status = document.getElementById('updateStatus').value;

        showLoader();
        let res = await axios.post('/statusUpdate',{
            id : id,
            status: status
        });
        hideLoader();

        if(res.data === 1){
            successToast("Status Update Successfully!!");

        }
        else if(res.data === 0){
            errorToast("Report Status Under Review");
        }
        else{
            errorToast(res.data['message']);
        }

        console.log(res);
    }


</script>
