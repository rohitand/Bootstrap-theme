<?php 
/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : R_GENESIS
PROJECT : RGen Landing Page with Page Builder
URL : http://themeforest.net/item/rgen-landing-page-with-page-builder/13244840
This file licensed to R_GENESIS (http://themeforest.net/user/r_genesis) and it’s strictly prohobited to copy or reuse it.
Copyright 2015-2016 R.Genesis.Art
++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

class rgenfactory {

	public $dev = false;
	public $assetdata = 'data/admin/assets_data.json';
	public $post = array();
	public $get = array();
	public $cssdata = '';
	public $responseMsg = array();
	public $csslist = array(
		"../elements/css/styleeditor.css",
		"../elements/css/customcss.css"
	);

	public function __construct() {

		$this->post = $this->objToArray(json_decode(file_get_contents("php://input")));
		$this->get  = $_GET;
		$route      = $this->get['route'] ? $this->get['route'] : null;

		// Generating css output
		if ($route == 'css') {
			$this->styleEditor($this->post['css']);
		}
		if ($route == 'customcss') {
			$this->customCss($this->post);
		}
		if ($route == 'css' || $route == 'customcss') {
			$this->cssOutput();
		}

		// Backup - Restore case
		if ($route == 'backup') {
			$this->backup($this->post);
		}
		if ($route == 'restore') {
			$this->restore($this->post);
		}

		// Mail settings
		if ($route == 'maildata') {
			$this->mailsettings($this->post);
		}

		if ($route == 'dev') {
			$this->devCheck($this->dev);
		}
		
		if ($route == 'verify') {
			
			$verifyurl = 'http://landingpages.rgenesis.com/verify/rgen/token.php?code=' . $this->get['code'] . '&type=token';
			$this->apicheck($verifyurl);
		}

		if ($route == 'reset') {
			$this->reset();
		}
	}

	public function backup($arr) {
		$file = '../tmp/backup.rgen';
		$backupData = json_encode($arr);
		file_put_contents($file, '', LOCK_EX);
		if (is_writable($file)) {
			file_put_contents($file, $backupData.PHP_EOL, LOCK_EX);
			$this->responseMsg['file'] = true;
			$this->responseMsg['filepath'] = 'tmp/backup.rgen';

			$this->response('success');
		} else {
			$msg = 'Permission denied. "tmp" directory dose not have enough permission.';
			$this->responseMsg['type'] = 'permission';
			$this->response('error', $msg);
		}
	}

	public function restore($arr) {
		if (isset($_FILES['rgenRestoreData'])) {
			$fparts = explode('.', $_FILES['rgenRestoreData']['name']);
			if ($fparts[1] === 'rgen') {
				$fileData = file_get_contents($_FILES['rgenRestoreData']['tmp_name']);
				exit($fileData);
			} else {
				$fileData = 'error';
				exit($fileData);
			}
		} else {
			$fileData = 'error';
			exit($fileData);
		}
		
	}

	public function mailsettings($arr) {

		$file = 'data/mailsettings.php';
		$output = '../elements/form-data/config.php';
		$current = file_get_contents($file);

		$tmp = '';

		if (isset($arr['type'])) {

			$apikey   = isset($arr['settings']['apikey']) ? $arr['settings']['apikey'] : '';
			$listid   = isset($arr['settings']['listid']) ? $arr['settings']['listid'] : '';
			$apiuser  = isset($arr['settings']['apiuser']) ? $arr['settings']['apiuser'] : '';
			$apipwd   = isset($arr['settings']['apipwd']) ? $arr['settings']['apipwd'] : '';
			$token    = isset($arr['settings']['token']) ? $arr['settings']['token'] : '';
			$filename = isset($arr['settings']['file']) ? $arr['settings']['file'] : 'subscription.txt';
			
			switch ($arr['type']) {

				case 'mailchimp':
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$MC_API_KEY = ""', '$MC_API_KEY = "'.$apikey.'"', $tmp);
					$tmp2 = str_replace('$MC_LIST_ID = ""', '$MC_LIST_ID = "'.$listid.'"', $tmp1);
					file_put_contents($output, $tmp2.PHP_EOL, LOCK_EX);

					break;

				case 'campaignmonitor':
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$CM_API_KEY = ""', '$CM_API_KEY = "'.$apikey.'"', $tmp);
					$tmp2 = str_replace('$CM_LIST_ID = ""', '$CM_LIST_ID = "'.$listid.'"', $tmp1);
					file_put_contents($output, $tmp2.PHP_EOL, LOCK_EX);

					break;

				case 'getresponse':
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$GR_API_KEY       = ""', '$GR_API_KEY       = "'.$apikey.'"', $tmp);
					$tmp2 = str_replace('$GR_CAMPAIGN_NAME = ""', '$GR_CAMPAIGN_NAME = "'.$listid.'"', $tmp1);
					file_put_contents($output, $tmp2.PHP_EOL, LOCK_EX);

					break;

				case 'aweber':
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$AW_AUTH_CODE = ""', '$AW_AUTH_CODE = "'.$apikey.'"', $tmp);
					$tmp2 = str_replace('$AW_LIST_NAME = ""', '$AW_LIST_NAME = "'.$listid.'"', $tmp1);
					file_put_contents($output, $tmp2.PHP_EOL, LOCK_EX);

					break;

				case 'icontact':
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$IC_APP_ID    = ""', '$IC_APP_ID    = "'.$apikey.'"', $tmp);
					$tmp2 = str_replace('$IC_API_USER  = ""', '$IC_API_USER  = "'.$apiuser.'"', $tmp1);
					$tmp3 = str_replace('$IC_API_PWD   = ""', '$IC_API_PWD   = "'.$apipwd.'"', $tmp2);
					$tmp4 = str_replace('$IC_LIST_NAME = ""', '$IC_LIST_NAME = "'.$listid.'"', $tmp3);
					file_put_contents($output, $tmp4.PHP_EOL, LOCK_EX);

					break;

				case 'constantcontact':
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$CC_API_KEY      = ""', '$CC_API_KEY      = "'.$apikey.'"', $tmp);
					$tmp2 = str_replace('$CC_ACCESS_TOKEN = ""', '$CC_ACCESS_TOKEN = "'.$token.'"', $tmp1);
					$tmp3 = str_replace('$CC_LIST_NAME    = ""', '$CC_LIST_NAME    = "'.$listid.'"', $tmp2);
					file_put_contents($output, $tmp3.PHP_EOL, LOCK_EX);

					break;

				default:
					
					$tmp  = str_replace('$STORE_MODE = "file"', '$STORE_MODE = "'.$arr['type'].'"', $current);
					$tmp1 = str_replace('$STORE_FILE = "subscription.txt"', '$STORE_FILE = "'.$filename.'"', $tmp);
					file_put_contents($output, $tmp1.PHP_EOL, LOCK_EX);

					break;
			}

			$this->response('success');
		} else {
			$this->response('error');
		}

	}

	public function styleEditor($arr) {
		$css = '';
		foreach ($arr as $key => $value) {
			$css .= $value['val'];
		}
		$css_output = $this->csslist[0];
		file_put_contents($css_output, $css.PHP_EOL, LOCK_EX);
	}

	public function customCss($arr) {
		$css = '';
		foreach ($arr as $key => $value) {
			$css .= $value['val'];
		}

		$css_output = $this->csslist[1];
		file_put_contents($css_output, $css.PHP_EOL, LOCK_EX);
	}

	public function cssOutput() {
		$cssFiles = $this->csslist;
		$css_output = "../elements/css/configstyle.css";

		$cssData = '';
		foreach ($cssFiles as $key => $value) {
			if (file_exists($value)) {
				$cssData .= file_get_contents($value);
			} else {
				$cssData .= '';
			}
		}

		file_put_contents($css_output, $cssData.PHP_EOL, LOCK_EX);
		$this->response('success');
	}

	public function reset() {
		$cssFiles = $this->csslist;
		$css_output = "../elements/css/configstyle.css";

		$cssData = '';
		file_put_contents($css_output, $cssData.PHP_EOL, LOCK_EX);
		$this->response('success');
	}

	public function response($type, $result = '') {

		if ($type == 'success') {
			$this->responseMsg['data'] = $result;
			$this->responseMsg['status'] = 'success';

			header('Content-Type: application/json');
			echo json_encode($this->responseMsg);
		}
		
		if ($type == 'error') {
			$this->responseMsg['data'] = $result;
			$this->responseMsg['status'] = 'error';

			header('Content-Type: application/json');
			echo json_encode($this->responseMsg);
		}
		//$this->$responseMsg = $response;

		//return $this->$responseMsg;
	}


	public static function uid($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return 'rgen'.$randomString;
	}

	public function objToArray($obj, &$arr=array()){
		if(!is_object($obj) && !is_array($obj)){
			$arr = $obj;
			return $arr;
		}
		foreach ($obj as $key => $value){
			if (!empty($value)){
				$arr[$key] = array();
				$this->objToArray($value, $arr[$key]);
			} else {
				$arr[$key] = $value;
			}
		}
		return $arr;
	}

	public function getkeypath($arr, $lookup) {
		if (array_key_exists($lookup, $arr)) {
			return array($lookup);
		} else {
			foreach ($arr as $key => $subarr) {
				if (is_array($subarr)) {
					$ret = $this->getkeypath($subarr, $lookup);
					if ($ret) {
						$ret[] = $key;
						return $ret;
					}
				}
			}
		}
		return null;
	}

	function ArrayGetPath($data, $path, &$result){
		$found = true;
		$path = explode("/", $path);
		for ($x=0; ($x < count($path) and $found); $x++){
			$key = $path[$x];
			if (isset($data[$key])){
				$data = $data[$key];
			}        
			else { $found = false; }
		}
		$result = $data;
		return $found;
	}

	public static function has($arr, $val) {
		return __::has($arr, $val) && $val != '' && !empty($val) && sizeof($arr) > 0;
	}

	public static function isEmpty($o) {
		if (__::isEmpty($o) && sizeof($o) == 0) {
			return true;
		}else {
			return false;
		}
	}

	public static function checkdata($val){
		if ((sizeof($val) > 0) && $val != '' && !empty($val)) {
			return true;
		}else{
			return false;
		}
	}
	public static function checkstr($val, $str){
		if (strpos($val, $str) !== false) {
			return true;
		}else{
			return false;
		}
	}

	public function flatten($array) {
		$arrayValues = array();

		foreach ($array as $value) {
			if (is_scalar($value) OR is_resource($value)) {
				 $arrayValues[] = $value;
			} elseif (is_array($value)) {
				 $arrayValues = array_merge($arrayValues, $this->flatten($value));
			}
		}

		return $arrayValues;
	}

	public function caching($cachefile, $data, $tpl, $loader) {
		$fp = fopen($cachefile, 'w');
		fwrite($fp, $loader->view($tpl, $data));
		fclose($fp);
	}

	public function render($filepath) {
		$file = $filepath;
		$output = '';
		if (file_exists($file)) {
			ob_start();
			require($file);
			$output = ob_get_contents();
			ob_end_clean();
		}
		return $output;
	}

	public function devCheck($o) {
		if (md5($o) === '55e111526c2516fb8e53a38702445b98') {
			$file = '../builder.html';
			$output = '../builder.html';
			$current = file_get_contents($file);
			$assetfile = file_get_contents($this->assetdata);
			$assetdata = json_decode($assetfile, true);
			$c = '';

			foreach ($assetdata['js'] as $key => $js) {
				$c .= "\t<script src='".$js."'></script>\n";
			}
			$tmp  = str_replace('<script src="rgen/minify/rgen_min.js"></script>', $c, $current);
			file_put_contents($output, $tmp.PHP_EOL, LOCK_EX);

		}
	}

	public function apicheck($o) {
		/*$c = file_get_contents($o);
		echo $c;*/
		if ( empty($o) ) return false;

		$ch = curl_init($o);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.66 Safari/537.36");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$data = curl_exec($ch);
		curl_close($ch);

		//$data = json_encode($data);
		//return $data; // string or null
		echo $data;
	}
	
}

$rgen = new rgenfactory();
?>