<div class="container mt-5">
    <h1 class="mb-4 text-center">Report Details</h1>

    <div id="reportDetails">
        <div class="card">
            <div class="card-header">
                Report ID: <span id="reportId">Loading...</span>
            </div>
            <div class="card-body">
                <h5 class="card-title" id="reportTitle">Loading...</h5>
                <p class="card-text" id="reportDescription">Loading...</p>
                <p><strong>Status:</strong> <span id="reportStatus">Loading...</span></p>
                <p><strong>Severity:</strong> <span id="reportSeverity">Loading...</span></p>
                <p><strong>Date Submitted:</strong> <span id="reportDate">Loading...</span></p>
            </div>
            <div class="card-footer">
                <h5>Attached Evidence:</h5>
                <img id="reportImage"  src=" " alt="Report Image" class="img-fluid d-none">
                <video id="reportVideo" controls class="d-none w-100 mt-3">
                    <source src=" " type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<script>
    // Simulated data - replace this with a real API call
    const reports = {
        '001': {
            title: 'Bribery in Land Office',
            description: 'Reported bribery case involving land registration process.',
            status: 'Under Review',
            severity: 'High',
            date: '2025-03-01',
            image: 'path/to/image1.jpg',
            video: 'path/to/video1.mp4'
        },
        '002': {
            title: 'Misuse of Funds',
            description: 'Alleged misuse of public funds in a school project.',
            status: 'Resolved',
            severity: 'Medium',
            date: '2025-02-20',
            image: 'path/to/image2.jpg',
            video: 'path/to/video2.mp4'
        }
    };

    function loadReportDetails() {
        const urlParams = new URLSearchParams(window.location.search);
        const reportId = urlParams.get('id');

        if (reportId && reports[reportId]) {
            const report = reports[reportId];

            document.getElementById('reportId').textContent = reportId;
            document.getElementById('reportTitle').textContent = report.title;
            document.getElementById('reportDescription').textContent = report.description;
            document.getElementById('reportStatus').textContent = report.status;
            document.getElementById('reportSeverity').textContent = report.severity;
            document.getElementById('reportDate').textContent = report.date;

            // Show image and video if available
            if (report.image) {
                const img = document.getElementById('reportImage');
                img.src = report.image;
                img.classList.remove('d-none');
            }

            if (report.video) {
                const video = document.getElementById('reportVideo');
                video.querySelector('source').src = report.video;
                video.load();
                video.classList.remove('d-none');
            }
        } else {
            document.getElementById('reportDetails').innerHTML = '<div class="alert alert-danger">Report not found.</div>';
        }
    }

    window.onload = loadReportDetails;
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
