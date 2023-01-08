<?php if (isset($component)) { $__componentOriginal002f9fc9ef2b052e09254256c5b5f5bce5a0d197 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminHeader::class, ['componentName' => 'Admin | RO Plants App']); ?>
<?php $component->withName('admin-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal002f9fc9ef2b052e09254256c5b5f5bce5a0d197)): ?>
<?php $component = $__componentOriginal002f9fc9ef2b052e09254256c5b5f5bce5a0d197; ?>
<?php unset($__componentOriginal002f9fc9ef2b052e09254256c5b5f5bce5a0d197); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>



<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form class="form" action="/cit_editform" method="post" >
					<?php echo csrf_field(); ?>
					<input type="hidden" name="cit_id" value="<?php echo e($admin_cit_data[0]['cit_id']); ?>">
					<div class="form-group">
					    <label for="formGroupExampleInput"> Name: </label>
					    <input type="text" class="form-control" id="formGroupExampleInput" name="cit_name" value="<?php echo e($admin_cit_data[0]['cit_name']); ?>">
					  </div>
					  <div class="form-group">
					    <label for="formGroupExampleInput2"> Status: </label>
					    <input type="text" class="form-control" id="formGroupExampleInput2" name="cit_status" value="<?php echo e($admin_cit_data[0]['cit_status']); ?>">
					  </div>
					  <div class="form-group">
					  	<input class="btn btn-primary" type="submit" value="Submit">
					  </div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<?php if (isset($component)) { $__componentOriginal93167405ad9b7aa396d1f8e7cf2bd3cc112380e5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminFooter::class, []); ?>
<?php $component->withName('admin-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal93167405ad9b7aa396d1f8e7cf2bd3cc112380e5)): ?>
<?php $component = $__componentOriginal93167405ad9b7aa396d1f8e7cf2bd3cc112380e5; ?>
<?php unset($__componentOriginal93167405ad9b7aa396d1f8e7cf2bd3cc112380e5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\lara\waterapp\resources\views/admin_cit_edit.blade.php ENDPATH**/ ?>