<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'Agency Registration | RO Plants App']); ?>
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


<div class="mainagencyregistration">
	<div class="container">
		<h2>
			Agency Registration
		</h2>
	</div>
</div>


<div class="agencyregmaindv">
	<div class="container">
		<div class="ckdjf">
			<?php if(session('agc_errs')): ?>
			<div class="alert alert-danger" role="alert">
			  <?php echo e(session('agc_errs')); ?>

			</div>
			<?php endif; ?>

			<?php if(session('agency_err')): ?>
			<div class="alert alert-danger" role="alert">
			  <?php echo e(session('agency_err')); ?>

			</div>
			<?php endif; ?>

			<?php if(session('agency_success')): ?>
			<div class="alert alert-success" role="alert">
			  <?php echo e(session('agency_success')); ?>

			</div>
			<?php endif; ?>

			<form action="/agregisxt" method="POST">
				<?php echo csrf_field(); ?> 
    			<div class="form-group">
    				<label class="col-sm-2 col-form-label"> Agency Name: <span class="imp_check">*</span> </label>
				    <div class="col-sm-10">
				      <input type="text" required name="agency_name" class="form-control" placeholder="Enter Agency Name">
				    </div>
  				</div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Email: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="email" required class="form-control" name="agency_email" placeholder="Enter Your Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Password: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="password" required name="agency_pass" class="form-control" placeholder="Enter Your Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Phone: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="tel" name="agency_phone" required class="form-control" placeholder="Enter Your Phone Number">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> City: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			    	<select name="agency_city" required class="form-control">
			    		<option value="">Please Select</option>

<?php $__currentLoopData = $cities_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    		<option value="<?php echo e($city['cit_id']); ?>"><?php echo e($city['cit_name']); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    	</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Price Per PC: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="number" name="agency_price" required class="form-control" placeholder="Enter Your Can Price">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Litre: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="number" name="agency_litre" required class="form-control" placeholder="Enter Litre of a PC">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">Select Type of Can: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			    	<select name="agency_tycp" required class="form-control" id="exampleFormControlSelect1">
			    		<option value="">Please Select</option>
			    		<option value="1">Cans</option>
			    		<option value="2">PCs</option>
			    	</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Address: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="text" name="agency_addrs" required class="form-control" placeholder="Enter Your Address">
			    </div>
			  </div>
			  <div class="form-group">
			  	<br>
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Sign Up</button>
			    </div>
			  </div>
			</form>
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
<?php endif; ?><?php /**PATH D:\lara\waterapp\resources\views/agencyregistration.blade.php ENDPATH**/ ?>