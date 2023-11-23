<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Subject</h4>
<<<<<<< HEAD


                <!-- Filter By Class form -->
                <form class="" method="post">
                    <div class="row ">
                        <div class="form-group col-md-3 my-2 ">
                            <label class="my-2">Select Class</label>
                            <select class="form-control" style="width:100%" id="filter-By" name="filter-By">
                                <?php foreach ($classes as $class) : ?>
                                    <option value="<?= $class->id ?>"><?= $class->class ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                </form>
                <!-- ******************* Filter By Class form end *********************** -->


                <div class="float-right"><a href="javascript:void(0);" id="add-new" class="btn btn-primary" data-toggle="modal" data-target="#addEmpModal"><span class="fa fa-plus"></span> Add New</a></div>
                <table id="example" class="table  table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-light">S.No</th>
                            <th class="text-light">Subject</th>
                            <th class="text-light">Action</th>
=======
                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addEmpModal"><span class="fa fa-plus"></span> Add New</a></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col" style="text-align:right;">Action</th>
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
                        </tr>
                    </thead>
                    <tbody id="listRecords">

                    </tbody>
                </table>

<<<<<<< HEAD


=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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
<<<<<<< HEAD

                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Select Class*</label>
                                        <div class="col-md-10">
                                            <select class="form-control col-md-2" name="classes" id="classes">
                                                <option value="">Select Class</option>
                                            </select>
                                        </div>
                                    </div>

=======
                                <div class="modal-body">
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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
<<<<<<< HEAD

                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Select Class*</label>
                                        <div class="col-md-10" id="class_edit">
                                            <select class="form-control col-md-2" name="edit_classes" id="edit_classes">

                                            </select>
                                        </div>
                                    </div>
                                </div>

=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Subject*</label>
                                        <div class="col-md-10">
                                            <input type="text" name="empName" id="empName" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD

=======
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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
<<<<<<< HEAD
        // data tabile 
        $('#filter-By').change(function() {
            example_table.ajax.reload();
        })

        var example_table = $("#example").DataTable({
            responsive: true,
            autoWidth: false,
            serverSide: false,
            processing: true,
            ajax: {
                url: `<?= base_url("/subject/show") ?>`,
                type: 'get',
                data: function(d) {
                    d.class_id = $('#filter-By').val();
                },
                dataSrc: function(resp) {
                    if (resp.status == true) {
                        return resp.response.map((d, i) => {
                            return [
                                ++i,
                                d.name,

                                `<div class="btn-group btn-sm" id="data_sav">
                                    
                                    <button type="button" class="btn btn-success editRecord " data-id="${d.id}" data-name="${d.name}" data-class="${d.class}" >Edit</button>

                                    <button type="button" class="btn btn-danger deleteRecord" data-id="${d.id}">Delete</button>

                                </div>`,
                            ];
                        });
                    }
                    return [];
                }
            }
        });

        // classes get function
        function classes_get() {
            $.ajax({
                type: "POST",
                url: `<?= base_url("/subject/class_get") ?>`,
                dataType: "JSON",
                data: {},
                success: function(data) {
                    var i = '';
                    for (i = 0; i < data.length; i++) {
                        $('#classes').append('<option value=' + data[i].id + '>' + data[i].class + '</option>');
                    }

                }
            });
        }
        classes_get();


        // save new employee record

        $('#saveEmpForm').submit('click', function() {
            var name = $('#name').val();
            var class_id = $('#classes').val();

=======
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
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
            $.ajax({
                type: "POST",
                url: `<?= base_url("/subject/save") ?>`,
                dataType: "JSON",
                data: {
                    name: name,
<<<<<<< HEAD
                    class: class_id,
                },
                success: function(data) {
                    $('#name').val("");
                    $('#classes').append('<option value="">Sectect Sclect</option>');
                    $('#addEmpModal').modal('hide');
                    example_table.ajax.reload();
                    // listSubject();
=======

                },
                success: function(data) {
                    $('#name').val("");
                    $('#addEmpModal').modal('hide');
                    listSubject();
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
                }
            });
            return false;
        });
<<<<<<< HEAD



        // show edit modal form with emp data
        $('#listRecords').on('click', '.editRecord', function() {
            $('#editEmpModal').modal('show');

            var edit_class = $(this).data('class');
            var option_data = "<option value='" + edit_class + "'>" + edit_class + "</option>";
            $("#edit_classes").html(option_data);
            $.ajax({
                type: "POST",
                url: `<?= base_url("/subject/class_get") ?>`,
                dataType: "JSON",
                data: {},
                success: function(data) {
                    var i = '';
                    for (i = 0; i < data.length; i++) {
                        $('#edit_classes').append('<option value=' + data[i].id + '>' + data[i].class + '</option>');
                    }
                }
            });
            $("#empId").val($(this).data('id'));
            $("#empName").val($(this).data('name'));
=======
        // show edit modal form with emp data
        $('#listRecords').on('click', '.editRecord', function() {
            $('#editEmpModal').modal('show');
            $("#empId").val($(this).data('id'));
            $("#empName").val($(this).data('name'));

>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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
<<<<<<< HEAD
                    // listSubject();
                    example_table.ajax.reload();
=======
                    listSubject();
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
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
<<<<<<< HEAD
                    // listSubject();
                    example_table.ajax.reload();
=======
                    listSubject();
>>>>>>> 8cc2f5f303ff25e226038f4c34e860688903b489
                }
            });
            return false;
        });
    })
</script>