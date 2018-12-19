<?php

/**
 * Created by PhpStorm.
 * User: william
 * Date: 10/10/16
 * Time: 12.41
 */

require_once("SimpleImage.php");
class UploadUtil
{
    function deleteImage($path){
        if (file_exists(dirname(__FILE__)."/../../resources/".$path))
            unlink(dirname(__FILE__)."/../../resources/".$path);
    }

    public function uploadImage($img,$name,$category){
        if($img['error'] == UPLOAD_ERR_OK and is_uploaded_file($img['tmp_name']))
        {
            $temp = explode(".", $img["name"]);
            $filename = $name . '.' . end($temp);
            move_uploaded_file($img["tmp_name"], dirname(__FILE__)."/../../resources/".$category."/". $filename);
            $this->imageResize(dirname(__FILE__)."/../../resources/".$category."/". $filename,500,500);
            return $filename;
        }
        else echo "error";
    }
    
    private function imageResize($path,$width,$height){
        $image = new SimpleImage();
        $image->load($path);
        $image->resize($width, $height);
        $image->save($path);
    }


}
