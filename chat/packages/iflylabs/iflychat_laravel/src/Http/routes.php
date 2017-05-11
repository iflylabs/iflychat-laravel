<?php
Route::get('chat',function(){
	return view('chat::hello');
})

// Route::get('/','iflylabs\iflychat_laravel\Http\Controllers\iflychatController@showChat');



// Route::get('chat',function(){

// 	$client = new iflychatController("",``);
// 	$result = $client->getHtmlCode();

// 	return $result;
// })

?>