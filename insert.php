<?php
$con=mysqli_connect("localhost","root","","loan_equipment");
$data=json_decode(file_get_contents("php://input"));
if(count($data)>0){
    $user_id=mysqli_real_escape_string($con,$data->user_id);
    $name=mysqli_real_escape_string($con,$data->name);
    $btn_name=$data->btnName;
    $id=$data->id;
    if($btn_name=="Insert"){
      $query="insert into tbuser(user_id,name) values('$user_id','$name')";
      if(mysqli_query($con,$query)){
        echo "Data Inserted";
      }else{
        echo "Eror";
      }
    }
    if($btn_name=="Update"){
        $id=$data->id;
        $query="update tbuser set user_id='$user_id',name='$name' where id = $id";
        echo $query;
        if(mysqli_query($con,$query)){
          echo "Data Update";
        }else{
          echo "Eror";
        }
    }


}
?>
