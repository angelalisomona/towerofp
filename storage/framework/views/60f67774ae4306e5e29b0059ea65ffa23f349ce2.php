<?php $__env->startSection('title', 'footer'); ?>
<?php $__env->startSection('content'); ?>
<p>This footer page is supposed to be something else.</p>
<div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>
<!-- Card -->
<style>
.long{
    background-image: url('/images/bp.jpg');
    width:100%;
    borders:none;
}

</style>
<div class="long"> 

    <!-- Content -->
    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
        <div>
            <h5 class="pink-text"><i class="fas fa-chart-pie"></i> CHURCH</h5>
            <h3 class="card-title pt-2"><strong>Tower of power</strong></h3>
            <p>Lxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
               xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                xxxxxxxxxxxxxxx</p>
            <a class="btn btn-pink"><i class="far fa-clone left"></i> View project</a>
        </div>
    </div>
    <!-- Content -->
</div>
<!-- Card -->

<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://www.google.com/maps/place/Munali+Mall/@-15.3721458,28.3451577,15z/data=!4m5!3m4!1s0x0:0xa09b8a404f8b4101!8m2!3d-15.3721458!4d28.3451577" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>


 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/footer.blade.php ENDPATH**/ ?>