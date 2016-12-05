<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Users\UserInterface;
use App\Http\Requests;

class UserController extends Controller
{
    
    /**
    *@var UserRepository
    */
	private $user;


	/**
	* UserController constructor
	* @param UserRepository $user
	*/
    public function __construct(UserInterface $user)
    {
    	$this->user = $user;
    }


    public function getAllUsers()
    {
    	return $this->user->getAll();
    }


}
