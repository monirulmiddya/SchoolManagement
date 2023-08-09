<!-- Page header -->
<div class="page-header">
    <h3 class="page-title">Student Yeers</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page"><a href="#">Students Yeers</a></li>
        </ol>
    </nav>
</div>

<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Yeers</h4>
                <p class="card-description">
                    <a href="<?= base_url('yeers/save') ?>" class="btn btn-xs btn-danger ">Create New</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Id </th>
                                <th> Yeers </th>
                                <th> Created_at </th>
                                <th> Update_date </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($yeers) :

                                foreach ($yeers as $k => $d) :
                            ?>
                                    <tr>
                                        <td><?= ++$k ?></td>
                                        <td><?= $d->id ?></td>
                                        <td><a href="<?= base_url("yeers/save/{$d->id}") ?>"><?= $d->name ?></a></td>
                                        <td><?= $d->created_at ?></td>
                                        <td><?= $d->updated_at ?></td>
                                        <td><a href="<?= base_url("yeers/delete/{$d->id}") ?>" class="btn btn-xs btn-danger del-record">Delete</a></td>
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