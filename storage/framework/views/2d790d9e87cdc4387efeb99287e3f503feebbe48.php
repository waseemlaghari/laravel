<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'Search Plants | RO Plants App']); ?>
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

<div class="mainsearchdata">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="table table-striped">
  					<thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Agency Name</th>
					      <th scope="col">Price</th>
					      <th scope="col">Type</th>
					      <th scope="col">Litre</th>
					      <th scope="col">City</th>
					      <th scope="col">Full Location</th>
					      <th scope="col">Email</th>
					      <th scope="col">Number</th>
					      <th scope="col">View</th>
					    </tr>
  					</thead>
  					<tbody>
<?php $ic = 1; ?>
<?php if(count($agency_data) > 0): ?>
<?php $__currentLoopData = $agency_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  
				    <tr>
				      <th> <?php echo $ic++ ?> </th>
				      <td><?php echo e($agency['ds_title']); ?></td>
				      <td><?php echo e($agency['ds_price']); ?></td>
				      <td>
				      	<?php if($agency['ds_type'] == 1): ?>
				      		Can's
				      	<?php else: ?>
				      		PC's
				      	<?php endif; ?>
				      </td>
				      <td><?php echo e($agency['ag_litre']); ?></td>
				      <td><?php echo e($agency['cit_name']); ?></td>
				      <td><?php echo e($agency['ds_location']); ?></td>
				      <td><?php echo e($agency['ds_email']); ?></td>
				      <td><?php echo e($agency['ds_phone']); ?></td>
				      <td><a href="/profile/<?php echo e($agency['ds_title']); ?>" class="btn btn-info"> View </a></td>
				    </tr>
				  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>

<tr>
<td colspan="8">
	<h2>No Data Found.. </h2>
</td>				    
</tr>


<?php endif; ?>
</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div> <!-- row -->
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
<?php endif; ?><?php /**PATH E:\lara\waterapp\resources\views/searchdata.blade.php ENDPATH**/ ?>