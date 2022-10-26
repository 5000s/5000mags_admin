<?php
        
// Start Routes for member 
Route::resource('services/member','Services\MemberController');
// End Routes for member 

                    
// Start Routes for lineuser 
Route::resource('services/lineuser','Services\LineuserController');
// End Routes for lineuser 

                    
// Start Routes for receivertype 
Route::resource('services/receivertype','Services\ReceivertypeController');
// End Routes for receivertype 

                    
// Start Routes for magazineissue 
Route::resource('services/magazineissue','Services\MagazineissueController');
// End Routes for magazineissue 

                    ?>