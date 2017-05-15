# iflychat-laravel
iFlyChat Plugin for Laravel Framework

Instructions to use:

1.Include our service provider in Providers list of app.php file : <br/>
	iflylabs\iflychat-laravel\iflychatServiceProvider::class <br/>
2.Open your main composer.json file and add following piece of code to autoload=>ps-4 section : <br/>
	"iflylabs\\iflychat_laravel\\":"vendor/iflylabs/iflychat_laravel/src"; <br/>
3. Also, Add the following in autoload section of main composer.json file : <br/>
	"files":[
            "vendor/iflylabs/iflychat_laravel/src/helpers.php"
        ] <br/>
4. Receive API KEY and APP_ID from iflychat.com and use that in "vendor/iflylabs/iflychat_laravel/src/helpers.php". <br/>
5. To enable chat, just enter the following lines in your Views: <br/>
	<?php
		print getHtml();
	?>