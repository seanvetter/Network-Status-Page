<!DOCTYPE html>
<?php
	Ini_Set( 'display_errors', false);
	include '../../init.php';
	include ROOT_DIR . '/assets/php/functions.php';
?>
<html lang="en">
	<script>
	// Enable bootstrap tooltips
	$(function ()
	        { $("[rel=tooltip]").tooltip();
	        });
	</script>
	<!-- Disk Space -->
<h4 class="exoextralight">Storage</h4>
<?php makeTotalDiskSpace(); ?>
<hr>
<?php makeDiskBars(); ?>