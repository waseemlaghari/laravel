<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'Agency Profile | RO Plants App']); ?>
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

<div class="mainerror">
	<div class="container">
		<?php if(session('order_success')): ?>
		<div class="alert alert-success" role="alert">
		  <?php echo e(session('order_success')); ?>

		</div>
		<?php endif; ?>
		<?php if(session('order_errr')): ?>
		<div class="alert alert-danger" role="alert">
		  <?php echo e(session('order_errr')); ?>

		</div>
		<?php endif; ?>
		<?php if(session('rating_success')): ?>
		<div class="alert alert-success" role="alert">
		  <?php echo e(session('rating_success')); ?>

		</div>
		<?php endif; ?>
		<?php if(session('rating_errr')): ?>
		<div class="alert alert-danger" role="alert">
		  <?php echo e(session('rating_errr')); ?>

		</div>
		<?php endif; ?>
	</div>
</div>

<div class="mainagency_profile">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="profilepic">
					<img src='<?php echo e(URL::asset("images")."/".$agency_data[0]["ds_profilepic"]); ?>' class="figure-img img-fluid rounded">
				</div>
			</div>
			<div class="col-md-8">
				<div class="mainprofile_header_details">
					
					<h3>
						<?php echo e($agency_data[0]["ds_title"]); ?> 
					  <small class="text-muted txtsized"> <i class="fa fa-map-marker-alt"></i> <?php echo e($agency_data[0]["cit_name"]); ?> </small>
					
					  <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal11" id="btnmodal111">
					  Rate Now
					</button>

					</h3>
					<hr>
				</div>
				<div class="mainprofile_details">
					<h5>
						Type: 
					  <small class="text-muted txtsized"> 
					  	<?php if($agency_data[0]["ds_type"] == 1): ?>
					  		Can 
					  	<?php else: ?>
					  		PC
					  	<?php endif; ?>
					  </small>
					</h5>
					<h5>
						Email: 
					  <small class="text-muted txtsized nocapi"> 
					  	<?php echo e($agency_data[0]["ds_email"]); ?>

					  </small>
					</h5>
					<h5>
						Number: 
					  <small class="text-muted txtsized"> 
					  	<?php echo e($agency_data[0]["ds_phone"]); ?>

					  </small>
					</h5>
					<h5>
						Full Location: 
					  <small class="text-muted txtsized"> 
					  	<?php echo e($agency_data[0]["ds_location"]); ?>

					  </small>
					</h5>
					<h5>
						Price: 
					  <small class="text-muted txtsized"> 
					  	<?php echo e($agency_data[0]["ds_price"]); ?> RS / PC	
					  </small>
					</h5>
					<h5>
						Litre: 
					  <small class="text-muted txtsized"> 
					  	<?php echo e($agency_data[0]["ag_litre"]); ?>

					  </small>
					</h5>
					<h5>
						Rating: 
						<?php echo e($final_rating); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
	var stars = $('#starsfinal li').parent().children('li.star');
	for (var i=0; i < <?php echo $final_rating ?>; i++){
		$(stars[i]).addClass('selected');
	} 
});
// Agency Rating 
</script>

					  <small class="text-muted txtsized"> 
					  	<div class='rating-stars text-center'>
					    <ul id='starsfinal'>
					      <li class='star' title='Poor' data-value='1'>
					        <i class='fa fa-star fa-fw'></i>
					      </li>
					      <li class='star' title='Fair' data-value='2'>
					        <i class='fa fa-star fa-fw'></i>
					      </li>
					      <li class='star' title='Good' data-value='3'>
					        <i class='fa fa-star fa-fw'></i>
					      </li>
					      <li class='star' title='Excellent' data-value='4'>
					        <i class='fa fa-star fa-fw'></i>
					      </li>
					      <li class='star' title='WOW!!!' data-value='5'>
					        <i class='fa fa-star fa-fw'></i>
					      </li>
					    </ul>
					  </div>
					  </small>
					</h5>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="btnmodal">
					  Order Now
					</button>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Order Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
<form action="/placeorder" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Place your order </h5>
        <button type="button" class="close" data-dismiss="modal" id="dismissbtn" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo csrf_field(); ?>
       <input type="hidden" name="cus_dis_id" value="<?php echo e($agency_data[0]['ds_id']); ?>">
       <input type="hidden" name="cus_dis_city" value="<?php echo e($agency_data[0]['ds_cit_id']); ?>">
       <input type="hidden" name="cus_dis_title" value="<?php echo e($agency_data[0]['ds_title']); ?>">
		  <div class="form-group">
		    <label for="formGroupExampleInput"> Customer Name: </label>
		    <input type="text" required class="form-control" name="cus_name" placeholder="Enter your name">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Number of Can/PC s: </label>
		    <input type="number" required class="form-control" name="numof_cans" placeholder="Enter how many Cans">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Customer Number: </label>
		    <input type="tel" required class="form-control" name="cus_numb"  placeholder="Enter your number">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Customer Home Address: </label>
		    <input type="text" required class="form-control" name="cus_address"  placeholder="Enter your address">
		  </div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="dismissbtn2">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- Order Model End -->

<!-- Rating Modal -->
<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
<form action="/placerating" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate this Agency </h5>
        <button type="button" class="close" data-dismiss="modal" id="dismissbtn" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo csrf_field(); ?>
       <input type="hidden" name="re_ds_id" value="<?php echo e(Crypt::encryptString($agency_data[0]['ds_id'])); ?>">
       <input type="hidden" name="cus_dis_title" value='<?php echo e($agency_data[0]["ds_title"]); ?>'>
       <input type="hidden" name="rt_rating" id="rt_rating" value="0">

		  <div class="form-group">
		    <section class='rating-widget'>
  
  <!-- Rating Stars Box -->
  <div class='rating-stars text-center'>
    <ul id='stars'>
      <li class='star' title='Poor' data-value='1'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5'>
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>
  </div>
  
  
  
</section>

		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Customer Number: </label>
		    <input type="tel" required class="form-control" name="cus_numb"  placeholder="Enter your number">
		  </div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="dismissbtn2">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- Rating Model End -->

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
<?php endif; ?><?php /**PATH E:\lara\waterapp\resources\views/agencyprofile.blade.php ENDPATH**/ ?>