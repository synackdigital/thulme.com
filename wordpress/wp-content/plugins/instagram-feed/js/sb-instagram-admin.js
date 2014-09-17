jQuery(document).ready(function($) {

	//Autofill the token and id
	var hash = window.location.hash,
        token = hash.substring(14),
        id = token.split('.')[0];
    //If there's a hash then autofill the token and id
    if(hash){
        $('#sbi_config').append('<div id="sbi_config_info"><p><b>Access Token: </b><input type="text" size=50 readonly value="'+token+'"></p><p><b>User ID: </b><input type="text" size=10 readonly value="'+id+'"></p><p>Copy and paste these into the fields below, or use a different Access Token and User ID if you wish.</p></div>');
    }
	
	//Tooltips
	jQuery('#sbi_admin .sbi_tooltip_link').click(function(){
		jQuery(this).closest('tr').find('.sbi_tooltip').slideToggle();
	});

    //Add the color picker
	if( jQuery('.sbi_colorpick').length > 0 ) jQuery('.sbi_colorpick').wpColorPicker();

});