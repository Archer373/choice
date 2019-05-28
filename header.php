<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Как сделать правильный выбор?</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<div class="line"></div>
	<div class="main-content container">
		<section class="row">
			<div class="col-lg-4 offset-lg-8">
			<form class="search-form" action="#" method="post">
				<input type="text" name="search" placeholder="Поиск">
				<span>
					<button type="submit">
						<i class="fas fa-search">
						</i>
					</button>
				</span>
			</form>
		</div>
		</section>
			<section class="row"> 
			<div class="navigation col-lg-3">
				<div class="logo">
					<img src="images/choice_logo.png" width="250"> 
				</div>
				
<?php find_selected_page();  ?>

<?php echo "Subject is ".$sel_subject;?>
<?php echo "Page id is ".$sel_page;?>

<nav>
<ul>
<li><a href="index.php">Главная</a></li>

<?php
// start subject loop


/*		$subjects_result = get_all_subjects();
//print subjects menu

while ($subject = $subjects_result -> fetch()) {
	echo '<li ';
	if ($sel_subject == $subject['id']){
		echo ' class="selected" ';
	}
	echo '><a href="index.php?subj='
	.urlencode($subject['id']).'">'.
	$subject['name'] . '</a>'; 	
	echo '<ul>';
			

	$pages_result = get_all_pages();
			
			
	
	//print pages menu
	
			while ($page = $pages_result -> fetch()) {
			echo '<li ';
				if($sel_page == $page['id']){
					echo ' class = "selected" ';
				}
			echo '><a href="index.php?page='.
			urlencode($page['id']).'">'. 
			$page['name'] . '</a></li>';
			}										
		echo '</ul>';
	//finish pages loop
	echo '</li>';
	
	} */

// end subject loop

// function NAVIGATION
navigation ($sel_subject, $sel_page);

	
?>

						<li><a href="new_subject.php">+ Создать новый</a></li>
						<li><a href="login.php">Войти</a></li>					</ul>
				</nav>
			</div>

			<!-- End of navigation -->
			
		
