<?php include("header.php"); ?>
<?php
if (isset($_GET["page"])) {
	switch ($_GET["page"]) {
		
		case "home":
			include("homePage.php");
			break;
		
		case "about":
			include("aboutPage.php");
			break;
			
		case "games":
			include("gamePage.php");
			break;
		
		case "contact":
			include("contactPage.php");
			break;
			
		case "crazy-planets":
			$_GET['page'] = 0;
			include("games/game-content.php");
			break;
			
		case "ace-hockey":
			$_GET['page'] = 1;
			include("games/game-content.php");
			break;
		
		case "crazy-jump":
			$_GET['page'] = 2;
			include("games/game-content.php");
			break;
	}
} else {
	include("homePage.php");
}
?>
<?php include("footer.php"); ?>