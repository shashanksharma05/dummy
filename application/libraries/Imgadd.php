<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Imgadd
	{
			
		function ImgSet($file,$path,$valid='')
		{
			$name	=	$file['name'];
			$type	=	$file['type'];
			$tmp_name	= $file['tmp_name'];
			$size	=	$file['size'];
			
			$filename=time().$name;
			
			if($valid=='image' || $valid=='')
			{
				
				if($type=='image/jpeg' || $type=='image/jpg' || $type=='image/gif' || $type=='image/png' || $type=='image/bmp')
				{
					if(move_uploaded_file($tmp_name,$path.$filename))
					{
						$array	=	array('flag'=>'success','msg'=>$filename);
						return $array;
					}
					else
					{
						$array	=	array('flag'=>'error','msg'=>'');
						
					}
					 
				}
				else
				{
					$array	=	array('flag'=>'error','msg'=>'');
				}
				return $array;
			}
			else if($valid=='doc')
			{
				$file_ext	=	'';
				//$file_ext=strtolower(end(explode('.',$name)));          
				if($file_ext=='pdf' || $file_ext=='doc' || $file_ext=='docs')
				{
					if(move_uploaded_file($tmp_name,$path.$filename))
					{
						$array	=	array('flag'=>'success','msg'=>$filename);
						return $array;
					}
					else
					{
						$array	=	array('flag'=>'error','msg'=>'File not Upload');
					}
				}
				else
				{
					$array	=	array('flag'=>'error','msg'=>'Please Upload Valid File');
				}
				return $array;
			}
                        else if($valid=='video')
			{
                            if($type=='video/mp4')
				{
					if(move_uploaded_file($tmp_name,$path.$filename))
					{
						$array	=	array('flag'=>'success','msg'=>$filename);
						return $array;
					}
					else
					{
						$array	=	array('flag'=>'error','msg'=>'File not Upload');
						
					}
					 
				}
				else
				{
					$array	=	array('flag'=>'error','msg'=>'Please Upload Valid File');
				}
				return $array;
				/* $file_ext	=	'';
				//$file_ext=strtolower(end(explode('.',$name)));          
				if($file_ext=='video/mp4' || $file_ext=='video/3gp' || $file_ext=='video/3gpp' || $file_ext=='video/avi' || $file_ext=='video/avc' || $file_ext=='video/mkv' || $file_ext=='video/gif')
				{
					if(move_uploaded_file($tmp_name,$path.$filename))
					{
						$array	=	array('flag'=>'success','msg'=>$filename);
						return $array;
					}
					else
					{
						$array	=	array('flag'=>'error','msg'=>'File not Upload');
					}
				}
				else
				{
					$array	=	array('flag'=>'error','msg'=>'Please Upload Valid Video');
				}
				return $array; */
			}
		}
		
}
?>