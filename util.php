<?php
    /**
     * 生成日期目录     例如:  ../public/uploads/big/2016-11/08/
     * @param string $path
     * @return type
     */

    function get_date_dir($path){
        $path=trim($path,"/")."/";
        $Y=date("Y");
        $m=date("m");
        $d=date("d");
        if(!is_dir($path.$Y."-".$m)){mkdir($path.$Y."-".$m);}
        if(!is_dir($path.$Y."-".$m."/".$d)){mkdir($path.$Y."-".$m."/".$d);}
        return $path.$Y."-".$m."/".$d."/";
    }
//    $destination_folder = "/Public/Uploads/big/"; //上传文件路径  
//    $abc= dirname(dirname(__FILE__));
//    echo $abc."<br>";
//    $path1=get_date_dir($destination_folder);
//    echo $path1;
?>
