<?php
?>
/* lightbox */
#widget_manager_widgets_select {
	margin: 0;
}

#widget_manager_widgets_select .widget_manager_widgets_lightbox_wrapper {
	margin-bottom: 5px;
	border: 1px solid transparent;
}

#widget_manager_widgets_select .widget_manager_widgets_lightbox_wrapper:hover {
	border: 1px solid #CCCCCC;
}

#widget_manager_widgets_select .widget_manager_widgets_lightbox_actions {
	float: right;
	padding: 6px;
}

#widget_manager_widgets_select .widget_manager_widgets_lightbox_actions li {
	list-style: none;
}

#widget_manager_widgets_select .widget_manager_widgets_lightbox_actions li.elgg-state-available span,
#widget_manager_widgets_select .widget_manager_widgets_lightbox_actions li.elgg-state-unavailable input {
	display: none;
}

#widget_manager_widgets_select .widget_manager_widgets_lightbox_actions .submit_button {
	margin: 5px 0;
}

#widget_manager_widgets_search {
	float: right;
    margin-top: -2px;
}

#widget_manager_widgets_search input {
	padding: 0;
	margin: 0;
	font-size: 100%;
	height: 100%;
}

.elgg-module-widget a.widget-manager-widget-title-link {
	width: auto;
}

.widget_manager_hide_header_admin > .elgg-head {
	opacity: 0.6;
	filter: alpha(opacity=60);
}

.elgg-module-widget.widget_manager_disable_widget_content_style > .elgg-body,
.widget_manager_hide_header > .elgg-body {
	border-top: 0px;
}

.elgg-module-widget.widget_manager_disable_widget_content_style {
	background: none;
	padding: 0px;
}

.elgg-module-widget.widget_manager_disable_widget_content_style .elgg-widget-content {
	padding: 0px;
}

.elgg-module-widget.widget_manager_disable_widget_content_style > .elgg-head {
	border: 2px solid #DEDEDE;
}

.widget-manager-fix {
	right: 45px;
}

.elgg-icon-widget-manager-push-pin {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png") no-repeat scroll 0px -738px transparent;
}

.widget-manager-fix.fixed > .elgg-icon-widget-manager-push-pin {
	background-position: 0px -720px;
}