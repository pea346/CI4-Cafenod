<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        return view('users/landingPage');
    }

    public function loginPage(): string
    {
        return view('users/loginPage');
    }

    public function moodBoardPage(): string
{
    return view('users/moodBoardPage');
}

public function roadMapPage(): string
{
    return view('users/roadMapPage');
}

}