<?php
$method = $_SERVER['REQUEST_METHOD'];
// iki proses method
if($method == 'POST'){
  // njaluk hasil teko dialogflow
  $requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
  $kalimat = $json->result->parameters->kalimat;
  $tujuan =  $json->result->parameters->tujuan;
  //ngubah tulisan nyang urlencode
  $text = urlencode($kalimat);
  //kunci teko yandex
  $key =  'trnsl.1.1.20181008T102144Z.3cfd726c2fdb63bd.f03e7ed0d0a60d29312774934c2e8532bbc47950';
  //dukungan basasa
		include 'languageSupport.php';
//ngirim data nyang yandex
		$language_from = "https://translate.yandex.net/api/v1.5/tr.json/detect?key=$key&text=$text";
//oleh balasan teko yandex
    $url_from = file_get_contents($language_from);
//deteksi bahasa awal
		$obj_language_from = json_decode($url_from);
		$asal = $obj_language_from->lang;
//jawaban dukungan bahasa
		if($kode_bahasa == 'null'){
      //lek bahasa ne gak onok
			$hasil = 'Maaf ya :( Aku belum bisa bahasa itu mungkin besok aku sudah bisa :)';
		}else {
      // lek bahasa ne onok
      //kirim data nyang yandex
			$situs = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=$key&text=$text&lang=$asal-$kode_bahasa";
      //oleh balasan
      $url = file_get_contents($situs);
      //ubah nyang json
      $obj = json_decode($url);
			// oleh hasil e
			$hasil = $obj->text[0];
		}

    //balas ke dialogflow
		$response = new \stdClass();
		$response->speech = $hasil;
		$response->displayText = $hasil;
		$response->source = "webhook";
		echo json_encode($response);
//method harus POST kalau tidak ya balas dengan ini saja
}else{
	echo "Method not allowed";
}
?>
