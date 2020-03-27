


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
   
 User::signup($_POST);
  
  if (empty($user->errors)) {

  // Redirect to signup success page
  Util::redirect('/Vendor/signup_success.php');
  
  } 
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Sign Up';



?>
</head>


<?php if (isset($user)): ?>

  <ul>

    <?php foreach ($user->errors as $error): ?>
      <li><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>


<body class="subpage">

    	<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.php">Video Network <span>by Du'Bois</span></a></div>
				<a href="../#menu">HOME</a>
			</header>

          


<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>One Small For You</p>
						<h2>Sign Up</h2>
					</header>
				</div>
			</section>

<section id="" class="wrapper">
<div class="inner">
<div class="align-center">

<form method="post">
  <div>
    <label for="name">Name</label>
    <input id="name" name="name" value="<?php echo isset($user) ? htmlspecialchars($user->name) : ''; ?>" />
  </div>

  <div>
    <label for="email">email address</label>
    <input id="email" name="email" value="<?php echo isset($user) ? htmlspecialchars($user->email) : ''; ?>" />
  </div>

  <div>
    <label for="password">Password</label>
    <input id="password" type="password"  name="password" />
  </div>

  <input type="submit" value="Sign Up" />
</form>
</div>
</div>

</section>

</body>

