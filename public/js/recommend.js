

$(function() {
    $( "button" )
        .button()
        .click(function( event ) {
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
			
			alert(input['courses'].join('\n'));
			alert(input['major'].join('\n'));
        });
});