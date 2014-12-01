<?php

class HomeController extends BaseController {

    public function showHome()
    {
        return View::make('home');
    }
    
// Functions to show information
    public function showContact()
    {
        return View::make('contact');
    }
    public function showPolicy()
    {
        return View::make('policies');
    }

// Functions to show vehicles
    public function showUtility()
    {
        return View::make('vehicles.utility');
    }
    public function showAtvs()
    {
        return View::make('vehicles.atvs');
    }
    public function showKarts()
    {
        return View::make('vehicles.karts');
    }
    public function showDirtbikes()
    {
        return View::make('vehicles.dirtbikes');
    }

}
