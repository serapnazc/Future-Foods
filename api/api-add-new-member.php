<?php
session_start();
if($_SESSION['token'] !='F751461E769BE848888C1D793A7FA14A2F30A8E786C4194C9878022FFB634254'){
  die();
}

 $_SESSION['member_count'] = $_GET['member_count'];
$member_id =  $_SESSION['member_count']+1;

if($member_id >3){


  echo json_encode(["result" => -1, "msg" => 'Daha fazla uye ekleyemezsiniz']);
die();
}

 $member_div = '<h4 class="apply-title">'.$member_id.'. ÜYE</h4>
      <div class="col-md-6">
         <div class="form-group">    <input name="'.$member_id.'_name" type="text" value="" placeholder="Ad Soyad" class="form-control" required />  </div>
         <div class="form-group">    <input name="'.$member_id.'_phone" type="tel" value="" placeholder="Telefon" class="form-control"  required/>  </div>
         <div class="form-group">    <input name="'.$member_id.'_email" type="text" value="" placeholder="Email" class="form-control"  required/>  </div>
         <div class="form-group">
            <select name="'.$member_id.'_city" class="form-control" required>
               <option value="Adana">Adana</option>
               <option value="Adıyaman">Adıyaman</option>
               <option value="Afyonkarahisar">Afyonkarahisar</option>
               <option value="Ağrı">Ağrı</option>
               <option value="Amasya">Amasya</option>
               <option value="Ankara">Ankara</option>
               <option value="Antalya">Antalya</option>
               <option value="Artvin">Artvin</option>
               <option value="Aydın">Aydın</option>
               <option value="Balıkesir">Balıkesir</option>
               <option value="Bilecik">Bilecik</option>
               <option value="Bingöl">Bingöl</option>
               <option value="Bitlis">Bitlis</option>
               <option value="Bolu">Bolu</option>
               <option value="Burdur">Burdur</option>
               <option value="Bursa">Bursa</option>
               <option value="Çanakkale">Çanakkale</option>
               <option value="Çankırı">Çankırı</option>
               <option value="Çorum">Çorum</option>
               <option value="Denizli">Denizli</option>
               <option value="Diyarbakır">Diyarbakır</option>
               <option value="Edirne">Edirne</option>
               <option value="Elazığ">Elazığ</option>
               <option value="Erzincan">Erzincan</option>
               <option value="Erzurum">Erzurum</option>
               <option value="Eskişehir">Eskişehir</option>
               <option value="Gaziantep">Gaziantep</option>
               <option value="Giresun">Giresun</option>
               <option value="Gümüşhane">Gümüşhane</option>
               <option value="Hakkâri">Hakkâri</option>
               <option value="Hatay">Hatay</option>
               <option value="Isparta">Isparta</option>
               <option value="Mersin">Mersin</option>
               <option value="İstanbul">İstanbul</option>
               <option value="İzmir">İzmir</option>
               <option value="Kars">Kars</option>
               <option value="Kastamonu">Kastamonu</option>
               <option value="Kayseri">Kayseri</option>
               <option value="Kırklareli">Kırklareli</option>
               <option value="Kırşehir">Kırşehir</option>
               <option value="Kocaeli">Kocaeli</option>
               <option value="Konya">Konya</option>
               <option value="Kütahya">Kütahya</option>
               <option value="Malatya">Malatya</option>
               <option value="Manisa">Manisa</option>
               <option value="Kahramanmaraş">Kahramanmaraş</option>
               <option value="Mardin">Mardin</option>
               <option value="Muğla">Muğla</option>
               <option value="Muş">Muş</option>
               <option value="Nevşehir">Nevşehir</option>
               <option value="Niğde">Niğde</option>
               <option value="Ordu">Ordu</option>
               <option value="Rize">Rize</option>
               <option value="Sakarya">Sakarya</option>
               <option value="Samsun">Samsun</option>
               <option value="Siirt">Siirt</option>
               <option value="Sinop">Sinop</option>
               <option value="Sivas">Sivas</option>
               <option value="Tekirdağ">Tekirdağ</option>
               <option value="Tokat">Tokat</option>
               <option value="Trabzon">Trabzon</option>
               <option value="Tunceli">Tunceli</option>
               <option value="Şanlıurfa">Şanlıurfa</option>
               <option value="Uşak">Uşak</option>
               <option value="Van">Van</option>
               <option value="Yozgat">Yozgat</option>
               <option value="Zonguldak">Zonguldak</option>
               <option value="Aksaray">Aksaray</option>
               <option value="Bayburt">Bayburt</option>
               <option value="Karaman">Karaman</option>
               <option value="Kırıkkale">Kırıkkale</option>
               <option value="Batman">Batman</option>
               <option value="Şırnak">Şırnak</option>
               <option value="Bartın">Bartın</option>
               <option value="Ardahan">Ardahan</option>
               <option value="Iğdır">Iğdır</option>
               <option value="Yalova">Yalova</option>
               <option value="Karabük">Karabük</option>
               <option value="Kilis">Kilis</option>
               <option value="Osmaniye">Osmaniye</option>
               <option value="Düzce">Düzce</option>
            </select>
         </div>
      </div>
      <input name="member_id" value='.$member_id.' hidden/>
      <div class="col-md-6">
         <div class="form-group">
            <select  name="'.$member_id.'_school" class="form-control" required>
               <option value="">Okul</option>
               <option value="Abant İzzet Baysal Üniversitesi">Abant İzzet Baysal Üniversitesi</option>
               <option value="Abdullah Gül Üniversitesi">Abdullah Gül Üniversitesi</option>
               <option value="Acıbadem Üniversitesi">Acıbadem Üniversitesi</option>
               <option value="Adana Bilim ve Teknoloji Üniversitesi">Adana Bilim ve Teknoloji Üniversitesi</option>
               <option value="Adnan Menderes Üniversitesi">Adnan Menderes Üniversitesi</option>
               <option value="Adıyaman Üniversitesi">Adıyaman Üniversitesi</option>
               <option value="Afyon Kocatepe Üniversitesi">Afyon Kocatepe Üniversitesi</option>
               <option value="Ahi Evran Üniversitesi">Ahi Evran Üniversitesi</option>
               <option value="Akdeniz Üniversitesi">Akdeniz Üniversitesi</option>
               <option value="Akev Üniversitesi">Akev Üniversitesi</option>
               <option value="Aksaray Üniversitesi">Aksaray Üniversitesi</option>
               <option value="Alanya Alaaddin Keykubat Üniversitesi">Alanya Alaaddin Keykubat Üniversitesi</option>
               <option value="Alanya Hamdullah Emin Paşa Üniversitesi">Alanya Hamdullah Emin Paşa Üniversitesi</option>
               <option value="Amasya Üniversitesi">Amasya Üniversitesi</option>
               <option value="Anadolu Üniversitesi">Anadolu Üniversitesi</option>
               <option value="Anka Teknoloji Üniversitesi">Anka Teknoloji Üniversitesi</option>
               <option value="Ankara Sosyal Bilimler Üniversitesi">Ankara Sosyal Bilimler Üniversitesi</option>
               <option value="Ankara Üniversitesi">Ankara Üniversitesi</option>
               <option value="Ardahan Üniversitesi">Ardahan Üniversitesi</option>
               <option value="Artvin Çoruh Üniversitesi">Artvin Çoruh Üniversitesi</option>
               <option value="Atatürk Üniversitesi">Atatürk Üniversitesi</option>
               <option value="Atılım Üniversitesi">Atılım Üniversitesi</option>
               <option value="Avrasya Üniversitesi">Avrasya Üniversitesi</option>
               <option value="Ağrı İbrahim Çeçen Üniversitesi">Ağrı İbrahim Çeçen Üniversitesi</option>
               <option value="Bahçeşehir Üniversitesi">Bahçeşehir Üniversitesi</option>
               <option value="Balıkesir Üniversitesi">Balıkesir Üniversitesi</option>
               <option value="Bandırma Onyedi Eylül Üniversitesi">Bandırma Onyedi Eylül Üniversitesi</option>
               <option value="Bartın Üniversitesi">Bartın Üniversitesi</option>
               <option value="Batman Üniversitesi">Batman Üniversitesi</option>
               <option value="Bayburt Üniversitesi">Bayburt Üniversitesi</option>
               <option value="Başkent Üniversitesi">Başkent Üniversitesi</option>
               <option value="Beykent Üniversitesi">Beykent Üniversitesi</option>
               <option value="Bezmiâlem Vakıf Üniversitesi">Bezmiâlem Vakıf Üniversitesi</option>
               <option value="Bilecik Şeyh Edebali Üniversitesi">Bilecik Şeyh Edebali Üniversitesi</option>
               <option value="Bilkent Üniversitesi">Bilkent Üniversitesi</option>
               <option value="Bingöl Üniversitesi">Bingöl Üniversitesi</option>
               <option value="Biruni Üniversitesi">Biruni Üniversitesi</option>
               <option value="Bitlis Eren Üniversitesi">Bitlis Eren Üniversitesi</option>
               <option value="Bozok Üniversitesi">Bozok Üniversitesi</option>
               <option value="Boğaziçi Üniversitesi">Boğaziçi Üniversitesi</option>
               <option value="Bursa Orhangazi Üniversitesi">Bursa Orhangazi Üniversitesi</option>
               <option value="Bursa Teknik Üniversitesi">Bursa Teknik Üniversitesi</option>
               <option value="Bülent Ecevit Üniversitesi">Bülent Ecevit Üniversitesi</option>
               <option value="Canik Başarı Üniversitesi">Canik Başarı Üniversitesi</option>
               <option value="Celal Bayar Üniversitesi">Celal Bayar Üniversitesi</option>
               <option value="Cumhuriyet Üniversitesi">Cumhuriyet Üniversitesi</option>
               <option value="Çanakkale Onsekiz Mart Üniversitesi">Çanakkale Onsekiz Mart Üniversitesi</option>
               <option value="Çankaya Üniversitesi">Çankaya Üniversitesi</option>
               <option value="Çankırı Karatekin Üniversitesi">Çankırı Karatekin Üniversitesi</option>
               <option value="Çağ Üniversitesi">Çağ Üniversitesi</option>
               <option value="Çukurova Üniversitesi">Çukurova Üniversitesi</option>
               <option value="Deniz Harp Okulu">Deniz Harp Okulu</option>
               <option value="Dicle Üniversitesi">Dicle Üniversitesi</option>
               <option value="Dokuz Eylül Üniversitesi">Dokuz Eylül Üniversitesi</option>
               <option value="Doğuş Üniversitesi">Doğuş Üniversitesi</option>
               <option value="Dumlupınar Üniversitesi">Dumlupınar Üniversitesi</option>
               <option value="Düzce Üniversitesi">Düzce Üniversitesi</option>
               <option value="Ege Üniversitesi">Ege Üniversitesi</option>
               <option value="Erciyes Üniversitesi">Erciyes Üniversitesi</option>
               <option value="Erzincan Üniversitesi">Erzincan Üniversitesi</option>
               <option value="Erzurum Teknik Üniversitesi">Erzurum Teknik Üniversitesi</option>
               <option value="Eskişehir Osmangazi Üniversitesi">Eskişehir Osmangazi Üniversitesi</option>
               <option value="Fatih Sultan Mehmet Üniversitesi">Fatih Sultan Mehmet Üniversitesi</option>
               <option value="Fatih Üniversitesi">Fatih Üniversitesi</option>
               <option value="Fırat Üniversitesi">Fırat Üniversitesi</option>
               <option value="Galatasaray Üniversitesi">Galatasaray Üniversitesi</option>
               <option value="Gazi Üniversitesi">Gazi Üniversitesi</option>
               <option value="Gaziantep Üniversitesi">Gaziantep Üniversitesi</option>
               <option value="Gaziosmanpaşa Üniversitesi">Gaziosmanpaşa Üniversitesi</option>
               <option value="Gebze Teknik Üniversitesi">Gebze Teknik Üniversitesi</option>
               <option value="Gedik Üniversitesi">Gedik Üniversitesi</option>
               <option value="Gediz Üniversitesi">Gediz Üniversitesi</option>
               <option value="Giresun Üniversitesi">Giresun Üniversitesi</option>
               <option value="Gülhane Askeri Tıp Akademisi">Gülhane Askeri Tıp Akademisi</option>
               <option value="Gümüşhane Üniversitesi">Gümüşhane Üniversitesi</option>
               <option value="Hacettepe Üniversitesi">Hacettepe Üniversitesi</option>
               <option value="Hakkari Üniversitesi">Hakkari Üniversitesi</option>
               <option value="Haliç Üniversitesi">Haliç Üniversitesi</option>
               <option value="Harran Üniversitesi">Harran Üniversitesi</option>
               <option value="Hasan Kalyoncu Üniversitesi">Hasan Kalyoncu Üniversitesi</option>
               <option value="Hava Harp Okulu">Hava Harp Okulu</option>
               <option value="Hitit Üniversitesi">Hitit Üniversitesi</option>
               <option value="Iğdır Üniversitesi">Iğdır Üniversitesi</option>
               <option value="Işık Üniversitesi">Işık Üniversitesi</option>
               <option value="Kadir Has Üniversitesi">Kadir Has Üniversitesi</option>
               <option value="Kafkas Üniversitesi">Kafkas Üniversitesi</option>
               <option value="Kahramanmaraş Sütçü İmam Üniversitesi">Kahramanmaraş Sütçü İmam Üniversitesi</option>
               <option value="Kanuni Üniversitesi">Kanuni Üniversitesi</option>
               <option value="Kara Harp Okulu">Kara Harp Okulu</option>
               <option value="Karabük Üniversitesi">Karabük Üniversitesi</option>
               <option value="Karadeniz Teknik Üniversitesi">Karadeniz Teknik Üniversitesi</option>
               <option value="Karamanoğlu Mehmetbey Üniversitesi">Karamanoğlu Mehmetbey Üniversitesi</option>
               <option value="Karatay Üniversitesi">Karatay Üniversitesi</option>
               <option value="Kastamonu Üniversitesi">Kastamonu Üniversitesi</option>
               <option value="Kilis 7 Aralık Üniversitesi">Kilis 7 Aralık Üniversitesi</option>
               <option value="Kocaeli Üniversitesi">Kocaeli Üniversitesi</option>
               <option value="Konya Gıda Tarım Üniversitesi">Konya Gıda Tarım Üniversitesi</option>
               <option value="Koç Üniversitesi">Koç Üniversitesi</option>
               <option value="Kırklareli Üniversitesi">Kırklareli Üniversitesi</option>
               <option value="Kırıkkale Üniversitesi">Kırıkkale Üniversitesi</option>
               <option value="MEF Üniversitesi">MEF Üniversitesi</option>
               <option value="Maltepe Üniversitesi">Maltepe Üniversitesi</option>
               <option value="Mardin Artuklu Üniversitesi">Mardin Artuklu Üniversitesi</option>
               <option value="Marmara Üniversitesi">Marmara Üniversitesi</option>
               <option value="Mehmet Akif Ersoy Üniversitesi">Mehmet Akif Ersoy Üniversitesi</option>
               <option value="Melikşah Üniversitesi">Melikşah Üniversitesi</option>
               <option value="Mersin Üniversitesi">Mersin Üniversitesi</option>
               <option value="Mevlana Üniversitesi">Mevlana Üniversitesi</option>
               <option value="Mimar Sinan Güzel Sanatlar Üniversitesi">Mimar Sinan Güzel Sanatlar Üniversitesi</option>
               <option value="Murat Hüdavendigar Üniversitesi">Murat Hüdavendigar Üniversitesi</option>
               <option value="Mustafa Kemal Üniversitesi">Mustafa Kemal Üniversitesi</option>
               <option value="Muğla Sıtkı Koçman Üniversitesi">Muğla Sıtkı Koçman Üniversitesi</option>
               <option value="Muş Alparslan Üniversitesi">Muş Alparslan Üniversitesi</option>
               <option value="Namık Kemal Üniversitesi">Namık Kemal Üniversitesi</option>
               <option value="Necmettin Erbakan Üniversitesi**">Necmettin Erbakan Üniversitesi**</option>
               <option value="Nevşehir Hacı Bektaş Veli Üniversitesi">Nevşehir Hacı Bektaş Veli Üniversitesi</option>
               <option value="Niğde Üniversitesi">Niğde Üniversitesi</option>
               <option value="Nişantaşı Üniversitesi">Nişantaşı Üniversitesi</option>
               <option value="Nuh Naci Yazgan Üniversitesi">Nuh Naci Yazgan Üniversitesi</option>
               <option value="İbn-u Haldun Üniversitesi">İbn-u Haldun Üniversitesi</option>
               <option value="İnönü Üniversitesi">İnönü Üniversitesi</option>
               <option value="İpek Üniversitesi**">İpek Üniversitesi**</option>
               <option value="İskenderun Teknik Üniversitesi">İskenderun Teknik Üniversitesi</option>
               <option value="İstanbul 29 Mayıs Üniversitesi">İstanbul 29 Mayıs Üniversitesi</option>
               <option value="İstanbul Arel Üniversitesi">İstanbul Arel Üniversitesi</option>
               <option value="İstanbul Aydın Üniversitesi">İstanbul Aydın Üniversitesi</option>
               <option value="İstanbul Bilgi Üniversitesi">İstanbul Bilgi Üniversitesi</option>
               <option value="İstanbul Bilim Üniversitesi">İstanbul Bilim Üniversitesi</option>
               <option value="İstanbul Esenyurt Üniversitesi">İstanbul Esenyurt Üniversitesi</option>
               <option value="İstanbul Gelişim Üniversitesi">İstanbul Gelişim Üniversitesi</option>
               <option value="İstanbul Kemerburgaz Üniversitesi">İstanbul Kemerburgaz Üniversitesi</option>
               <option value="İstanbul Kültür Üniversitesi">İstanbul Kültür Üniversitesi</option>
               <option value="İstanbul Medeniyet Üniversitesi">İstanbul Medeniyet Üniversitesi</option>
               <option value="İstanbul Medipol Üniversitesi">İstanbul Medipol Üniversitesi</option>
               <option value="İstanbul Rumeli Üniversitesi">İstanbul Rumeli Üniversitesi</option>
               <option value="İstanbul Sabahattin Zaim Üniversitesi">İstanbul Sabahattin Zaim Üniversitesi</option>
               <option value="İstanbul Teknik Üniversitesi">İstanbul Teknik Üniversitesi</option>
               <option value="İstanbul Ticaret Üniversitesi">İstanbul Ticaret Üniversitesi</option>
               <option value="İstanbul Üniversitesi">İstanbul Üniversitesi</option>
               <option value="İstanbul Şehir Üniversitesi">İstanbul Şehir Üniversitesi</option>
               <option value="İstinye Üniversitesi">İstinye Üniversitesi</option>
               <option value="İzmir Ekonomi Üniversitesi">İzmir Ekonomi Üniversitesi</option>
               <option value="İzmir Kâtip Çelebi Üniversitesi">İzmir Kâtip Çelebi Üniversitesi</option>
               <option value="İzmir Yüksek Teknoloji Enstitüsü">İzmir Yüksek Teknoloji Enstitüsü</option>
               <option value="İzmir Üniversitesi">İzmir Üniversitesi</option>
               <option value="Okan Üniversitesi">Okan Üniversitesi</option>
               <option value="Ondokuz Mayıs Üniversitesi">Ondokuz Mayıs Üniversitesi</option>
               <option value="Ordu Üniversitesi">Ordu Üniversitesi</option>
               <option value="Orta Doğu Teknik Üniversitesi">Orta Doğu Teknik Üniversitesi</option>
               <option value="Osmaniye Korkut Ata Üniversitesi">Osmaniye Korkut Ata Üniversitesi</option>
               <option value="Özyeğin Üniversitesi">Özyeğin Üniversitesi</option>
               <option value="Pamukkale Üniversitesi">Pamukkale Üniversitesi</option>
               <option value="Piri Reis Üniversitesi">Piri Reis Üniversitesi</option>
               <option value="Polis Akademisi">Polis Akademisi</option>
               <option value="Recep Tayyip Erdoğan Üniversitesi">Recep Tayyip Erdoğan Üniversitesi</option>
               <option value="Sabancı Üniversitesi">Sabancı Üniversitesi</option>
               <option value="Sakarya Üniversitesi">Sakarya Üniversitesi</option>
               <option value="Sanko Üniversitesi">Sanko Üniversitesi</option>
               <option value="Sağlık Bilimleri Üniversitesi">Sağlık Bilimleri Üniversitesi</option>
               <option value="Selahattin Eyyubi Üniversitesi">Selahattin Eyyubi Üniversitesi</option>
               <option value="Selçuk Üniversitesi">Selçuk Üniversitesi</option>
               <option value="Siirt Üniversitesi">Siirt Üniversitesi</option>
               <option value="Sinop Üniversitesi">Sinop Üniversitesi</option>
               <option value="Süleyman Demirel Üniversitesi">Süleyman Demirel Üniversitesi</option>
               <option value="Süleyman Şah Üniversitesi">Süleyman Şah Üniversitesi</option>
               <option value="Şifa Üniversitesi">Şifa Üniversitesi</option>
               <option value="Şırnak Üniversitesi">Şırnak Üniversitesi</option>
               <option value="TED Üniversitesi">TED Üniversitesi</option>
               <option value="TOBB Ekonomi ve Teknoloji Üniversitesi">TOBB Ekonomi ve Teknoloji Üniversitesi</option>
               <option value="Toros Üniversitesi">Toros Üniversitesi</option>
               <option value="Trakya Üniversitesi">Trakya Üniversitesi</option>
               <option value="Tunceli Üniversitesi">Tunceli Üniversitesi</option>
               <option value="Turgut Özal Üniversitesi">Turgut Özal Üniversitesi</option>
               <option value="Türk Alman Üniversitesi">Türk Alman Üniversitesi</option>
               <option value="Türk Hava Kurumu Üniversitesi">Türk Hava Kurumu Üniversitesi</option>
               <option value="Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi">Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi</option>
               <option value="Ufuk Üniversitesi">Ufuk Üniversitesi</option>
               <option value="Uludağ Üniversitesi">Uludağ Üniversitesi</option>
               <option value="Uluslararası Antalya Üniversitesi">Uluslararası Antalya Üniversitesi</option>
               <option value="Uşak Üniversitesi">Uşak Üniversitesi</option>
               <option value="Üsküdar Üniversitesi">Üsküdar Üniversitesi</option>
               <option value="Yalova Üniversitesi">Yalova Üniversitesi</option>
               <option value="Yaşar Üniversitesi">Yaşar Üniversitesi</option>
               <option value="Yeditepe Üniversitesi">Yeditepe Üniversitesi</option>
               <option value="Yeni Yüzyıl Üniversitesi">Yeni Yüzyıl Üniversitesi</option>
               <option value="Yüksek İhtisas Üniversitesi**">Yüksek İhtisas Üniversitesi**</option>
               <option value="Yüzüncü Yıl Üniversitesi">Yüzüncü Yıl Üniversitesi</option>
               <option value="Yıldırım Beyazıt Üniversitesi">Yıldırım Beyazıt Üniversitesi</option>
               <option value="Yıldız Teknik Üniversitesi">Yıldız Teknik Üniversitesi</option>
               <option value="Zirve Üniversitesi">Zirve Üniversitesi</option>
            </select>
         </div>
         <div class="form-group">
            <select name="'.$member_id.'_grade" class="form-control" required>
               <option value="">Sınıf</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="Yüksek Lisans">Yuksek Lisans</option>
            </select>
         </div>
         <div class="form-group">
            <select  name="'.$member_id.'_department"class="form-control" required>
               <option value="">Bölüm</option>
               <option value="Gıda Mühendisliği">Gıda Mühendisliği</option>
               <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
               <option value="Beslenme ve Diyetetik">Beslenme ve Diyetetik</option>
               <option value="Gastronomi">Gastronomi</option>
            </select>
         </div>
         <div class="form-group"> <input class="form-control" type="file" name="'.$member_id.'_file_upload" id="fileToUpload" required></div>
      </div>';
 $_SESSION['member_count']++ ;

echo json_encode(["result" => 1, "member_data" => $member_div]);

?>
