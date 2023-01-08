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




<div>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="">
					<h2>List of Cities</h2>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="tbcitxd">
					<table class="table">
						<tr>
							<th>ID</th>
							<th>City Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
 <?php $inc = 1; ?> 



<?php $__currentLoopData = $cities_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<tr>
							
							<td> <?php echo e($inc++); ?> </td>

							<td>
								<?php echo e($city['cit_name']); ?>

							</td>
							<td>
								<a  class="btn btn-info" href=<?php echo e("xbdedi/". $city['cit_id']); ?>> Edit </a>
							</td>
							<td>
								<a class="btn btn-primary" href=<?php echo e("xbddel/". $city['cit_id']); ?>>Delete</a>
							</td>
						</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>

					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item">
					    	<?php echo e($cities_data->links()); ?>

					    </li>
					  </ul>
					</nav>
				</div>
			</div>
			<div class="col-md-4"></div>
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
<?php endif; ?><?php /**PATH D:\lara\waterapp\resources\views/admincities.blade.php ENDPATH**/ ?>