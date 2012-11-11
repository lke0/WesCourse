javascript:(function(){ 
	var form = document.createElement('form');
	form.setAttribute('method', 'post');
	form.setAttribute('action', 'http://localhost:8888/recommend');
	
	var rows = parent.frame2.document.getElementsByTagName('table')[0].getElementsByTagName('tr');
	for (var i = 0; i < rows.length; i++) {
		var cid = rows[i].getElementsByTagName('td')[2];
		if (cid != undefined) {
			var a = cid.getElementsByTagName('a')[0];
			if (a != undefined) {
				var link = a.href;
				if (link != undefined) {
					var courseID = document.createElement('input');
					courseID.setAttribute('type', 'hidden');
		            courseID.setAttribute('name', 'courseID[]'); 
					courseID.setAttribute('value',link.substring(60, 66));
					form.appendChild(courseID);
					var termID = document.createElement('input');
					termID.setAttribute('type', 'hidden');
		            termID.setAttribute('name', 'termID[]'); 
					termID.setAttribute('value', link.substring(72, 76));
					form.appendChild(termID);
				}
			}	
		}
	}
	document.body.appendChild(form);
	form.submit();
}());

//Compress
//http://jscompress.com/


javascript:(function(){var form=document.createElement('form');form.setAttribute('method','post');form.setAttribute('action','http://localhost:8888/recommend');var rows=parent.frame2.document.getElementsByTagName('table')[0].getElementsByTagName('tr');for(var i=0;i<rows.length;i++){var cid=rows[i].getElementsByTagName('td')[2];if(cid!=undefined){var a=cid.getElementsByTagName('a')[0];if(a!=undefined){var link=a.href;if(link!=undefined){var courseID=document.createElement('input');courseID.setAttribute('type','hidden');courseID.setAttribute('name','courseID[]');courseID.setAttribute('value',link.substring(60,66));form.appendChild(courseID);var termID=document.createElement('input');termID.setAttribute('type','hidden');termID.setAttribute('name','termID[]');termID.setAttribute('value',link.substring(72,76));form.appendChild(termID)}}}}document.body.appendChild(form);form.submit()}());