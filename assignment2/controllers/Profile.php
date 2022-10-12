<?php
namespace assignment2\controllers;

class Profile extends \assignment2\core\Controller{




	public function add(){
		if(isset($_POST['action'])){
			$profile = new \assignment2\models\Profile();
			$profile->user_id = $_SESSION['user_id'];
			$profile->first_name = $_POST['first_name'];
			$profile->middle_name = $_POST['middle_name'];
			$profile->last_name = $_POST['last_name'];
			$profile->insert();
			header('location:/User/index');
		}else{
			$this->view('Profile/index');
		}
	}

	public function edit($profile_id){

		$profile = new \assignment2\models\Profile();
		$profile = $profile->get($profile_id);
		//$profile_id_profile = $profile->profile_id;
		//$user_id_profile = $profile->user_id;

		$user = new \assignment2\models\User();
		$user = $user->get($_SESSION['username']);
		$user_id_user = $user->user_id;

		if(isset($_POST['action'])){
			$profile->user_id = $_SESSION['user_id'];
			$profile->first_name = $_POST['first_name'];
			$profile->middle_name = $_POST['middle_name'];
			$profile->last_name = $_POST['last_name'];

			$profile->update($profile);

			header('location:/Profile/edit/' . $profile_id .'?message=Profile Updated');
		}else{
			$profile = new \assignment2\models\Profile();
	 		$profile = $profile->get($profile_id);
			$this->view('Profile/edit', ['profile'=>$profile]);	
		}
	}

}