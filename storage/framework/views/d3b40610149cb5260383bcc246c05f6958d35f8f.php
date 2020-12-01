<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>

                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" id="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <input class="btn btn-outline-secondary" type="button" name="search" id="submit" value="Search">
                        </div>
                    </div>
                    <br>
                    <div id="form-block">

                    </div>


                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\taz-project\resources\views/home.blade.php ENDPATH**/ ?>