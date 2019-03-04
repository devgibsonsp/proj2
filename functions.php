<?php
include('constants.php');
	
function make_meta($page_name) {
	echo '
		<!DOCTYPE html>
		<html lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CSIS-390 - '.$page_name.'</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		';
}

function make_scripts() {
	echo '
		<!-- javascript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		';
}

function make_header() {
	echo '
		<header class="col-12">
			'.file_get_contents('navbar.html').'
		</header>';
}

function make_navbar($side_menu) {
	echo '
	<footer class="col-12">
		'.file_get_contents('footer.html').'
	</footer>';
}

function make_footer() {
	echo '
		<footer class="col-12">
			'.file_get_contents('footer.html').'
		</footer>';
}

function make_main($side_menu,$page_content,$aside_content) {
	if($side_menu || $page_content || $aside_content) {
		echo '
		<main class="container">
			<div class="row">';
			if($side_menu) {
				echo '
				<nav class="col-sm-12 col-lg-3">
					'.file_get_contents($side_menu).'
				</nav>';	
			}
	
			if($page_content) {
				echo '	
				<article class="col-sm-8 col-lg-6">
					'.file_get_contents($page_content).'
				</article>';
			}
	
			if($aside_content) {
				echo '
				<aside class="col-sm-4 col-lg-3">
					'.file_get_contents($aside_content).'
				</aside>';
			}
	
		echo '
			</div>		
			
		</main>';
	}

}

function make_page($page_name, $side_menu, $page_content, $aside_content) {
	
	if($page_name) {
		echo make_meta($page_name);
	}

	if($side_menu)
	echo '
		<body>					
		'.make_header().'
		'.make_main($side_menu,$page_content,$aside_content).'
		'.make_footer().'
		'.make_scripts().'
		</body>
		</html>
	';
}

?>