/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : R_GENESIS
PROJECT : RGen Landing Page with Page Builder
URL : http://themeforest.net/item/rgen-landing-page-with-page-builder/13244840
This file licensed to R_GENESIS (http://themeforest.net/user/r_genesis) and it’s strictly prohibited to copy or reuse it.
Copyright 2015-2016 R.Genesis.Art
++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

/* SETTINGS */
var buildFn = {};

buildFn.pageContainer = "#page";
buildFn.enablePreview = true;
buildFn.editableItems = [
	'.frameCover',
	'.nav-wrp',
	'.nav',
	'.nav-links li',
	'.nav-social',
	'.nav-other',
	'.nav-other > span',
	'.nav-other .call-us',
	'.btn',
	'.more-btn',
	'.appstore-btn',
	'hr',
	'.fa',
	'[class*="icon-"]',
	'[class*="pe-7s-"]',
	'[class*="ti-"]',
	'.iconwrp',
	'.iconwrp i',
	'img',
	'h1',
	'h2',
	'h3',
	'h4',
	'h5',
	'h6',
	'p',
	'a',
	'.title',
	'.title-sub',
	'.info-box',
	'.info-box1',
	'.hd',
	'.info',
	'.txt',
	'.product-box',
	'.save-tag',
	'.price',
	'.price i',
	'.price b',
	'.price-wrp',
	'.bg-section',
	'.bg-section > b',
	'.price-info',
	'.price-info > div',
	'.content',
	'.caption',
	'.caption1',
	'.cp-hd',
	'.cp-txt',
	'.list-1 > li',
	'.list-2 > li',
	'.tag-text',
	'.member-box',
	'.member-box em',
	'.tb-list',
	'.tb-list > .tb',
	'.tb-list > .tb.active',
	'.tb-content > .tb-pn',
	'.tb-content',
	'.countdown-widget',
	'.count-box',
	'.count-box .hd',
	'.count-box .icon',
	'.bg-cover',
	'[data-img]',
	'.overlay',
	'[class*="bg-dark"]',
	'[class*="bg-light"]',
	'[class*="bg-white"]',
	'[class*="bg-gray"]',
	'[class*="bg-color"]',
	'.form-title',
	'.form-block',
	'.form-block .form-control',
	'.field-wrp',
	'.field-list',
	'.field-list span',
	'.field-list li',
	'.field-list input',
	'.form-group > label',
	'.acc-block',
	'.acc-block .acc-hd',
	'.acc-block .acc-content',
	'.info-obj',
	'.info-obj .img',
	'section',
	'.main-text',
	'.slide-img',
	'.main-text > small',
	'.sub-text',
	'.swiper-slide',
	'.videobg',
	'.bgslider',
	'.intro-section .pop-body',
	'.intro-section .appstore-btn',
	'.intro-ecom',
	'.intro-section-7 .info-wrp',
	'.intro-section-22 .r',
	'.intro-section-22 .l',
	'.intro-section-27 .r',
	'.intro-section-28 .item',
	'.intro-section-29 .content-bottom',
	'.slider-section-3 .item',
	'.slider-section-3 .img-box1 img',
	'.slider-section-3 .img-box1 .cm-item > a',
	'.slider-section-8 .item > div',
	'.feature-section .info',
	'.feature-wrp .fa',
	'.feature-wrp .img',
	'.info-box .img',
	'.info-box .info',
	'.feature-section-9 .r',
	'.panel-hd',
	'.panel-body',
	'.content-section-13 .r',
	'.tab-widget li [data-tb]',
	'.other-section-8 .l',
	'.bnr-box1',
	'.bnr-box1 .link',
	'.portfolio-box .overlay',
	'.form-section',
	'.testimonial-section',
	'.person',
	'.feedback',
	'.feedback-box > i',
	'.feedback-box',
	'.testimonial-section-7 .r',
	'.video-section-4 .r',
	'.social-section .content',
	'[class*="price-table-"] ul',
	'[class*="price-table-"] li',
	'.price-section .price-table-1',
	'.price-section .price-table-2',
	'.price-section .price-table .hd',
	'.price-section .download-block',
	'.price-section .price',
	'.price-section ul li',
	'.price-section .price-box',
	'.price-section .quick-info'
];
buildFn.editableContent = [
	'.editContent', 
	'.nav-links a', 
	'.nav-other .call-us', 
	'.nav-other span', 
	'button', 
	'a.btn', 
	'.footer a:not(.fa)', 
	'.tableWrapper', 
	'.title', 
	'.title-sub',
	'.main-text', 
	'.sub-text', 
	'.cp-hd', 
	'.cp-txt', 
	'a', 
	'.hd', 
	'.txt', 
	'.caption .hd', 
	'.caption .txt', 
	'.main-text', 
	'.tag-text', 
	'.save-tag', 
	'.price i', 
	'.price b', 
	'.price-wrp', 
	'.more-btn', 
	'h1', 
	'h2', 
	'h3', 
	'h4', 
	'h5', 
	'h6', 
	'p', 
	'.panel-hd > a', 
	'.panel-body', 
	'.tab-widget li', 
	'.person', 
	'th', 
	'td', 
	'.price', 
	'.price-section ul li', 
	'.price-section .lbl', 
	'.member-box em', 
	'.tb-list > .tb', 
	'.tb-content > .tb-pn', 
	'.list-2 > li', 
	'.list-3 > li', 
	'.list-3', 
	'.field-list', 
	'.field-list li', 
	'.field-list span', 
	'.form-group > label'
];

buildFn.rgenStorage = {};
buildFn.menu = {
	mainMenuWidth: 230,
	secondMenuWidth: 300,
	styleEditorWidth: 400
};
buildFn.setEditItem = function (obj, attr) {
	'use strict';
	if (!$(obj).hasClass('edit-item-done')) {
		$.each(buildFn.editableItems, function(index, val) {
			var uid = rgenFn.uid(),
				edit_items = $(obj).contents().find(val);

			for (var i = 0; i < edit_items.length; i++) {
				$(edit_items[i]).addClass('edit-item').attr('data-sandboxid', 'tmp-'+uid+i);
			}

			if (typeof attr !== typeof undefined && attr !== false) {
				var edit_items_sandbox = $('iframe#'+attr).contents().find(val);
				for (var i = 0; i < edit_items_sandbox.length; i++) {
					$(edit_items_sandbox[i]).addClass('edit-item').attr('data-sandboxid', 'tmp-'+uid+i);
				}				
			}

			/*$(obj).contents().find(val).addClass('edit-item').attr('data-sandboxid', 'tmp-'+index);
			if (typeof attr !== typeof undefined && attr !== false) {
				$('iframe#'+attr).contents().find(val).addClass('edit-item').attr('data-sandboxid', 'tmp-'+index);
				//$('iframe#'+attr).contents().find(val).attr('data-sandboxid', 'tmp-'+index);
			}*/
		});
		$(obj).addClass('edit-item-done');
	}
}	

buildFn.setEditContent = function (obj, attr) {
	'use strict';
	if (!$(obj).hasClass('edit-content-done')) {
		$.each(buildFn.editableContent, function(el_index, val) {
			
			var uid = rgenFn.uid(),
				editcontent_items = $(obj).contents().find(val);

			for (var i = 0; i < editcontent_items.length; i++) {
				$(editcontent_items[i]).addClass('edit-content').attr('data-sandboxid', 'tmp-'+uid+i);
			}

			if (typeof attr !== typeof undefined && attr !== false) {
				var editcontent_items_sandbox = $('iframe#'+attr).contents().find(val);
				for (var i = 0; i < editcontent_items_sandbox.length; i++) {
					$(editcontent_items_sandbox[i]).addClass('edit-content').attr('data-sandboxid', 'tmp-'+uid+i);
				}				
			}

			/*//$(obj).contents().find(val).addClass('edit-content').attr('data-sandboxid', 'tmp-'+index);
			if (typeof attr !== typeof undefined && attr !== false) {
				//$('iframe#'+attr).contents().find(val).addClass('edit-content').attr('data-sandboxid', 'tmp-'+index);
			}*/
		});
		$(obj).addClass('edit-content-done');
	}
}

buildFn.setEleId = function(frame, obj, prefix) {
	$(frame).contents().find(obj).each(function(index, el) {
		var attr = $(this).attr('data-sandboxid');
		if (typeof attr !== typeof undefined && attr !== false) {
			return false;
		} else {
			//$(this).attr('id', prefix+index);
			$(this).attr('data-sandboxid', prefix+index);
		}
	});
}

buildFn.allEmpty = function() {

	var allEmpty = false;
	
	if( $('#pageList li').size() == 0 ) {
		allEmpty = true;
	} else {
		allEmpty = false;
	}
	
	if( allEmpty ) {
		$('a.actionButtons').each(function(){
			$(this).addClass('disabled');
		});
		
		$('header .modes input').each(function(){
			$(this).prop('disabled', true).parent().addClass('disabled');
		});
	
	} else {
		$('header .modes input').each(function(){
			$(this).prop('disabled', false).parent().removeClass('disabled');
		});
		
		$('a.actionButtons').each(function(){
			$(this).removeClass('disabled');
		});
	
	}
	
}

buildFn.allEditors = [];

buildFn.destroyAllEditors = function (obj) {
	'use strict';

	/*var editorElement = obj.closest('body').find('[medium-editor-index]');
	console.log(buildFn.allEditors);*/
	
    for( var x = 0; x < buildFn.allEditors.length; x++ ) {
        buildFn.allEditors[x].destroy();
    }

},


//main menu hide/show
$('#menu').mouseenter(function(){
	$(this).stop().animate({'left': '0px'}, 200);
}).mouseleave(function(){
	$(this).stop().animate({'left': -($('#menu').width()-10)}, 200);
});

//local storage check
if(typeof(Storage) !== "undefined") {
	localStorage = true;
} else {
	localStorage = false;
}


$( window ).load(function() {
	
	$('#loader').fadeOut(function(){
		$('#menu').animate({'left': -($('#menu').width()-10)}, 200);
	});
	
	
	//activate previews?
	if( buildFn.enablePreview == true ) {
		$('#preview').show();
	}
	
	//do we have saved pages?
	if( localStorage.getItem("blocksElement1") !== null ) {
		$('#start').hide()	
	}
	
	var framesForLater = [];
	
	for(x=0; x<=50; x++) {
		
		if( localStorage.getItem("blocksElement"+x) !== null && localStorage.getItem("blocksFrame"+x) !== null ) {
		
			//alert('')
			//localStorage.removeItem("page"+x);
			
			var blocksElement = JSON.parse(localStorage["blocksElement"+x]);
			var blocksFrame = JSON.parse(localStorage["blocksFrame"+x]);
			var pageNames = JSON.parse(localStorage["pageNames"]);
			
			//does the parent UL exist?
			
			if( $('ul#page'+x).size() == 0 ) {
				
				newUL = $('<ul id="page'+x+'"></ul>');
				
				$('#pageList').append(newUL);
						
				makeSortable( newUL );
			}
			
			for(var y=0; y<=blocksElement.length; y++) {
				
				if( blocksElement[y] != null ) {
														
					//build 'em
					//var num = rgenFn.changeDigit(y);

					toInsert = $("<li sort-id='"+rgenFn.uid()+"' id='"+rgenFn.uid()+"'>"+blocksElement[y]+"</li>");
					
					toInsert.find('iframe').attr('id', 'ui-id-'+x+y);
					toInsert.find('.frameCover').show();
					
					//sandbox? if so, create the sanboxed frame
					var attr = toInsert.find('iframe').attr('data-sandbox');
					
					if (typeof attr !== typeof undefined && attr !== false) {
						
						theiFrame = toInsert.find('iframe');
						
						theID = theiFrame.attr('data-sandbox');
						
						sandboxedFrame = $('<iframe src="'+theiFrame.attr('src')+'" id="'+theID+'" sandbox="allow-same-origin"></iframe>');
						
						$('#sandboxes').append( sandboxedFrame );
						
					}
					
					
					framesForLater[toInsert.find('iframe').attr('id')] = blocksFrame[y];
															
					toInsert.find('iframe').load(function(){

						var tmpFrm = this;
						//console.log(framesForLater[$(this).attr('id')]);																									
						$(this).contents().find(buildFn.pageContainer).html( framesForLater[$(this).attr('id')] );
						
						//sandbox
						var attr = $(this).attr('data-sandbox');
						if (typeof attr !== typeof undefined && attr !== false) {
							$('iframe#'+$(this).attr('data-sandbox')).contents().find(buildFn.pageContainer).html( framesForLater[$(this).attr('id')] );
							theLoaderFunction = $(this).data('data-loaderfunction');
							theiFrame = $(this);
							var codeToExecute = "theiFrame[0].contentWindow."+theiFrame.attr('data-loaderfunction')+"()";
							var tmpFunc = new Function(codeToExecute);
							tmpFunc();							
						}

						/*buildFn.setEditItem(tmpFrm, attr);
						buildFn.setEditContent(tmpFrm, attr);*/
					})
					
					$('ul#page'+x).append( toInsert );
					
					//page links
											
				}
				
			}
			
			if( x >= 1 && pageNames[x] != undefined) {
				
				newLI = $('<li><a class="plink" href="#'+pageNames[x]+'">'+pageNames[x]+'</a><span class="pageButtons"><a class="fileEdit" href=""><span class="fui-new"></span></a><a class="fileDel" href=""><span class="fui-cross"></span></a><a href="#" class="btn btn-xs btn-primary btn-embossed fileSave"><span class="fui-check"></span></a></span></li>');
				
				$('ul#pages').append( newLI );

				// Generate page list link drop down
				newPageItem = $('<option value="'+pageNames[x]+'.html">'+pageNames[x]+'</option>')
				$('#internalLinksDropdown').append( newPageItem );
				$('select#internalLinksDropdown').selectpicker({style: 'btn-sm btn-default', menuStyle: 'dropdown-inverse'});
			}
			//localStorage.removeItem("blocksElement"+x);
			//localStorage.removeItem("blocksFrame"+x);
		}
	}

	buildFn.allEmpty();
	
	
});


var hexDigits = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

//Function to convert hex format to a rgb color
function rgb2hex(rgb) {
	rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function hex(x) {
	return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
}

function getRandomArbitrary(min, max) {
	return Math.floor(Math.random() * (max - min) + min);
}

var pendingChanges = false;

function setPendingChanges(v) {

	if( v == true ) {
				
		$('#savePage .bLabel').text("Save changes (!)");
		$('#savePage').addClass('save-active');
		pendingChanges = true;
	
	} else {
	
		$('#savePage .bLabel').text("Nothing new to save");
		$('#savePage').removeClass('save-active');
		
		pendingChanges = false;
	
	}

}

function pageEmpty() {

	if( $('#pageList ul:visible > li').size() == 0 ) {
	
		$('#start').show();
		
		$('#frameWrapper').addClass('empty');
	
	} else {
	
		$('#start').hide();
		
		$('#frameWrapper').removeClass('empty');
	
	}

}

function makeDraggable(theID) {

	$('#second #elements li').each(function(index){
		
		$(this).draggable({
			helper: function() {
				return $('<div style="height: 60px; width: 300px; background: #fff; box-shadow: 0px 3px 15px 0 rgba(0,0,0,0.1); text-align: center; line-height: 60px; font-size: 28px; color: #333"><span class="fa fa-bars"></span></div>');
			},
			revert: 'invalid',
			appendTo: 'body',
			connectToSortable: theID,
			stop: function(){
				pageEmpty();
				buildFn.allEmpty();
			},
			start: function(){
			
				//switch to block mode
				$('input:radio[name=mode]').parent().addClass('disabled');
				$('input:radio[name=mode]#modeBlock').radio('check');
				
				//deactivate designmode
				$('#pageList ul li iframe').each(function(){
					this.contentDocument.designMode = "off";
				});
			}
		});	
	
	})
	
	$('#elements li a').each(function(){
		$(this).off('click').on('click', function(e){
			e.preventDefault();
		});
	});

}

var frameContents = '';//holds frame contents

function makeSortable(el) {

	el.sortable({
		revert: true,
		placeholder: "drop-hover",
		handle: ".frameCover",
		beforeStop: function(event, ui){

			if( ui.item.find('.frameCover').size() == 0 ) {
				
				if( ui.item.find('iframe').size() > 0 ) {//iframe thumbnails
							
					theHeight = ui.item.height();
												
					var attr = ui.item.find('iframe').attr('data-sandbox');
				
					if (typeof attr !== typeof undefined && attr !== false) {
						
						//sandboxed
						theID = getRandomArbitrary(10000, 1000000000);
						sandboxedFrame = $('<iframe src="'+ui.item.find('iframe').attr('src')+'" id="'+theID+'" sandbox="allow-same-origin"></iframe>');
						$('#sandboxes').append( sandboxedFrame );
						if (typeof ui.item.find('iframe').attr('data-loaderfunction') !== typeof undefined && ui.item.find('iframe').attr('data-loaderfunction') !== false) {
							loaderFunction_ = 'data-loaderfunction="'+ui.item.find('iframe').attr('data-loaderfunction')+'"';
						}
						ui.item.html('<iframe src="'+ui.item.find('iframe').attr('src')+'" scrolling="no" frameborder="0" data-sandbox="'+theID+'" '+loaderFunction_+'><iframe>');
						
					} else {
						
						ui.item.html('<iframe src="'+ui.item.find('iframe').attr('src')+'" scrolling="no" frameborder="0"><iframe>');
					}

					ui.item.find('iframe').uniqueId();
					ui.item.find('iframe').height(theHeight+"px");
				
					ui.item.find('iframe').load(function() {
						var attr = ui.item.find('iframe').attr('data-sandbox');
						buildFn.setEditItem(this, attr);
						buildFn.setEditContent(this, attr);
					});

				} else {//image thumbnails
					
					var itemImg = ui.item.find('img');

					theHeight = itemImg.attr('data-height');

					//is this iframe to be sandboxed?
					var attr = itemImg.attr('data-sandbox');
					if (typeof attr !== typeof undefined && attr !== false) {
						
						//sandboxed
						theID = getRandomArbitrary(10000, 1000000000);
						sandboxedFrame = $('<iframe src="'+itemImg.attr('data-srcc')+'" id="'+theID+'" sandbox="allow-same-origin"></iframe>');
						$('#sandboxes').append( sandboxedFrame );
						if (typeof itemImg.attr('data-loaderfunction') !== typeof undefined && itemImg.attr('data-loaderfunction') !== false) {
							loaderFunction_ = 'data-loaderfunction="'+itemImg.attr('data-loaderfunction')+'"';
						}
						ui.item.html('<iframe src="'+itemImg.attr('data-srcc')+'" scrolling="no" frameborder="0" data-sandbox="'+theID+'" '+loaderFunction_+'><iframe>');
						
					} else {
						
						ui.item.html('<iframe src="'+itemImg.attr('data-srcc')+'" scrolling="no" frameborder="0"><iframe>');
						
					}
					
					ui.item.find('iframe').uniqueId();
					ui.item.find('iframe').height(theHeight+"px");
					ui.item.find('iframe').css('background', '#ffffff url(images/loading.gif) 50% 50% no-repeat');
					
					ui.item.find('iframe').load(function(){
						var attr = ui.item.find('iframe').attr('data-sandbox');
						heightAdjustment( ui.item.find('iframe').attr('id'), true );

						buildFn.setEditItem(this, attr);
						buildFn.setEditContent(this, attr);
					})
									
				}

				append_btn  = '<div class="edit-buttons rgen-btn-group">';
				append_btn += '<button type="button" class="rgen-btn htmlBlock"><i class="fa fa-code"></i> Source</button>';
				append_btn += '<button type="button" class="rgen-btn resetBlock"><i class="fa fa-refresh"></i> Reset</button>';
				append_btn += '<button type="button" class="rgen-btn deleteBlock"><span class="fa fa-trash-o"></span> Remove</button>';
				append_btn += '</div>';

				frameCover = $('<div class="frameCover"></div>');
				
				frameCover.append(append_btn);
				/*frameCover.append( resetButton );
				frameCover.append( htmlButton );*/
				
				ui.item.append(frameCover);
							
			} else {
				//sorted
				ui.item.find('iframe').load(function(){
					$(this).contents().find( buildFn.pageContainer ).html( frameContents )
				});
			}
			
			setPendingChanges(true);
						
		},
		stop: function(){
			$(el).children('li').each(function(index) {
				//var num = rgenFn.changeDigit(index);
				$(this).attr('sort-id', rgenFn.uid());
				$(this).attr('id', rgenFn.uid());

				rgenFn.init(this);
			});
		},
		start: function(event, ui){
			if( ui.item.find('.frameCover').size() != 0 ) {
				frameContents = ui.item.find('iframe').contents().find( buildFn.pageContainer ).html();
			}
		},
		over: function(){
			$('#start').hide();
		}
	});

}


function buildeStyleElements(el, theSelector) {

	rgenFn.styleUpdate(el);
	rgenFn.otherUpdate(el);
	
	if($(el).hasClass('form-block') || $(el).closest('.form-block').length > 0) {
		rgenFn.formUpdate(el);
	}

	var icoClass = $(el).attr('class');
	if(checkStr(icoClass, 'fa-') || checkStr(icoClass, 'pe-') || checkStr(icoClass, 'icon-') || checkStr(icoClass, 'ti-')) {
		rgenFn.iconUpdate(el);
	}
}

function getParentFrameID(el) {
	theID = '';
	$('#pageList li:visible iframe').each(function(){
		theBody = $(this).contents().find('body');
		if( $.contains( document.getElementById( $(this).attr('id') ).contentWindow.document, el ) ) {
			theID = $(this).attr('id');
		} 
	})
	if( theID != '' ) {
		return theID;
	}
}


function heightAdjustment(el, par) {

	par = typeof par !== 'undefined' ? par : false;

	if( par == false ) {
		$('#pageList li:visible iframe').each(function(){
			theBody = $(this).contents().find('body');
			if( $.contains( document.getElementById( $(this).attr('id') ).contentWindow.document, el ) ) {
				frameID = $(this).attr('id');
			} 
		});
		theFrame = document.getElementById(frameID);
	} else {
		theFrame = document.getElementById(el)
	}
	
	// R.Gen changes : Apply IDs on sand box elements ====
	/*var attr = $(theFrame).attr('data-sandbox');
	if (typeof attr !== typeof undefined && attr !== false) {
		$.each(buildFn.sandboxID_data, function(index, val) {
			setEleId('#sandboxes #'+attr, val, 'tmp-'+index);
			setEleId(theFrame, val, 'tmp-'+index);
		});
	}*/
	// R.Gen changes ====

	//realHeight = theFrame.contentWindow.document.body.offsetHeight;
	// R.Gen changes : Adjust proper height ====
	realHeight = $(theFrame).height();
	// R.Gen changes ====
	//alert(theFrame.contentWindow.document.body.offsetHeight)
						
	$(theFrame).height( realHeight+"px" );
	
	$(theFrame).parent().height( (realHeight)+"px" );
	$(theFrame).next().height( (realHeight)+"px" );
	//$(theFrame).parent().parent().height( (realHeight)+"px" );
}

// R.Gen changes ====

rgenuid = function(){
	var uid = "";
	var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	for(var i=0; i < 3; i++)
	uid += possible.charAt(Math.floor(Math.random() * possible.length));
	return 'rg'+uid;
	//return ("0000" + (Math.random()*Math.pow(36,4) << 0).toString(36)).slice(-4);
}
// R.Gen changes ====

function hasSandbox(el) {
	var attr = $('#'+getParentFrameID( el.get(0) )).attr('data-sandbox');
	if (typeof attr !== typeof undefined && attr !== false) {
		return attr;
	} else {
		return false;
	}
}


var _oldIcon = new Array();


function styleClick(el) {

	theSelector = $(el).attr('data-selector');
	
	$('#editingElement').text( theSelector );

	
	//activate first tab
	$('#detailTabs a:first').click();
	
	
	//hide all by default
	$('a#link_Link').parent().hide();
	$('a#img_Link').parent().hide();
	$('a#icon_Link').parent().hide();
	$('a#video_Link').parent().hide();
	$('a#form_Link').parent().hide();
	
	
	//is the element an ancor tag?
	if( $(el).prop('tagName') == 'A' || $(el).parent().prop('tagName') == 'A' ) {
		$('a#link_Link').parent().show();

		if( $(el).prop('tagName') == 'A' ) {
			theHref = $(el).attr('href');
		} else if( $(el).parent().prop('tagName') == 'A' ) {
			theHref = $(el).parent().attr('href');
		}

		zIndex = 0;
		pageLink = false;
		
		//the actual select
		$('select#internalLinksDropdown').prop('selectedIndex', 0);

		$('select#internalLinksDropdown option').each(function(){
			if( $(this).attr('value') == theHref ) {
				$(this).attr('selected', true);
				zIndex = $(this).index();
				pageLink = true;
			} 
		});
		
		
		//the pretty dropdown
		$('.link_Tab .btn-group.select .dropdown-menu li').removeClass('selected');
		$('.link_Tab .btn-group.select .dropdown-menu li:eq('+zIndex+')').addClass('selected');
		$('.link_Tab .btn-group.select:eq(0) .filter-option').text( $('select#internalLinksDropdown option:selected').text() )
		$('.link_Tab .btn-group.select:eq(1) .filter-option').text( $('select#pageLinksDropdown option:selected').text() )
		
		if( pageLink == true ) {
			$('input#internalLinksCustom').val('');
		} else {

			if( $(el).prop('tagName') == 'A' ) {

				if( $(el).attr('href')[0] != '#' ) {
					$('input#internalLinksCustom').val( $(el).attr('href') )
				} else {
					$('input#internalLinksCustom').val( '' )
				}
			
			} else if( $(el).parent().prop('tagName') == 'A' ) {
				
				if( $(el).parent().attr('href')[0] != '#' ) {
					$('input#internalLinksCustom').val( $(el).parent().attr('href') )
				} else {
					$('input#internalLinksCustom').val( '' )
				}
				
			}
		}
		
		
		//list available blocks on this page, remove old ones first
		$('select#pageLinksDropdown option:not(:first)').remove();
		
		$('#pageList ul:visible iframe').each(function(){
			if( $(this).contents().find( buildFn.pageContainer + " > *:first" ).attr('id') != undefined ) {
				if( $(el).attr('href') == '#'+$(this).contents().find( buildFn.pageContainer + " > *:first" ).attr('id') ) {
					newOption = '<option selected value=#'+$(this).contents().find( buildFn.pageContainer + " > *:first" ).attr('id')+'>#'+$(this).contents().find( buildFn.pageContainer + " > *:first" ).attr('id')+'</option>';
				} else {
					newOption = '<option value=#'+$(this).contents().find( buildFn.pageContainer + " > *:first" ).attr('id')+'>#'+$(this).contents().find( buildFn.pageContainer + " > *:first" ).attr('id')+'</option>';
				}
				$('select#pageLinksDropdown').append( newOption );
			}
		});
	} 
	
	if( $(el).attr('data-type') == 'video' ) {
	
		$('a#video_Link').parent().show();
		$('a#video_Link').click();

		//inject current video ID,check if we're dealing with Youtube or Vimeo
		
		if( $(el).prev().attr('src').indexOf("vimeo.com") > -1 ) {//vimeo
			match = $(el).prev().attr('src').match(/player\.vimeo\.com\/video\/([0-9]*)/);
			//console.log(match);
			$('#video_Tab input#vimeoID').val( match[match.length-1] );
			$('#video_Tab input#youtubeID').val('');
		} else {//youtube
			//temp = $(el).prev().attr('src').split('/');
			var regExp = /.*(?:youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/;
			var match = $(el).prev().attr('src').match(regExp);
				
			$('#video_Tab input#youtubeID').val( match[1] );
			$('#video_Tab input#vimeoID').val('');
		}
	}

	
	if( $(el).prop('tagName') == 'IMG' ){
		$('a#img_Link').parent().show();

		//set the current SRC
		$('.imageFileTab').find('input#imageURL').val( $(el).attr('src') )

		//reset the file upload
		$('.imageFileTab').find('a.fileinput-exists').click();
	} 
	

	var icoClass = $(el).attr('class');
	//$(el).hasClass('fa');
	if( checkStr(icoClass, 'fa-') || checkStr(icoClass, 'pe-') || checkStr(icoClass, 'icon-') || checkStr(icoClass, 'ti-')) {
		$('a#icon_Link').parent().show();
	}

	/*R.Gen Changes*/
	//$(el).closest('.form-block').length > 0
	if(
		$(el).hasClass('field-wrp') || 
		$(el).prop("tagName") == 'INPUT' ||
		$(el).prop("tagName") == 'TEXTAREA' ||
		$(el).prop("tagName") == 'SELECT' ||
		$(el).attr("data-selector") == '.field-list li' ) {

		if ($(el).closest('form').attr('action') != 'form-data/notify-me.php') {
			$('a#form_Link').parent().show();
		}else {
			$('a#form_Link').parent().hide();
		}
		
	}
	/*R.Gen Changes*/
	
	//remove borders from other elements
	$('#pageList ul:visible li iframe').each(function(){
		
		//$(this).contents().find( pageContainer + ' '+ key ).css({'outline': 'none', 'cursor': 'default'});
		$(this).contents().find('.edit-item').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
		
		$(this).contents().find('.edit-item').hover( function(e){
		
			e.stopPropagation();
			if( $(this).closest('body').width() != $(this).width() ) {
				$(this).addClass('editable_el_hover');
			} else {
				$(this).addClass('editable_el_hover_offset3');
			}
		
		}, function(){
		
			if( $(this).closest('body').width() != ($(this).width()+6) ) {
				$(this).removeClass('editable_el_hover');
			} else {
				$(this).removeClass('editable_el_hover_offset3');
			}
		});
	});
	
	//unbind event
	$(el).unbind('mouseenter mouseleave');
	if( $(el).closest('body').width() != $(el).width() ) {
		//$(el).css({'outline': '2px dotted red', 'cursor': 'pointer'});
		$(el).addClass('editable_el_hover');
	} else {
		//$(el).css({'outline': '2px dotted red', 'outline-offset':'-3px',  'cursor': 'pointer'});
		$(el).addClass('editable_el_hover_offset3');
	}
	
	//remove all style attributes
	$('#styleElements > *:not(#styleElTemplate)').each(function(){
		$(this).remove();
	})
	
	
	//load the attributes
	buildeStyleElements(el, theSelector)
	
	
	//show style editor if hidden
	if( $('#styleEditor').css('left') == '-400px' ) {
		$('#styleEditor').css({left: 0});
		//$('#styleEditor').animate({'left': '0px'}, 250);
	}
	

	$('.styleEditor-btn-wrp').off('mousedown').on('mousedown', function(event) {
	
		//save button
		$(this).find('button#saveStyling').off('click').on('click', function(event) {
			event.preventDefault();
		//$('button#saveStyling').unbind('click').bind('click', function(){
		
			//links
			if( $(el).prop('tagName') == 'A' ) {
				
				//change the href prop?
					
				if( $('select#internalLinksDropdown').val() != '#' ) {
					$(el).attr('href', $('select#internalLinksDropdown').val());
				} else if( $('select#pageLinksDropdown').val() != '#' ) {
					$(el).attr('href', $('select#pageLinksDropdown').val() );
				} else if( $('input#internalLinksCustom').val() != '' ) {
					$(el).attr('href', $('input#internalLinksCustom').val());
				}
				
				/* SANDBOX */
				sandboxID = hasSandbox( $(el) )
				if( sandboxID ) {
					//elementID = $(el).attr('id');
					elementID = '[data-sandboxid="'+$(el).attr('data-sandboxid')+'"]';

					if( $('select#internalLinksDropdown').val() != '#' ) {
						$('#'+sandboxID).contents().find(elementID).attr('href', $('select#internalLinksDropdown').val());
					} else if( $('select#pageLinksDropdown').val() != '#' ) {
						$('#'+sandboxID).contents().find(elementID).attr('href', $('select#pageLinksDropdown').val() );
					} else if( $('input#internalLinksCustom').val() != '' ) {
						$('#'+sandboxID).contents().find(elementID).attr('href', $('input#internalLinksCustom').val());
					}
				}
				/* END SANDBOX */
				
			}
			
			if( $(el).parent().prop('tagName') == 'A' ) {
				
				//change the href prop?
				if( $('select#internalLinksDropdown').val() != '#' ) {
					$(el).parent().attr('href', $('select#internalLinksDropdown').val());
				} else if( $('select#pageLinksDropdown').val() != '#' ) {
					$(el).parent().attr('href', $('select#pageLinksDropdown').val() );
				} else if( $('input#internalLinksCustom').val() != '' ) {
					$(el).parent().attr('href', $('input#internalLinksCustom').val());
				}
				
				/* SANDBOX */
				sandboxID = hasSandbox( $(el) )
				if( sandboxID ) {
					//elementID = $(el).attr('id');
					elementID = '[data-sandboxid="'+$(el).attr('data-sandboxid')+'"]';
					if( $('select#internalLinksDropdown').val() != '#' ) {
						$('#'+sandboxID).contents().find(elementID).parent().attr('href', $('select#internalLinksDropdown').val());
					} else if( $('select#pageLinksDropdown').val() != '#' ) {
						$('#'+sandboxID).contents().find(elementID).parent().attr('href', $('select#pageLinksDropdown').val() );
					} else if( $('input#internalLinksCustom').val() != '' ) {
						$('#'+sandboxID).contents().find(elementID).parent().attr('href', $('input#internalLinksCustom').val());
					}
				}
				/* END SANDBOX */
				
			}
			
			
			//do we need to upload an image?
			if( $('a#img_Link').css('display') == 'block' && $('input#imageFileField').val() != '' ) {

				var form = $('form#imageUploadForm');
				var formdata = false;
				
				if (window.FormData){
					formdata = new FormData(form[0]);
				}
				
				var formAction = form.attr('action');
				
				$.ajax({
					url : formAction,
					data : formdata ? formdata : form.serialize(),
					cache : false,
					contentType : false,
					processData : false,
					dataType: "json",
					type : 'POST',
				}).done(function(response){
				
					if( response.code == 1 ) {//success
					
						$('input#imageURL').val( response.response );
						$(el).attr('src', response.response);
						
						//reset the file upload
						$('.imageFileTab').find('a.fileinput-exists').click();
						
						/* SANDBOX */
						sandboxID = hasSandbox( $(el) )
						if( sandboxID ) {
							//elementID = $(el).attr('id');
							elementID = '[data-sandboxid="'+$(el).attr('data-sandboxid')+'"]';
							$('#'+sandboxID).contents().find(elementID).attr('src', response.response);
						}
						/* END SANDBOX */
					
					} else if( response.code == 0 ) {//error
						alert('Something went wrong: '+response.response)
					}
				
				})				
				
						
			} else if( $('a#img_Link').css('display') == 'block' ) {
			
				//no image to upload, just a SRC change
				if( $('input#imageURL').val() != '' && $('input#imageURL').val() != $(el).attr('src') ) {
					$(el).attr('src', $('input#imageURL').val());
				
					/* SANDBOX */
					sandboxID = hasSandbox( $(el) )
					if( sandboxID ) {
						//elementID = $(el).attr('id');
						elementID = '[data-sandboxid="'+$(el).attr('data-sandboxid')+'"]';
						$('#'+sandboxID).contents().find(elementID).attr('src', $('input#imageURL').val());
					}
					/* END SANDBOX */
				}
			}
			
			//video URL
			
			if( $(el).attr('data-type') == 'video' ) {
			
				if( $('input#youtubeID').val() != '' ) {
					$(el).prev().attr('src', "//www.youtube.com/embed/"+$('#video_Tab input#youtubeID').val());
				} else if( $('input#vimeoID').val() != '' ) {
					$(el).prev().attr('src', "//player.vimeo.com/video/"+$('#video_Tab input#vimeoID').val()+"?title=0&amp;byline=0&amp;portrait=0");
				}
				
				
				/* SANDBOX */
				sandboxID = hasSandbox( $(el) )
				if( sandboxID ) {
					//elementID = $(el).attr('id');
					elementID = '[data-sandboxid="'+$(el).attr('data-sandboxid')+'"]';
					if( $('input#youtubeID').val() != '' ) {
						$('#'+sandboxID).contents().find(elementID).prev().attr('src', "//www.youtube.com/embed/"+$('#video_Tab input#youtubeID').val());
					} else if( $('input#vimeoID').val() != '' ) {
						$('#'+sandboxID).contents().find(elementID).prev().attr('src', "//player.vimeo.com/video/"+$('#video_Tab input#vimeoID').val()+"?title=0&amp;byline=0&amp;portrait=0");
					}
				}
				/* END SANDBOX */
				
			}
			
			
			$('#detailsAppliedMessage').fadeIn(600, function(){
				setTimeout(function(){ $('#detailsAppliedMessage').fadeOut(1000) }, 3000)
			})
			
			heightAdjustment(el);
			
			setPendingChanges(true);
		
		});
		
		
		//delete button
		$(this).find('button#removeElementButton').off('click').on('click', function(event) {
			
			event.preventDefault();
		//$('button#removeElementButton').unbind('click').bind('click', function(){
		
			if( $(el).prop('tagName') == 'A' ) {//ancor
				if( $(el).parent().prop('tagName') == 'LI' ) {//clone the LI
					toDel = $(el).parent();
				} else {
					toDel = $(el);
				}
			} else if( $(el).prop('tagName') == 'IMG' ) {//image
				if( $(el).parent().prop('tagName') == 'A' ) {//clone the A
					toDel = $(el).parent();
				} else {
					toDel = $(el);
				}
			} else {//everything else
				toDel = $(el);
			}
			
			$('#styleEditor').on('click', 'button#removeElementButton', function(){
				$('#deleteElement').modal('show');
		
				$('#deleteElement button#deleteElementConfirm').unbind('click').bind('click', function(){
					toDel.fadeOut(500, function(){
						randomEl = $(this).closest('body').find('*:first');
						toDel.remove();
						heightAdjustment(randomEl[0])
					})
		
					$('#deleteElement').modal('hide');
		
					closeStyleEditor();

					setPendingChanges(true);
				});
			});
		});
		
		
		//clone button
		$(this).find('button#cloneElementButton').off('click').on('click', function(event) {
		//$('button#cloneElementButton').unbind('click').bind('click', function(){
			
			/* R.Gen changes : Restrict clone on sliders ==== */
			if ($(el).closest('section').hasClass('slider-section')) {
				alert("Sliders does not support clone items");
			}else{

				if( $(el).parent().hasClass('propClone') ) {//clone the parent element
							
					theClone = $(el).parent().clone();
					theClone.find( $(el).prop('tagName') ).attr('style', '');
					
					theOne = theClone.find( $(el).prop('tagName') );
					cloned = $(el).parent();
				
					cloneParent = $(el).parent().parent();
				
				} else {//clone the element itself
				
					theClone = $(el).clone();
					theClone.attr('style', '');
					
					theOne = theClone;
					cloned = $(el);
					
					cloneParent = $(el).parent();
				
				}
						
				cloned.after( theClone );
				
				//theClone.insertAfter( cloned );
				
				$(el).closest('body').find(buildFn.pageContainer + ' .edit-item').each( function(){
															
					if( $(this)[0] === $(theOne)[0] ) {
														
						theOne.hover( function(){
							if( $(this).closest('body').width() != $(this).width() ) {
								//$(this).css({'outline': '2px dotted red', 'cursor': 'pointer'});
								$(this).addClass('editable_el_hover');
							} else {
								//$(this).css({'outline': '2px dotted red', 'outline-offset': '-3px', 'cursor': 'pointer'});
								$(this).addClass('editable_el_hover_offset3')
							}
						}, function(){
							if( $(this).closest('body').width() != ($(this).width()+6) ) {
								//$(this).css({'outline': '', 'cursor': ''});
								$(this).removeClass('editable_el_hover');
							} else {
								$(this).removeClass('editable_el_hover_offset3');
								//$(this).css({'outline': '', 'cursor': '', 'outline-offset': ''});
							}
						}).click( function(e){

							e.preventDefault();
							e.stopPropagation();
							styleClick(this, '.edit-item');

						}).each( function(){

							$(this).attr('data-selector', '.edit-item');

						});
					}		
				});
				
				//possible height adjustments
								
				heightAdjustment(el);
			};

			setPendingChanges(true);
			/* R.Gen changes ==== */
		})
		
		
		//reset button
		$(this).find('button#resetStyleButton').off('click').on('click', function(event) {
		//$('button#resetStyleButton').unbind('click').bind('click', function(){
		
			if( $(el).closest('body').width() != $(el).width() ) {
				//$(el).attr('style', '').css({'outline': '2px dotted red', 'cursor': 'pointer'})
				$(el).addClass('editable_el_hover');
			} else {
				//$(el).attr('style', '').css({'outline': '2px dotted red', 'outline-offset':'-3px', 'cursor': 'pointer'})
				$(el).addClass('editable_el_hover_offset3');
			}
			
		
			$('#styleEditor form#stylingForm').height( $('#styleEditor form#stylingForm').height()+"px" );
		
			$('#styleEditor form#stylingForm .form-group:not(#styleElTemplate)').fadeOut(500, function(){
				$(this).remove()
			})
			
			setTimeout( function(){buildeStyleElements(el, theSelector)}, 550)
			
			setPendingChanges(true);
		})
	});

}


function closeStyleEditor() {
	
	//only if visible
		
	if( $('#styleEditor').css('left') == '0px' ) {
		//$('#styleEditor').animate({'left': '-300px'}, 250);
		$('#styleEditor').css({left: '-400px'});
		$('#pageList ul li iframe').each(function(){
		
			//remove hover events used by Styling modus			
			$(this).contents().find(buildFn.pageContainer + ' .edit-item').unbind('mouseenter mouseleave click').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');

			if ($('input:radio[name=mode]:checked').val() == 'styling') {
				$(this).contents().find( buildFn.pageContainer + ' .edit-item').hover( function(e){
					e.stopPropagation();
					if( $(this).closest('body').width() != $(this).width() ) {
						//$(this).css({'outline': '2px dotted red', 'cursor': 'pointer'});
						$(this).addClass('editable_el_hover');
					} else {
						//$(this).css({'outline': '2px dotted red', 'outline-offset': '-3px', 'cursor': 'pointer'});
						$(this).addClass('editable_el_hover_offset3');
					}
				}, function(){
					if( $(this).closest('body').width() != ($(this).width()+6) ) {
						//$(this).css({'outline': '', 'cursor': ''});
						$(this).removeClass('editable_el_hover');
					} else {
						//$(this).css({'outline': '', 'cursor': '', 'outline-offset': ''});
						$(this).removeClass('editable_el_hover_offset3');
					}
				
				}).click( function(e){
			
					e.preventDefault();
					e.stopPropagation();
					styleClick(this, '.edit-item');
				
				});
			}
				
		})
	
	}

}


$(function(){

	/*$("[data-tooltip]").each(function(index, el) {
		$(this).tooltip();
	});*/
	$("[data-tooltip]").tooltip();
	// Tabs
	$(".nav-tabs a").on('click', function (e) {
	  e.preventDefault();
	  $(this).tab("show");
	})

	//video ID toggle
	
	$('input#youtubeID').focus(function(){
		$('input#vimeoID').val('');
	})
	
	$('input#vimeoID').focus(function(){
		$('input#youtubeID').val('');
	})
	
	//detect mode
	if( window.location.protocol == 'file:' ) {
		_mode = "local";
	} else {
		_mode = "server";
	}
		
	//check if formData is supported
	if (!window.FormData){
		//not supported, hide file upload
		$('form#imageUploadForm').hide();
		$('.imageFileTab .or').hide();
	}
	

	//internal links dropdown
	$('select#internalLinksDropdown').selectpicker({style: 'btn-sm btn-default', menuStyle: 'dropdown-inverse'});
	$('select#internalLinksDropdown').change(function(){
		$('select#pageLinksDropdown option').attr('selected', false);
		$('.link_Tab .btn-group.select:eq(1) .dropdown-menu li').removeClass('selected');
		$('.link_Tab .btn-group.select:eq(1) > button .filter-option').text( $('.link_Tab .btn-group.select:eq(1) .dropdown-menu li:first').text() )
	})
	
	$('select#pageLinksDropdown').selectpicker({style: 'btn-sm btn-default', menuStyle: 'dropdown-inverse'});
	
	$('select#pageLinksDropdown').change(function(){
		$('select#internalLinksDropdown option').attr('selected', false);
		$('.link_Tab .btn-group.select:eq(0) .dropdown-menu li').removeClass('selected');
		$('.link_Tab .btn-group.select:eq(0) > button .filter-option').text( $('.link_Tab .btn-group.select:eq(0) .dropdown-menu li:first').text() )
	})
	
	$('input#internalLinksCustom').focus(function(){
		$('select#internalLinksDropdown option').attr('selected', false);
		$('select#pageLinksDropdown option').attr('selected', false);
		$('.link_Tab .dropdown-menu li').removeClass('selected');
		$('.link_Tab .btn-group.select > button .filter-option').text( $('.link_Tab .dropdown-menu li:first').text() )
		this.select();
	});
	
	
	$('#detailsAppliedMessageHide').click(function(){
		$(this).parent().fadeOut(500)
	})


	//hide style editor option?
	if( typeof buildFn.editableItems === 'undefined' ) {
		$('#modeStyle').parent().remove();
	}
	
	$('#closeStyling').click(function(){
		closeStyleEditor();
	})
		
		
	for( var key in _Elements.elements ) {

		niceKey = key.toLowerCase().replace(" ", "_");

		$('<li><a href="" id="'+niceKey+'">'+key+'</a></li>').appendTo('#menu #main ul#elements');
			
		for( x=0; x<_Elements.elements[key].length; x++ ) {
			
			//alert( data.elements[key][x].url )
			if( _Elements.elements[key][x].thumbnail == null ) {//we'll need an iframe
			
				//build us some iframes!
				if( _Elements.elements[key][x].sandbox != null ) {
					if( _Elements.elements[key][x].loaderFunction != null ) {
						loaderFunction = 'data-loaderfunction="'+_Elements.elements[key][x].loaderFunction+'"';
					}
					newItem = $('<li class="element '+niceKey+'"><iframe src="'+_Elements.elements[key][x].url+'" scrolling="no" data-sandbox="" '+loaderFunction+'></iframe></li>');
				} else {
					newItem = $('<li class="element '+niceKey+'"><iframe src="about:blank" scrolling="no"></iframe></li>');
				}
				
				newItem.find('iframe').uniqueId();
				newItem.find('iframe').attr('src', _Elements.elements[key][x].url);
			
			} else {//we've got a thumbnail
				
				if( _Elements.elements[key][x].sandbox != null ) {
					if( _Elements.elements[key][x].loaderFunction != null ) {
						loaderFunction = 'data-loaderfunction="'+_Elements.elements[key][x].loaderFunction+'"';
					}
					newItem = $('<li class="element '+niceKey+'"><img src="'+_Elements.elements[key][x].thumbnail+'" data-srcc="'+_Elements.elements[key][x].url+'" data-height="'+_Elements.elements[key][x].height+'" data-sandbox="" '+loaderFunction+'></li>')
					
				} else {
					newItem = $('<li class="element '+niceKey+'"><img src="'+_Elements.elements[key][x].thumbnail+'" data-srcc="'+_Elements.elements[key][x].url+'" data-height="'+_Elements.elements[key][x].height+'"></li>')
				}
			}
							
			newItem.appendTo('#menu #second ul');		
				
			//zoomer works
			if( _Elements.elements[key][x].height ) {
				theHeight = _Elements.elements[key][x].height*0.25;
			} else {
				theHeight = 'auto'
			}
				
			/*newItem.find('iframe').zoomer({
				zoom: 0.25,
				width: 270,
				height: theHeight,
				message: "Drag&Drop Me!"
			});*/
			
		}
			
		//draggables
		makeDraggable( '#page1' )
	
	}
	
	//use function call to make the ULs sortable
	makeSortable( $('#pageList ul#page1') );
		
	//second menu animation		
	$('#menu #main #elements').on('click', 'a:not(.btn)', function(){
	
		$('#menu #main a').removeClass('active');
		$(this).addClass('active');
	
		//show only the right elements
		$('#menu #second ul li').hide();
		$('#menu #second ul li.'+$(this).attr('id')).show();
		
		if( $(this).attr('id') == 'all' ) {
			$('#menu #second ul li').show();
		}
	
		$('.menu .second').css('display', 'block').stop().animate({
			width: buildFn.menu.secondMenuWidth
		}, 200);	
	})
	
	//second nav hide button
	$('#menu').mouseleave(function(){
		$('#menu #main a').removeClass('active');
		$('.menu .second').stop().animate({
			width: 0
		}, 200, function(){
			$('#menu #second').hide();
		});
	});
	
	
	$('#menu #main').on('click', 'a:not(.actionButtons)', function(e){
		e.preventDefault();
	});

	$('#menu').mouseleave(function(){
		$('#menu #main a').removeClass('active');
		$('.menu .second').stop().animate({
			width: 0
		}, 200, function(){
			$('#menu #second').hide();
		});
	});
	
	
	//disable on load
	$('input:radio[name=mode]').parent().addClass('disabled');
	$('input:radio[name=mode]#modeBlock').radio('check');
	
	
	var elToUpdate;
	
	var oldmode = null;
	$('.modes').on('mousedown', function(){
		oldmode = $(this).find('.checked input').val();
	});
	
	
	//design mode toggle
	$('input:radio[name=mode]').on('toggle', function(){

		history.pushState('', document.title, window.location.pathname);

		$("#frameWrapper").show();
		$("#utilityWrapper").hide();

		$('#pageList ul li').each(function(){
			$(this).find('.frameButtons').remove();
			
			$(this).find('iframe').contents().find('.edit-item').off('click hover mouseenter mouseleave');
			$(this).find('iframe').contents().find('.edit-content').off('click hover mouseenter mouseleave');
		});

		/*if (rgenFn.utility_status) {
			location.reload();
		}*/

		rgenFn.utility_status = false;

		if( $(this).val() == 'content' ) {
		
			//close style editor
			closeStyleEditor();
			rgenFn.resetEditableClass();
		
			//hide all iframe covers and activate designMode
			
			$('#pageList ul .frameCover').each(function(){
				$(this).hide();
			});
			
			//active content edit mode
			$('#pageList ul li iframe').each(function(){
			
				//remove old events
				/*$(this).contents().find('.edit-item').off('click').off('hover');
				$(this).contents().find('.edit-content').off('click').off('hover');*/

				$(this).contents().find('.edit-content').hover( function(){
					$(this).addClass('editable_el_hover');
				}, function(){
					$(this).removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
				}).click( function(e){
					
					elToUpdate = $(this);
				
					e.preventDefault();
					e.stopPropagation();
									
					$('#editContentModal #contentToEdit').val( $(this).html() )
				
					$('#editContentModal').modal('show');
					
					//for the elements below, we'll use a simplyfied editor, only direct text can be done through this one
					if( this.tagName == 'SMALL' || this.tagName == 'A' || this.tagName == 'LI' || this.tagName == 'SPAN' || this.tagName == 'B' || this.tagName == 'I' || this.tagName == 'TT' || this.tageName == 'CODE' || this.tagName == 'EM' || this.tagName == 'STRONG' || this.tagName == 'SUB' || this.tagName == 'BUTTON' || this.tagName == 'LABEL' || this.tagName == 'P' || this.tagName == 'H1' || this.tagName == 'H2' || this.tagName == 'H2' || this.tagName == 'H3' || this.tagName == 'H4' || this.tagName == 'H5' || this.tagName == 'H6' ) {
						
						$('#editContentModal #contentToEdit').redactor({
							buttons: ['html', 'bold', 'italic', 'deleted'],
							focus: true,
							plugins: ['bufferbuttons'],
							buttonSource: true,
							paragraphize: false,
							linebreaks: true
						});
						
					} else if( this.tagName == 'DIV' && $(this).hasClass('tableWrapper') ) {
						
						$('#editContentModal #contentToEdit').redactor({
							buttons: ['html', 'formatting', 'bold', 'italic', 'deleted', 'table', 'image', 'link', 'alignment'],
							focus: true,
							plugins: ['table', 'bufferbuttons'],
							buttonSource: true,
							paragraphize: false,
							linebreaks: false
						});
						
					} else {
				
						$('#editContentModal #contentToEdit').redactor({
							buttons: ['html', 'formatting', 'bold', 'italic', 'deleted', 'unorderedlist', 'orderedlist', 'outdent', 'indent', 'image', 'file', 'link', 'alignment', 'horizontalrule'],
							focus: true,
							buttonSource: true,
							paragraphize: false,
							linebreaks: false
						});
					}

				}).each( function(){
					$(this).attr('data-selector', '.edit-content');
				});
							
			})
			
		} else if( $(this).val() == 'block' ) {
		
			//close style editor
			closeStyleEditor();
			rgenFn.resetEditableClass();
		
			//show all iframe covers and activate designMode
			$('#pageList ul .frameCover').each(function(){
				$(this).show();
			});
			
			//deactivate designmode
			$('#pageList ul li iframe').each(function(){
				/*for (i=0; i<buildFn.editableItems.length; ++i) {
					$(this).contents().find( pageContainer + ' '+ buildFn.editableItems[i] ).unbind('mouseenter mouseleave');
				}*/
				this.contentDocument.designMode = "off";
			});
		
		} else if( $(this).val() === 'styling' ) {
			//hide all iframe covers and activate designMode
			
			$('#pageList ul .frameCover').each(function(){ $(this).hide(); });
			
			//active styling mode
			$('#pageList ul li iframe').each(function(){
			
				var frm = this;
				//remove old click events
				//$(this).contents().find().unbind('click').unbind('hover');

				$(frm).contents().find('.edit-item').hover( function(e){
					e.stopPropagation();

					if( $(this).closest('body').width() != $(this).width() ) {
						$(this).addClass('editable_el_hover');
					} else {
						$(this).addClass('editable_el_hover_offset3');
					}

				}, function(){
					$(this).removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
					
				}).click(function(e) {
					e.preventDefault();
					e.stopPropagation();
					styleClick(this, '.edit-item')

				}).each( function(){
					$(this).attr('data-selector', '.edit-item');
				});


				editableitem_btn  = '<div class="edit-buttons"> &nbsp; Editable items : &nbsp;';
				editableitem_btn += '	<div class="rgen-btn-group" style="display:inline-block;"><button type="button" class="rgen-btn mini editableOn">On</button>';
				editableitem_btn += '	<button type="button" class="rgen-btn mini active editableOff">Off</button></div>';
				editableitem_btn += '</div>';

				frameButtons = $('<div class="frameButtons"></div>');
				
				frameButtons.append( editableitem_btn );
				$(frm).parent().prepend(frameButtons);
			
			});
		
		} else if( $(this).val() == 'rgen_utilities' ) {

			if (pendingChanges) {
				swal({
					title              : "Alert",
					text               : "Please save your pending changes before switching.",
					type               : "warning",
					showCancelButton   : false,
					confirmButtonColor : "#DD6B55",
					confirmButtonText  : "ok",
					closeOnConfirm     : true
				},
				function(isConfirm){
					if (isConfirm) {
						$('.modes input[value='+oldmode+']').click();
					}
				});
			} else {
				rgenFn.resetEditableClass();
				rgenFn.utility(this);
				rgenFn.utility_status = true;
			}
		}
	
	});
	
	
	$('button#updateContentInFrameSubmit').click(function(){
		
		//elToUpdate.html( $('#editContentModal #contentToEdit').redactor('code.get') ).css({'outline': '', 'cursor':''});
		elToUpdate.html( $('#editContentModal #contentToEdit').redactor('code.get') ).removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
		
		/* SANDBOX */
		sandboxID = hasSandbox( elToUpdate )
		if( sandboxID ) {
			//elementID = elToUpdate.attr('id');
			elementID = '[data-sandboxid="'+elToUpdate.attr('data-sandboxid')+'"]';
			$('#'+sandboxID).contents().find(elementID).html( $('#editContentModal #contentToEdit').redactor('code.get') );
		}
		/* END SANDBOX */
				
		$('#editContentModal textarea').each(function(){
			$(this).redactor('core.destroy');
			$(this).val('');
		});
		
		$('#editContentModal').modal('hide');
		$(this).closest('body').removeClass('modal-open').attr('style', '');
		
		//reset iframe height
		heightAdjustment(elToUpdate.get(0));
		
		//element was deleted, so we've got pending changes
		setPendingChanges(true)
	});
	
	
	//close styleEditor
	$('#styleEditor > a.close').click(function(e){
		e.preventDefault();
		closeStyleEditor();
	});
	
	
	//delete blocks from window
	
	var blockToDelete;
	$('#pageList').on("click", ".frameCover .deleteBlock", function(){
	
		$('#deleteBlock').modal('show');
		
		blockToDelete = $(this).closest('li');
	
		$('#deleteBlock').off('click', '#deleteBlockConfirm').on('click', '#deleteBlockConfirm', function(){
			
			/* SANDBOX */
			var attr = blockToDelete.find('iframe').attr('data-sandbox');
			if (typeof attr !== typeof undefined && attr !== false) {
				//has sandbox, delete it
				$('#sandboxes #'+attr).remove();
			}
			/* END SANDBOX */
			
		
			$('#deleteBlock').modal('hide');
			blockToDelete.fadeOut(500, function(){
				$(this).remove();
				pageEmpty();
				buildFn.allEmpty();
				setPendingChanges(true)
			});
		});
	});
	
	
	//reset block
	$('#pageList').on("click", ".frameCover .resetBlock", function(){
		
		$('#resetBlock').modal('show');
		
		frameToReset = $(this).closest('li').find('iframe');
					
		$('#resetBlock').off('click', '#resetBlockConfirm').on('click', '#resetBlockConfirm', function(){
		
			$('#resetBlock').modal('hide');
		
			frameToReset.get(0).contentWindow.location.reload();
			
			/* SANDBOX */
			var attr = frameToReset.attr('data-sandbox');
			if (typeof attr !== typeof undefined && attr !== false) {
				//has sandbox, reset it
				document.getElementById(attr).contentDocument.location.reload(true);
			}
			/* END SANDBOX */
		});
	});
	
	
	var aceEditors = new Array();//store all ace editors
	
	
	//block source code
	$('#pageList').off(".frameCover .htmlBlock").on("click", ".frameCover .htmlBlock", function(){
		
		//hide the iframe
		$(this).closest('.li').find('iframe').hide();
		
		
		//disable draggable on the LI
		$(this).closest('li').parent().sortable('disable');
				
				
		//built editor element
		theEditor = $('<div class="aceEditor"></div>');
		theEditor.uniqueId();
		
		//set the editor height
		//R.Gen changes : Code view height adjust ======
		if ($(this).closest('li').height() < 400) {
			//$(this).closest('li').attr('data-oldh', $(this).closest('li').height());
			$(this).closest('li').height(400);
			theEditor.height(400);
			//$(this).closest('.ui-draggable').height(300)
		} else {
			theEditor.height( $(this).closest('li').height() );
		};
		//R.Gen changes ======

		$(this).closest('li').append( theEditor );
		
		theId = theEditor.attr('id');
		
		var editor = ace.edit( theId );
		
		//sandbox?
		
		var attr = $(this).closest('li').find('iframe').attr('data-sandbox');

		/* R.Gen changes ========== */
		var localrgenDB = _.load('rgen_db');
		/* R.Gen changes ========== */

		if (typeof attr !== typeof undefined && attr !== false) {
			/* R.Gen changes ========== */
			localrgenDB.sandbox_tmp = {
				sandbox_id      : attr,
				val             : $('#sandboxes #'+attr).contents().find( buildFn.pageContainer ).html()
			}
			_.save(localrgenDB, 'rgen_db');
			/* R.Gen changes ========== */

			editor.setValue( $('#sandboxes #'+attr).contents().find( buildFn.pageContainer ).html() );
			
			//has sandbox, reset it
			document.getElementById(attr).contentDocument.location.reload(true);
	
		} else {
			editor.setValue( $(this).closest('li').find('iframe').contents().find( buildFn.pageContainer ).html() );
			
			/* R.Gen changes ========== */
			localrgenDB.sandbox_tmp = null;
			_.save(localrgenDB, 'rgen_db');
			/* R.Gen changes ========== */
		}
		

		//editor.setTheme("ace/theme/twilight");
		editor.setTheme("ace/theme/xcode");
		editor.getSession().setMode("ace/mode/html");
		
		//buttons
		
		cancelButton = $('<button type="button" class="rgen-btn editCancelButton"><span class="fa fa-times"></span> Cancel</button>');
		saveButton = $('<button type="button" class="rgen-btn editSaveButton"><span class="fa fa-check"></span> Save</button>');
	
		buttonWrapper = $('<div class="editorButtons rgen-btn-group"></div>');
		buttonWrapper.append( cancelButton );
		buttonWrapper.append( saveButton );
		
		$(this).closest('li').append( buttonWrapper );
		
		aceEditors[ theId ] = editor;
		
	});
	
	
	$('#pageList').on("click", "li .editorButtons .editCancelButton", function(){
		
		var tmp_sandboxDom = _.load('rgen_db');
		//theId = $(this).closest('.editorButtons').prev().attr('id');

		//enable draggable on the LI
		$(this).closest('li').parent().sortable('enable');
		$(this).closest('.ui-draggable').height($(this).closest('.ui-draggable').attr('data-oldh'));
		
		$(this).parent().prev().remove();
		
		$(this).closest('li').find('.zoomer-small iframe').fadeIn(500);
		
		$(this).parent().fadeOut(500, function(){
			
			$(this).remove();
			
		})

		/* R.Gen changes ========== */
		heightAdjustment( $(this).closest('li').find('iframe').attr('id'), true );
		if (tmp_sandboxDom['sandbox_tmp']) {
			$('#sandboxes #'+tmp_sandboxDom['sandbox_tmp']['sandbox_id']).contents().find( buildFn.pageContainer ).html(tmp_sandboxDom['sandbox_tmp']['val']);
		}
		/* R.Gen changes ========== */
	});
	
	
	$('#pageList').on("click", "li .editorButtons .editSaveButton", function(){
		
		//enable draggable on the LI
		$(this).closest('li').parent().sortable('enable');
		if ($(this).closest('.ui-draggable').attr('data-oldh')) {
			$(this).closest('.ui-draggable').height($(this).closest('.ui-draggable').attr('data-oldh'));
		};
		
		theId = $(this).closest('.editorButtons').prev().attr('id');
		theContent = aceEditors[theId].getValue();
		theiFrame = $(this).closest('li').find('iframe');
		
		$(this).parent().prev().remove();
		
		//theiFrame.contents().find( pageContainer ).html( theContent );
		
		/* SANDBOX */
		var attr = $(this).closest('li').find('iframe').attr('data-sandbox');
		if (typeof attr !== typeof undefined && attr !== false) {
							
			$('#sandboxes #'+attr).contents().find( buildFn.pageContainer ).html( theContent );
			$(this).closest('li').find('iframe').show().contents().find( buildFn.pageContainer ).html( theContent );
						
			//do we need to execute a loader function?
			if (typeof theiFrame.attr('data-loaderfunction') !== typeof undefined && theiFrame.attr('data-loaderfunction') !== false) {
				var codeToExecute = "theiFrame[0].contentWindow."+theiFrame.attr('data-loaderfunction')+"()";
				var tmpFunc = new Function(codeToExecute);
				tmpFunc();
			}
							
		} else {
			
			$(this).closest('li').find('iframe').show().contents().find( buildFn.pageContainer ).html( theContent );
			var codeToExecute = "theiFrame[0].contentWindow.rgenLoad()";
			var tmpFunc = new Function(codeToExecute);
			tmpFunc();
		}
		/* END SANDBOX */
		
		//height adjustment
		heightAdjustment( $(this).closest('li').find('iframe').attr('id'), true );
		
		$(this).closest('li').find('iframe').removeClass('edit-item-done').removeClass('edit-content-done');
		buildFn.setEditItem($(this).closest('li').find('iframe'), attr);
		buildFn.setEditContent($(this).closest('li').find('iframe'), attr);

		$(this).parent().fadeOut(500, function(){
			$(this).remove();
		})
		
		setPendingChanges(true)
	});
	

	//save page
	$('#savePage').click(function(e){
		savePage(e);
	})
	
	
	//preview
	$('#previewModal').on('show.bs.modal', function (e) {
		$('#previewModal > form #showPreview').show('');
		$('#previewModal > form #previewCancel').text('Cancel & Close');
		closeStyleEditor();
	});
	

	$('#previewModal').on('shown.bs.modal', function (e) {
		$('#previewModal form input[type="hidden"]').remove();
		
		//grab visible page
		$('#pageList > ul:visible').each(function(){
		
			//grab the skeleton markup
							
			newDocMainParent = $('iframe#skeleton').contents().find( buildFn.pageContainer );
			
			//empty out the skeleton
			newDocMainParent.find('*').remove();
			
			$(this).find('iframe').each(function(){
				
				//sandbox or regular?
				var attr = $(this).attr('data-sandbox');
				if (typeof attr !== typeof undefined && attr !== false) {
					theContents = $('#sandboxes #'+attr).contents().find( buildFn.pageContainer );
				} else {
					theContents = $(this).contents().find( buildFn.pageContainer );
				}

				//remove .frameCovers
				theContents.find('.frameCover').each(function(){
					$(this).remove();
				});
				
				
				//remove inline styling leftovers
				theContents.find('.edit-item').each(function(){
					$(this).removeAttr('data-selector');
					if($(this).attr('style') == '') {
						$(this).removeAttr('style');
					}
				});

				/*for (i=0; i<buildFn.editableItems.length; ++i) {
					var key = buildFn.editableItems[i]
					
					//alert('Key :'+key)
													
					theContents.find( key ).each(function(){
						
						//alert( "Data before: "+ $(this).attr('data-selector') );
						
						$(this).removeAttr('data-selector');
						
						//alert( "Data after: "+ $(this).attr('data-selector') );
						
						if( $(this).attr('style') == '' ) {
							$(this).removeAttr('style')
						}
						
					})
									
				}*/	

				$(this).contents().find('.edit-content').each(function(){
					$(this).removeAttr('data-selector');
				});

				/*for (i=0; i<buildFn.editableContent.length; ++i) {
					$(this).contents().find( buildFn.editableContent[i] ).each(function(){
						$(this).removeAttr('data-selector');
					})
				}*/
					
				toAdd = theContents.html();
				
				//grab scripts
				
				scripts = $(this).contents().find( buildFn.pageContainer ).find('script');
				
				if( scripts.size() > 0 ) {
				
					theIframe = document.getElementById("skeleton");
				
					scripts.each(function(){
					
						if( $(this).text() != '' ) {//script tags with content
						
							var script = theIframe.contentWindow.document.createElement("script");
							script.type = 'text/javascript';
							script.innerHTML = $(this).text();
						
							theIframe.contentWindow.document.getElementById( buildFn.pageContainer.substring(1) ).appendChild(script);
							
						} else if( $(this).attr('src') != null ) {
						
							var script = theIframe.contentWindow.document.createElement("script");
							script.type = 'text/javascript';
							script.src = $(this).attr('src');
							
							theIframe.contentWindow.document.getElementById( buildFn.pageContainer.substring(1) ).appendChild(script)
						
						}
				
					})
				
				}
				
				newDocMainParent.append( $(toAdd) );
				
			});
			
			newInput = $('<input type="hidden" name="page" value="">');
			
			$('#previewModal form').prepend( newInput );

			/*R.Gen change : Reseting IDs =====*/
			/*$.each(buildFn.sandboxID_data, function(index, val) {
				$('iframe#skeleton').contents().find(val).each(function(index, el) {
					$(this).removeAttr('data-sandboxid');
				});
			});*/
			$('iframe#skeleton').contents().find('[data-sandboxid]').each(function(index, el) {
				$(this).removeAttr('data-sandboxid');
			});
			/*R.Gen change =====*/

			newInput.val( "<!DOCTYPE html><html>"+$('iframe#skeleton').contents().find('html').html()+"</html>" )
			
		})
		
	});
	
	$('#previewModal > form').submit(function(){
		$('#previewModal > form #showPreview').hide('');
		$('#previewModal > form #previewCancel').text('Close Window');
	});
	
	
	//export markup
	$('#exportModal').on('show.bs.modal', function (e) {
		$('#exportModal > form #exportSubmit').show('');
		$('#exportModal > form #exportCancel').text('Cancel & Close');
		closeStyleEditor();
	});
	
	
	$('#exportModal').on('shown.bs.modal', function (e) {
		
		//delete older hidden fields
		$('#exportModal form input[type="hidden"]').remove();
		
		//loop through all pages
		$('#pageList > ul').each(function(){
			
			//grab the skeleton markup
			newDocMainParent = $('iframe#skeleton').contents().find( buildFn.pageContainer );
			
			//empty out the skeleton
			newDocMainParent.find('*').remove();
			
			//loop through page iframes and grab the body stuff
			$(this).find('iframe').each(function(){
				
				//sandbox or regular?
				var attr = $(this).attr('data-sandbox');
				if (typeof attr !== typeof undefined && attr !== false) {
					theContents = $('#sandboxes #'+attr).contents().find( buildFn.pageContainer );
				} else {
					theContents = $(this).contents().find( buildFn.pageContainer );
				}
								
				
				//remove .frameCovers
				theContents.find('.frameCover').each(function(){
					$(this).remove();
				});
				
				
				//remove inline styling leftovers
				theContents.find('.edit-item').each(function(){
					//$(this).removeAttr('data-selector').removeClass('edit-item').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3').removeAttr('data-sandboxid');
					if( $(this).attr('style') == '' ) {
						$(this).removeAttr('style')
					}
				});
				

				/*theContents.contents().find('.edit-content').each(function(){
					$(this).removeAttr('data-selector').removeClass('edit-content').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3').removeAttr('data-sandboxid');
				});*/
					
				toAdd = theContents.html();
				
				//grab scripts
				scripts = $(this).contents().find( buildFn.pageContainer ).find('script');
				
				if( scripts.size() > 0 ) {
				
					theIframe = document.getElementById("skeleton");
				
					scripts.each(function(){
					
						if( $(this).text() != '' ) {//script tags with content
						
							var script = theIframe.contentWindow.document.createElement("script");
							script.type = 'text/javascript';
							script.innerHTML = $(this).text();
						
							theIframe.contentWindow.document.getElementById( buildFn.pageContainer.substring(1) ).appendChild(script);
							
						} else if( $(this).attr('src') != null ) {
						
							var script = theIframe.contentWindow.document.createElement("script");
							script.type = 'text/javascript';
							script.src = $(this).attr('src');
							
							theIframe.contentWindow.document.getElementById( buildFn.pageContainer.substring(1) ).appendChild(script)
						
						}
				
					})
				
				}
				newDocMainParent.append( $(toAdd) );
				
			});
			//console.log(newDocMainParent.html());
			
			
			/*R.Gen change : Reseting IDs =====*/
			/*$.each(buildFn.sandboxID_data, function(index, val) {
				$('iframe#skeleton').contents().find(val).each(function(index, el) {
					$(this).removeAttr('data-sandboxid');
				});
			});*/
			/*$('iframe#skeleton').contents().find('[data-sandboxid]').each(function(index, el) {
				$(this).removeAttr('data-sandboxid');
			});*/
			$('iframe#skeleton').contents().find('[data-selector]').removeAttr('data-selector');
			$('iframe#skeleton').contents().find('.edit-item').removeClass('edit-item').removeAttr('data-sandboxid').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
			$('iframe#skeleton').contents().find('.edit-content').removeClass('edit-content').removeAttr('data-sandboxid').removeClass('editable_el_hover').removeClass('editable_el_hover_offset3');
			/*R.Gen change : Reseting IDs =====*/


			/*R.Gen change =====*/
			var localMetadata =_.load('rgen_db');
			var seoData = _ld.find(localMetadata['seo'], { 'page_id': $(this).attr('id') });
			
			if (seoData) {
				$('iframe#skeleton').contents().find('title').text(seoData['metadata']['title']);
				$('iframe#skeleton').contents().find('meta[name="description"]').attr('content', seoData['metadata']['description']);
				$('iframe#skeleton').contents().find('meta[name="keywords"]').attr('content', seoData['metadata']['keywords']);
			}
			/*R.Gen change =====*/

			newInput = $('<input type="hidden" name="pages['+$('#pages li:eq('+($(this).index()+1)+') a:first').text()+']" value="">');
			
			$('#exportModal form').prepend( newInput );

			newInput.val( "<html>"+$('iframe#skeleton').contents().find('html').html()+"</html>" );
			
			/*setTimeout(function () {
				newInput.val( "<html>"+$('iframe#skeleton').contents().find('html').html()+"</html>" );
			}, 200);*/
		
		});
				
	});
	
	
	$('#exportModal > form').submit(function(){
		$('#exportModal > form #exportSubmit').hide('');
		$('#exportModal > form #exportCancel').text('Close Window');
		$('#exportModal').modal('hide');
	});
	

	//clear screen
	$('#clearScreen').click(function(){
		$('#deleteAll').modal('show');
		$('#deleteAll').on('click', '#deleteAllConfirm', function(){
			
			$('#deleteAll').modal('hide');
			
			$('#pageList ul:visible li').fadeOut(500, function(){
				$(this).remove();
				rgenFn.resetPage();
				pageEmpty();
				buildFn.allEmpty();
			});
			
			//remove possible sandboxes
			$('#sandboxes iframe').each(function(){
				$(this).remove();
			});
		});
		setPendingChanges(true);
	});
	
	
	//page menu buttons
	//add page
	$('#pages').on('blur', 'li > input', function(){
	
		if( $(this).parent().find('a.plink').size() == 0 ) {
			theLink = $('<a href="#'+$(this).val()+'" class="plink">'+$(this).val()+'</a>');
			$(this).hide();
			$(this).closest('li').prepend( theLink );
			$(this).closest('li').removeClass('edit');
			
			//update the page dropdown
			$('#internalLinksDropdown option:eq('+$(this).parent().index()+')').text( $(this).val() ).attr('value', $(this).val()+".html");
			$('select#internalLinksDropdown').selectpicker({style: 'btn-sm btn-default', menuStyle: 'dropdown-inverse'})
		
			$(this).remove();
		}
	});
	
	$('#addPage').click(function(e){
	
		e.preventDefault();
		
		//turn inputs into links
		$('#pages li.active').each(function(){
			if( $(this).find('input').size() > 0 ) {
				theLink = $('<a href="#">'+$(this).find('input').val()+'</a>');
				$(this).find('input').remove();
				$(this).prepend( theLink );
			}
		});
		
		$('#pages li').removeClass('active');
		
		newPageLI = $('#newPageLI').clone();
		newPageLI.css('display', 'block');
		newPageLI.find('input').val( 'page'+$('#pages li').size() );
		newPageLI.attr('id', '');
		
		$('ul#pages').append( newPageLI );
		
		
		theInput = newPageLI.find('input');
		
		theInput.focus();
		
		var tmpStr = theInput.val();
		theInput.val('');
		theInput.val(tmpStr);
		
		theInput.keyup( function(){
		
			$('#pageTitle span span').text( $(this).val() )
		
		} )
		
		newPageLI.addClass('active').addClass('edit');
					
		
		//create the page structure
		
		newPageList = $('<ul></ul>');
		newPageList.css('display','block');
		newPageList.attr('id', 'page'+($('#pages li').size()-1) );
		
		$('#pageList > ul').hide();
		$('#pageList').append( newPageList );
		
		
		makeSortable( newPageList );
		
		//draggables
		makeDraggable( '#'+'page'+($('#pages li').size()-1) )
		
		
		//alter page title
		$('#pageTitle span span').text( 'page'+($('#pages li').size()-1) );
		
		$('#frameWrapper').addClass('empty')
		$('#start').fadeIn();
		
		
		//add page to page dropdown
		
		newItem = $('<option value="'+'page'+($('#pages li').size()-1)+'.html">'+'page'+($('#pages li').size()-1)+'</option>')
		$('#internalLinksDropdown').append( newItem );
		$('select#internalLinksDropdown').selectpicker({style: 'btn-sm btn-default', menuStyle: 'dropdown-inverse'});
		
		//new page added, we've got pending changes
		setPendingChanges(true);
	});
	
	
	$('#pages').on('click', 'li:not(.active)', function(){
		$('#pageList > ul').hide();
		$('#pageList > ul:eq('+($(this).index()-1)+')').show();
		
		pageEmpty();
		
		//draggables
		makeDraggable( '#'+'page'+($(this).index()) )
	
		$('#pages li').removeClass('active').removeClass('edit');
		$(this).addClass('active');
		$('#pageTitle span span').text( $(this).find('a').text() );
	});
	
	
	$('#pages').on('click', 'li.active .fileSave', function(){
	
		//do something
		theLI = $(this).closest('li');
	
		if( theLI.find('input').size() > 0 ) {
			theLink = $('<a href="#'+theLI.find('input').val()+'">'+theLI.find('input').val()+'</a>');
			theLI.find('input').remove();
			theLI.prepend( theLink );
		}
		$('#pages li').removeClass('edit');
	});
	
	
	//edit page button
	$('#pages').on('click', 'li.active .fileEdit', function(){
		theLI = $(this).closest('li');
		newInput = $('<input type="text" value="'+theLI.find('a:first').text()+'" name="page">');
		theLI.find('a:first').remove();
		theLI.prepend( newInput );
		newInput.focus();
		
		var tmpStr = newInput.val();
		newInput.val('');
		newInput.val(tmpStr);
		
		newInput.keyup( function(){
			$('#pageTitle span span').text( $(this).val() )
		});
		
		theLI.addClass('edit');
		
		//changed page title, we've got pending changes
		setPendingChanges(true);
	})
	
	var theLIIndex;
	
	//delete page button
	$('#pages').on('click', 'li.active .fileDel', function(){
	
		theLIIndex = $(this).parent().parent().index();
	
		$('#deletePage').modal('show');
		
		$('#deletePageCancel').click(function(){
			$('#deletePage').modal('hide');
		})
		
		$('#deletePage').off('click').on('click', '#deletePageConfirm', function(e){
			$('#deletePage').modal('hide');
			$('#pages li:eq('+theLIIndex+')').remove();
			$('#pageList ul:visible').remove();
			
			
			//update the page dropdown list
			$('select#internalLinksDropdown option:eq('+theLIIndex+')').remove();
			$('.link_Tab .dropdown-menu li:eq('+theLIIndex+')').remove();
			
			
			//activate the first page
			$('#pages li:eq(1)').addClass('active');
			$('#pageList ul:first').show();
			$('#pageTitle span span').text( $('#pages li:eq(1)').find('a:first').text() )
			
			
			//draggables
			makeDraggable( '#'+'page1' )
			
			//show the start block?
			pageEmpty();
			buildFn.allEmpty();
			savePage(e);
			
			//page was deleted, so we've got pending changes
			setPendingChanges(true);
		});
	});
	
	
	//content modal, destroy redactor when modal closes
	$('#editContentModal').on('hidden.bs.modal', function (e) {
		$('#editContentModal #contentToEdit').redactor('core.destroy');
	});
});


function savePage(e) {
	
	rgenFn.loader.on('body');
	closeStyleEditor();

	e.preventDefault();

	$('.modes .radio:first').click();
	$('#savePage').removeClass('active');


	//delete all first
	for(x=0; x<=99; x++) {
		localStorage.removeItem("blocksElement"+x);
		localStorage.removeItem("blocksFrame"+x);
	}
	
	localStorage.removeItem("pageNames");
	
	pageCounter = 1;
	
	//frame stuff
	$('#pageList > ul').each(function(){
			
		theName = $(this).attr('id');
		
		var blocksElement = [];
		var blocksFrame = [];
		
		c = 0;
		
		$(this).find('li').each(function(){
			blocksElement[c] = $(this).html();
			c++;
		});

		
		c = 0;
		$(this).find('iframe').each(function(){
			
			var attr = $(this).attr('data-sandbox');

			if (typeof attr !== typeof undefined && attr !== false) {
				theContents = $('#sandboxes #'+attr).contents().find( buildFn.pageContainer );
			} else {
				theContents = $(this).contents().find( buildFn.pageContainer );
			}
			
			
			//remove .frameCovers
			theContents.find('.frameCover').each(function(){
				$(this).remove();
			});
			
			
			//remove inline styling leftovers
			
			//for( var key in buildFn.editableItems ) {
			theContents.find('.edit-item').each(function(){
				$(this).removeAttr('data-selector');
				if( $(this).attr('style') == '' ) {
					$(this).removeAttr('style')
				}
			});

			$(this).contents().find('.edit-content').each(function(){
				$(this).removeAttr('data-selector');
			});

			blocksFrame[c] = theContents.html();
			c++;
		});
		
		//delete old
		localStorage.removeItem("blocksElement"+pageCounter);
		localStorage.removeItem("blocksFrame"+pageCounter);
					
		localStorage['blocksElement'+pageCounter] = JSON.stringify(blocksElement);
		localStorage['blocksFrame'+pageCounter] = JSON.stringify(blocksFrame);
		
		// RGen storage
		buildFn.rgenStorage['blocksElement'+pageCounter] = JSON.stringify(blocksElement);
		buildFn.rgenStorage['blocksFrame'+pageCounter] = JSON.stringify(blocksFrame);

		pageCounter++;
	
	});
	
	//page names
	
	var pageNames = [];
	
	c = 0;
	
	$('ul#pages li:not(#newPageLI)').each(function(){
		
		pageNames[c] = $(this).find('a').text();
		
		c++;
	})

	localStorage.removeItem("pageNames");

	localStorage['pageNames'] = JSON.stringify(pageNames);

	// RGen storage
	buildFn.rgenStorage['pageNames'] = JSON.stringify(pageNames);
	buildFn.rgenStorage['status'] = 'valid';

	setPendingChanges(false)

	setTimeout(function (argument) {
		rgenFn.loader.off('body');
	}, 500);
	
}

/* R.Gen changes ==== */
function checkStr (str, strPart) {
	if (strPart && str) {
		return str.indexOf(strPart) > -1;
	} else {
		return false;
	};
}