<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <img src="<?php echo e(url('images/logo.png')); ?>" width="200" class="rounded mx-auto d-block" alt="">
        </div>
        
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo e(url('images/pisang.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo e($item->item_name); ?></h5>
                      <p class="card-text">Rp. <?php echo e(number_format($item->price)); ?>

                        <hr>
                        <?php echo e($item->item_desc); ?>

                      </p>
                      <a href="<?php echo e(url('order')); ?>/<?php echo e($item->item_id); ?>" class="btn btn-primary"><i class="fa fa-shopping-cart">
                        </i>Add to Cart</a>
                    </div>
                  </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\groceryStore\resources\views/home.blade.php ENDPATH**/ ?>