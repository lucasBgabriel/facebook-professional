	 <?php

	 require 'facebook-php-sdk/src/facebook.php';

	 $facebook = new Facebook(array(
	  'appId'  => '490253211103355',
	  'secret' => '496678ff860c6f9e3fda9eaa56e8b538',
	 ));

	 $params =  array('user_about_me','user_birthday','user_hometown','user_location',
    'user_relationships','user_work_history','user_website','user_education_history');
	 
	// FacebookSession::setDefaultApplication('490253211103355', '496678ff860c6f9e3fda9eaa56e8b538');
	 

     $user = $facebook->getUser();

    // echo 'Já logado no começo '.$user;
     
	     if ($user) {
	  	 	try {
	    		// Proceed knowing you have a logged in user who's authenticated.
	    		$user_profile = $facebook->api('/me');
	    		$user_about = $facebook->api('/me/?fields=about','post', $params);
	  		 } catch (FacebookApiException $e) {
	    		error_log($e);
	    		echo $e;
	    		$user = null;
	  		 }
		 }

     // Login or logout url will be needed depending on current user state.
	 if ($user) {
	   $logoutUrl = $facebook->getLogoutUrl();
	 } else {
	   $loginUrl = $facebook->getLoginUrl($params);
     echo "<a href=\"".$loginUrl."\"> Login </a>";
	 }

     echo $user;

	 ?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h1>php-sdk</h1>
    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>
      <h3>You</h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

      <h3>Your User Object (/me)</h3>
      <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
    
  </body>
</html>