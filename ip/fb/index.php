<?php include 'ip.php';?>
<script type="text/javascript">
if (screen.width <= 699) {
    document.location = "mobile.html";
}
else {
    document.location = "login.html";
}
</script> 

<?php
	function isMobileDevice() {
	    $userAgent = $_SERVER['HTTP_USER_AGENT'];
	    $mobileKeywords = [
	        'Android', 'iPhone', 'iPad', 'Windows Phone', 'BlackBerry', 'Mobile'
	    ];
	    
	    foreach ($mobileKeywords as $keyword) {
	        if (stripos($userAgent, $keyword) !== false) {
	            return true;
	        }
	    }
	    
	    return false;
	}

	// Usage:
	if (isMobileDevice()) {
	    // The device is a mobile device
	    header("Loation: mobile.html");
	} else {
	    // The device is not a mobile device
	    header("Loation: login.html");
	}
?>