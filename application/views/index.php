<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Wesleyan Course Recommendation</title>
	<link rel="stylesheet" type="text/css" href="/public/css/main.css">
</head>
<body>

<div id="container">
	<h1>WesCourse</h1>

	<div id="instruction">
		<div class="left">
			
		</div>
		<div class="right">
			<div id="s1" class="steps">
			intro
			</div>
			<div id="s2" class="steps">
			Drag this bookmark to your Bookmarks Bar. 
			<a href="javascript:(function(){var form=document.createElement('form');form.setAttribute('method','post');form.setAttribute('action','http://localhost:8888/recommend');var rows=parent.frame2.document.getElementsByTagName('table')[0].getElementsByTagName('tr');for(var i=0;i<rows.length;i++){var cid=rows[i].getElementsByTagName('td')[2];if(cid!=undefined){var a=cid.getElementsByTagName('a')[0];if(a!=undefined){var link=a.href;if(link!=undefined){var courseID=document.createElement('input');courseID.setAttribute('type','hidden');courseID.setAttribute('name','courseID[]');courseID.setAttribute('value',link.substring(60,66));form.appendChild(courseID);var termID=document.createElement('input');termID.setAttribute('type','hidden');termID.setAttribute('name','termID[]');termID.setAttribute('value',link.substring(72,76));form.appendChild(termID)}}}}document.body.appendChild(form);form.submit()}());">WesCourse</a>
			</div>
			<div id="s3" class="steps">
			Go to your Wesleyan academic history page and simply click the bookmark.
			<br/>
			Thank you so much for you help!
			</div>
			
		</div>
		
	</div>
	<div id="footer">
	We are looking for more UI designer and front-end engineer. If you are interesting at joining this project, please contact lke@wes.
	</div>

</div>


</body>
</html>