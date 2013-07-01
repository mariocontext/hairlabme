(function($) {

	    // Target your .container, .wrapper, .post, etc.
	    $("#main").fitVids();

	    // target tables in primary content area. may need to change to limit scope more if there are conflicts
	    $("#primary table").stacktable({myClass:'stacktable small-only'});


})( jQuery );

