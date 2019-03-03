<?php
	/* 
	Part B Answers
    1. So that the function definition can be used in page1.php
    2. include()
    3. 1 param to include, 4 param to mage_page
    4. 'Sample Page'
    5. 'sidemenu.html', 'page1.html', 'relatedlinks.html'
    6. page1.html
	*/
include('functions.php');	

make_page('Sample Page 2', 'sidemenu.html', 'page2.html', 'relatedlinks.html');

?>