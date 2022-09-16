<?php
// Clean input
function clean_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	//$data = htmlspecialchars($data);
	return $data;
}
// Clean form input
function clean_input_form($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
// Sanitize an email address
/* This removes all illegal characters from an email address */
function sanitize_email($data) {
	$data = trim($data);
	$data = filter_var($data, FILTER_SANITIZE_EMAIL);
	return $data;
}
// Sanitize a number
/* This removes all illegal characters from a number
   This filter allows digits and . + -
*/
function sanitize_number($data) {
	$data = trim($data);
	$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
	return $data;
}
// Sanitize a string
/* This removes all HTML tags from a string */
function sanitize_string($data) {
	$data = trim($data);
	$data = filter_var($data, FILTER_SANITIZE_STRING);
	return $data;
}
// Sanitize a URL
/* This removes all illegal characters from a URL */
function sanitize_url($data) {
	$data = trim($data);
	$data = filter_var($data, FILTER_SANITIZE_URL);
	return $data;
}
// Remove last instance of character in a string
function str_lreplace($search, $replace, $subject) {
	$pos = strrpos($subject, $search);
	if($pos !== false) {
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}
// Convert GMT datetime to local datetime
function gmdate_to_mydate($gmdate){
	/* $gmdate must be in YYYY-mm-dd H:i:s format*/
	$timezone = 'America/Chicago';
	$userTimezone = new DateTimeZone($timezone);
	$gmtTimezone = new DateTimeZone('GMT');
	$myDateTime = new DateTime($gmdate, $gmtTimezone);
	$offset = $userTimezone->getOffset($myDateTime);
	return date("Y-m-d H:i:s", strtotime($gmdate)+$offset);
}
// Extract Twitter Username from URL
function get_twitter_id_from_url($url) {
	if (preg_match("/^https?:\/\/(www\.)?twitter\.com\/(#!\/)?(?<name>[^\/]+)(\/\w+)*$/", $url, $regs)) {
		return $regs['name'];
	}
	return false;
}
?>