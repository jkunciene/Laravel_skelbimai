
<?php $__env->startSection('content'); ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Kategorija</h1>
                            <p class="mb-0">idedu kategorija</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md mb-5" data-aos="fade">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                           <ul>
                               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <li><?php echo e($error); ?></li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </ul>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="store_category"class="p-5 bg-white">
                        <?php echo csrf_field(); ?>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="pavadinimas">Title</label>
                                <input type="text" id="pavadinimas" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Add category" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('skelbimai/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/skelbimai/resources/views/skelbimai/pages/category_form.blade.php ENDPATH**/ ?>