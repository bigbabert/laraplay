<?php

class DashboardController extends \BaseController {
    
    public function showDashboard()
	{     
                $user = Sentry::getUser();
            //$name = Auth::find($user->id)->name();
                $frontends = Frontends::orderBy('id', 'DESC')->first();
		return View::make('backend.dasboard',array('frontends'=>$frontends))->with('user', $user);
	}
        public function showLock()
	{     
                $user = Sentry::getUser();
            //$name = Auth::find($user->id)->name();
                $frontends = Frontends::orderBy('id', 'DESC')->first();
		return View::make('backend.layouts.lock',array('frontends'=>$frontends))->with('user', $user);
	}
        public function showBarcode()
	{    
                $user = Sentry::getUser();
            //$name = Auth::find($user->id)->name();
                $frontends = Frontends::orderBy('id', 'DESC')->first();
		return View::make('backend.barcode',array('frontends'=>$frontends))->with('user', $user);
	}        
        
}

