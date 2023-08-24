<!-- Page header -->
<div class="page-header">
    <h3 class="page-title"> Students </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page"><a href="#">Student</a></li>
        </ol>
    </nav>
</div>

<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Admission</h4>
                <p class="card-description">
                    <a href="<?= base_url('student_admission/save') ?>" class="btn btn-xs btn-danger">Create New</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Previous Classes </th>
                                <th> Current Classes </th>
                                <th> Remarks </th>
                                <th>Academic Year</th>
                                <th> s </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($students) :

                                foreach ($students as $k => $d) :
                            ?>
                                    <tr>
                                        <td><?= ++$k ?></td>
                                        <td><a href="<?= base_url("student_admission/save/{$d->id}") ?>"><?= $d->name ?></a></td>
                                        <td><?= $d->prev_class ?></td>
                                        <td><?= $d->current_class ?></td>
                                        <td><?= $d->remarks ?></td>
                                        <td><?= $d->academic_year ?></td>
                                        <td><?= $d->student_id ?></td>
                                        <td><a href="<?= base_url("student_admission/delete/{$d->id}") ?>" class="btn btn-xs btn-danger del-record" id="del-record">Delete</a></td>

                                    </tr>
                            <?php endforeach;
                            endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form class="form-inline" method="post">
    <select class=" form-group col-md-3" name="name" id="set-year">
        <option value="">Set Years</option>
        <?php foreach ($years as $d) : ?>
            <option value="<?= $d->name ?>"><?= $d->name ?></option>
        <?php endforeach; ?>
    </select>

    <select class=" form-group col-md-3" name="name" id="filter-By">
        <option value="">Filter By</option>
        <?php foreach ($classes as $class) : ?>
            <option value="<?= $class->id ?>"><?= $class->class ?></option>
        <?php endforeach; ?>
    </select>
</form>


<table class="table table-dark">
    <thead>
        <tr>
            <th> # </th>
            <th> Name </th>
            <th> Current Classes </th>
            <th> Remarks </th>
            <th>Academic Year</th>

        </tr>
    </thead>
    <tbody id=student-res>

    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#filter-By').change(function() {
            var class_id = $(this).val();

            $.ajax({
                "url": `<?= base_url("/student_admission/get") ?>/${class_id}`,
                "type": "get",
                "dataType": "json",
                success: function(resp) {
                    console.log(resp);
                    if (resp.length > 0) {
                        var html = '';
                        var i;
                        for (i = 0; i < resp.length; i++) {
                            var html = '';
                            var i;
                            for (i = 0; i < resp.length; i++) {
                                html += '<tr id="' + resp[i].id + '">' +
                                    '<td>' + i + '</td>' +
                                    '<td>' + resp[i].name + '</td>' +
                                    '<td>' + resp[i].current_class + '</td>' +
                                    '<td>' + resp[i].remarks + '</td>' +
                                    '<td>' + resp[i].academic_year + '</td>' +
                                    '</tr>';
                            }
                            $('#student-res').html(html);
                        }
                        $('#student-res').html(html);
                    } else {
                        $('#student-res').html(`<tr class="text-center"><td colspan="8">Records not available</td></tr>`);
                    }



                },
                error: function(eror) {
                    alert("Server internal error");
                }
            });
        })

        $('#set-year').change(function() {
            var year = $(this).val()
        });

    })
</script>