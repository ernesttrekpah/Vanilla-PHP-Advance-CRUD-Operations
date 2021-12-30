<?php
require_once dirname(__FILE__).'/partials/header.php';

$action=$_REQUEST['action'];
if(!empty($action)){
    require_once dirname(__FILE__).'/userClass.php';
    $obj=new User();
}

// Add user
if($action=='addUser' && !empty($_POST)){
    $userName=sanitize($_POST['userName']);
    $userEmail=sanitize($_POST['userEmail']);
    $userPhone=sanitize($_POST['userPhone']);
    $userPhoto=$_FILES['userPhoto'];

    $userId=(!empty($_POST['userId']))? $_POST['userId']:'';
    $imageName='';
    if(!empty($userPhoto['name'])){
        $imageName=$obj->uploadPhoto($userPhoto);
        $userData=[
            'photo'=>$imageName,
            'name'=>$userName,
            'email'=>$userEmail,
            'phone'=>$userPhone
        ];
    }else{
        $userData=[
            'name'=>$userName,
            'email'=>$userEmail,
            'phone'=>$userPhone
        ];
        
    }
    $userId=$obj->addUser($userData);

    if(!empty($userId)){
        $user=$obj->getSingleRow('id', $userId);
        print json_encode($user);
        exit();


    }

}















// Functio to sanitize input
function sanitize($input){
    $input=trim($input);
    $input=stripslashes($input);
    $input=htmlspecialchars($input);
    return $input;
}




?>