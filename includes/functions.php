<?php 

function confirm_query($query_result){
	if(!$query_result){
		die("There is an error during query.");
	}
}

function find_selected_page() {
global $sel_subject, $sel_page;
if(isset($_GET['subj'])){
	$sel_subject = htmlspecialchars($_GET['subj']);
	$sel_page = null;
}elseif(isset($_GET['page'])){
	$sel_page = htmlspecialchars($_GET['page']);
	$sel_subject = null;	
}else{
	$sel_subject = null;
	$sel_page = null;
				}
}

function get_all_subjects() {
	global $connection; // we can see it in entire project, not only in function.
$subjects_query = "SELECT * from subjects";
$all_subjects = $connection -> prepare($subjects_query);
$all_subjects -> execute();
confirm_query($all_subjects);
return $all_subjects;
}

function get_all_pages($subject_id) {
	global $connection;
	$pages_query = "SELECT * from pages where subject_id = {$subject_id}";
	$all_pages = $connection -> prepare($pages_query);
	$all_pages -> execute();
	confirm_query($all_pages);
	return ($all_pages);
}

function get_subject_by_id($subject_id){
global $connection;
$subject_query = "SELECT * from subjects WHERE id = {$subject_id} LIMIT 1";
$subject_result = $connection -> prepare($subject_query);
$subject_result -> execute();
confirm_query($subject_result);
return $subject_result -> fetch();
}


function navigation($sel_subject, $sel_page){
	$subjects_result = get_all_subjects();
foreach ($subjects_result as $subject){
echo '<li ';
if ($sel_subject == $subject['id']){
	echo ' class="selected" ';
}
echo '><a href="content.php?subj='
.urlencode($subject['id']).'">'.
$subject['name'] . '</a>'; 	
echo '<ul>';

$pages_result = get_all_pages($subject['id']);
foreach($pages_result as $page){
	echo '<li ';
			if($sel_page == $page['id']){
				echo ' class = "selected" ';
			}
		echo '><a href="content.php?page='.
		urlencode($page['id']).'">'. 
		$page['name'] . '</a></li>';
}

echo '</ul>';
//finish pages loop
echo '</li>';
}
}
?>