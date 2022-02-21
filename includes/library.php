<?php

    date_default_timezone_set('US/Eastern');

    function CleanVariable($var){

        $var  = str_replace("'", "", $var); //Remove single quote '
        $var  = str_replace('"', '', $var); //Remove double quote "

        return $var;

    }



    function Fixname($string){

            $name ='';
            $string_array = explode('_',$string);

            for($a=0;$a<count($string_array);$a++){

                if($a == (count($string_array)-1)){
                    $name .= ucfirst($string_array[$a]);
                } else {
                    $name .= ucfirst($string_array[$a]).' ';
                }

            }

        return $name;
    }



    function HashValue($value){

        $result = password_hash("".$value."", PASSWORD_BCRYPT);
        return $result;
    }


    function VerifyHash($value,$hash){

        if (password_verify($value, $hash)) {
            return true;
        } else {
            return false;
        }

    }
/*    function ExcelToArray($path,$column_count){

		global $ROOT;
  		require_once $ROOT."/includes/Classes/PHPExcel.php";

  		$columns = array();
  		$tmpfname = $path;
  		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
  		$excelObj = $excelReader->load($tmpfname);
  		$worksheet = $excelObj->getSheet(0);
  		$lastRow = $worksheet->getHighestRow();
  		$row_count = 0;

  		$alphabet = range('A', 'Z');
  		//print_r($alphabet);
  		//GET COLUMN NAMES
  		for($i=0;$i<$column_count;$i++){

  			$col_name = str_replace(' ','_',strtolower($column_{$column_count} = $worksheet->getCell($alphabet[$i].'1')->getValue()));

  			array_push($columns, $col_name);


  		}

  		$rows_array = array();

          for ($row = 2; $row <= $lastRow; $row++) {

  			for($i=0;$i<$column_count;$i++){
  					$rows_array[$row-2][$columns[$i]] = $worksheet->getCell(''.$alphabet[$i].''.$row)->getValue();

  			}

  		}

  		return $rows_array;

  	}*/

    function searchForId($search_value, $array) {

        $id_path = array();

        // Iterating over main array
        foreach ($array as $key1 => $val1) {

            $temp_path = $id_path;

            // Adding current key to search path
            array_push($temp_path, $key1);

            // Check if this value is an array
            // with atleast one element
            if(is_array($val1) and count($val1)) {

                // Iterating over the nested array
                foreach ($val1 as $key2 => $val2) {

                    if($val2 == $search_value) {

                        // Adding current key to search path
                        array_push($temp_path, $key2);

                        return  $temp_path;
                    }
                }
            }

            elseif($val1 == $search_value) {
                return  $temp_path;
            }
        }

        return null;
    }

    function CreateToken($var){

        $token_salt_hash = "1fd773046dedd607397d0509e7";
        $today = date('Ymd');

        $result = hash('sha256', $var.$today.$token_salt_hash);
        return $result;

    }




    function encrypt($data) {
       $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU';
        $secret_iv =  'e0d2679eb5c7b266fed6a402e37fed66';
        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

		$output = openssl_encrypt($data, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($output);

		return $output;
    }

    function decrypt($data) {

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU';
        $secret_iv =  'e0d2679eb5c7b266fed6a402e37fed66';
        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);


        $output = openssl_decrypt(base64_decode($data), $encrypt_method, $key, 0, $iv);

		return $output;
    }

    function CreateGuid(){
        $date_combine = date("YmdHis");
        $value=$date_combine;
        $guid = encrypt($value);

        return $guid;
    }

    function CreatePasswordResetCode($values_array){
        $text = "";
        for($i=0;$i<count($values_array);$i++){

            $text .=$values_array[$i].'*';

        }
        $combine_text = rtrim($text,"*");
        $encrypted_val = encrypt($combine_text);
        return $encrypted_val;

    }

		function GetUrlContent( $url ){
	      $options = array(
	          CURLOPT_RETURNTRANSFER => true,     // return web page
	          CURLOPT_HEADER         => false,    // don't return headers
	          CURLOPT_FOLLOWLOCATION => false,     // follow redirects
	          CURLOPT_ENCODING       => "",       // handle all encodings
	          CURLOPT_AUTOREFERER    => true,     // set referer on redirect
	          CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
	          CURLOPT_TIMEOUT        => 120,      // timeout on response
	          CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
	          CURLOPT_SSL_VERIFYPEER => false,     // Disabled SSL Cert checks
			  CURLOPT_FRESH_CONNECT=>true
		  );

	      $ch      = curl_init( $url );
	      curl_setopt_array( $ch, $options );
	      $content = curl_exec( $ch );
	      $err     = curl_errno( $ch );
	      $errmsg  = curl_error( $ch );
	      $header  = curl_getinfo( $ch );
	      curl_close( $ch );

	      $header['errno']   = $err;
	      $header['errmsg']  = $errmsg;
	      $header['content'] = $content;
	      return $header['content'];
	    }


		function RandomCoordinateWithinRadius($radius,$centre,$count){

			$coordinates = array();



			for($i=0;$i<$count;$i++){
					 $radius_earth = 3959; //miles

			  //Pick random distance within $distance;
			  $distance = lcg_value()*$radius;

			  //Convert degrees to radians.
			  $centre_rads = array_map( 'deg2rad', $centre );

			  //First suppose our point is the north pole.
			  //Find a random point $distance miles away
			  $lat_rads = (pi()/2) -  $distance/$radius_earth;
			  $lng_rads = lcg_value()*2*pi();


			  //($lat_rads,$lng_rads) is a point on the circle which is
			  //$distance miles from the north pole. Convert to Cartesian
			  $x1 = cos( $lat_rads ) * sin( $lng_rads );
			  $y1 = cos( $lat_rads ) * cos( $lng_rads );
			  $z1 = sin( $lat_rads );


			  //Rotate that sphere so that the north pole is now at $centre.

			  //Rotate in x axis by $rot = (pi()/2) - $centre_rads[0];
			  $rot = (pi()/2) - $centre_rads[0];
			  $x2 = $x1;
			  $y2 = $y1 * cos( $rot ) + $z1 * sin( $rot );
			  $z2 = -$y1 * sin( $rot ) + $z1 * cos( $rot );

			  //Rotate in z axis by $rot = $centre_rads[1]
			  $rot = $centre_rads[1];
			  $x3 = $x2 * cos( $rot ) + $y2 * sin( $rot );
			  $y3 = -$x2 * sin( $rot ) + $y2 * cos( $rot );
			  $z3 = $z2;


			  //Finally convert this point to polar co-ords
			  $lng_rads = atan2( $x3, $y3 );
			  $lat_rads = asin( $z3 );

			  $coor = array_map( 'rad2deg', array( $lat_rads, $lng_rads ) );

				array_push($coordinates,["lat"=>$coor[0] ,"lng"=>$coor[1]]);
			}


			return $coordinates;


		}

		function GetFunctionArgumentNames($funcName) {
			$f = new ReflectionFunction($funcName);
			$result = array();
			foreach ($f->getParameters() as $param) {
				$result[] = $param->name;
			}
			return $result;
		}


?>
