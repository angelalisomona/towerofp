<head>
<link rel="stylesheet"   href="<?php echo e(asset('asset/css/master.css')); ?>">
  <head>

<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>
<div class="slide">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo e(url('/images/bp.jpg')); ?>" class="d-block w-100" alt="blackpink">
        <div class="carousel-caption d-none d-md-block">
                                        <div class="slider-btn">
                                          <button class="btn btn-1">LOG IN AS TEACHER</button>
                                          <button class="btn btn-2">LOG IN AS STUDENT</button>
                                          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo e(url('/images/king.jpg')); ?>" class="d-block w-100" alt="king">
        <div class="carousel-caption d-none d-md-block">
        <div class="slider-btn">
                                          <button class="btn btn-1">LOG IN AS TEACHER</button>
                                          <button class="btn btn-2">LOG IN AS STUDENT</button>
                                          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo e(url('/images/dope.jpg')); ?>" class="d-block w-100" alt="dope">
        <div class="carousel-caption d-none d-md-block">
        <div class="slider-btn">
                                          <button class="btn btn-1">LOG IN AS TEACHER</button>
                                          <button class="btn btn-2">LOG IN AS STUDENT</button>
                                          </div>
        </div>
      </div>
    </div>
    <!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</div>
 <?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layoutprofile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/profile.blade.php ENDPATH**/ ?>