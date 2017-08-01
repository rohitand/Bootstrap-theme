/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : R_GENESIS
PROJECT : RGen Landing Page with Page Builder
URL : http://themeforest.net/item/rgen-landing-page-with-page-builder/13244840
This file licensed to R_GENESIS (http://themeforest.net/user/r_genesis) and it’s strictly prohobited to copy or reuse it.
Copyright 2015-2016 R.Genesis.Art
++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

var package_ver = 'v2.08';
var rgenFn = {};

rgenFn.db = {
	storage: {},
	css: [],
	customcss: [],
	sandbox_tmp: '',
	seo: '',
	mailsubscribe: {
		type: 'mailchimp',
		settings: {}
	}
}

/* Style builder
********************************************/
rgenFn.styleObj = {
	position: {
		position: "static",
		top: "",
		right: "",
		bottom: "",
		left: ""	
	},
	text: {
		text_align: "left",
		font_size: "14px",
		font_weight: "",
		color: "",
		text_transform: "",
		line_height: ""
	},
	background: {
		background_color: "",
		background_image: "",
		background_position: "",
		background_repeat: "",
		background_size: "",
		background_attachment: "",	
	},
	margin: {
		margin_top: '',
		margin_right: '',
		margin_bottom: '',
		margin_left: ''
	},
	padding: {
		padding_top: '',
		padding_right: '',
		padding_bottom: '',
		padding_left: ''
	},
	border: {
		border_top_style: '',
		border_right_style: '',
		border_bottom_style: '',
		border_left_style: '',

		border_top_width: '',
		border_right_width: '',
		border_bottom_width: '',
		border_left_width: '',
		
		border_top_color: '',
		border_right_color: '',
		border_bottom_color: '',
		border_left_color: ''
	},
	wh: {
		width: "",
		height: ""
	},
	min_wh: {
		min_width: "",
		min_height: "",
	},
	max_wh: {
		max_width: "",
		max_height: ""
	},
	other: {
		opacity: 0
	}
}

rgenFn.styleEditor = {
	rgen_el: {},
	rgen_id: '',
	section: '',
	sandbox_id: '',
	new: {
		status: true,
		stylingStatus: {
			position_section: false,
			text_section: false,
			background_section: false,
			margin_section: false,
			padding_section: false,
			border_section: false,
			wh_section: false,
			min_wh_section: false,
			max_wh_section: false,
			other_section: false,
			customstyle_section: true
		},
		stylingData: rgenFn.styleObj,
		customstyle: ''
	},
	old: {},
	imgupload: {},
	result: '',
	customstyle: ''

}


rgenFn.styleUpdate = function(el) {
	'use strict';

	var new_style_obj = {};
	var new_status_obj = {};

	if (!rgenFn.elcheck(el, 'rgen-id')) {
		var uid = rgenFn.uid();
		$(el).attr("rgen-id",uid);
		
		if (rgenFn.hasSandbox($(el))) {
			var sandboxId = rgenFn.hasSandbox($(el)),
				elementID = '[data-sandboxid="'+$(el).attr('data-sandboxid')+'"]';
			$('#'+sandboxId).contents().find(elementID).attr("rgen-id",uid);
		}
	}

	$.each(rgenFn.styleObj, function(index, val) {
		new_style_obj[index] = val;
		$.each(rgenFn.styleObj[index], function(k, v) {
			var key_name = k;
			if (_.strContains(k, "_")) {
				key_name = k.replace(/_/g, '-');
			}
			new_style_obj[index][k] = $(el).css(key_name);
		});
	});

	if (_.strContains(new_style_obj['background']['background_image'], "url(")) {
		var bgimg = new_style_obj['background']['background_image'];
			bgimg = _ld.replace(bgimg, 'url("', '');
			bgimg = _ld.replace(bgimg, '")', '');

		new_style_obj['background']['background_image'] = bgimg;
	}

	var new_style_data = $.extend(true, rgenFn.styleObj, new_style_obj);
	
	rgenFn.styleEditor.rgen_el = $(el);
	rgenFn.styleEditor.rgen_id = $(el).attr("rgen-id");
	rgenFn.styleEditor.section = $('#'+getParentFrameID(el)).closest('li');
	rgenFn.styleEditor.sandbox_id = rgenFn.hasSandbox($(el));
	rgenFn.styleEditor.new.stylingData = new_style_data;


	var localDB = _.load('rgen_db');
	var custom_style = _.getById(localDB.css, rgenFn.styleEditor.rgen_id);
	rgenFn.styleEditor['new']['customstyle'] = custom_style ? custom_style['customstyle_new'] : '';

	angular.copy(rgenFn.styleEditor.new, rgenFn.styleEditor.old);

	$("[ng-stylewrp]").click();
	//$("[ng-styledirective]").click();
	return rgenFn.styleEditor;
}


/* Form cases
********************************************/
rgenFn.formEditor = {
	rgen_el: {},
	rgen_id: '',
	sandbox_id: '',
	formfield: false,
	new: {
		status: true,
		to: '',
		formData: {
			datalabel: "Label text",
			required: false, 
			datamsg: "Validation message",
			name: "name",
			placeholder: "Enter your name",
			default_value: ''	
		}
		
	},
	old: {},
	result: '',
	customstyle: ''
}

rgenFn.formUpdate = function(el) {
	'use strict';

	var new_form_obj = angular.copy(rgenFn.formEditor.new.formData);
	var element = $(el);

	if (!rgenFn.elcheck(el, 'rgen-id')) {
		$(el).attr("rgen-id",rgenFn.uid());
	}

	if (element.hasClass('field-wrp')) {
		rgenFn.formEditor['new']['to'] = element.find('[name="to"]').val();
	} else {
		rgenFn.formEditor['new']['to'] = element.closest('.field-wrp').find('[name="to"]').val();
	}

	rgenFn.formEditor.rgen_el = $(el);
	rgenFn.formEditor.rgen_id = $(el).attr("rgen-id");
	rgenFn.formEditor.sandbox_id = rgenFn.hasSandbox($(el));
	
	new_form_obj['datalabel'] = element.attr('data-label') ? element.attr('data-label') : '';
	new_form_obj['required'] = element.attr('required') ? element.attr('required') : '';
	new_form_obj['datamsg'] = element.attr('data-msg') ? element.attr('data-msg') : '';
	new_form_obj['name'] = element.attr('name') ? element.attr('name') : '';
	new_form_obj['placeholder'] = element.attr('placeholder') ? element.attr('placeholder') : '';
	new_form_obj['default_value'] = element.attr('value');

	if ($(el).find('input[type="radio"]').length > 0 || $(el).find('input[type="checkbox"]').length > 0) {
		new_form_obj['datalabel'] = $(el).find('input').attr('data-label') ? $(el).find('input').attr('data-label') : '';
		new_form_obj['required'] = $(el).find('input').attr('required') ? $(el).find('input').attr('required') : '';
		new_form_obj['datamsg'] = $(el).find('input').attr('data-msg') ? $(el).find('input').attr('data-msg') : '';
		new_form_obj['name'] = $(el).find('input').attr('name') ? $(el).find('input').attr('name') : '';
		new_form_obj['placeholder'] = false;
		new_form_obj['default_value'] = $(el).find('input').attr('value');
	}

	
	$.extend(true, rgenFn.formEditor.new.formData, new_form_obj);
	angular.copy(rgenFn.formEditor.new, rgenFn.formEditor.old);

	$("[ng-formwrp]").click();
	$("[ng-formdirective]").click();

	return rgenFn.formEditor;
}


/* Icon cases
********************************************/
rgenFn.iconEditor = {
	rgen_el: {},
	rgen_id: '',
	sandbox_id: '',
	load_status: false, 
	new: {
		status: true,
		iconData: {
			type: 'font',
			name: '',
			svg: '',
			img: '',
			otherclass: ''
		}
	},
	old: {},
	result: '',
	customstyle: ''
}

rgenFn.iconUpdate = function(el) {
	'use strict';

	var new_icon_obj = angular.copy(rgenFn.iconEditor.new.iconData);
	var element = $(el);

	if (!rgenFn.elcheck(el, 'rgen-id')) {
		$(el).attr("rgen-id",rgenFn.uid());
	}

	rgenFn.iconEditor.rgen_el = $(el);
	rgenFn.iconEditor.rgen_id = $(el).attr("rgen-id");
	rgenFn.iconEditor.sandbox_id = rgenFn.hasSandbox($(el));
	rgenFn.iconEditor.load_status = true;

	var iconclass = element.attr('class');
	var clsarr = iconclass.split(" ");

	iconclass = _ld.find(clsarr, function(o) { 
		if (_.strContains(o, 'fa-') || _.strContains(o, 'pe-') || _.strContains(o, 'icon-') || _.strContains(o, 'ti-')) {
			return o;
		}
	});
	
	var otherclass = _ld.replace(element.attr('class'), iconclass, '');

	new_icon_obj['name'] = iconclass;
	new_icon_obj['otherclass'] = otherclass;

	$.extend(true, rgenFn.iconEditor.new.iconData, new_icon_obj);
	angular.copy(rgenFn.iconEditor.new, rgenFn.iconEditor.old);

	$("[ng-iconwrp]").click();
	$("[ng-icondirective]").click();

	return rgenFn.iconEditor;
}



/* Other cases
********************************************/
rgenFn.otherEditor = {
	rgen_el: {},
	rgen_id: '',
	sandbox_id: '',
	load_status: false, 
	new: {
		animateStatus: true,
		animateData: {
			class: '',
			delay: ''
		}
	},
	old: {},
	result: '',
	customstyle: ''
}
rgenFn.otherUpdate = function(el) {
	'use strict';

	var new_other_obj = angular.copy(rgenFn.otherEditor.new.animateData);
	var element = $(el);

	if (!rgenFn.elcheck(el, 'rgen-id')) {
		$(el).attr("rgen-id",rgenFn.uid());
	}

	rgenFn.otherEditor.rgen_el = $(el);
	rgenFn.otherEditor.rgen_id = $(el).attr("rgen-id");
	rgenFn.otherEditor.sandbox_id = rgenFn.hasSandbox($(el));
	rgenFn.otherEditor.load_status = true;

	var animateobj = element.attr('data-animate-in');

	if (animateobj) {
		var animatearr = animateobj.indexOf('|') > -1 ? animateobj.split('|') : animateobj;
	} else {
		var animatearr = '';
	}
	
	var animateclass = typeof animatearr == 'object' ? animatearr[0] : animatearr,
		animatedelay = typeof animatearr == 'object' ? animatearr[1] : 0;

	new_other_obj['class'] = animateclass;
	new_other_obj['delay'] = animatedelay;

	$.extend(true, rgenFn.otherEditor.new.animateData, new_other_obj);
	angular.copy(rgenFn.otherEditor.new, rgenFn.otherEditor.old);

	$("[ng-otherwrp]").click();
	$("[ng-otherdirective]").click();

	return rgenFn.otherEditor;
}


/* HELPERS
********************************************/
rgenFn.msgdata = {
	success_msg: "Changes applied successfully.",
	error_msg: "Looks like something went wrong."
}
rgenFn.pendingChanges = function () {
	setPendingChanges(true);	
}

rgenFn.dbFn = function() {
	'use strict';

	if (_.load('rgen_db') === null) {
		_.save(rgenFn.db, 'rgen_db');
	}
}
rgenFn.dbFn();

rgenFn.resetPage = function () {
	_.save(rgenFn.db, 'rgen_db');

	for(x=0; x<=99; x++) {
		localStorage.removeItem("blocksElement"+x);
		localStorage.removeItem("blocksFrame"+x);
	}
	localStorage.removeItem("pageNames");

	$.ajax({
		url: 'rgen/rgen_factory.php?route=reset',
		type: 'POST'
	})
	.done(function(data) {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	});
	
}

rgenFn.editableOn = function(arr, frame) {
	'use strict';

	var frm = $(frame).contents();
	frm.find('.edit-item').addClass('editable_el');
	/*for(var key in editableItems) {
		frm.find(key).addClass('editable_el');
	}*/
}
rgenFn.editableOff = function(arr, frame) {
	'use strict';

	var frm = $(frame).contents();
	frm.find('.edit-item').removeClass('editable_el');
	/*for(var key in editableItems) {
		frm.find(key).removeClass('editable_el');
	}*/
}

$(".screen").on('click', '.editableOn', function(event) {
	event.preventDefault();

	var activeFrame = $(this).closest('li').find('iframe');
	rgenFn.editableOn(buildFn.editableItems, activeFrame);
	$(this).parent().find('.rgen-btn').removeClass('active');
	$(this).addClass('active');
});

$(".screen").on('click', '.editableOff', function(event) {
	event.preventDefault();
	var activeFrame = $(this).closest('li').find('iframe');
	rgenFn.editableOff(buildFn.editableItems, activeFrame);
	$(this).parent().find('.rgen-btn').removeClass('active');
	$(this).addClass('active');
});


rgenFn.resetEditableClass = function () {
	$('#pageList ul li iframe').each(function(){
		$(this).contents().find('#page .edit-item').removeClass('editable_el').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
		/*for( var key in editableItems ) {
			$(this).contents().find('#page ' + key).removeClass('editable_el');
		}*/
	});
}


rgenFn.elcheck = function(el, attr) {
	'use strict';
	
	if (typeof attr === typeof undefined) {
		if ($(el).length > 0) {	return true; } else { return false;	};
	} else {
		var attrval = $(el).attr(attr);
		if (typeof attrval !== typeof undefined && attrval !== false) {
			return true;
		}else {
			return false;
		}
	}
}

rgenFn.hasSandbox = function (el) {
	var attr = $('#'+getParentFrameID( el.get(0) )).attr('data-sandbox');
	if (typeof attr !== typeof undefined && attr !== false) {
		return attr;
	} else {
		return false;
	}
}

rgenFn.hasCloneid = function (el) {
	var attr = $(el).attr('clone-id');
	if (typeof attr !== typeof undefined && attr !== false) {
		return attr;
	} else {
		return false;
	}
}

rgenFn.changeDigit = function (idVal) {
	var num = idVal;
		num = ""+num;
		while(num.length < 3) num = "0"+num;
		return num;
}

rgenFn.uid = function(){
	'use strict';
	var uid = "";
	var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	for(var i=0; i < 3; i++)
	uid += possible.charAt(Math.floor(Math.random() * possible.length));
	return 'rg'+uid;
	//return ("0000" + (Math.random()*Math.pow(36,4) << 0).toString(36)).slice(-4);
}

rgenFn.setId = function(obj, prefix, n) {
	'use strict';

	n++;
	var a = prefix+n;
	$(obj).css({opacity:0});
	$(obj).attr("id", a);
	$(obj).addClass(a);

	// Accordion setup
	if ($(obj).is(".accordion-widget")) {
		$(obj).find(".acc-block").each(function(index, el) {
			var id = a+"-acc-block-"+index;
			$(this).find(".acc-hd").attr("data-accid", "#"+id);
			$(this).find(".acc-content").attr("id", id);
			if ($(this).find(".acc-hd > i").length == 0) {
				$(this).find(".acc-hd").append('<i class="acc-open '+$(obj).attr("data-acc-openclass")+' "></i><i class="acc-close '+$(obj).attr("data-acc-closeclass")+'"></i>');	
			}
			
		});
	}
}

rgenFn.getMultiScripts = function(arr, path) {
	var _arr = $.map(arr, function(scr) {
		return $.getScript( (path||"") + scr );
	});

	_arr.push($.Deferred(function( deferred ){
		$( deferred.resolve );
	}));

	return $.when.apply($, _arr);
}

rgenFn.utility_status = false;
rgenFn.demo = false;

rgenFn.utility = function(obj) {

	var utility = $("#utilityWrapper");
	$("#frameWrapper").hide();
	utility.show();

	//$('#styleEditor').animate({'left': '-400px'}, 250);
	$('#styleEditor').css({left: '-400px'});
}

/*=============================================
=            Editor script            =
=============================================*/
rgenFn.editor = function (wrp, mode) {
	'use strict';

	var theEditor = $('<div class="aceEditor1"></div>');
	var h = $(wrp).attr("data-editor-height") ? parseInt($(wrp).attr("data-editor-height")) : 400;
	
	theEditor.uniqueId();
	theEditor.height(h);
	$(wrp).append(theEditor);

	var theId = theEditor.attr('id');

	var editor = ace.edit( theId );
	editor.setTheme("ace/theme/xcode");
	editor.getSession().setMode("ace/mode/"+mode);

	return editor;
}
/*=====  End of Editor script  ======*/

rgenFn.tabs = function(obj) {
	'use strict';

	if ($(obj.tb).hasClass('tabs-auto')) {
		var t = 0;
		$(obj.tb).find('.tb-list > .tb').each(function(){
			var tb = obj.count+'-tb-'+t;
			$(this).attr("data-tb", '#'+tb);
			$(obj.tb).find('.tb-content > .tb-pn:eq('+t+')').attr("id", tb);
			t++;
		});

		$(obj.tb).on('click', '.tb-list > .tb', function (e) {
			e.preventDefault();
			
			$(this).closest('.tb-list').find('.tb').removeClass('active');
			$(this).addClass('active');

			var target = $(this).attr('data-tb');
			$(target).siblings('.tb-pn').removeClass('active');
			$(target).addClass('active');
			
		});
		if ($(obj.tb).find('.tb-list > .tb').hasClass('active')) {
			$(obj.tb).find('.tb-list > .tb.active').click();
		} else {
			$(obj.tb).find('.tb-list > .tb:first').click();	
		};

	} else {
		$('[data-tb]').each(function(index, el) {
			var target = $(this).attr('data-tb');
			$(target).addClass('tab-pn');
		});
		$(obj).on('click', function (e) {
			e.preventDefault();
			
			$(obj).closest('.tab-widget').find('[data-tb]').removeClass('active');
			$(this).addClass('active');

			var target = $(this).attr('data-tb');
			$(target).siblings('.tab-pn').hide();
			$(target).show().addClass('active');
			
		}).eq(0).click();
	};
	
}

rgenFn.accordion = function(obj) {
	'use strict';

	function close_acc(parent_obj) {
		$(parent_obj).find('.acc-hd').removeClass('active');
		$(parent_obj).find('.acc-content').stop().slideUp(200).removeClass('open');
	}

	$(obj).animate({opacity:1}, 500, function(){});

	if ($(obj).attr("data-acc-toggle") == 'y') {
		$(obj).on('click', '.acc-hd', function(e) {
			e.stopPropagation();
			e.preventDefault();

			var content = $(this).attr('data-accid');
			if($(this).is('.active')) {
				$(this).removeClass('active');
				$(obj).find(content).stop().slideUp(200).removeClass('open');
			}else {
				// Add active class to section title
				$(this).addClass('active');
				// Open up the hidden content panel
				$(obj).find(content).stop().slideDown(200).addClass('open');
			}

		});
	} else {
		$(obj).on('click', '.acc-hd', function(e) {
			e.stopPropagation();
			e.preventDefault();

			var content = $(this).attr('data-accid');
			if($(this).is('.active')) {
				close_acc(obj);
			}else {
				close_acc(obj);

				// Add active class to section title
				$(this).addClass('active');
				// Open up the hidden content panel
				$(obj).find(content).stop().slideDown(200).addClass('open');
			}

		});
	}
	

	// First open option
	if ($(obj).attr("data-acc-firstopen") == 'y') {
		$(obj).find(".acc-block:first .acc-hd").click();
	}else{
		close_acc(obj);
	}
	
}

rgenFn.inlinePopup = function (obj) {
	'use strict';
	$('body').off('click').on('click', obj, function(e) {
		$(this).magnificPopup({
			type: 'inline',
			preloader: false
		}).click();	
	});
}

rgenFn.filter = function (obj) {

	$(obj).animate({opacity:1}, 500, function(){});
	var filterObj = $(obj);
	var container = filterObj.find('.filter-container');
	var list = filterObj.find('.filter-list');

	list.find('[data-filter]').on('click', function(event) {
		event.preventDefault();
		
		var filter = $(this).attr("data-filter");

		list.find("[data-filter]").removeClass('active');
		$(this).addClass('active');

		container.find('.filter-content').hide();

		if(filter == 'all') {
			container.find('.filter-content').stop().fadeIn('slow');
		} else {
			$(filter).stop().fadeIn('slow');
		}
	});

	list.find('.active') ? list.find('.active').trigger('click') : list.find('[data-filter]').first().trigger('click');
}


rgenFn.loader = {
	on: function(element, bgColor, fsize, msg){
		var msg = msg && msg != '' ? msg : 'Please wait...';
		var bgColor = bgColor && bgColor != '' ? bgColor : '#fff';
		var fsize = fsize && fsize != '' ? fsize : '12px';

		$(element).block({
			css: { 
				top: '10%',
				border: 'none', 
				padding: '50px 20px 20px 20px', 
				backgroundColor: '#fff', 
				'-webkit-border-radius': '10px', 
				'-moz-border-radius': '10px', 
				opacity: 0.7, 
				color: '#333',
				fontSize: fsize,
				fontWeight: "normal"
			},
			overlayCSS:{ backgroundColor: bgColor, opacity: 0.8 },
			message: ''+msg+''
		});
	},
	off: function(element){
		$(element).unblock();
	}
}

rgenFn.init = function(el) {

	var sandbox = $(el).find('iframe').attr('data-sandbox');
	if (typeof sandbox !== typeof undefined && sandbox !== false) {
		sandbox_id = sandbox;
	} else {
		sandbox_id = false;
	}


	$(el).find('iframe').load(function(){
		var frm_parent = el;
		var frm = this;

		// Apply height on iframe
		setTimeout(function(){
			var frm_h = $(frm).contents().find("body").height();

			$(frm_parent).css({
				height: frm_h
			});

			$(frm).css({
				height: frm_h
			});
		}, 600);
	});
}

;(function(){
	'use strict';

	jQuery(document).ready(function($) {

		
		$('html').before('<!-- '+package_ver+' -->');
		$('.rgenlogo').html('<b>'+package_ver+'</b>');

		/* Normal popup
		********************************************/
		if (rgenFn.elcheck(".set-popup")) {
			$(".set-popup").each(function(index, el) {
				$(this).magnificPopup({
					type: 'inline',
					preloader: false
				});
			});
		}
		$('.verify-img').magnificPopup({type:'image'});


		/* Tab widget
		********************************************/
		if (rgenFn.elcheck(".tab-widget")) {
			$(".tab-widget").each(function(index, el) {
				var obj = $(this).find('[data-tb]');
				rgenFn.tabs(obj);
			});
		}

		if (rgenFn.elcheck(".tabs-auto")) {
			$(".tabs-auto").each(function(index, el) {
				var tabObj = {
					count: index,
					tb: this
				}
				rgenFn.tabs(tabObj);
			});
		}

		
		/* Accordion widget
		********************************************/
		if (rgenFn.elcheck(".accordion-widget")) {
			var acc = 0;
			$('.accordion-widget').each(function(){

				// SET ID ON ALL OBJECTS
				rgenFn.setId(this, 'accwidget', index);
				rgenFn.accordion(this);
			});
		}
		

		/* Filter widget
		********************************************/
		if (rgenFn.elcheck(".filter-widget")) {
			$(".filter-widget").each(function(index, el) {
				rgenFn.setId(this, 'filterwidget', index);
				rgenFn.filter(this);
			});
		}

		


	});
})();