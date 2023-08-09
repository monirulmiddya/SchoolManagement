<!-- Page header -->
<div class="page-header">
    <h3 class="page-title">Teachers </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page"><a href="#">Teachers</a></li>
        </ol>
    </nav>
</div>

<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Teachers</h4>
                <p class="card-description">
                    <a href="<?= base_url('teacher/save') ?>" class="btn btn-xs btn-danger ">Create New</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Mobile </th>
                                <th> Email </th>
                                <th> Dob </th>
                                <th> Gender </th>
                                <th> Address </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($teachers) :

                                foreach ($teachers as $k => $d) :
                            ?>
                                    <tr>
                                        <td><?= ++$k ?></td>
                                        <td><a href="<?= base_url("teacher/save/{$d->id}") ?>"><?= $d->name ?></a></td>
                                        <td><?= $d->mobile ?></td>
                                        <td><?= $d->email ?></td>
                                        <td><?= $d->dob ?></td>
                                        <td><?= $d->gender ?></td>
                                        <td><?= $d->address ?></td>
                                        <td><a href="<?= base_url("teacher/delete/{$d->id}") ?>" class="btn btn-xs btn-danger del-record">Delete</a></td>
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