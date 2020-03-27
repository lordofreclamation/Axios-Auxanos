<html>
<head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
  		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />

  <?php
// Initialisation
require_once('../Includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];

  if (Auth::getInstance()->login($email, $_POST['password'])) {

   // Redirect to home page or intended page, if set

    if (isset($_SESSION['return_to'])) {
      $url = $_SESSION['return_to'];
      unset($_SESSION['return_to']);
    } else {
      $url = '/index.php';
    }

    Util::redirect($url);
  }
}



// Set the title, show the page header, then the rest of the HTML
$page_title = 'Login';

?>
</head>
	<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.php">Video Network <span>by Du'Bois</span></a></div>
				<a href="../#menu">HOME</a>
			</header>

<section id="" class="wrapper">
<div class="inner">
<div class="align-center">

<h1>Login</h1>

<?php if (isset($email)): ?>
  <p>Invalid login</p>
<?php endif; ?>

<form method="post">
  <div>
    <label for="email">email address</label>
    <input id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" />
  </div>

  <div>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" />
  </div>

  <input type="submit" value="Login" />
</form>
</div>
</div>

</section>



</html>