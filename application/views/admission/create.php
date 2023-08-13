<!-- Page header -->
<div class="page-header">
    <h3 class="page-title"> Admission Create </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admission') ?>">Student</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('student_admission/save') ?>">Admission</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>

<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Admission</h4>
                <p class="card-description"> </p>

                <form class="forms-sample" id="from">
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Student Name</label>
                            <select class="form-control" style="width:100%" id="student_id" name="student_id">
                                <?php foreach ($students as $student) : ?>
                                    <option value="<?= $student->id ?>"><?= $student->name ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('student_id', '<div class="error">', '</div>'); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile">Previous Classes</label>
                            <span class="form-control" id="prev_class"></span>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="mobile">Current Classes</label>
                            <select class="form-control" id="current_class_id" name="current_class_id">
                                <?php foreach ($classes as $class) : ?>
                                    <option value="<?= $class->id ?>"><?= $class->class ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php echo form_error('current_class_id', '<div class="error">', '</div>'); ?>

                        <div class="form-group col-md-6">
                            <label for="mobile">Remarks</label>
                            <input type="text" class="form-control" id="remarks" name="remarks" required>
                        </div>
                        <?php echo form_error('remarks', '<div class="error">', '</div>'); ?>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $("#student_id").change(function() {
            let id = $(this).val();
            $.ajax({
                "url": `<?= base_url("/student/get") ?>/${id}`,
                "type": "get",
                "dataType": "json",
                success: function(resp) {
                    if (resp.status == true) {
                        $("#prev_class").text(resp.response.class);

                    } else {}
                },
                error: function(eror) {
                    alert("Server internal error");
                }
            });
        });


        $("#from").submit(function(e) {
            e.preventDefault();
            let student_id = $('#student_id').val();
            let prev_class = $('#prev_class').val();
            let current_class_id = $('#current_class_id').val();
            let remarks = $('#remarks').val();

            $.ajax({
                "url": `<?= base_url("student_admission/save") ?>`,
                "type": "post",
                "dataType": "json",
                data: {
                    student_id: student_id,
                    prev_class: prev_class,
                    current_class_id: current_class_id,
                    remarks: remarks
                },
                success: function(resp) {
                    console.log(resp)
                    if (resp) {
                        alert("Admission successfully");
                    } else {
                        alert("Admission failed");
                    }
                },

            })

        })

    });
</script>