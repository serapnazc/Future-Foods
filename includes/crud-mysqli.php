<?php
    date_default_timezone_set('US/Eastern');
    function ErrorLog($error_data,$type){
        include('settings.php');

        $newData='';
        $date =  date('Y-m-d');
        $time =  date('h:i:s');
        $log_file = $project_path.'/system_logs/'.$type.'_error_log/'.$type.'_error_log_'.$date.'.txt';
        if(!file_exists($log_file)){
            $file_create =  fopen($log_file,"w+");
        }

        $location = getcwd();
		      $file_name = basename($_SERVER['PHP_SELF']);
        $initialData = file_get_contents($log_file);
        $newData .= "*********************************************\r\n";
        $newData .= "".$time."\r\n";
        $newData .= "*********************************************\r\n";
        $newData .= "LOCATION: ".$location."\\".$file_name."\r\n";
        $newData .= "\r\n".$error_data." \r\n".$initialData;
        file_put_contents($log_file,$newData);
    }

    function TestLog($test_data){
        include('settings.php');
        $newData='';
        $date =  date('Y-m-d');
        $time =  date('h:i:s');
        $log_file = $project_path.'/system_logs/test_log/test_log_'.$date.'.txt';
        if(!file_exists($log_file)){
            $file_create =  fopen($log_file,"w+");
        }

        $location = getcwd();
		      $file_name = basename($_SERVER['PHP_SELF']);
        $initialData = file_get_contents($log_file);
        $newData .= "*********************************************\r\n";
        $newData .= "".$time."\r\n";
        $newData .= "*********************************************\r\n";
        $newData .= "LOCATION: ".$location."\\".$file_name."\r\n";
        $newData .= "\r\n".$test_data." \r\n".$initialData;
        file_put_contents($log_file,$newData);

    }



    function Get($table_name,$condition,$write_log = false){
        include('config.php');
        $query_get = "SELECT * FROM ".$table_name." ".$condition."";


        if($write_log == true){
            TestLog($query_get);

        }

        $result = mysqli_query($conn, $query_get);

        if( $result === false ) {
            ErrorLog($query_get,'crud');
			mysqli_close( $conn );
            return false;

        } else {
            $rows_array=array();
            if(!empty($result)){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $rows_array[] = $row;
                }
            }
			mysqli_close( $conn );
            return $rows_array;


        }



        /***************************************************************************
                        //TEST
        ****************************************************************************/
        //$result = Get("email","drivers"," WHERE email = '".$email."' AND is_active='1'");
        //echo "1st results driver_id is : ".$result[0]['driver_id'];

    }

    function GetSpecificFields($fields,$table_name,$condition,$write_log =false){

        include('config.php');
        $query_get = "SELECT ".$fields." FROM ".$table_name." ".$condition."";
        if($write_log == true){
            TestLog($query_get);

        }

        $result = mysqli_query($conn, $query_get);

        if( $result === false ) {
            ErrorLog($query_get,'crud');
			mysqli_close( $conn );
            return false;

        } else {
            $rows_array=array();
            if(!empty($result)){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $rows_array[] = $row;
                }
            }
			mysqli_close( $conn );
            return $rows_array;

        }


    }

    function SQLExecute($query,$write_log = false ){
        include('config.php');
        $query_get = "".$query."";
        if($write_log == true){
            TestLog($query_get);

        }

        $result = mysqli_query($conn, $query_get);

        if( $result === false ) {
            ErrorLog($query_get,'crud');
			mysqli_close( $conn );
            return false;

        } else {
            $rows_array=array();
            if(!empty($result)){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $rows_array[] = $row;
                }
            }
			mysqli_close( $conn );
            return $rows_array;

        }

    }

    function GetColumns($table_name){
        include('config.php');
        /***************************************************************************
                            //GET COLUMN NAMES AND PREPARE VALUES
        ****************************************************************************/
        $column_names = "";
        $column_names_array=array();
        $values = "";

        $query_get_columns = 'SELECT COLUMN_NAME, DATA_TYPE, IS_NULLABLE,COLUMN_KEY FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'.$dbname.'" AND TABLE_NAME = "'.$table_name.'"';
       // echo  $query_get_columns;
        $result = mysqli_query($conn, $query_get_columns);

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $rows_array[] = $row;

        }
		      mysqli_close( $conn );
        return $rows_array;

    }

    function GetTables(){
        include('config.php');
        $query_get = "show tables";
        $result = mysqli_query($conn, $query_get);
        $rows_array=array();

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $rows_array[] = $row;
        }

        $tables_array =array();

        for($i=0;$i<count($rows_array);$i++){
            array_push($tables_array, $rows_array[$i]['Tables_in_'.$dbname.'']);
        }


		      mysqli_close( $conn );
       return $tables_array;


    }

    function Insert($table_name, $fields_array, $values_array,$write_log = false ){
        include('config.php');
        $set_values = "";
        $set_fields = "";
        for($i=0;$i<count($values_array);$i++){
            $set_values .="'".mysqli_real_escape_string($conn,$values_array[$i])."',";
        }
        $values = rtrim($set_values,",");
        for($i=0;$i<count($fields_array);$i++){
            $set_fields .=$fields_array[$i].",";
        }
        $fields = rtrim($set_fields,",");
        /***************************************************************************
                                //INSERT PROCESS
        ****************************************************************************/
        $query_insert = "INSERT INTO ".$table_name." (".$fields.") VALUES (".$values.")";
        if($write_log == true){
            TestLog($query_insert);

        }


        $result_insert = mysqli_query($conn, $query_insert);

        if( $result_insert === false ) {
            ErrorLog($query_insert,'crud');
			         mysqli_close( $conn );
            return false;

        } else {
			mysqli_close( $conn );
            return true;
        }
        /***************************************************************************
                        //TEST
        ****************************************************************************/
        //$fields_array=array("testname","lastname","21321321","3541354");
        //$test_values=array("testname","lastname","21321321","3541354");
        //Insert('drivers',$fields_array,$test_values);

    }

    function Delete($table_name,$condition,$write_log = false ){
        include('config.php');
        $query_delete = "DELETE FROM ".$table_name." ".$condition."";

        if($write_log == true){
            TestLog($query_delete);
        }


        $result_delete = mysqli_query($conn, $query_delete);

        if( $result_delete === false ) {
            ErrorLog($query_delete,'crud');
			mysqli_close( $conn );
            return false;

        } else {
			mysqli_close( $conn );
            return true;
        }
        /***************************************************************************
                        //TEST
        ****************************************************************************/
         //Delete("drivers","WHERE first_name = 's' AND phone = 34");

    }

    function Update($table_name,$fields_array,$values_array,$condition,$write_log = false){
        include('config.php');
        /***************************************************************************
                                //UPDATE PROCESS
        ****************************************************************************/
        $query_update = "UPDATE ".$table_name." SET ";
        $set_option = "";
        for($i=0;$i<count($fields_array);$i++){
            $set_option .= $fields_array[$i]." = '".mysqli_real_escape_string($conn,$values_array[$i])."',";
        }
        $set_option = rtrim($set_option,",");
        $query_update .=$set_option;
        $query_update .= " ".$condition ;

        if($write_log == true){
            TestLog($query_update);

        }


        $result_update = mysqli_query($conn, $query_update);

        if( $result_update === false ) {
            ErrorLog($query_update,'crud');
			 mysqli_close( $conn );
            return false;

        } else {
			 mysqli_close( $conn );
            return true;
        }
        /***************************************************************************
                        //TEST
        ****************************************************************************/
        //
        //$test_fields=array("last_name");
        //$test_values=array("newwwww");
        //Update("drivers",$test_fields,$test_values,"WHERE phone ='1'");

    }

    function FillDataTable($table,$primaryKey,$columns,$where,$method){
        include('settings.php');
        // SQL server connection information
        $sql_details = array(
            'user' => $dbuser,
            'pass' => $dbpass,
            'db'   => $dbname,
            'host' => $host
        );

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        * If you just want to use the basic configuration for DataTables with PHP
        * server-side, there is no need to edit below this line.
        */

        require( 'ssp.class.php' );

  		if($method =='get'){
  			  echo json_encode(
              SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns,$where)
          );
  		} else {

  			  echo json_encode(
              SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns,$where)
  			);
  		}



    }


?>
