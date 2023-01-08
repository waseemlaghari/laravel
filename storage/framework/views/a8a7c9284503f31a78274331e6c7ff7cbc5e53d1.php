<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'Contact Us | RO Plants App']); ?>
<?php $component->withName('site-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6)): ?>
<?php $component = $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6; ?>
<?php unset($__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6); ?>
<?php endif; ?>


<!--Section: Contact v.2-->
<div class="maincontactuspage">
    <div class="container">
        <div class="maincontactform">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">
<div class="mainerrora">
    <?php if(session('contact_errr')): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo e(session('contact_errr')); ?>

    </div>
    <?php endif; ?>
    <?php if(session('contact_success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('contact_success')); ?>

    </div>
    <?php endif; ?>
</div>

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contactform" method="POST">
<?php echo csrf_field(); ?>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" placeholder="Enter your email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" placeholder="Subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" placeholder="Enter Your Message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <br>
                            <div class="text-center text-md-left">
                                <input class="btn btn-primary" type="submit" name="submit" value="Send">
                            </div>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Hyderabad, Sindh, Pakistan</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 92 1234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@waterapp.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
        </div>
    </div>
</div>
<!--Section: Contact v.2-->



<?php if (isset($component)) { $__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteFooter::class, []); ?>
<?php $component->withName('site-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e)): ?>
<?php $component = $__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e; ?>
<?php unset($__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e); ?>
<?php endif; ?><?php /**PATH E:\lara\waterapp\resources\views/contactus.blade.php ENDPATH**/ ?>