<div class="container mt-5">
    <h1 class="mb-4 text-center">Admin Reports</h1>

    <div class="row mb-3">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Search reports...">
        </div>
        <div class="col-md-3">
            <select class="form-select">
                <option value="">Filter by Status</option>
                <option value="under_review">Under Review</option>
                <option value="resolved">Resolved</option>
                <option value="pending">Pending</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select">
                <option value="">Filter by Severity</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tableData">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Severity</th>
                <th>Date Submitted</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id="tableList">

            <tr id="row_001">
                <td>001</td>
                <td>Bangladesh in Land Office</td>
                <td>Corruption in Bangladesh has b.</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_001" id="reportStatus_001" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success">Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-danger">High</span></td>
                <td>2025-03-01</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="001">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_002">
                <td>002</td>
                <td>Misuse of Funds</td>
                <td>Corruption in Bangladesh has been</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_002" id="reportStatus_002" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="002">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_003">
                <td>003</td>
                <td>Misuse of Funds</td>
                <td>Corruption in Bangladesh has been </td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_003" id="reportStatus_003" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="003">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_004">
                <td>004</td>
                <td>Misuse of Funds</td>
                <td>Corruption in Bangladesh has been a.. </td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_004" id="reportStatus_004" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="004">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_005">
                <td>005</td>
                <td>Misuse of Funds</td>
                <td>Corruption in Bangladesh has been a</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_005" id="reportStatus_005" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="005">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_006">
                <td>006</td>
                <td>Misuse of Funds</td>
                <td>Alleged misuse of public funds in a</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_006" id="reportStatus_006" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="006">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_007">
                <td>007</td>
                <td>Misuse of Funds</td>
                <td>Alleged misuse of public fun.</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_007" id="reportStatus_007" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="007">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_008">
                <td>008</td>
                <td>Misuse of Funds</td>
                <td>Alleged misuse of public </td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_008" id="reportStatus_008" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="008">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_009">
                <td>009</td>
                <td>Misuse of Funds</td>
                <td>Alleged misuse of public.</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_009" id="reportStatus_009" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="009">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_010">
                <td>010</td>
                <td>Misuse of Funds</td>
                <td>Alleged misuse of public fu.</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_010" id="reportStatus_010" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="010">Update</button>
                    </div>
                </td>
            </tr>
            <tr id="row_011">
                <td>011</td>
                <td>Misuse of Funds</td>
                <td>Alleged misuse of public funds .</td>
                <td>
                    <div class="status-selector">
                        <select name="reportStatus_011" id="reportStatus_011" class="form-select form-select-sm status-dropdown">
                            <option value="0" data-badge="warning">Under Review</option>
                            <option value="1" data-badge="success" selected>Resolved</option>
                        </select>
                    </div>
                </td>
                <td><span class="badge bg-warning">Medium</span></td>
                <td>2025-02-20</td>
                <td>
                    <div class="d-flex">
                        <a href="{{asset('/adminReportsDetails')}}" class="btn btn-primary btn-sm me-2">Details</a>
                        <button class="btn btn-success btn-sm update-btn" data-row-id="011">Update</button>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <!-- Toast notification for status updates -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="statusToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Status Update</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Status updated successfully!
            </div>
        </div>
    </div>

</div>

<style>
    /* Custom styling for status selectors */
    .status-selector select {
        padding: 0.375rem 2rem 0.375rem 0.75rem;
        border-radius: 4px;
        border: 1px solid #ced4da;
        font-size: 0.875rem;
        font-weight: 500;
        background-position: right 0.5rem center;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23212529' viewBox='0 0 16 16'%3E%3Cpath d='M2 5l6 6 6-6H2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        min-width: 140px;
    }

    .status-selector select:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        outline: 0;
    }

    /* Status colors */
    .status-dropdown option[data-badge="warning"] {
        color: #212529;
        background-color: #fff;
        font-weight: 500;
    }

    .status-dropdown option[data-badge="success"] {
        color: #212529;
        background-color: #fff;
        font-weight: 500;
    }

    .status-warning {
        border-left: 4px solid #ffc107 !important;
        background-color: #fff8e5 !important;
    }

    .status-success {
        border-left: 4px solid #198754 !important;
        background-color: #f0fff4 !important;
    }

    /* Row highlight for updates */
    .row-updated {
        animation: highlightRow 2s ease-in-out;
    }

    @keyframes highlightRow {
        0% { background-color: #d1e7dd; }
        100% { background-color: transparent; }
    }

    /* Update button styling */
    .update-btn {
        transition: all 0.3s ease;
    }

    .update-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .update-btn:active {
        transform: translateY(0);
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all status dropdowns
        const statusDropdowns = document.querySelectorAll('.status-dropdown');

        // Initialize each dropdown with appropriate styling based on current value
        statusDropdowns.forEach(dropdown => {
            // Set initial style based on selected option
            const selectedOption = dropdown.options[dropdown.selectedIndex];
            const badgeType = selectedOption.getAttribute('data-badge');
            dropdown.classList.add('status-' + badgeType);

            // Add change event listener
            dropdown.addEventListener('change', function() {
                // Remove all status classes
                this.classList.remove('status-warning', 'status-success');

                // Add appropriate class based on selected option
                const badgeType = this.options[this.selectedIndex].getAttribute('data-badge');
                this.classList.add('status-' + badgeType);

                // Highlight the corresponding update button
                const rowId = this.id.split('_')[1];
                const updateBtn = document.querySelector(`.update-btn[data-row-id="${rowId}"]`);
                updateBtn.classList.add('btn-pulse');
            });
        });

        // Get all update buttons
        const updateButtons = document.querySelectorAll('.update-btn');

        // Add click event listeners to update buttons
        updateButtons.forEach(button => {
            button.addEventListener('click', function() {
                const rowId = this.getAttribute('data-row-id');
                const statusDropdown = document.getElementById(`reportStatus_${rowId}`);
                const statusValue = statusDropdown.value;
                const statusText = statusDropdown.options[statusDropdown.selectedIndex].text;

                // Here you would add code to send the update to your backend
                console.log(`Updating row ${rowId} with status: ${statusValue} (${statusText})`);

                // Show a visual confirmation to the user
                const row = document.getElementById(`row_${rowId}`);
                row.classList.add('row-updated');

                // Remove the highlight after the animation completes
                setTimeout(() => {
                    row.classList.remove('row-updated');
                }, 2000);

                // Show toast notification
                const toast = new bootstrap.Toast(document.getElementById('statusToast'));
                toast.show();
            });
        });
    });
</script>
