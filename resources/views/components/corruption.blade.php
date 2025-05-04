<div class="container mt-5">
    <h1 class="mb-4 text-center">Corruption Reports</h1>

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


    getListForUser();

    async function getListForUser() {

        showLoader();
        let res = await axios.get('/reportsFeeds');
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

            // Determine badge color for severity
            let severityClass = '';
            if (item['severity'] === "1" || item['severity'] === "High") {
                severityClass = 'bg-danger';  // Red for High
            } else if (item['severity'] === "2" || item['severity'] === "Medium") {
                severityClass = 'bg-warning'; // Yellow for Medium
            } else {
                severityClass = 'bg-success'; // Green for Low
            }

            let row = `<tr>
    <td>${item['id']}</td>
    <td>${truncatedTitle}</td>
    <td>${truncatedDesc}</td>
    <td><span class="badge ${item['status'] === 1 ? 'bg-success' : 'bg-warning'}">${item['status'] === 1 ? 'Resolved' : 'Under Review'}</span></td>
    <td><span class="badge ${severityClass}">${item['severity']}</span></td>
    <td>2025-03-01</td>
    <td>
        <div class="d-flex">
            <button data-id="${item['id']}" class="btn detailBtn btn-primary btn-sm me-2">Details</button>
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





        $('#tableData').DataTable({
            order: [[0, 'asc']],
            lengthMenu: [5, 10, 15, 20, 30],
            responsive: true,
            pagingType: 'simple_numbers',
            language: {
                paginate: {
                    previous: '&laquo; Previous',
                    next: 'Next &raquo;'
                }
            },
            // This ensures proper spacing and styling for the pagination
            drawCallback: function() {
                $('.dataTables_paginate > .pagination').addClass('pagination-sm');
            }
        });
    }
</script>




