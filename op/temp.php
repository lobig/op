<?php
$tempFolder = ini_get('upload_tmp_dir');
if(strlen(trim($tempFolder)) == 0){
    echo 'upload_tmp_dir was blank. No temporary upload directory has been set in php.ini<br>';
    exit;
} else{
    echo 'upload_tmp_dir is set to: ' . $tempFolder . '<br>';
}
 
if(!is_dir($tempFolder)){
    echo 'The temp upload directory specified in upload_tmp_dir does not exist: ' . $tempFolder . '<br>';
    exit;
} else{
    echo $tempFolder . ' is a valid directory<br>';
}
 
if(!is_writable($tempFolder)){
    echo 'The temp upload directory specified in upload_tmp_dir is not writeable: ' . $tempFolder . '<br>';
    echo 'Does PHP have permission to write to this directory?<br>';
    exit;
} else{
    echo $tempFolder . ' is writeable<br>';
}
 
$write = file_put_contents($tempFolder . '/' . uniqid(). '.tmp', 'test');
if($write === false){
    echo 'PHP could not create a file in ' . $tempFolder . '<br>';
    exit;
} else{
    echo 'PHP successfully created a test file in: ' . $tempFolder . '<br>';
}
 
if(ini_get('file_uploads') == 1){
    echo 'The file_uploads directive in php.ini is set to 1, which means that your PHP configuration allows file uploads<br>';
} else{
    echo 'The file_uploads directive in php.ini has been set to 0 - Uploads are disabled on this PHP configuration.<br>';
    exit;
}
?>