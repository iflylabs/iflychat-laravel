<?php
        use iflylabs\iflychat_laravel\Http\Controllers\iflychatController;
        function getHtml(){
            $API_KEY = 'xxxxxxxxxxxxxxxxxxxxxx';
            $APP_ID = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $iflychat = new iflychatController($APP_ID,$API_KEY);
            $iflycode = $iflychat->getHtmlCode();
            return $iflycode;    
        }
?>