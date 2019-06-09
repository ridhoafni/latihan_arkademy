<?php
 class Schools{
    var $highSchool = "PPM AL-Husna";
    var $university = "Uin Suska Riau";
}

function biodata(){
    $hobbies = array("Batminton", "Football");
    $schools = new Schools();
    
    $biodata = array("name"=>"Ridho afni", "address"=>"PKU","hobbies"=>$hobbies, "schools"=>$schools);
    

    echo json_encode($biodata);
}

echo biodata();
?>