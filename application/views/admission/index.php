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
                <h4 class="card-title">Students</h4>
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

