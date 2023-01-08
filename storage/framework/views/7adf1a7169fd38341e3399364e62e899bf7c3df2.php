<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'WaterApp - Order']); ?>
<?php $component->withName('site-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6)): ?>
<?php $component = $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6; ?>
<?php unset($__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<h1>work</h1>

<div class="modal" tabindex="-1" role="dislog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="model-title"> Place your Order </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"> &times; </span>
				</button>
			</div>
			<div class="modal-body">
				<p>This is model body</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary"> Save Changes </button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
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
<?php if (isset($__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e)): ?>
<?php $component = $__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e; ?>
<?php unset($__componentOriginal75263438d402af80f8ba9c5b39ce69394994832e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\lara\waterapp\resources\views/agencyorder.blade.php ENDPATH**/ ?>