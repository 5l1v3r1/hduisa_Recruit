<?php 
//mysql connect
require_once("../config/config.php");

//
if(!empty($_POST)){
    $data = $_POST['data'];
    $data = json_decode($data,true);
    $data = translate($data);
    $data['department'] = json_encode($data['department']);

        $sql = "insert into user(name,studyNumber,email,college,major,phone,sex,qq,Introduction,note,direction) values('".$data['userName']."','".$data['studyNumber']."','".$data['mail']."','".$data['college']."','".$data['major']."','".$data['phoneNumber']."',".$data['userSex'].",'".$data['qqNumber']."','".$data['selfIntro']."','".$data['remark']."',".$data['department'].")";
        if(isEmptyString($data)){
            $response['code'] = "1";
            $response['message'] = "信息不完整";
            $response = json_encode($response);
            echo $response;
            unset($response);
            exit;
        }
        if($pdo1->exec($sql)){
            $response['code'] = "0";
            $response['message'] = "注册成功!";
            $response = json_encode($response);
            echo $response;
            unset($response);
            exit;
        }
        else {
            $response['code'] = "1";
            $response['message'] = "信息不完整";
            $response = json_encode($response);
            echo $response;
            unset($response);
            exit;
        }
}
else {
    echo '404';
}

function translate($data){
    foreach ($data as $key => $value) {
       @ $result[$key] = addslashes($value);
    };
    $result['department'] = json_encode($data['department']);
    //此处可能存在安全漏洞
    return $result;
}
function isEmptyString($array){
    foreach ($array as $value) {
        if($value==''){
            return 1;
        }
    }
    return 0;
}
?>