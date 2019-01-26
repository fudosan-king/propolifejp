<?php 
header('Content-type:application/json;charset=utf-8');

function API_checkInfoLogin($urpass=""){
    $pageInfo = get_page_by_path( 'info' );
    $passSysCode = get_field('access_password', $pageInfo->ID);

    $str = 'false';
    if ($urpass == $passSysCode){
        setcookie('passcode_secret_info', $passSysCode, time() + (86400 * 7));
        $str = 'true';
    }else{
        setcookie('passcode_secret_info', $passSysCode, time() - (86400 * 7));
    }
    
    return $str;
}

$jsonRes = array(
    "noResult" => "true",
);

if (isset($_REQUEST['type']) && isset($_REQUEST['_name'])){
    $type = $_REQUEST['type'];
    $name = $_REQUEST['_name'];

    switch ($type) {
        case 'secure':{
            if ($name=='checkInfoLogin'){
                $urpass = isset($_REQUEST['urpass']) ? $_REQUEST['urpass'] : "";

                $jsonTMP = array(
                    "data" => array(
                        "type" => $type,
                        "_name" => $name,

                        "urpass" => $urpass,
                        "iscorrect" => API_checkInfoLogin($urpass),
                    )
                );
                $jsonRes['noResult'] = 'false';
                $jsonRes = array_merge($jsonTMP, $jsonRes);
            }
        }
        break;
        
        default:
            # code...
            break;
    }
    
}

echo json_encode($jsonRes);

?>