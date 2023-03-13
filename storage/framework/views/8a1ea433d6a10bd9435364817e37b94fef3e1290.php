<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="<?php echo e(url('upload_service')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="heading">Add New Service</div>
                <div class="form-group">
                    <label for="owner_name" class="control-label">Service Name</label>
                    <input type="text" name="servicename" id="owner_name" placeholder="Enter your name" class="form-control form-control-sm rounded-0" required>
                </div>
                <div class="form-group">
                    <label for="owner_name" class="control-label">Service Description</label>
                    <input type="text" name="description" id="owner_name" placeholder="Enter your name" class="form-control form-control-sm rounded-0" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH E:\Autozone1\resources\views/admin/uploadservice.blade.php ENDPATH**/ ?>