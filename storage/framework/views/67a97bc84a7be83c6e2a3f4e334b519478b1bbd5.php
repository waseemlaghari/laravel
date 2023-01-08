<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'About Us | RO Plants App']); ?>
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

<div class="mainaboutuspage">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="aboutusdetails">
					<h2>About Us</h2>
<p>					
Welcome to RO Plants App, It will help you to find the available plants near you.
</p>
<p>
Founded in 2021 by a University Student, Our mission is to deliver high-quality water products that will benefit every part of consumer’s lives. We hope to raise the quality of life by purifying the most essential element: water..
At RO Plants App a customer will find nearest plants and can order online, and a company who run RO plants have a dashboard to look for its orders.
</p>

<p>
We hope you enjoy our service as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
</p>


				
				</div>
			</div>
			<div class="col-md-6">
				<div class="aboutusimage">
					<img src="<?php echo e(URL::asset('images/aboutus.jpg')); ?>">
				</div>
			</div>
		</div>
	</div>
</div>


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
<?php endif; ?><?php /**PATH E:\lara\waterapp\resources\views/aboutus.blade.php ENDPATH**/ ?>