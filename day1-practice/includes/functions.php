<?php

function convert_date( $date = 'today' ){
	$output = new DateTime( $date );
	return $output->format( 'l, F jS, Y' );
}

function add_five($number = 0){
	return $number + 5;
}


//no close php