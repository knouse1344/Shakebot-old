<?php session_start();

require '../../config.php';  
require '../functions/functions.php';
require '../classes/classes.php'; ?>
<script>
	$(document).ready(function(){

		$('input[name=hours]').on('change', function(){
			if($(this).val() < 0){
				$(this).val('0');			
			}
		});

		if ($(activetile == "nutrition")) {
	      $(tiles).removeClass("active");
	      $(tile_nut).addClass("active");
	    } else if ($(activetile == "history")) {
	      $(tiles).removeClass("active");
	      $(tile_his).addClass("active");
	    } else if ($(activetile == "settings")) {
	      $(tiles).removeClass("active");
	      $(tile_set).addClass("active");
	    } else if ($(activetile == "research")) {
	      $(tiles).removeClass("active");
	      $(tile_set).addClass("active");
	    };	

	});
</script>
<div class="">
	
	<div class="small-4 columns">
		<h3 class="title">Your Activities</h3>
		<form class="stats-input">
			<div class="row">
				<div class="large-12 columns">
				  <label>Weight (kg)
				    <input type="number" class="curWeight" name="weight" value="<?php echo $loggedInUser->weight; ?>" />
				  </label>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>Height
						<p><?php echo $loggedInUser->heightfeet; ?></p>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
				  <label>Select Box
				    <select name="activity" class="activitySelect"><?php getActivities(); ?></select>
				  </label>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>Duration in hours
						<input type="number" name="hours" placeholder="Duration in hours" />
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<button class="button" id="calculate">Calculate</button><button class="button buttonSuccess btnSave disabled">Save</button>
				</div>
			</div>
		</form>
	</div>
	
	<div class="small-4 columns postWorkout nutritionView">
		<h3 class="title">Nutritional Needs</h3>
		<table class="pricing-table">
			<thead>
				<tr>
				  <th></th>
				  <th>Post Workout</th>
				  <th>Daily Requirement</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				  <td>Calories: </td>
				  <td><span class="calReq"> </span></td>
				  <td><span class="dailycalReq"> </span></td>
				</tr>
				<tr>
				  <td>Fat: </td>
				  <td><span class="fatReq"> </span></td>
				  <td><span class="dailyfatReq"> </span></td>
				</tr>
				<tr>
				  <td>Protein: </td>
				  <td><span class="proReq"> </span></td>
				  <td><span class="dailyproReq"> </span></td>
				</tr>
				<tr>
				  <td>Carbohydrates: </td>
				  <td><span class="carbReq"> </span></td>
				  <td><span class="dailycarbReq"> </span></td>
				</tr>
				<tr>
				  <td>BCAA: </td>
				  <td><span class="bcaaReq"> </span></td>
				  <td><span class="dailybcaaReq"> </span></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="small-4 columns recommendedProducts">
		<h3 class="title">Recommended Product</h3>
		<div class="row">
			<div class="large-12 columns">
				<div class="row" style="border-bottom: 1px solid #ccc; margin-bottom: 2em; margin-top: 2em;">
					<div class="large-4 columns">
						<img src="img/shakebot_recommendedproduct.png" />
					</div>
					<div class="large-8 columns">
						<h4>Recommended Product 1</h4>
						<p>Protein: 18g</p>
						<p>BCAA: 20g</p>
						<p>Fast Acting</p>
					</div>
				</div>
				<div class="row" style="border-bottom: 1px solid #ccc; margin-bottom: 2em;">
					<div class="large-4 columns">
						<img src="img/shakebot_recommendedproduct.png" />
					</div>
					<div class="large-8 columns">
						<h4>Recommended Product 1</h4>
						<p>Protein: 18g</p>
						<p>BCAA: 20g</p>
						<p>Fast Acting</p>
					</div>
				</div>
				<div class="row">
					<div class="large-4 columns">
						<img src="img/shakebot_recommendedproduct.png" />
					</div>
					<div class="large-8 columns">
						<h4>Recommended Product 1</h4>
						<p>Protein: 18g</p>
						<p>BCAA: 20g</p>
						<p>Fast Acting</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- <div class="small-4 columns dailyNeeds nutritionView">
		<h3 class="title">Daily Nutritional Needs</h3>
		<ul class="pricing-table">
			<li class="bullet-item">Calories: <span class="dailycalReq"> </span></li>
			<li class="bullet-item">Fat: <span class="dailyfatReq"> </span></li>
			<li class="bullet-item">Protein: <span class="dailyproReq"> </span></li>
			<li class="bullet-item">Carbohydrates: <span class="dailycarbReq"> </span></li>
			<li class="bullet-item">BCAA: <span class="dailybcaaReq"> </span></li>
		</ul>
	</div> -->
	
	</div>
</div>
