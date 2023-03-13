

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="container">
    <div class="row">

     
        <div class="col-8">
            <div class="card my-4">
                <div class="card-header">
                    <h3><?php echo e($data->name); ?></h3>
                </div>
                <div class="card-body">
                    <img src="<?php echo e(asset( $data->productimages[0]->image)); ?>" class="w-50 my-4" alt="<?php echo e($data->name); ?>">
                   <p><?php echo e($data->description); ?> </p>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card my-4">
                <div class="card-header">
                    <h3><?php echo e($data->price); ?></h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-dark btn-success">Add to Cart</button>
                    <button class="btn btn-dark btn-success">Buy Now</button>
                </div>
            </div>
        </div>
     
        
    </div>
</div>




















<?php echo $__env->make('contactus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Autozone\resources\views/productcard.blade.php ENDPATH**/ ?>