(function($) {

	    // Target your .container, .wrapper, .post, etc.
	    $("#left-area").fitVids();

	    // target tables in primary content area. may need to change to limit scope more if there are conflicts
	    $(".mobilized-table").stacktable({myClass:'stacktable small-only'});


})( jQuery );

