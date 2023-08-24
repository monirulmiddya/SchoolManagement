<!-- Page header -->
<div class="page-header">
    <h3 class="page-title">Student Class</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page"><a href="#">Class</a></li>
        </ol>
    </nav>
</div>

<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Classes</h4>
                <p class="card-description">
                    <a href="<?= base_url('student_class/save') ?>" class="btn btn-xs btn-danger ">Create New</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Classes </th>
                                <th style="text-align:right;"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($class) :

                                foreach ($class as $k => $d) :
                            ?>
                                    <tr>
                                        <td><?= ++$k ?></td>
                                        <td><?= $d->class ?></td>
                                        <td style="text-align:right;">

                                            <a class="btn btn-xs btn-primary " href="<?= base_url("student_class/save/{$d->id}") ?>">Edit</a>

                                            <a href="<?= base_url("student_class/delete/{$d->id}") ?>" class="btn btn-xs btn-danger del-record ">Delete</a>

                                        </td>
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