

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(url('home')); ?>" class="btn btn-primary"><i class="fa fa-arrow-left">Back</i></a>
        </div>
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo e($item->item_name); ?></li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo e(url('images/pisang.jpg')); ?>" class="rounded mx-auto d-block" width="400" alt="">
                    </div>
                    <div class="col-md-6 mt-4">
                        <h3><?php echo e($item->item_name); ?></h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Price</td>
                                    <td>:</td>
                                    <td>Rp. <?php echo e(number_format($item->price)); ?></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>:</td>
                                    <td><?php echo e($item->item_desc); ?></td>
                                </tr>
                                <form method="POST" action="<?php echo e(url('order')); ?>/<?php echo e($item->item_id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="jumlah_pesan" class="form-control" required="">
                                            <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\groceryStore\resources\views/order/index.blade.php ENDPATH**/ ?>