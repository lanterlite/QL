
<?php 
	
	if (isset($_GET['surah'])) {
	    index($_GET['surah']);
	} else {
		// $data = json_decode(file_get_contents('surah/surah_1.json'));
		// echo json_encode($data);
		// printJson($data);
	}

	function index ($id_surah) {
		
		$id = json_decode(file_get_contents('translation/id/id_translation_' . $id_surah . '.json'));
		$en = json_decode(file_get_contents('translation/en/en_translation_' . $id_surah . '.json'));
		$en = json_decode(file_get_contents('translation/en/en_translation_' . $id_surah . '.json'));
		$arabic = json_decode(file_get_contents('surah/surah_' . $id_surah . '.json'));
		$arabic->name = ucFirst($arabic->name);
		$data['arabic'] = $arabic;
		$data['en'] = $en;
		$data['id'] = $id;
		echo json_encode($data);

		// printJson($data);
		// // $data = json_decode($data);
		// $tot_page = ceil(count($data)/$tot_col);
		
		// if ($tot_page>=$page) {
		// 	$_data = [];
		// 	for ($i=0; $i<$tot_col; $i++) {
		// 		if (isset($data[$i+($page*$tot_col)]))
		// 			array_push($_data, $data[$i+($page*$tot_col)]);
		// 	}
		// 	$res_data['tot_page'] = $tot_page;
		// 	$res_data['cur_page'] = $page;
		// 	$res_data['data'] = $_data;
		// 	echo json_encode($res_data);
		// }
		// else {			
		// 	echo 'asd';
		// }
	}
	function printJson ($json) { echo "<pre>" . json_encode($json, JSON_PRETTY_PRINT) . "</pre>"; }
	function printArray ($array) { echo "</br>"; for ($i=0; $i<count($array); $i++) echo "[" . $i . "] => " . $array[$i] . "</br>"; }
?>