<?php
	include('./includes-website/html_header.php');
  $result_text = '';
	if(isset($_POST['project-apply-submit'])){
		// preg_replace('/[^A-Za-z0-9]/', '', $string);
		$all_checks = true;

		$team_name = CleanVariable($_POST['team_name']);

		$team_folder_url = "uploads/".CleanName($team_name)."";

		//TEAM NAME CHECK
		if($all_checks == true){

			$result_team_name_search = Get("teams","WHERE team_name = '".$team_name."'");
			if(!empty($result_team_name_search)){
					$all_checks = true;
					$team_id = $result_team_name_search[0]['team_id'];
			}else{
				 $result_text = "Bu isimle bir takım kayıtlarımızda bulunmuyor. Takım isimini doğru girdiğinizden emin olun.";
				 $all_check = false;
			}
		}

		//TEAM ID - PROJECT CHECK
		if($all_checks == true){

			$result_team_id_search = Get("team_projects","WHERE team_id = '".$team_id."'");
			if(!empty($result_team_id_search)){
				 $result_text = "Bu takım adına kayıtlı bir proje bulunmakta.";
				 $all_checks = false;
			}
		}

		//PROJECT FILE CHECK EXTENSION AND SIZE
		if($all_checks == true){

			if($_FILES['project_file_upload']['size'] > 2097152 || pathinfo($_FILES['project_file_upload']['name'],PATHINFO_EXTENSION) != 'pdf'){

				$result_text = 'Dosya boyutu 2MB den buyuk olmamali ve yalnizca PDF olmali';
				$all_checks = false;
		 }

		}

		//PROJECT FILE UPLOAD
		if($all_checks == true){
			$project_file_url =array();
				$upload = UploadFile( $_FILES['project_file_upload'],$team_folder_url);
			//	ErrorLog(json_encode($upload),'crud');
				if($upload['result'] != 1){
					$result_text = $upload['msg'];
					ErrorLog($upload['msg'],'crud');
						$all_checks = false;
				} else {
					array_push($project_file_url,$upload['uploaded_file_url']);
				}

		}


		if($all_checks == true){
			//INSERT VS VS

			$fields_array=array("team_id","project");
			$values=array("".$team_id."","".$project_file_url[0]."");
			$insert_project_check = Insert('team_projects',$fields_array,$values);

			if($insert_project_check === true){

				$result_text = 'Teşekkürler!';
				$postInput=array("team_id"=>$team_id);
				CurlRequest('http://futurefoodscompetition.com/api/api-send-projects.php','POST',$postInput);

			} else {
				$result_text = 'Bir hata olustu';
			}



		}
}

?>
<!-- Start Contact 1 -->
<section class="contact-1" >
  <div class="container text-center">
<!--
    <div class="col-sm-10 col-sm-offset-1">
      <div class="underlined-title">
        <div class="editContent">
          <h1 class="contact-title">Proje gönderimleri 21 Şubat'ta başlayacaktır.</h1>
        </div>
          <hr>
      </div>
		</div> -->
<div class="container">
	<h3 class="warning-text"><?php echo $result_text; ?></h3>

		<h4 class="apply-title">Takım adınızı girerek projenizi yükleyin. Lütfen takım adını eksiksiz girdiğinizden emin olun.</h4>
		<form method="post" action="proje-gonderimi.php" enctype="multipart/form-data">
      <div class="col-md-6">
        <div class="form-group">
					<input name="team_name" type="text" value="" placeholder="Takım Adı" class="form-control" required="">
				</div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
					<input class="form-control" type="file" name="project_file_upload" id="fileToUpload" required="">
				</div>
      </div>
			<div class="form-group">
				<button class="btn apply-btn pull-right" type="submit" name="project-apply-submit">GÖNDER</button>
			</div>
		</form>

</div>
</section>
<?php
	include('./includes-website/footer.php');
?>
