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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>List Of Agencies</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Price</th>
				      <th scope="col">Type</th>
				      <th scope="col">Email</th>
				      <th scope="col">City</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Full Address</th>
				      <th scope="col"> Block Agency </th>
				    </tr>
				  </thead>
				  <tbody>
<?php $inc = 1; ?>
<?php if(count($agcn_data) > 0): ?>
<?php $__currentLoopData = $agcn_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <tr>
				      <th scope="row"> <?php echo e($inc++); ?> </th>
				      <td style="text-transform: capitalize;">
				      	<?php echo e($agency['ds_title']); ?>

				      </td>
				      <td>
				      	<?php echo e($agency['ds_price']); ?>

				      </td>
				      <td>
				      	<?php if($agency['ds_type'] == 1): ?>
				      		Can
				      	<?php else: ?>
				      		PC
				      	<?php endif; ?>
				      </td>
				      <td>
				      	<?php echo e($agency['ds_email']); ?>

				      </td>
				      <td>
				      	<?php echo e($agency['cit_name']); ?>

				      </td>
				      <td>
				      	<?php echo e($agency['ds_phone']); ?>

				      </td>
				      <td>
				      	<?php echo e($agency['ds_location']); ?>

				      </td>
				      <td>
				      	<a href="/blkagent/<?php echo e(Crypt::encryptString($agency['ds_id'])); ?>" class="btn btn-danger"> Block </a>
				      </td>
				    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<tr>
	<td colspan="10">
		<h2>No Data Found</h2>
	</td>
</tr>
<?php endif; ?>
				  </tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
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
<?php endif; ?><?php /**PATH D:\lara\waterapp\resources\views/adlistofagency.blade.php ENDPATH**/ ?>