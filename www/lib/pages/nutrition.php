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

		$('.dailyNeeds').hide();
		$('.postWorkout').hide();

		$(document).on('click', '.btnSave', function(){
			var fatreq = $('.dailyfatReq').html();
			var proreq = $('.dailyproReq').html();
			var carbreq = $('.dailycarbReq').html();
			var bcaareq = $('.dailybcaaReq').html();
			var calreq = $('.dailycalReq').html();
			var weight = $('.curWeight').val();
			var type = $('.activitySelect :selected').val();
			var activity = $('.activitySelect :selected').text();

			$.ajax({
				url: 'lib/functions/saveCalculation.php?fat='+fatreq+'&pro='+proreq+'&carb='+carbreq+'&bcaa='+bcaareq+'&cal='+calreq+'&weight='+weight+'&activity='+activity+'&type='+type,
				type: 'GET',
				success: function(response){
					buildAlert("Your information has been saved and will appear as part of your history.");
				}
			});

		});

		$(document).on('click', '.postBtn', function(e){
			e.preventDefault();
			$('.nutritionView').hide();
			$('.postWorkout').fadeIn('fast');
			$('.subnav ul li a').removeClass('active');
			$('.postBtn').addClass('active');
			$('.small-12 h1').html($(this).html());
		});

		$(document).on('click', '.dailyBtn', function(e){
			e.preventDefault();
			$('.nutritionView').hide();
			$('.dailyNeeds').fadeIn('fast');
			$('.subnav ul li a').removeClass('active');
			$('.dailyBtn').addClass('active');
$('.small-12 h1').html($(this).html());
		});

		$(document).on('click', '#calculate', function(){
			$('.postBtn').addClass('active');
			$('.btnSave').removeClass('disabled');
			var duration = $('input[name=hours]').val();
			if($('option:selected').val() == 'Repeated High Intensity'){
				var weight = $('input[name=weight]').val();
				
				var fat = weight * 0.01;
				var pro = weight * 0.3;
				var carb = weight * 0.8;
				var bcaa = weight * 0.05;
				var cal = (pro * 4) + (fat * 9) + (carb * 4);
				var dfat = (weight * 0.3) + ((8.62 * duration * weight * 0.15) / 9);
				var dpro = (weight * 1.6) + ((8.62 * duration * weight * 0.25) / 4);
				var dcarb = (weight * 5) + ((8.62 * duration * weight * 0.6) / 4);
				var dbcaa = weight * 0.1;
				var dcal = (dpro * 4) + (dfat * 9) + (dcarb * 4);

				var fat = Math.round(fat);
				var pro = Math.round(pro);
				var carb = Math.round(carb);
				var bcaa = Math.round(bcaa);
				var cal = Math.round(cal);
				var dfat = Math.round(dfat);
				var dpro = Math.round(dpro); 
				var dcarb = Math.round(dcarb);
				var dbcaa = Math.round(dbcaa);
				var dcal = Math.round(dcal);

				$('.fatReq').html(fat + 'g');
				$('.proReq').html(pro + 'g');
				$('.carbReq').html(carb + 'g');
				$('.bcaaReq').html(bcaa + 'g');
				$('.calReq').html(cal + ' calories');

				$('.dailyfatReq').html(dfat + 'g');
				$('.dailyproReq').html(dpro + 'g');
				$('.dailycarbReq').html(dcarb + 'g');
				$('.dailybcaaReq').html(dbcaa + 'g');
				$('.dailycalReq').html(dcal + ' calories');
			} else if($('option:selected').val() == 'Endurance'){
				var weight = $('input[name=weight]').val();
			
				var fat = weight * 0.01;
				var pro = weight * 0.3;
				var carb = weight * 1.2;
				var bcaa = weight * 0.05;
				var cal = (pro * 4) + (fat * 9) + (carb * 4);

				var dfat = (weight * 0.3) + ((6.9 * duration * weight * 0.1) / 9);
				var dpro = (weight * 1.4) + ((6.9 * duration * weight * 0.2) / 4);
				var dcarb = (weight * 7) + ((6.9 * duration * weight * 0.7) / 4);
				var dbcaa = weight * 0.1;
				var dcal = (dpro * 4) + (dfat * 9) + (dcarb * 4);

				var fat = Math.round(fat);
				var pro = Math.round(pro);
				var carb = Math.round(carb);
				var bcaa = Math.round(bcaa);
				var cal = Math.round(cal);
				var dfat = Math.round(dfat);
				var dpro = Math.round(dpro); 
				var dcarb = Math.round(dcarb);
				var dbcaa = Math.round(dbcaa);
				var dcal = Math.round(dcal);

				$('.fatReq').html(fat + 'g');
				$('.proReq').html(pro + 'g');
				$('.carbReq').html(carb + 'g');
				$('.bcaaReq').html(bcaa + 'g');
				$('.calReq').html(cal + ' calories');


				$('.dailyfatReq').html(dfat + 'g');
				$('.dailyproReq').html(dpro + 'g');
				$('.dailycarbReq').html(dcarb + 'g');
				$('.dailybcaaReq').html(dbcaa + 'g');
				$('.dailycalReq').html(dcal + ' calories');
			} else if($('option:selected').val() == 'Skill'){
				var weight = $('input[name=weight]').val();
			
				var fat = weight * 0.01;
				var pro = weight * 0.3;
				var carb = weight * 0.3;
				var bcaa = weight * 0.05;
				var cal = (pro * 4) + (fat * 9) + (carb * 4);

				var dfat = (weight * 0.3) + ((5.17 * duration * weight * 0.2) / 9);
				var dpro = (weight * 1.8) + ((5.17 * duration * weight * 0.3) / 4);
				var dcarb = (weight * 5) + ((5.17 * duration * weight * 0.5) / 4);
				var dbcaa = weight * 0.1;
				var dcal = (dpro * 4) + (dfat * 9) + (dcarb * 4);

				var fat = Math.round(fat);
				var pro = Math.round(pro);
				var carb = Math.round(carb);
				var bcaa = Math.round(bcaa);
				var cal = Math.round(cal);
				var dfat = Math.round(dfat);
				var dpro = Math.round(dpro); 
				var dcarb = Math.round(dcarb);
				var dbcaa = Math.round(dbcaa);
				var dcal = Math.round(dcal);

				$('.fatReq').html(fat + 'g');
				$('.proReq').html(pro + 'g');
				$('.carbReq').html(carb + 'g');
				$('.bcaaReq').html(bcaa + 'g');
				$('.calReq').html(cal + ' calories');

				
				$('.dailyfatReq').html(dfat + 'g');
				$('.dailyproReq').html(dpro + 'g');
				$('.dailycarbReq').html(dcarb + 'g');
				$('.dailybcaaReq').html(dbcaa + 'g');
				$('.dailycalReq').html(dcal + ' calories');
			}
		});
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
		<i>By clicking the save button, you are saving the details of this workout and nutritional requirements.  You will be able to see them on your history page.</i>
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
