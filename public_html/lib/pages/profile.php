<?php session_start();

require '../../config.php';  
require '../functions/functions.php';
require '../classes/classes.php'; ?>
<script>
$(document).ready(function(){



	var subpage = location.hash.split('/');
	

	$('.tile').on('mouseenter', function(){
		$(this).find('.delete').fadeIn('fast');
		$(this).find('.edit').fadeIn('fast');
	});

	$('.tile').on('mouseleave', function(){
		$(this).find('.delete').fadeOut('fast');
		$(this).find('.edit').fadeOut('fast');
	});

	$(document).on('click', '.delete', function(){
		$(this).parent().slideUp(function(){
			$(this).remove();
		});
	});

	$("#fileuploader2").uploadFile({
			url:"/lib/functions/uploadCover.php",
			fileName:"files",
			onSuccess:function(files,data,xhr){
			alert(data);
			$('.cover-photo').css('background-image', 'url(' + data + ')');
			}
		});

	$('.tileContainer').sortable();
});
</script>

<div class="row rowFull">
	<div class="small-10 small-centered columns cover-photo">
	
	
	<div class="row">

	
		<div id="profileHeaderDynamic" class="small-3 columns">
		<div id="avatar" style="background-image:url('<?php echo $loggedInUser->avatar; ?>');">

			</div>
			<h2><?php echo $loggedInUser->fullname; ?></h2>
			<p class="headerActivities">
			<?php if($loggedInUser->dispAct == 'Display'){
				?>
				<b>Primary Activity:</b> <?php echo ''.$loggedInUser->activity; ?>
				<?php } ?>

				<?php if($loggedInUser->dispHeight == 'Display'){
				?>
				<b>Height:</b> <?php echo $loggedInUser->heightfeet; ?>
				<br />
				<?php } ?>

				<?php if($loggedInUser->dispWeight == 'Display'){
				?>
				<b>Weight:</b> <?php echo $loggedInUser->weight . ' ' . $loggedInUser->weighttype; ?>
<?php } ?>
		</p>

			
		</div>
		<div class="small-9 columns tileBottom">
		<div class="tiles">
		
		<div class="tileContainer">
	

	<!-- Tile -->
	

			<!-- Tile -->
		<span class="tile wide" data-href="nutrition">
		<span class="delete">
		&times;</span>
		<span class="edit">
		<span class="fa fa-pencil">

		</span>
		</span>
		<i class="tileIcon fa fa-heartbeat"></i>
		<span class="tileTitle">My Nutrition</span></span>

			<!-- Tile -->
		<span class="tile wide" data-href="history">
		<span class="delete">
		&times;</span>
		<span class="edit">
		<span class="fa fa-pencil">

		</span>
		</span>
		<i class="tileIcon fa fa-calendar"></i>
		<span class="tileTitle">History</span></span>

		<!-- Tile -->
		<span class="tile wide" data-href="settings">
		<span class="delete">
		&times;</span>
		<span class="edit">
		<span class="fa fa-pencil">

		</span>
		</span>
		<span class="tileIcon fa fa-user"> </span>
		<span class="tileTitle">Profile</span></span>

			<!-- Tile -->
		<!--<span class="tile wide success" data-href="activities">
		<span class="delete">
		&times;</span>
		<span class="edit">
		<span class="fa fa-pencil">

		</span>
		</span>
		<span class="tileIcon fa fa-bicycle"> </span>
		<span class="tileTitle">My Activities</span></span>-->

		

			<!-- Tile -->
		<span class="tile wide" data-href="research">
		<span class="delete">
		&times;</span>
		<span class="edit">
		<span class="fa fa-pencil">

		</span>
		</span>
		<i class="tileIcon fa fa-search"></i>
		<span class="tileTitle">Research</span></span>
		


		<?php if($loggedInUser->accountType == 'coach'){
			?>
<span class="tile" data-href="settings">
		<span class="delete">
		&times;</span>
		<span class="edit">
		<span class="fa fa-pencil">

		</span>
		</span>
		<i class="tileIcon fa fa-th"></i>
		<span class="tileTitle">Coach View</span></span>
			<?php
		} ?>


		</div>
		</div>
		<div class="controlButtons">
<div class="coverFormContainer">
	
		<div id="fileuploader2">Change Background</div>
		</div>

		<div class="customizeButtons">
<button data-tooltip title="Add Tiles" class="addButton"><span class="fa fa-plus"> </span></button>
	<button data-tooltip title="Remove Tiles" class="removeButton"><span class="fa fa-minus"> </span></button>
		</div>
		</div>
		</div>
<!--
		<div class="small-9 columns">
			<b>Height: </b><?php echo $loggedInUser->height; ?>"<br />
			<b>Weight: </b><?php echo $loggedInUser->weight; ?> lbs<br />
		</div>
		-->

	</div>
	<!--
	<div class="row profile-menu">
		<ul class="profile-nav">
		<li><a href="" class="active">Dashboard</a></li>
		<li><a href="">Nutrition</a></li>
		<li><a href="">History</a></li>
		<li><a href="">Friends</a></li>
		<li><a href="">Settings</a></li>

		</ul>

	</div>
-->



	</div>
</div>
<div class="row contentRow">
<div class="small-10 columns">
<div class="row profilePage">

	</div>
	</div>

	<div class="small-3 columns">
	<div class="shakebotProducts">
	<ul class="shakebot-products-footer">
					<li><a ui-sref="products" href="#/products"><img src="img/shopping-placeholder.jpg" class="footer-img">
					<span class="footer-link">Shakebot Product 1<br>
					$24.99</span></a>
					</li>
					<li><a ui-sref="products" href="#/products"><img src="img/shopping-placeholder.jpg" class="footer-img">
					<span class="footer-link">Shakebot Product 2<br>
					$24.99</span></a>
					</li>
					<li class="recommended"><a ui-sref="products" href="#/products"><img src="img/shopping-placeholder.jpg" class="footer-img">
					<span class="footer-link">Shakebot Product 3<br>
					$24.99</span></a>
					</li>
					</ul>
	</div>
	</div>
	</div>
