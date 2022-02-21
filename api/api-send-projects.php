<?php
  date_default_timezone_set('US/Eastern');
  session_start();
  include('../includes/settings.php');
	include($project_path.'/includes/functions.php');
	include($project_path.'/includes/crud-'.$crud_type.'.php');

  if(!isset($_POST['token']) || $_POST['token'] !='F751461E769BE848888C1D793A7FA14A2F30A8E786C4194C9878022FFB634254'){
   die();
  }

  $team_id = $_POST['team_id'];
  $team_info =Get("teams", "where team_id = '".$team_id."'");
  //echo json_encode($team_info);
  $team_name = $team_info[0]['team_name'];

  // MAILS TO MEMBERS
  $members = Get("team_members","where team_id ='".$team_id."'");
  $message_for_team_members = '<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;color: #000000">
    <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: transparent;width:100%" cellpadding="0" cellspacing="0">
     <tbody>
        <tr style="vertical-align: top">
           <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">

              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                 <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                       <div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
                          <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                             <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                   <tbody>
                                      <tr>
                                         <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                            <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                               <p style="font-size: 14px; line-height: 140%;">Değerli "'.$team_name.'" takımı, tebrikler!</p>
                                               <p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
                                               <p style="font-size: 14px; line-height: 140%;">Future Foods Competition proje gonderimi aşamasını takım olarak başarıyla tamamladınız! </p>

                                               <p style="font-size: 14px; line-height: 140%;">Hepinize başarılar diliyoruz!</p>
                                               <p style="font-size: 14px; line-height: 140%;">Lütfen bu e-postayı yanıtlamayın. İletişim için <a href="mailto:info@futurefoodscompetition.com">info@futurefoodscompetition.com</a> mail adresini kullanınız.</p>

                                               <p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
                                               <p style="font-size: 14px; line-height: 140%;">Sevgilerimizle,</p>
                                               <p style="font-size: 14px; line-height: 140%;">Future Foods Competition Ekibi</p>


                                            </div>
                                         </td>
                                      </tr>
                                   </tbody>
                                </table>
                                <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                   <tbody>
                                      <tr>
                                         <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                            <div align="right">
                                               <div style="display: table; max-width:110px;">
                                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px">
                                                     <tbody>
                                                        <tr style="vertical-align: top">
                                                           <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                              <a href="https://facebook.com/" title="Facebook" target="_blank">
                                                              <img src="http://futurefoodscompetition.com/assets/images/facebook-logo.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                              </a>
                                                           </td>
                                                        </tr>
                                                     </tbody>
                                                  </table>
                                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px">
                                                     <tbody>
                                                        <tr style="vertical-align: top">
                                                           <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                              <a href="https://instagram.com/" title="Instagram" target="_blank">
                                                              <img src="http://futurefoodscompetition.com/assets/images/instagram-logo.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                              </a>
                                                           </td>
                                                        </tr>
                                                     </tbody>
                                                  </table>
                                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                                     <tbody>
                                                        <tr style="vertical-align: top">
                                                           <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                              <a href="https://twitter.com/" title="Twitter" target="_blank">
                                                              <img src="http://futurefoodscompetition.com/assets/images/twitter-logo.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                              </a>
                                                           </td>
                                                        </tr>
                                                     </tbody>
                                                  </table>
                                               </div>
                                            </div>
                                         </td>
                                      </tr>
                                   </tbody>
                                </table>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </td>
        </tr>
     </tbody>
  </table>
  </body>';

  $subject_for_team_members = 'FFC | Proje gonderiminiz başarıyla tamamlandı!';
	foreach($members as $member){

  SendEmail($member['mail'],$message_for_team_members,$subject_for_team_members);

}

  $file_url_array = array();
  $member_infos ='';
  // MAIL TO ADMIN FOR
  $team_project_info =Get("team_projects", "where team_id = '".$team_id."'");
  $team_project_file = $team_project_info[0]['project'];
  array_push($file_url_array, $team_project_file);
  for($i=0; $i<count($members); $i++){

    $member_id = $i+1;
    $member_name = $members[$i]['name'];
    $member_phone = $members[$i]['phone'];
    $member_mail = $members[$i]['mail'];
    $member_school = $members[$i]['school'];
    $member_grade = $members[$i]['grade'];
    $member_department = $members[$i]['department'];
    $member_city = $members[$i]['city'];
    $member_file = $members[$i]['student_certificate'];
    if($members[$i]['cv'] != null){
      $member_cv_file = $members[$i]['cv'];
      array_push($file_url_array, $member_file, $member_cv_file);
    }else{
      array_push($file_url_array, $member_file);
    }
    $member_infos .= '   <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 900px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                   <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                      <div class="u-col u-col-100" style="max-width: 320px;min-width: 900px;display: table-cell;vertical-align: top;">
                                         <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                            <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                              <tbody>
                                                                 <tr style="vertical-align: top">
                                                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                       <span>&#160;</span>
                                                                    </td>
                                                                 </tr>
                                                              </tbody>
                                                           </table>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                               <table id="u_content_text_8" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px; font-family: tahoma, arial, helvetica, sans-serif;">'.$member_id.'. Üye: '.$member_name.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                              <tbody>
                                                                 <tr style="vertical-align: top">
                                                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                       <span>&#160;</span>
                                                                    </td>
                                                                 </tr>
                                                              </tbody>
                                                           </table>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 900px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                   <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                      <div class="u-col u-col-50" style="max-width: 320px;min-width: 450px;display: table-cell;vertical-align: top;">
                                         <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                            <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px; font-family: tahoma, arial, helvetica, sans-serif;">Okul:  '.$member_school.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 18px; line-height: 25.2px;">Sınıf: '.$member_grade.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 18px; line-height: 25.2px;">Bölüm: '.$member_department.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="u-col u-col-50" style="max-width: 320px;min-width: 450px;display: table-cell;vertical-align: top;">
                                         <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                            <!--[if (!mso)&(!IE)]><!-->
                                            <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                               <!--<![endif]-->
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 18px; line-height: 25.2px;">Telefon: '.$member_phone.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 18px; line-height: 25.2px;">Mail: '.$member_mail.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                               <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                  <tbody>
                                                     <tr>
                                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                                           <div class="v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                                              <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px; font-family: tahoma, arial, helvetica, sans-serif;">Sehir: '.$member_city.'</span></p>
                                                           </div>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>';

  }
  $message_for_admin = '<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #fcfcfc;color: #000000">
     <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #fcfcfc;width:100%" cellpadding="0" cellspacing="0">
        <tbody>
           <tr style="vertical-align: top">
              <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                 <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 900px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                       <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 900px;display: table-cell;vertical-align: top;">
                             <div style="width: 100% !important;">
                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                   <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                      <tbody>
                                         <tr>
                                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                               <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                  <tr>
                                                     <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                                        <a href="http://futurefoodscompetition.com" target="_blank">
                                                        <img align="center" border="0" src="" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 13%;max-width: 114.4px;" width="114.4"/>
                                                        </a>
                                                     </td>
                                                  </tr>
                                               </table>
                                            </td>
                                         </tr>
                                      </tbody>
                                   </table>
                                   <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                      <tbody>
                                         <tr>
                                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                               <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                  <tbody>
                                                     <tr style="vertical-align: top">
                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                           <span>&#160;</span>
                                                        </td>
                                                     </tr>
                                                  </tbody>
                                               </table>
                                            </td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                  <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 900px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                       <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 900px;display: table-cell;vertical-align: top;">
                             <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                   <table id="u_content_heading_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                      <tbody>
                                         <tr>
                                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                               <h1 class="v-line-height v-font-size" style="margin: 0px; color: #000000; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: georgia,palatino; font-size: 22px;">
                                                  Takım Adı: '.$team_name.'
                                               </h1>
                                            </td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                  '.$member_infos.'
              </td>
           </tr>
        </tbody>
     </table>
  </body>';

  $subject_for_admin =''.$team_name.' Takimi Projesini Yolladi!';

SendEmail('info@futurefoodscompetition.com',$message_for_admin,$subject_for_admin,$file_url_array);










?>
