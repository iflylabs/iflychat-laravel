<?php
// Route::get('chat',function(){
// 	return "Entered Chat";
// })

Route::get('/','iflylabs\iflychat_laravel\Http\Controllers\iflychatController@showChat');



// Route::get('chat',function(){

// 	$client = new iflychatController("EYESMfZ32Ths7DHD_6iZHrK4YC_NEE1NTTnsOPGvkqcW50823",`8a0b0cd4-57f6-4f7c-8f99-9bac91877483`);
// 	$result = $client->getHtmlCode();

// 	return $result;
// })

?>