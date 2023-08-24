<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Subject</h4>
                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addEmpModal"><span class="fa fa-plus"></span> Add New</a></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col" style="text-align:right;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="listRecords">

                    </tbody>
                </table>

                <!-- add new emp -->
                <form id="saveEmpForm" method="post">
                    <div class="modal fade" id="addEmpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Subject</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Subject*</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>



                <!-- update emp -->
                <form id="editEmpForm" method="post">

                    <div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Subject</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Subject*</label>
                                        <div class="col-md-10">
                                            <input type="text" name="empName" id="empName" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <input type="hidden" name="empId" id="empId" class="form-control">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- delete emp -->

                <form id="deleteEmpForm" method="post">
                    <div class="modal fade" id="deleteEmpModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Subject</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <strong>Are you sure to delete this record?</strong>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="deleteEmpId" id="deleteEmpId" class="form-control">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        listSubject();
        // list all employee in datatable
        function listSubject() {
            $.ajax({
                type: 'ajax',
                url: `<?= base_url("/subject/show") ?>`,
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr id="' + data[i].id + '">' +
                            '<td>' + i + '</td>' +
                            '<td>' + data[i].name + '</td>' +

                            '<td style="text-align:right;">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="' + data[i].id + '" data-name="' + data[i].name + '">Edit</a>' +
                            ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="' + data[i].id + '">Delete</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#listRecords').html(html);
                },
                error: function(eror) {
                    alert("Server internal error");
                }

            });
        }


        // save new employee record
        $('#saveEmpForm').submit('click', function() {
            var name = $('#name').val();
            $.ajax({
                type: "POST",
                url: `<?= base_url("/subject/save") ?>`,
                dataType: "JSON",
                data: {
                    name: name,

                },
                success: function(data) {
                    $('#name').val("");
                    $('#addEmpModal').modal('hide');
                    listSubject();
                }
            });
            return false;
        });
        // show edit modal form with emp data
        $('#listRecords').on('click', '.editRecord', function() {
            $('#editEmpModal').modal('show');
            $("#empId").val($(this).data('id'));
            $("#empName").val($(this).data('name'));

        });

        // save edit record
        $('#editEmpForm').on('submit', function() {
            var empId = $('#empId').val();
            var empName = $('#empName').val();
            $.ajax({
                type: "POST",
                url: `<?= base_url('/subject/update') ?>`,
                dataType: "JSON",
                data: {
                    id: empId,
                    name: empName,
                },
                success: function(data) {
                    $("#empId").val("");
                    $("#empName").val("");
                    $('#editEmpModal').modal('hide');
                    listSubject();
                }
            });
            return false;
        });

        // show delete form
        $('#listRecords').on('click', '.deleteRecord', function() {
            var empId = $(this).data('id');
            $('#deleteEmpModal').modal('show');
            $('#deleteEmpId').val(empId);
        });
        // delete emp record
        $('#deleteEmpForm').on('submit', function() {
            var empId = $('#deleteEmpId').val();
            $.ajax({
                type: "POST",
                url: `<?= base_url('/subject/delete') ?>`,
                dataType: "JSON",
                data: {
                    id: empId
                },
                success: function(data) {
                    $("#" + empId).remove();
                    $('#deleteEmpId').val("");
                    $('#deleteEmpModal').modal('hide');
                    listSubject();
                }
            });
            return false;
        });
    })
</script>