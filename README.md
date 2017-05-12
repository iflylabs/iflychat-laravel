# iflychat-laravel
iFlyChat Plugin for Laravel Framework

Instructions to use:

1.Include our service provider in Providers list of app.php file :
	iflylabs\iflychat-laravel\iflychatServiceProvider::class
2.Open your main composer.json file and add following piece of code to autoload=>ps-4 section :
	"iflylabs\\iflychat_laravel\\":"vendor/iflylabs/iflychat_laravel/src";
3. Also, Add the following in autoload section of main composer.json file : 
	"files":[
            "vendor/iflylabs/iflychat_laravel/src/helpers.php"
        ]
4. Receive API KEY and APP_ID from iflychat.com and use that in "vendor/iflylabs/iflychat_laravel/src/helpers.php". 
5. To enable chat, just enter the following lines in your Views:
	<?php
		print getHtml();
	?>