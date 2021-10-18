<?php 
$request=$_SERVER['REQUEST_URI'];
$router=str_replace('/bonglib','',$request);

if($router=='/' || $router=='/home'){
   include('home.php');

}

elseif($router=='/floor' || preg_match("/floor\/[0-9]/i",$router)){
  $arr=explode('/',$router);
  if(isset($arr[2])){
    $rid=$arr[2];
  }
  include('floor.php');

}

//elseif($router=='/video_collection' || preg_match("/video_collection\/[0-9]/i",$router)){
 // $arr=explode('/',$router);
 // if(isset($arr[2])){
 //   $start=$arr[2];
//  }
 // include('video_collection.php');

//}



elseif($router=='/config.php'){
  include('config.php');

} 


elseif($router=='/search'){
  include('search.php');

} 


elseif($router=='/book' || preg_match("/book\/[0-9]/i",$router)){
  $arr=explode('/',$router);
  if(isset($arr[2])){
    $rid=$arr[2];
  }
  include('book.php');


 

} elseif($router=='/video' || preg_match("/video\/[0-9]/i",$router)){
  $arr=explode('/',$router);
  if(isset($arr[2])){
    $rid=$arr[2];
  }
  include('video.php');

} elseif($router=='/aboutbook' || preg_match("/aboutbook\/[0-9]/i",$router)){
  $arr=explode('/',$router);
  if(isset($arr[2])){
    $rid=$arr[2];
  }
  include('aboutbook.php');

}  elseif($router=='/login'){
  include('login.php');

} elseif($router=='/welcome'){
  include('welcome.php');

} 
elseif($router=='/update_profile'){
  include('update_profile.php');

}

elseif($router=='/logout'){
  include('logout.php');

} 

elseif($router=='/register'){
  include('register.php');

} 


elseif($router=='/bagremove' || preg_match("/bagremove\/[0-9]/i",$router)){
  $arr=explode('/',$router);
  if(isset($arr[2])){
    $rid=$arr[2];
  }
  include('bagremove.php');
} 

elseif($router=='/keep' || preg_match("/keep\/[0-9]/i",$router)){
  $arr=explode('/',$router);
  if(isset($arr[2])){
    $rid=$arr[2];
  }
  include('keep.php');

}

elseif($router=='/admin/adminlogin'){
  include('admin/adminlogin.php');

}     
  

elseif($router=='/admin/adminlogout'){
  include('admin/adminlogout.php');
}
elseif($router=='/admin/adminregister'){
  include('admin/adminregister.php');
}
elseif($router=='/admin/addbook'){
  include('admin/addbook.php');
} 

elseif($router=='/admin/post'){
  include('admin/post.php');
}

elseif($router=='/post_update'){
  include('post_update.php');
}

else{
  include('404.php');

}


?>