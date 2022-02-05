<?php
   date_default_timezone_set('US/Eastern');

   require_once 'C:\inetpub\wwwroot\atlantisweb.com\WebApp\includes\constants.php';
   require_once $ROOT.'\includes\crud.php';
   require_once $ROOT.'\includes\functions.php';


   $team_id = $_POST['team_id'];


   $teaminfo =Get("teams", "where team_id = '".$team_id."'");


   $members = Get("team_members","where team_id ='".$team_id."'");
		foreach($members as $member){

         SendEmail($member['mail'],'WE RECEIVED YOUR ASLJKDNHAS','WELCOME TO FUTURE FOODS');

    }












?>
