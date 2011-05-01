/*
 * Author: Gökmen Görgen, <gokmen_alageek.com>
 */

$(function() {
    window.gkmngrgn = {};
    var gkmngrgn = window.gkmngrgn,
        sidebar = $('#sidebar ul');

    gkmngrgn.clearInput = function(field_id, term_to_clear) {
	// Clear input if it matches default value
	if ($('#' + field_id).val() == term_to_clear ) {
	    $('#' + field_id).val('');
	}

	// If the value is blank, then put back term
	else if ($('#' + field_id).val() == '' ) {
	    $('#' + field_id).val(term_to_clear);
	}
    };

    sidebar.find('h2').bind('click', function() {
        var element = $(this).parent().find('ul');
        if (element.is(':hidden')) {
            sidebar.find('ul').slideUp();
            element.slideDown();
        } else {
            element.slideUp();
        }
    });

    
});