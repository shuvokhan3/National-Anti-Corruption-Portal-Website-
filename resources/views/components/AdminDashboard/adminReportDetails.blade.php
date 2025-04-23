<!-- Modal -->
<div class="modal fade" id="reportDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container mt-5">

            <div id="reportDetails">

            </div>
        </div>

    </div>
</div>

<script>
    async function displayInfo(id) {
        let val = id;

        showLoader();

        try {
            let res = await axios.post('/singleAdminReport', {
                id: val
            });
            hideLoader();
            console.log(res);

            // Create the HTML content for the modal with a close button
            const reportDetailsHTML = `
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Report Details</h5>
          <button type="button" class="close closeModal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-header">
              Report ID: <span id="reportId">${res.data.id}</span>
            </div>
            <div class="card-body">
              <h5 class="card-title" id="reportTitle">${res.data.title}</h5>
              <p class="card-text" id="reportDescription">${res.data.description}</p>
              <p><strong>Status:</strong> <span id="reportStatus">${res.data.status === 0 ? 'Pending' : 'Resolved'}</span></p>
              <p><strong>Severity:</strong> <span id="reportSeverity">${res.data.severity}</span></p>
              <p><strong>Date Submitted:</strong> <span id="reportDate">${res.data.created_at}</span></p>
              <p><strong>Last Updated:</strong> <span id="reportUpdated">${res.data.updated_at}</span></p>
              <p><strong>User ID:</strong> <span id="reportUserId">${res.data.user_id}</span></p>
            </div>
            <div class="card-footer">
              <h5>Attached Evidence:</h5>
              ${res.data.image_path ? `<img id="reportImage" src="${res.data.image_path}" alt="Report Image" class="img-fluid mt-2">` : '<p>No image attached</p>'}
              ${res.data.video_path ? `
                <div class="mt-3">
                  <h6>Video:</h6>
                  <video id="reportVideo" controls class="w-100" preload="auto">
                    <source src="${res.data.video_path}" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>` : '<p>No video attached</p>'}
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary closeModal">Close</button>
        </div>
      </div>
    `;

            // Insert the HTML into the modal
            document.getElementById('reportDetails').innerHTML = reportDetailsHTML;

            // Ensure video loads properly after DOM update
            if (res.data.video_path) {
                setTimeout(() => {
                    const videoElement = document.getElementById('reportVideo');
                    if (videoElement) {
                        videoElement.load();
                    }
                }, 300);
            }

            // Add event listeners to close buttons
            document.querySelectorAll('.closeModal').forEach(button => {
                button.addEventListener('click', () => {
                    $('#reportDetailsModal').modal('hide');
                });
            });

        } catch (error) {
            hideLoader();
            console.error("Error fetching report details:", error);
            document.getElementById('reportDetails').innerHTML = `
      <div class="alert alert-danger">
        Error loading report details. Please try again.
      </div>
    `;
        }
    }
</script>
