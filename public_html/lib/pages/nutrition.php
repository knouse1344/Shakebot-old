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
<div class="row subnav">
	<ul>
		<li><a href="" class="postBtn">Post Exercise Nutritional Requirements</a></li>
		<li><a href="" class="dailyBtn">Daily Nutritional Requirements</a></li>

	</ul>
</div>
<div class=""><br />
	<div class="small-12 small-centered columns">
	<h1>My Nutrition</h1>
	</div>
	
	<div class="small-4 columns">
		<ul class="pricing-table">
			<li class="title">Step One: Activities</li>
			<li class="bullet-item"><input type="number" class="curWeight" name="weight" value="<?php echo $loggedInUser->weight; ?>" /><?php echo 'Weight is in kilograms'; ?></li>
			<li class="bullet-item"><?php echo $loggedInUser->heightfeet; ?></li>
			<li class="bullet-item"><select name="activity" class="activitySelect">
				<?php getActivities(); ?>
			</select>
		</li>
<li class="bullet-item"><input type="number" name="hours" placeholder="Duration in hours" /></li>
	<li class="bullet-item"><button class="button" id="calculate">Calculate</button>
		<button class="button buttonSuccess btnSave disabled">Save</button></li>
		<p class="disclaimer">By clicking the save button, you are saving the details of this workout and nutritional requirements.  You will be able to see them on your history page.</p>
		</ul>
	</div>
	
	<div class="small-4 columns postWorkout nutritionView">
		<ul class="pricing-table">
			<li class="title">Post Workout Nutritional Needs</li>
			<li class="bullet-item">Calories: <span class="calReq"> </span></li>
<li class="bullet-item">Fat: <span class="fatReq"> </span></li>
<li class="bullet-item">Protein: <span class="proReq"> </span></li>
<li class="bullet-item">Carbohydrates: <span class="carbReq"> </span></li>
<li class="bullet-item">BCAA: <span class="bcaaReq"> </span></li>
		</ul>
	</div>
	
	<div class="small-4 columns dailyNeeds nutritionView">
		<ul class="pricing-table">
			<li class="title">Daily Nutritional Needs</li>
			<li class="bullet-item">Calories: <span class="dailycalReq"> </span></li>
<li class="bullet-item">Fat: <span class="dailyfatReq"> </span></li>
<li class="bullet-item">Protein: <span class="dailyproReq"> </span></li>
<li class="bullet-item">Carbohydrates: <span class="dailycarbReq"> </span></li>
<li class="bullet-item">BCAA: <span class="dailybcaaReq"> </span></li>
		</ul>
	</div>
	
	</div>
</div>
