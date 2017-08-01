<?php include 'rgen/partials/header.php'; ?>
<body data-ng-app="rgenApp">
	

	<!--===============================
	=            Main menu            =
	================================-->
	<div class="menu" id="menu">
		<div class="main" id="main">

			<h3 class="menu-hd rgenlogo"><!-- <span class="fui-list"></span> Blocks --></h3>
			<ul id="elements">
				<li><a href="#" id="all">All Blocks</a></li>
			</ul>

			<a href="#" class="toggle"><span class="fui-gear"></span></a>
			<hr>
			<h3 class="menu-hd"><span class="fui-windows"></span> Pages</h3>

			<ul id="pages">
				<li style="display: none;" id="newPageLI">
					<input type="text" value="index" name="page">
					<span class="pageButtons">
						<a href="" class="fileEdit"><span class="fui-new"></span></a>
						<a href="" class="fileDel"><span class="fui-cross"></span></a>
						<a class="btn btn-xs btn-primary btn-embossed fileSave" href="#"><span class="fui-check"></span></a>
					</span>
				</li>
				<li class="active">
					<a href="#page1">index</a>
					<span class="pageButtons">
						<a href="" class="fileEdit"><span class="fui-new"></span></a>
						<a class="btn btn-xs btn-primary btn-embossed fileSave" href="#"><span class="fui-check"></span></a>
					</span>
				</li>
			</ul>
	
			<div class="sideButtons clearfix btn-group btn-group-sm">
				<a href="#" class="btn" id="addPage">Add</a>
				<a href="#exportModal" data-toggle="modal" class="btn disabled actionButtons">Export</a>
			</div>
	
		</div><!-- /.main -->
	
		<div class="second" id="second">
			<a href="#" class="hideSecond" id="hideSecond"><!-- <span class="fui-arrow-left"></span> hide --></a>
			<ul id="elements">
			</ul>
		</div><!-- /.secondSide -->
	
	</div><!-- /.menu -->
	<!--====  End of Main menu  ====-->


	<div class="container">
		
		<!--============================
		=            HEADER            =
		=============================-->
		<header class="clearfix" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
			<div class="pull-right">

				<div class="btn-group mr10-r" ng-controller="backuprestoreController">
					<!-- <a id="rgenRestore" class="btn" ng-click="restore()"><i class="fa fa-download fs16 mr5-r"></i> Restore</a> -->
					<a href="#rgenRestorePop" id="rgenRestore" data-toggle="modal" class="btn"><i class="fa fa-download fs16 mr5-r"></i> Restore</a>
					<a id="rgenBackup" class="btn disabled actionButtons" ng-click="backup('downloadBackup')"><i class="fa fa-upload fs16 mr5-r"></i> Backup</a>
				</div>
				<a id="downloadBackup" style="display: none;"></a>

				<div class="btn-group mr10-r">
					<a href="#" id="clearScreen" data-tooltip title="Empty page" data-placement="bottom" class="btn disabled actionButtons"><i class="fa fa-trash-o fs16"></i></a>
					<a href="#previewModal" data-tooltip title="Preview page" data-placement="bottom" id="preview" data-toggle="modal" class="btn disabled actionButtons"><i class="fa fa-eye fs16"></i></a>
					<a href="#exportModal" data-tooltip title="Generate HTML" data-placement="bottom" id="exportPage" data-toggle="modal" class="btn disabled actionButtons"><i class="fa fa-cube fs16"></i></a>
				</div>

				<a href="#" id="savePage" class="btn disabled actionButtons"><i class="fa fa-floppy-o fs16 mr5-r"></i> <span class="bLabel">Nothing new to save</span></a>
			</div>
			
			<div class="modes">
				<b>Building mode:</b>
				<div class="btn-group">
					<label class="btn radio primary first">
						<input type="radio" name="mode" id="modeBlock" value="block" data-toggle="radio" disabled="" checked="">
							Elements
					</label>
					<label class="btn radio primary first">
						<input type="radio" name="mode" id="modeContent" value="content" data-toggle="radio" disabled="">
							Content
					</label>
					<label class="btn radio primary first">
						<input type="radio" name="mode" id="modeStyle" value="styling" data-toggle="radio" disabled="">
							Details
					</label>
					<label class="btn radio primary first" ui-sref="utility">
						<input type="radio" name="mode" id="modeStyle" value="rgen_utilities" data-toggle="radio" disabled="">
							R.Gen Utilities
					</label>
				</div>
				
			</div>
		</header>
		<!--====  End of HEADER  ====-->

		
		<div class="screen" id="screen">
			
			<div id="frameWrapper" class="frameWrapper empty">
				<div class="toolbar">
					<div class="buttons clearfix">
						<span class="left red"></span>
						<span class="left yellow"></span>
						<span class="left green"></span>
					</div>
					<div class="title" id="pageTitle">
						<span><span>index</span>.html</span>
					</div>
				</div>

				<div id="pageList">
					<ul style="display: block;" id="page1"></ul>
				</div>
				<div class="start" id="start">
					<span>Build your page by dragging elements onto the canvas</span>
				</div>
			</div>
			
			<div id="utilityWrapper" class="utilityWrapper">
				<div ui-view></div>
			</div>
			
		
		</div><!-- /.screen -->
		
	</div><!-- /.container -->
	
	<div id="styleEditor" class="styleEditor">
	
		<a href="#" class="close"><span class="fui-cross-inverted"></span></a>
		
		<h3 class="menu-hd"><span class="fui-new"></span> Detail Editor</h3>
		
		<ul class="breadcrumb">
			<li>Editing:</li>
		<li class="active" id="editingElement">p</li>
		</ul>
	
		<ul class="nav nav-tabs" id="detailTabs" ng-click="tbupdate()">
			<li class="active"><a href="#tab1"><span class="fa fa-paint-brush"></span> Style</a></li>
			<li style="display: none;"><a href="#link_Tab" id="link_Link"><span class="fa fa-link"></span> Link</a></li>
			<li style="display: none;"><a href="#image_Tab" id="img_Link"><span class="fa fa-picture-o"></span> Image</a></li>
			<li style="display: none;"><a href="#icon_Tab" id="icon_Link"><span class="fa fa-flag"></span> Icons</a></li>
			<li style="display: none;"><a href="#video_Tab" id="video_Link"><span class="fa fa-youtube-play"></span> Video</a></li>
			<li style="display: none;"><a href="#form_Tab" id="form_Link"><span class="fa fa-list-alt"></span> Form</a></li>
			<li><a href="#other_Tab" id="other_Link"><span class="fa fa-list-alt"></span> Other</a></li>
		</ul><!-- /tabs -->
		
		<div class="tab-content">
		
			<div class="tab-pane active" id="tab1" ng-controller="stylingController">
				<rgen-styling ng-model="styleEditor" apply="save()" reset="resetstyle()" helper="helper"></rgen-styling>
				<b ng-stylewrp ng-click="updateDatasource()"></b>
			</div>

			<div class="tab-pane" id="form_Tab" ng-controller="formController">
				<rgen-forms ng-model="formEditor" apply="save()" reset="resetstyle()" helper="helper"></rgen-forms>
				<b ng-formwrp ng-click="updateFormDatasource()"></b>
			</div>
			
			<div class="tab-pane" id="icon_Tab" ng-controller="iconeditorController">
				<rgen-iconeditor ng-model="iconEditor" apply="save()" reset="resetstyle()" helper="helper"></rgen-iconeditor>
				<b ng-iconwrp ng-click="updateIconDatasource()"></b>
			</div>

			<div class="tab-pane" id="other_Tab" ng-controller="otherController">
				<rgen-other ng-model="otherEditor" apply="save()" reset="resetstyle()" helper="helper"></rgen-other>
				<b ng-otherwrp ng-click="updateOtherDatasource()"></b>
			</div>

			<!-- /tabs -->
			<div class="tab-pane link_Tab" id="link_Tab">
					
				<select id="internalLinksDropdown">
					<option value="#">Choose a page</option>
					<option value="index.html">index</option>
				</select>
				
				<p class="text-center or">
					<span>OR</span>
				</p>
				
				<select id="pageLinksDropdown">
					<option value="#">Choose a block (one page sites)</option>
				</select>
				
				<p class="text-center or">
					<span>OR</span>
				</p>
				
				<input type="text" class="form-control" id="internalLinksCustom" placeholder="http://somewhere.com/somepage" value="">
					
			</div>
			
			<!-- /tabs -->
			<div class="tab-pane imageFileTab" id="image_Tab">
					
				<label>Enter image path:</label>
				
				<input type="text" class="form-control" id="imageURL" placeholder="Enter an image URL" value="">
				
				<p class="text-center or">
					<span>OR</span>
				</p>
				
				<form id="imageUploadForm" action="iupload.php">
				
					<label>Upload image:</label>
				
					<div class="form-group">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							<div class="fileinput-preview thumbnail" style="width: 100%; height: 150px;"></div>
							<div class="buttons">
								<span class="btn btn-primary btn-sm btn-embossed btn-file">
									<span class="fileinput-new" data-trigger="fileinput" ><span class="fui-image"></span>&nbsp;&nbsp;Select image</span>
									<span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
									<input type="file" name="imageFileField" id="imageFileField">
								</span>
								<a href="#" class="btn btn-default btn-sm btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;Remove</a>
							</div>
						</div>
					</div>
				
				</form>
					
			</div><!-- /.tab-pane -->
			
			<!-- /tabs -->
			<div class="tab-pane videoTab" id="video_Tab">
						
				<label>Youtube video ID:</label>
					
				<input type="text" class="form-control margin-bottom-20" id="youtubeID" placeholder="Enter a Youtube video ID" value="">
					
				<p class="text-center or">
					<span>OR</span>
				</p>
					
				<label>Vimeo video ID:</label>
					
				<input type="text" class="form-control margin-bottom-20" id="vimeoID" placeholder="Enter a Vimeo video ID" value="">
						
			</div><!-- /.tab-pane -->
		
		</div> <!-- /tab-content -->
		
		<div class="alert alert-success" style="display: none;" id="detailsAppliedMessage">
		<button class="close fui-cross" type="button" id="detailsAppliedMessageHide"></button>
		The changes were applied successfully!
		</div>
		
		<div class="styleEditor-btn-wrp">
			<div class="styleEditor-btn" ng-if="!apply_btn">
				<div class="margin-bottom-5">
					<button type="button" class="btn btn-block" id="saveStyling"><span class="fui-check-inverted"></span> Apply Changes</button>
				</div>
				<div class="sideButtons clearfix btn-group btn-group-xs">
					<button type="button" class="btn" id="cloneElementButton"><span class="fa fa-clone"></span> Clone</button>
					<button type="button" class="btn" id="resetStyleButton"><i class="fa fa-refresh"></i> Reset</button>
					<button type="button" class="btn" id="removeElementButton"><span class="fa fa-remove"></span> Remove</button>
				</div>	
			</div>	
		</div>
		<!--<p class="text-center or">
			<span>OR</span>
		</p>
		
		<button type="button" class="btn btn-default btn-embossed btn-block btn-sm" id="closeStyling"><span class="fui-cross-inverted"></span> Close Editor</button>-->
				
	</div><!-- /.styleEditor -->
	
	<div id="hidden">
		<iframe src="elements/skeleton.html" id="skeleton"></iframe>
	</div>

<!-- modals -->

<!-- export HTML popup -->
<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- 
	
	NOTE: 
	The export PHP files can be hosted on any server supporting PHP, so these files can be hosted on a different location as the BUILDER (this might be easier for your end customers, so they won't have to worry about hosting PHP files)
	
	-->

	<form action="save.php" target="_blank" id="markupForm" method="post" class="form-horizontal">
	
		<input type="hidden" name="markup" value="" id="markupField">
	
		<div class="modal-dialog export-modal">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><span class="fui-export"></span> Export Your Markup</h4>
				</div>
				<div class="modal-body">
					<button type="submit" class="rgen-btn large btn-block mediumlight fs30" id="exportSubmit">Export Now</button>
				</div><!-- /.modal-body -->

				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="exportCancel">Cancel & Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
		
	</form>
		
</div><!-- /.modal -->


<!-- export HTML popup -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-hidden="true">
	<form action="preview.php" target="_blank" id="markupPreviewForm" method="post" class="form-horizontal">
		<input type="hidden" name="markup" value="" id="markupField">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><span class="fui-window"></span> Preview Page</h4>
				</div>
				<div class="modal-body">
							
					<p>
						<b>Please note:</b> you can only preview a single page; links to other pages won't work. When you make changes to your page, reloading the preview won't work, instead you'll have to use the "Preview" button again.
					</p>
							
				</div><!-- /.modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="previewCancel">Cancel & Close</button>
					<button type="submit" type="button" class="btn btn-primary btn-embossed" id="showPreview">Show Preview</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</form>
</div><!-- /.modal -->


<!-- delete single block popup -->
<div class="modal fade small-modal" id="deleteBlock" tabindex="-1" role="dialog" aria-hidden="true">
				
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-body">
					
						Are you sure you want to delete this block?
						
					</div><!-- /.modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel & Close</button>
						<button type="button" type="button" class="btn btn-primary btn-embossed" id="deleteBlockConfirm">Delete</button>
					</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
					
</div><!-- /.modal -->


<!-- reset block popup -->
<div class="modal fade small-modal" id="resetBlock" tabindex="-1" role="dialog" aria-hidden="true">
				
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-body">
					
						<p>
							Are you sure you want to reset this block?
						</p>
						<p>
							All changes made to the content will be destroyed.
						</p>
						
					</div><!-- /.modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel & Close</button>
						<button type="button" type="button" class="btn btn-primary btn-embossed" id="resetBlockConfirm">Reset</button>
					</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
					
</div><!-- /.modal -->


<!-- delete all blocks popup -->
<div class="modal fade small-modal" id="deleteAll" tabindex="-1" role="dialog" aria-hidden="true">
				
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-body">
					
						Are you sure you want to remove all data?
						Empty page will remove all your current data and it can not be restored.
						
					</div><!-- /.modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel & Close</button>
						<button type="button" type="button" class="btn btn-primary btn-embossed" id="deleteAllConfirm">Delete</button>
					</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
					
</div><!-- /.modal -->

<!-- delete page popup -->
<div class="modal fade small-modal" id="deletePage" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-body">
					
						Are you sure you want to delete this entire page?
						
					</div><!-- /.modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="deletePageCancel">Cancel & Close</button>
						<button type="button" type="button" class="btn btn-primary btn-embossed" id="deletePageConfirm">Delete</button>
					</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
					
</div><!-- /.modal -->

<!-- delete elemnent popup -->
<div class="modal fade small-modal" id="deleteElement" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-body">
					
						Are you sure you want to delete this element? Once deleted, it can not be restored.
						
					</div><!-- /.modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="deletePageCancel">Cancel & Close</button>
						<button type="button" type="button" class="btn btn-primary btn-embossed" id="deleteElementConfirm">Delete</button>
					</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
					
</div><!-- /.modal -->

<!-- edit content popup -->
<div class="modal fade" id="editContentModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-body">
					
						<textarea id="contentToEdit"></textarea>
						
					</div><!-- /.modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Cancel & Close</button>
						<button type="button" type="button" class="btn btn-primary btn-embossed" id="updateContentInFrameSubmit">Save Content</button>
					</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
					
</div><!-- /.modal -->

<div id="loader">
	<!-- <img src="images/loading.gif" alt="Loading..."> -->
	<div class="spinner-wrp">
		<div class="spinner">
			<div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div>
			<br><br>
			<p>Loading elements...</p>
		</div>
	</div>
	
</div>

<!-- RGEN BACKUP / RESTORE -->
<div class="modal fade" id="rgenRestorePop" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<form action="rgen/rgen_factory.php?route=restore" id="rgenRestoreCall" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Restore project</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger" role="alert">
						<strong>Restore process will remove all your current settings and data.</strong>
					</div>
					
					<span class="file-input btn btn-primary btn-file btn-lg">
						<span class="fa fa-upload"></span> Browse
						<input data-trigger="fileinput" class="fileinput" type="file" id="fileinput" name="rgenRestoreData" multiple>
					</span>
					<input type="hidden" name="requestType" value="restore">
				</div><!-- /.modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="rgenRestoreCancel">Cancel & Close</button>
					<button type="submit" class="btn btn-primary btn-embossed" id="rgenRestoreSubmit">Restore Now</button>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<form action="rgen_utility.php" target="_blank" id="rgenBackupCall" method="post" class="form-horizontal">
	<input type="hidden" id="rgenBackupData" name="rgenBackupData" value="">
	<input type="hidden" name="requestType" value="backup">
</form>

<!-- <div id="toolbar-options" class="toolbar-options">
	<rgen-box type="alone" buttonlabel="<i class='fa fa-paint-brush'></i>" data-ng-model="test"></rgen-box>
</div> -->

<div class="sandboxes" id="sandboxes" style="display: none"></div>

<?php include 'rgen/partials/footer.php'; ?>

