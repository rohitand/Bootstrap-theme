</div>
<!-- /#page --> 

<!-- JavaScript --> 
<script src="minify/rgen_min.js"></script>
<script src="js/rgen.js"></script>

<script id="rgenReloadScript">
function rgenLoad(){ 
	$.getScript("js/rgen.js", function(data, textStatus, jqxhr) {
		$('[data-parallax="scroll"]').parallax();
	});
}
var d = new Date();
var n = d.getTime();
jQuery(document).ready(function($) {
	rgenLoad();
	$("#config_style").attr('href', 'css/configstyle.css?'+n);
});
</script>