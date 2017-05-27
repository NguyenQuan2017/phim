<?php
    function stripUnicode($str) {
                if(!$str) return false;
                $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
                                                );

foreach($unicode as $khongdau=>$codau){
$arr=explode("|",$codau);
$str=str_replace($arr,$khongdau,$str);
}
return $str;
}
function changeTitle($str,$strSymboy='-',$case=MB_CASE_LOWER){
$str=trim($str);
if($str=="") return "";
$str=str_replace('""','',$str); 
$str=str_replace('""','',$str);
$str=stripUnicode($str);
$str=mb_convert_case($str,$case,'utf-8');
$str=preg_replace('/[\W|_]+/',$strSymboy,$str);
return $str;

}
function cate_parent($data, $parent=0,$str="-",$select=0){
    foreach($data as $val){
        $id = $val["id"];
        $name = $val["name_category"];
        if($val["parent_category_id"]==$parent){
            if($select!=0 && $id==$select){
              echo "<option value='$id' selected='selected' >$str $name</option> ";
            }
        else{
         echo "<option value='$id'>$str $name</option> ";  
        }
        cate_parent($data,$id,$str."-");

    }
}
}
?>