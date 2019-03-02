<?php
	/* 
	Part A Answers
	1. make_page
	2. 4
	3. 1 php command. echo (two if you count the implicit function call from another file)
	4. echo outputs data to the screen
	5. Separating the page content from the page design.
	6. In the title
	7. Returns the content of the file as a string
	8. header and footer
	9. nav, article, aside
	*/
function make_page($page_name, $side_menu, $page_content, $aside_content) {
	
	echo '
		<!DOCTYPE html>
		<html lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CSIS-390 - '.$page_name.'</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<body>
			<main class="container">
		
				<div class="row">
		
					<header class="col-12">
						'.file_get_contents('navbar.html').'
					</header>
							
					<nav class="col-sm-3 col-lg-3">
						'.file_get_contents($side_menu).'
					</nav>
					
					<article class="col-sm-9 col-lg-6">
						'.file_get_contents($page_content).'
					</article>
					
					<aside class="col-sm-12 col-lg-3">
						'.file_get_contents($aside_content).'
					</aside>
					
					<footer class="col-12">
						'.file_get_contents('footer.html').'
					</footer>		
				
				</div>		
			
			</main>
			
			<!-- javascript -->
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		
		</body>
		</html>
	';
}

?>