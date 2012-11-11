<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Wesleyan Course Recommendation</title>
	<link rel="stylesheet" type="text/css" href="/public/css/main.css">
	<link rel="stylesheet" type="text/css" href="/public/css/recommend.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
	<script src="/public/js/recommend.js"></script>
	<script>
    </script>
</head>
<body>

<div id="container">
	<h1>WesCourse</h1>
	<div id="recommend">
		<div class="left">
			
		</div>
		<div class="right">
			<div id="s1" class="steps">
				Choose major
				<select class="major" id="1">
				  <option value="0">Math</option>
				  <option value="1">Econ</option>
				  <option value="2">Comp</option>
				  <option value="3">Music</option>
				</select>
				<select class="major" id="1">
				  <option value="0">Math</option>
				  <option value="1">Econ</option>
				  <option value="2">Comp</option>
				  <option value="3">Music</option>
				</select>
				<select class="major" id="1">
				  <option value="0">Math</option>
				  <option value="1">Econ</option>
				  <option value="2">Comp</option>
				  <option value="3">Music</option>
				</select>
			</div>
			<div id="s2" class="steps">
				I allow
				<button>Submit</button>
			</div>
			<div id="s3" class="steps">
				Recommendation is coming.
				<br/>
				processing bar
				<br/>
				Thank you so much for you help!
				Tell more friends in Facebook!
			</div>
	
			
		</div>
		
	</div>
	
	<div id="footer">
	We are looking for more UI designers and front-end engineers. If you are interested in joining this project, please contact lke@wes.
	</div>
</div>

<script>
var input = [];
input['courses'] = [];
<?php foreach ($courses as $course ): ?>
	input['courses'].push([<?=$course[0]?>,<?=$course[1]?>]);
<?php endforeach; ?>

</script>



</body>
</html>