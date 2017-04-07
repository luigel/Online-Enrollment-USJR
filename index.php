<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<style>
	.container{width:1000px;margin:0 auto;padding:0;max-width:100%;position:relative;}
	a {text-decoration:none;}
	body {background:#fff;}

	#nav-menu, #aside-right, main {float:left;}

	/* ASIDE NAV-MENU CONFIG */
	.menuheader {margin:0; border-bottom: 2px solid black;}
	#nav-menu {position:relative;padding: 5px; border-radius: 20px 0px 20px 0px; width:200px; background-color: rgba(255, 255, 255, 0.9); text-align:center;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
	#nav-menu nav {border-radius: 20px 0px 20px 0px;background-color: rgba(255, 255, 255, 0.9); border:2px solid black;}
	#nav-menu nav ul {margin:0;padding:0;}
	#nav-menu nav ul li{list-style-type:none; padding: 0px 10px 5px 10px;}
	#nav-menu nav ul li a{display: block; padding:10px 10px; color: black;transition: all 0.3s linear;background: linear-gradient(#000000, #ffffff);border-radius: 10px;}
	#nav-menu nav ul li a:hover, #nav-menu nav ul li.current_page_item > a{color: #fff;background: linear-gradient(#09f7d7, #124706);}

	/* MAIN CONFIG */ 
	.main-title {border-top: 1px solid black; border-bottom: 1px solid black; margin: 10px 0 10px 0;}
	main {border-radius:10px;margin: 15px 10px;padding: 0 10px 0 10px;background:white;width:500px; overflow:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
	main:before {content:'';position: absolute; margin: 20px -29px; border: 10px solid transparent;border-right-color: white;}

	/* MAIN-TABLE CONFIG */
	#main-table {width: 100%; border-collapse: collapse;}
	#main-table th {background: #4CAF50; color:white;}
	#main-table th:first-child { border-radius: 10px 0 0 0;}
	#main-table th:last-child { border-radius: 0 10px 0 0;}
	#main-table tr:nth-child(even){background-color: #f2f2f2}
	#main-table td {text-align:left;}
	#main-table td:hover{background-color:#e2eac9;}
	
	/* ASIDE RIGHT CONFIG */
	#aside-right {width:250px; height:auto; background:white; border-radius: 10px 0 10px 0;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
	.aside-right-content {padding: 0 10px 0 10px; margin:0; auto;}
	.aside-right-title {border-top: 1px solid black; border-bottom: 1px solid black;margin:10px 0 0 0;}



	/* FOOTER CONFIG */
	footer { padding: 5px 0; clear:both;text-align:center;height:50px; background:red; color:#fff; border-radius: 0 0 10px 10px;}
	.copyright {padding: 10px;}
	.copyrightlink {text-decoration:underline; color:#fff;}
	</style>
<body>

<div class="container">
	<!-- Aside Nav Menu Left Div -->
	<aside id="nav-menu">
		<div class="container">
	  <nav>
		<h3 class="menuheader">MENU</h3>
		<ul>
		 <li><a href="index.php">Home</a></li>
		 <li><a href="#">Test</a></li>
		 <li><a href="#">Test2</a></li>
		</ul>
	  </nav>
	  </div>
	</aside>
	
	<!-- Main Div -->
	<main>
		<div class="container">
	  <h1 class="main-title">Main Title</h1>
	  <!-- Dynamic Table -->
	  <table id="main-table">
		  <tr>
			<th>Table1</th>
			<th>Table2</th>
			<th>Table3</th>
			<th>Table4</th>
			<th>Table5</th>
			<th>Table6</th>
			<th>Table7</th>
			<th>Table8</th>
		  </tr>
		  <tr>
			<td>content1</td>
			<td>content2</td>
			<td>content3</td>
			<td>content4</td>
			<td>content5</td>
			<td>content6</td>
			<td>content7</td>
			<td>content8</td>
		  </tr>
		  
		  <tr>
			<td>content1</td>
			<td>content2</td>
			<td>content3</td>
			<td>content4</td>
			<td>content5</td>
			<td>content6</td>
			<td>content7</td>
			<td>content8</td>
		  </tr>
	  </table>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  </div>
	</main>
	
	<!-- Aside Right Div -->
	<aside id="aside-right">
		<div class="container">
	  <div class="aside-right-content">
		<h2 class="aside-right-title">Side Bar Title</h2>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  
	  </div>
	  </div>
	</aside>
	
	<!-- Footer Div -->
	<footer>
		<div class="container">
	  <div class="copyright">
		Copyright &copy
		<?php
					$yearStart = '2017';
					$yearCurrent = date('Y');
					$copyright = $yearCurrent;
					echo $yearStart, ' - ' ,$copyright;
			?> USJR Online Enrollment System : <a href="" class="copyrightlink">COM.E Club</a> : All Rights Reserved.
	  </div>
	  </div>
	</footer>
</div>
</body>
</html>
