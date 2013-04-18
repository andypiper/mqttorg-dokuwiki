jQuery(document).ready(function() {
	minSummaryLength = 15;
	$editButton = jQuery("#edbtn__save");
	$minorEdit = jQuery("#minoredit");
	$summary = jQuery("#edit__summary");
	$summary.keyup(enforceSummary).focus(enforceSummary);
	$minorEdit.change(enforceSummary);
	enforceSummary(); // To disable form submission on page load.
});
function enforceSummary() {
	if ($summary.val() && $summary.val().length < minSummaryLength && !$minorEdit.is(':checked')) {
		$summary.addClass("missing");
		$editButton.attr("disabled", true).css("color", "#999");
	} else {
		$summary.removeClass("missing");
		$editButton.removeAttr("disabled").css("color", "black");
	}
}
