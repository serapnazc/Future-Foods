<?php

/******************************************************************************** */
                            //DATABASE NOTES
/******************************************************************************** */
//no columns will be the same
//ssp.class line 86 sqlsrv change
//ssp.class line 387 sqlsrv change

// Database configuration
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "future-foods";


/******************************************************************************** */
                            //FIRST USER
/******************************************************************************** */
//password(test) -> $2y$10$.JL7mC37L/r2QLaWYcMci.IMHR5LCtqCLXcpfM1umcJUw8.Uh.v4C


/******************************************************************************** */
                            //PATH SETTINGS
/******************************************************************************** */
//PROJECT PATH - until admin-login
$project_path = $_SERVER['DOCUMENT_ROOT'].'/futurefoodsforum';
$project_name = 'futurefoodsforum';

$website_url ='localhost::8080/futurefoodsforum';//https:/www.takisik.com/
$ROOT = $_SERVER['DOCUMENT_ROOT'].''; //-> /home3/fikitech/public_html

/******************************************************************************** */
                            //CRUD SETTINGS
/******************************************************************************** */
$crud_type = 'mysql';// mssql , mysql

?>
