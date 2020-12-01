<?php $__env->startSection('content'); ?>
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/master.css')); ?>">
        </head>
        <div class="row justify-content-center">
        <div class="container">
            <h1 class="display-4">  Farmer Dashboard</h1>
            <div class="col-md-8">
                <section id="fback">
                    <form action = "/create" method = "post"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <p><b><i>Book appointment for Sale and Delivery Day</i></b></p>
                    <label>DATE OF SALE:</label><br>
                    <select class="form-control" name="" >
                        <option value=""> --select date--</option>
                        <option value="2020-06-01"> monday 1 june </option>
                        <option value="2020-06-02"> tuesday 2 june </option>
                        <option value="2020-06-03"> wednesday 3 june</option>
                        <option value="2020-06-04"> thursday 4 june </option>
                        <option value="2020-06-05"> friday 5 june </option>
                    </select><br>

                    <div class="form-group">
                        <label for="sdate">Date</label>
                        <input name="sdate" value="" type="date" class="form-control" id="sdate">
                    </div>
                    <div class="form-group">
                        <label for="nofbales">Enter Quantity you would like to sale:</label><br>
                        <input  class="form-control" type="number" id="nofbales" name="nofbales" min="1" max="350" placeholder="bales between 1 and 350, e.g. 210" required/><br>
                    </div>
                    <div class="form-group">
                        <label for="email">Email to recieve receipt on:</label>
                        <input name="email" value="" type="email" class="form-control" id="email">
                    </div>

                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" id="search" placeholder="Search
                           e.g. vz2770, vtbz21149, vz5172" aria-label="Search">
                        <div class="input-group-append">
                            <input class="btn btn-primary btn-lg" class="btn btn-outline-secondary" type="button" name="search" id="submit" value="Search">
                        </div>
                    </div>
                    <br>

                    <div id="form-block">

                    </div>
                </form>
                <hr class="my-4"><b>
                <p class="">registered appointments </p>
                <p class="">view previous sales </p>
                <p class="">xxxxx xxxxx</p></b>
                </section>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/fdash.blade.php ENDPATH**/ ?>