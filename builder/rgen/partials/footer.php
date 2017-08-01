		<script>
		var tpl = function (file, type) {
			if (type == 'html') {
				return file+'.html';
			};
			if (type == 'dir') {
				return 'rgen/admin/template/directive/'+file+'.html?v='+package_ver;	
			};
		}
		</script>

		<!-- Load JS here for greater good =============================-->
		<script src="rgen/lib/jquery/jquery-1.11.2.min.js"></script>
		<!-- <script src="js/jquery-1.8.3.min.js"></script> -->
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<script src="js/Magnific-Popup/jquery.magnific-popup.min.js"></script>
		
		<script src="js/jquery.form.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-select.js"></script>
		<script src="js/bootstrap-switch.js"></script>
		<script src="js/flatui-checkbox.js"></script>
		<script src="js/flatui-radio.js"></script>
		<script src="js/jquery.tagsinput.js"></script>
		<script src="js/flatui-fileinput.js"></script>
		<script src="js/jquery.placeholder.js"></script>
		<script src="js/jquery.zoomer.js"></script>
		<script src="js/application.js"></script>
		<script src="js/spectrum.js"></script>
		<script src="js/chosen.jquery.min.js"></script>
		<script src="js/redactor/redactor.min.js"></script>
		<script src="js/redactor/table.js"></script>
		<script src="js/redactor/bufferButtons.js"></script>
		<script src="js/src-min-noconflict/ace.js"></script>
		<script src="elements.json"></script>

		<!-- All RGen files -->
		<!-- <script src="rgen/lib/lowdb/lowdb.min.js"></script> -->
		<script src="rgen/lib/lodash/lodash.min.js"></script>
		<script>var _ld = _.noConflict();</script>

		<?php 
		$date = date_create();
		$timeStamp = date_format($date, 'U = Y-m-d H:i:s');
		?>
		<script src="rgen/minify/rgen_lib.js"></script>
		<script src="rgen/minify/rgen_min.js"></script>
		<script src="rgen/js/rgen.js?v=<?php echo md5($timeStamp); ?>"></script>
		<!-- End : All RGen files -->

		<script src="js/builder.js?v=<?php echo md5($timeStamp); ?>"></script>

		<script>
		$(function(){
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf("MSIE ");
		})    
		</script>
	</body>
</html>