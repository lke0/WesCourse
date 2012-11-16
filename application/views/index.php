<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Wesleyan Course Recommendation</title>
	<link rel="stylesheet" type="text/css" href="/public/css/main.css">
	<link rel="stylesheet" type="text/css" href="/public/css/index.css">
</head>
<body>

<div id="container">
	<h1>WesCourse</h1>

	<div id="instruction">
		<div class="left">
			
		</div>
		<div class="right">
			<div id="s1" class="steps">
			<p>WesCourse is a course recommendation engine for Wesleyan students. When you are considering about the course to take, WesCourse could give you recommendation from people who have taken similar course to you, who have same major as you, who in a same class year, and more. </p>
			<p>WesCourse is customized for Wesleyan student, and we need you to help us build up this system. What you did in next 3 minutes (4 steps) could help many students in future.</p> 
			</div>
			<div id="s2" class="steps">
			<p>Drag this bookmark to your Bookmarks Bar. </p>
			<a id="bookmark" href="javascript:(function(){var form=document.createElement('form');form.setAttribute('method','post');form.setAttribute('action','http://localhost:8888/recommend');var rows=parent.frame2.document.getElementsByTagName('table')[0].getElementsByTagName('tr');for(var i=0;i<rows.length;i++){var cid=rows[i].getElementsByTagName('td')[2];if(cid!=undefined){var a=cid.getElementsByTagName('a')[0];if(a!=undefined){var link=a.href;if(link!=undefined){var courseID=document.createElement('input');courseID.setAttribute('type','hidden');courseID.setAttribute('name','courseID[]');courseID.setAttribute('value',link.substring(60,66));form.appendChild(courseID);var termID=document.createElement('input');termID.setAttribute('type','hidden');termID.setAttribute('name','termID[]');termID.setAttribute('value',link.substring(72,76));form.appendChild(termID)}}}}document.body.appendChild(form);form.submit()}());">WesCourse</a>
			<p id="bookmark-arrow">]</p>
			</div>
			<div id="s3" class="steps">
				<p>Go to your Wesleyan academic history page under Student Portfolio. Simply click the bookmark. It will only collect the courses you have taken. </p>
				<p>This script will NOT collect anything relate to your name or your grade. </p>
				<p class="warning">Your data is totally anonymous! : )</p>
			</div>
		</div>
		
	</div>
	<div id="footer">
	We are looking for more UI designer and front-end engineer. If you are interesting at joining this project, please contact lke@wes.
	</div>

</div>


</body>
</html>