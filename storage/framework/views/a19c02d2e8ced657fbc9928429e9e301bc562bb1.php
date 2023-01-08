<?php if (isset($component)) { $__componentOriginal81814ab617309793d4e7cdfd8d45f487d3acedc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SiteHeader::class, ['componentName' => 'RO Plants App']); ?>
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

<div class="main_content_wrapper">
	<div class="main_coursel">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="<?php echo e(URL::asset('images/bottled_water.png')); ?>" alt="First slide">
	      <div class="carousel-caption d-none d-md-block">
    		<h5>What is RO Plants App</h5>
    		<p>This App is build to order water cans at your doorstep.</p>
  		   </div>		
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo e(URL::asset('images/waterglass.jpg')); ?>" alt="Second slide">
	      <div class="carousel-caption d-none d-md-block">
    		<h5>How to Use</h5>
    		<p>Just search the RO Plants with your city name or location.</p>
  		   </div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo e(URL::asset('images/water3.jpg')); ?>" alt="Third slide">
	      <div class="carousel-caption d-none d-md-block">
    		<h5>Benifits for RO Plants</h5>
    		<p>They just open account on our website and get orders online.</p>
  		   </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="main_bg_search">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="srchbar">
					<h3>Search RO Plants</h3>
					<form method="get" action="/searchbycity">
					  <div class="form-group">
					    <input type="text" class="form-control" name="agency_search" aria-describedby="emailHelpi" placeholder="Search RO Plants">
					  </div>
					  <div class="form-group">
					  	<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div> <!--- main_bg_search -->
<div class="container">
	<hr />
</div>
<div class="main_ag_lst_shw">
	<div class="container">
		<di class="ag_lst_head">
			<h3>Random Plants:</h3>
		</di>
		<div class="card-deck">
<?php if(count($agcn_data) > 0): ?>
<?php $cn=0 ?>  
<?php $__currentLoopData = $agcn_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		  <div class="card">
		    <div class="card-body">
		      <h5 class="card-title" style="font-weight: bold; text-transform: capitalize;"> <?php echo e($agency['ds_title']); ?> </h5>
		      <p class="card-text">
		      	<span style="font-weight: bold;">Price: </span> <?php echo e($agency['ds_price']); ?> RS <br />
		      	<span style="font-weight: bold;">Number: </span> <?php echo e($agency['ds_phone']); ?> <br />
		      	<span style="font-weight: bold;">Type: </span> 
		      		<?php if($agency['ds_type'] == 1): ?>
		      			Can
		      		<?php else: ?>
		      			PC
		      		<?php endif; ?>
		      	<br />
		      	<span style="font-weight: bold;">Liter:  </span>
		      	<?php echo e($agency['ag_litre']); ?> Lt
		      
<!-- <small class="text-muteda atxtsized"> 
  	<div class='rating-stars text-left'>
    <ul id='starseach' class="starseach">
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
</small> -->

		      	<br />
		      	 <a href="/profile/<?php echo e($agency['ds_title']); ?>" class="btn btn-info"> View </a>

		      </p>
		    </div>
		    <div class="card-footer">
		      <small class="text-muted">
		      	<span style="font-weight: bold;">City: </span> <?php echo e($agency['cit_name']); ?>

		      </small>
		    </div>
		  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
		  </div>
		</div>
	</div>
</div>

<div class="main_tewdvs">
	<div class="container-fluida">
		<div class="maindscs dstwone">
			<div class="containeroftwdv">
				<div class="main_tw_d1">
					<div class="main_tw_d1_head">
						<h3>What is for RO Plants</h3>
					</div>
					<div class="main_tw_d1_body">
						<p>
							RO Plants physically find customers to their services of distributing water can's. It is a complicated task to find customers for new plants or you have any references to reach to your customers.
							Our site is created to simply open an RO plants account and post your details, the customers will search for its location and will find the list of nearest RO Plants.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="maindscs dstwtwo">
			<div class="containeroftwdv">
				<div class="main_tw_d1">
					<div class="main_tw_d2_head">
						<h3>What is for Customer</h3>
					</div>
					<div class="main_tw_d2_body">
						<p>
							The customers who need water can's at their doorstep always go out and search for good water distributors, but our site make it easy to search for their location and can find nearest RO Plants distributor and can order it online to their home address. The distributors will got the orders and deliver you the water cans at your doorstep and will get cash on delivery.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div> <!-- Main Content Wrapper --->


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
<?php endif; ?><?php /**PATH E:\lara\waterapp\resources\views/main_homepage.blade.php ENDPATH**/ ?>