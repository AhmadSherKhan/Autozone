<?php echo $__env->make("servicerequest", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container servreq">
      <div class="heading">Customer Service Requests</div>
    <div class="row">
      <div class="col-sm-12">
        <!-- <div class="table-responsive"> -->
        <table class="table">
          <thead>
            <tr>
              <th scop="col">ID</th>
              <th scop="col">Name</th>
              <th scop="col">Contact</th>
              <th scop="col">Email</th>
              <th scop="col">Address</th>
              <th scop="col">VehicleName</th>
              <th scop="col">RegistrationNo</th>
              <th scop="col">Model</th>
              <th scop="col">Type</th>
              <th scop="col">Actions</th>
            </tr>
          </thead>
          <tbody>
           <?php $__currentLoopData = $servreqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
            <th><?php echo e($sli->id); ?></th>
            <td><?php echo e($sli->Name); ?></td>
            <td><?php echo e($sli->Contact); ?></td>
            <td><?php echo e($sli->Email); ?></td>
            <td><?php echo e($sli->Address); ?></td>
            <td><?php echo e($sli->VehicleName); ?></td>
            <td><?php echo e($sli->Model); ?></td>
            <td><?php echo e($sli->RegNo); ?></td>
            <td><?php echo e($sli->Type); ?></td>
            <td>
              <a href="<?php echo e(url('/sedit', $sli->id)); ?>" class="btn btn-info btn-sm">Edit</a>
              <a href="<?php echo e(url('/delete', $sli->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
           </tr> 
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <a href="/upload_service" class="btn btn-primary">Create Service</a>
        <!-- </div> -->
      </div>
    </div>
   </div><?php /**PATH E:\Autozone1\resources\views/servicerequest.blade.php ENDPATH**/ ?>