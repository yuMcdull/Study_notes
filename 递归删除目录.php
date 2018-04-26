<?php

	$code = $_GET['mmp'];
	if($code=='yanye'){
		$dirname= 'D:\phpStudy\WWW\shanchu';

		function demo($dirname){
			
			$op = opendir($dirname);

			
			while($rd = readdir($op)){
				
				$newpath = $dirname.'/'.$rd;
				
				if($rd != '.' && $rd !='..'){
					if(is_dir($newpath)){
						demo($newpath);
						rmdir($newpath);
					}else{
						unlink($newpath);
					}
				}
			}
			closedir($op);
		}

		demo($dirname);
	}

	
?>