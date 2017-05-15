# iflychat-laravel
iFlyChat Plugin for Laravel Framework

Instructions to use:
 - Include our service provider in Providers list of app.php file :
	
	```
	iflylabs\iflychat-laravel\iflychatServiceProvider::class
	``` 
	
 - Open your main composer.json file and add following piece of code to autoload=>ps-4 section :
	
	```
	"iflylabs\\iflychat_laravel\\":"vendor/iflylabs/iflychat_laravel/src";
	```
	
 - Also, Add the following in autoload section of main composer.json file : <br/>
	
	```
	"files":[
            "vendor/iflylabs/iflychat_laravel/src/helpers.php"
        ] 
	```
	
 - Receive API KEY and APP_ID from iflychat.com and use that in "vendor/iflylabs/iflychat_laravel/src/helpers.php".
 - (Optional) In case, you want to create a user for the chat, you just need to call the setUser() function with $user array as a parameter. This should be done before calling the getHtmlCode() function.
	
	```
	$user = array(
	  'user_name' => 'testUser', // string(required)
	  'user_id' => '2', string (required)
	  'is_admin' => FALSE, // boolean (optional)
	  'user_avatar_url' => 'user-avatar-link', // string (optional)
	  'user_profile_url' => 'user-profile-link', // string (optional)
	);
	```
	
	```
	$iflychat->setUser($user);
	```
	
 - To enable chat, just enter the following lines in your Views: <br/>

	```
	<?php
		print getHtml();
	?>
	```

