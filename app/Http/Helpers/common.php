<?php

use App\models\State;
/**
 * Define all common helper functions that can be used in the applications here
 *
 */

function secure_url_wb_crm($path){
	
	if(env('HTTPS')== true)
		return secure_url($path);
	else return url($path);
}

function asset_url($path)
{
    return secure_url_wb_crm($path);
}

function site_url($path)
{
    return secure_url_wb_crm($path);
}
