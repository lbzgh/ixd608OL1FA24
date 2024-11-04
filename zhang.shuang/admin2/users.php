<?php 

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);



$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"Email"=>"",
	"classes"=>[]
];



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete


// print_p([$_GET,$_POST]);

if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->Email = $_POST['user-Email'];
			$users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);
			
			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->Email = $_POST['user-Email'];
			$empty_user->classes = explode(", ", $_POST['user-classes']);
			
			$id = count($users);

			$users[] = $empty_user;

			file_put_contents($filename,json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			break;
	}
}



function showUserPage($user) {
	
$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";

$classes = implode(", ", $user->classes);

// heredoc
$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label class="form-label" for="user-name">Name</label>
		<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter the User Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type">Type</label>
		<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter the User Type">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-Email">Email</label>
		<input class="form-input"  name="user-Email" id="user-Email" type="text" value="$user->Email" placeholder="Enter the User Email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-classes">Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter the User Classes, Comma Separated">
	</div>
	<div class="form-control">
		<input class="form-button" type="submit" value="Save Changes">
	</div>
</form>
HTML;

echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin2/users.php">Back</a></li>
	</ul>
</nav>
HTML;
}






 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SZ User Admin Page</title>

	<?php include "../parts/meta.php" ?>
</head>

<body>
	<header>
		<div class="navbar">
			<div class="container display-flex">
				<div class="flex-none">
					<h1>User Admin</h1>
				</div>
				<div class="flex-stretch">
				</div>
				<nav class="nav nav-flex flex-none">
					<ul>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	<div class="container">
		<div class="card hard">
			<?php 
			if (isset($_GET['id'])) {
				showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
			} else {

			?>
			<h2>User List</h2>
			
			<nav class="nav">
				<ul>
			<?php
			// instantiation, comparison, iteration
			// for ($i=0; $i<count($notes_object->notes); $i++) { 
			// 	echo "<li> {$notes_object->notes[$i]} </li>";
			for($i=0;$i<count($users);$i++){
			 	echo "<li>
			 		<a href='admin2/users.php?id=$i'>{$users[$i]->name}</a>
			 	</li>";
			}
			?>
				</ul>
			</nav>

			<?php } ?>
		</div>
	</div>

</body>

</html>