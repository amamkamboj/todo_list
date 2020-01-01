<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Time Ago helper for CodeIgniter.
 *
 * @author      Prajwol KC Dev Team
 * @copyright   Copyright (c) 2014, Semicolon Developers Network
 
 */
if (!function_exists('time_ago'))
{
	/**
	 * Time Ago helper for CodeIgniter.
	 *
	 
	 */
	function time_ago($time)
	{
		$current = strtotime(date("Y-m-d"));
 $date    = strtotime($time);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
 $date_diff = abs(strtotime($time) - strtotime($current));


 if($difference==0)
 {
    echo 'today';
 }
 else if($difference > 1)
 {
    if($difference > 31){

    	echo (int)($difference/12) ." Months";
    }
    
    if($difference<31){
    	echo $difference." Days";
    }
    
 }
 else if($difference > 0)
 {
    echo 'tomorrow';
 }
 else if($difference < -1)
 {
    // echo 'Long Back';
    echo $time;
 }
 else
 {
    echo 'yesterday';
 }  
}

}