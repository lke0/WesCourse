

$(document).ready(function() {
    $("button")
        .button()
        .click(function( event ) {
			$('button').unbind('click');
			
			input['major'] = [];
			$('.major').each(function() {
				var thisMajor = parseInt($(this).val());
				var isNew = true;
				for (var i = 0; i<input['major'].length; i++) {
					if (thisMajor == input['major'][i]) {
						isNew = false;
						break;
					}
				}
				if (isNew) input['major'].push(thisMajor);
			});
			
			$('#s2 .loader').css('display', 'inline-block');
			jQuery.ajax({
			        type: "POST",
			        url: "http://localhost:8888/recommend/upload",
			        data:  {'courses[]': input['courses'], 'major[]': input['major'] },
			        dataType: "json",
			        success: function (msg) 
			                { $('#s2 .loader').hide();},
			        error: function (err)
			        { $('#s2 .loader').hide();}
			    });
			$('#s2 .success').css('display', 'inline-block');
			// $.post("http://localhost:8888/recommend/upload", {'courses[]': input['courses'], 'major[]': input['major'] },
			//   function(){
			// 	debugger;
			// 	$('#s2 .loader').hide();
			//   }, "json");
			$(".progress-bar").progressbar({
				create:function(event, ui){
					$(".progress-bar").progressbar({ value: 33 });
				}	
			});
        });

	
});




