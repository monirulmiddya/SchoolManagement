<div class="page-header">
    <h3 class="page-title"> Student Update </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('student') ?>">Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>

<!-- Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Student</h4>
                <p class="card-description"> </p>
                <form class="forms-sample" action="<?= base_url("student/save/{$student->id}") ?>" method="post">
                    <input type="hidden" id="custId" name="id" value="<?= $student->id ?>">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= $student->name ?>">
                            <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $student->email ?>">
                            <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile">Mobile</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?= $student->mobile ?>">
                            <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="dob">DOB</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="<?= $student->dob ?>">
                            <?php echo form_error('dob', '<div class="error">', '</div>'); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            
                            <select class="form-control" id="gender" name="gender" value="<?= $student->gender ?>">
                                <option value="Male" <?php if ($student->gender == 'Male') {
                                                            echo 'selected';
                                                        } ?>>Male</option>
                                <option value="Female" <?php if ($student->gender == 'Female') {
                                                            echo 'selected';
                                                        } ?>>Female</option>
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label>Classes</label>
                            <select class="form-control" name="class_id" style=" width:100%">
                                <option <?php if (
                                            $student->class_id ==
                                            $student->class_id
                                        ) echo "selected"; ?> value="<?php echo $student->class_id ?>">
                                    <?php echo $student->class; ?> </option>

                                <?php foreach ($class as $c) : ?>
                                    <option value="<?= $c->id ?>"><?= $c->class ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="form-group col-md-12">
                            <label>Photo</label>
                            <input type="file" name="photo" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="4"><?= $student->address ?></textarea>
                            <?php echo form_error('address', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>