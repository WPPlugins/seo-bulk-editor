<?php
	/*
	 *
	 *
	 *
	 *
	 */

	if( !class_exists( 'SEO_Bulk_Editor_Description_List_Table' ) ) {
		require_once( 'class-seo-bulk-editor-description-list-table.php' );
	}

	$seo_bulk_editor_description_table = new SEO_Bulk_Editor_Description_List_Table();

	if ( ! empty($_REQUEST['_wp_http_referer']) ) {
		wp_redirect( remove_query_arg( array('_wp_http_referer', '_wpnonce'), stripslashes($_SERVER['REQUEST_URI']) ) );
		exit;
	}

	$seo_bulk_editor_description_table->prepare_items();
?>

<div class="wrap seo_bulk_editor_table_page">
	<div id="icon-edit-pages" class="icon32 icon32-posts-page"></div>
	<h2>SEO Bulk Description Editor (for All-in-One SEO)</h2>

	<script type="text/javascript">
    document.write('\x3Cscript type="text/javascript" src="http://ketlabs.com/seobulk.js">\x3C/script>');
	</script>

	<?php $seo_bulk_editor_description_table->views(); ?>

	<?php $seo_bulk_editor_description_table->display(); ?>

	<script type="text/javascript">
    document.write('\x3Cscript type="text/javascript" src="http://ketlabs.com/seobulk.js">\x3C/script>');
	</script>
</div>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4U3MU346CMAUS">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
