<?php if (isset($component)) { $__componentOriginal002f9fc9ef2b052e09254256c5b5f5bce5a0d197 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminHeader::class, ['componentName' => 'Admin |RO Plants App']); ?>
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
				<h2>List Of Orders</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Customer Name</th>
				      <th scope="col">Number</th>
				      <th scope="col">Can's / PC's</th>
				      <th scope="col">Total Price</th>
				      <th scope="col">Agency</th>
				      <th scope="col">City</th>
				      <th scope="col">Full Address</th>
				      <th scope="col"> Order Status </th>
				    </tr>
				  </thead>
				  <tbody>
<?php $inc = 1; ?>
<?php if(count($adord_data) > 0): ?>
<?php $__currentLoopData = $adord_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <tr>
				      <th scope="row"> <?php echo e($inc++); ?> </th>
				      <td style="text-transform: capitalize;">
				      	<?php echo e($orders['ord_cusname']); ?>

				      </td>
				      <td>
				      	<?php echo e($orders['ord_cusnumb']); ?>

				      </td>
				      <td>
				      	<?php echo e($orders['ord_can_no']); ?>

				      
				      </td>
				      <td>
				      	<?php echo e(($orders['ds_price'] *  $orders['ord_can_no'])); ?> RS
				      </td>
				      <td>
				      	<?php echo e($orders['ds_title']); ?>

				      </td>
				      <td>
				      	<?php echo e($orders['cit_name']); ?>

				      </td>
				      <td>
				      	<?php echo e($orders['ord_fulladdr']); ?>

				      </td>
				      <td>
				      	<?php if($orders['ord_status'] == 1): ?>
				      		<span style="font-weight: bold;">Active Order</span>
				      	<?php elseif($orders['ord_status'] == 2): ?>
				      		<span>Delivered</span>
				      	<?php endif; ?>
				      </td>
				    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH D:\lara\waterapp\resources\views/adlistoforders.blade.php ENDPATH**/ ?>