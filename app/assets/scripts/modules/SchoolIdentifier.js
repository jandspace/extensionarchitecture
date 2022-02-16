jQuery(function($){
	// Tooltip for 30+ schools
	$( ".school.thirty > .school-link > .school-image" ).append( "<span class='icon' data-toggle='tooltip' title='Specialized classes & social programs for 30+'><img src='/assets/images/ico-fn-schools-thirty.svg' alt='30+ Schools' /></span>" );

	// Tooltip for Junior schools
	$( ".school.junior > .school-link > .school-image" ).append( "<span class='icon' data-toggle='tooltip' title='Kaplan Junior School'><img src='/assets/images/ico-fn-schools-junior.svg' alt='30+ Schools' /></span>" );

	$('[data-toggle="tooltip"]').tooltip()
})