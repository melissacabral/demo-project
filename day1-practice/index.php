<?php 
//always use _once when loading function definitions
require_once( 'includes/functions.php' );

//define some variables
$breakfast = 'Coffee';

//define a constant
define( 'SITE_ROOT', 'http://localhost/melissa/php/melissa-php-0522/day1-practice' );
define( 'FILE_ROOT', 'C:\xampp\htdocs\melissa\php\melissa-php-0522\day1-practice' );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My First PHP demo</title>
	<style type="text/css">
		.menu{
			background: burlywood;
		}
	</style>
</head>
<body>
	<h1>Welcome</h1>

	<?php 
	//function call examples
	$my_date = 'tomorrow';
	//call our function
	$the_date = convert_date( $my_date ); 
	echo "see you on $the_date";

	echo add_five(2476);
	?>

	<p>
		<?php 
		if( '1' == 1 ){
			echo 'they match';
		}else{
			echo 'no match';
		}	
		?>
		
	</p>

	<?php include( 'includes/nav.php' ); ?>

	<a href="<?php echo SITE_ROOT; ?>">Home Page</a>

	<p>
		<?php 
		//This is a single-line comment
		echo 'Whatever you want <br>'; 
		echo '<div class="bananas">something else</div>';
		echo 'don\'t forget semicolons <br>';

		//variables don't need any quotes
		//double quotes allow you to combine variables and strings
		echo "<h2>$breakfast</h2>";

		//redefine the variable
		$breakfast = 'Toast';
		// . "dot"  concatenates
		echo '<h2>' . $breakfast . '</h2>';

		$breakfast = $breakfast . ' and Coffee';

		$breakfast .= ' and waffles';
		echo "<h2>$breakfast</h2>";
		?>
	</p>

	<?php include( 'includes/nav.php' ); ?>

	not a dead footer
</body>
</html>