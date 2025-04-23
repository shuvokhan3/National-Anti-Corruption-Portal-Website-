<div class="container mt-5">
    <h1 class="mb-4 text-center">Admin Reports</h1>

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


            </tbody>

        </table>
    </div>

</div>



<script>


    getList();


    async function getList() {

        showLoader();
        let res = await axios.get('/adminReports');
        hideLoader();

        let tableList = $("#tableList");
        let tableData = $("#tableData");

        // Destroy existing DataTable if it exists
        if ($.fn.DataTable.isDataTable('#tableData')) {
            tableData.DataTable().destroy();
        }

        // Clear table body
        tableList.empty();

        // Append all rows at once
        res.data.forEach(function (item, index) {

            // Truncate title to first 5-6 words
            let truncatedTitle = item['title'].split(' ').slice(0, 6).join(' ');
            if (item['title'].split(' ').length > 6) {
                truncatedTitle += '...';
            }

            // Truncate description to first 5-6 words
            let truncatedDesc = item['description'].split(' ').slice(0, 6).join(' ');
            if (item['description'].split(' ').length > 6) {
                truncatedDesc += '...';
            }

            let row = `<tr id="row_${item['id']}">
            <td>${index + 1}</td>
            <td>${truncatedTitle}</td>
            <td>${truncatedDesc}</td>
            <td>
                <div class="status-selector">
                    <select name="reportStatus_${item['id']}" id="reportStatus_${item['id']}" class="form-select form-select-sm status-dropdown">
                        <option value="0" data-badge="warning">Under Review</option>
                        <option value="1" data-badge="success">Resolved</option>
                    </select>
                </div>
            </td>
            <td><span class="badge bg-danger">${item['severity']}</span></td>
            <td>${item['created_at']}</td>
            <td>
                <div class="d-flex">
                    <button data-id="${item['id']}"  class="btn detailBtn btn-primary btn-sm me-2" >Details</button>
                    <button data-id="${item['id']}" data-row-id="${item['id']}" class="btn updateBtn btn-success btn-sm update-btn">Update</button>
                </div>
            </td>
        </tr>`;

            tableList.append(row);
        });

        // Attach click event handlers to detail buttons
        $('.detailBtn').on('click', async function() {
            let id = $(this).data('id');
            await displayInfo(id);
            $("#reportDetailsModal").modal('show');
        });

        // Initialize DataTable ONCE after appending all rows
        new DataTable('#tableData', {
            order: [[0, 'asc']],
            lengthMenu: [5, 10, 15, 20, 30]
        });
    }

</script>
