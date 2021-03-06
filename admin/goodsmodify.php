<?php
/* * **************************************************************************** 
  参数说明:
  $max_file_size  : 上传文件大小限制, 单位BYTE
  $destination_folder : 上传文件路径
 * **************************************************************************** */
header("Content-Type:text/html; charset=utf-8");
include_once '../util.php';
//上传文件类型列表  
$uptypes = array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$max_file_size = 2000000;     //上传文件大小限制, 单位BYTE  
$destination_folder = "/images/"; //上传文件路径  
    include_once ("../functions.php");
    $id=$_POST['id'];
//  exit($id);
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $sn=$_POST['sn'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $on_sale=$_POST['on_sale'];
    $cost=$_POST['cost'];    
    $pic=$_POST['pic'];//原图片
    $file=$_FILES['thumb'];//现在的图片
//  exit($pic);
    if($pid==''){
        go_back('请刷新页面');
        
    }
     //是否存在文件  
    if ($file['tmp_name']=="") {
      $thumb=$pic;
    }else{
        //检查文件大小  
        if ($max_file_size < $file["size"]) {
            echo "文件太大!";
            go_back("文件太大");
        }
        //检查文件类型  
        if (!in_array($file["type"], $uptypes)) {
            echo "文件类型不符!" . $file["type"];
            go_back("文件类型不符");
        }
        $path1=get_date_dir("..".$destination_folder);
        $filename = $file["tmp_name"];
        $image_size = getimagesize($filename);
        $pinfo = pathinfo($file["name"]);
        $ftype = $pinfo['extension'];
        $picName=time(). "." .$ftype;
        $destination = $path1 .$picName;
        $Y=date("Y");
        $m=date("m");
        $d=date("d");
        $thumb=$Y."-".$m."/".$d."/".$picName;
        if (file_exists(dirname(dirname(__FILE__)).$destination) && $overwrite != true) {
            echo "同名文件已经存在了";
            go_back("同名文件已经存在了");
        }
        if (!move_uploaded_file($filename, dirname(dirname(__FILE__)).$destination)) {
            echo "移动文件出错";
            go_back("移动文件出错");
        }
        $pinfo = pathinfo($destination);
        $fname = $pinfo['basename'];
    }   
    $updatesql="update shop_goods set sn='$sn',name='$name',price=$price,stock=$stock,thumb='$thumb',on_sale='$on_sale',`cost`='$cost' where pid=$pid ;";
    update($updatesql,"修改商品","goodslist.php");
?>