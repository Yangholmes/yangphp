<?php
/**
 * base on cURL
 * CAUTION! this feature probably unconfigure in PHP Linux
 */

// $request = new yang_HTTP_request("http://localhost:8983/solr/gettingstarted/select?indent=on&q=*:*&wt=json");
$request = new yang_HTTP_request("http://gdrtc.org");
$response = $request->request();
echo $response;

///////////////////////////////////////////////////////////////
class yang_HTTP_request{
	// http request url
	private $url;

	// curl handle
	private $chandle;

	// http request header and http entity header
	// an array, [header: value]
	private $header = array(
		//HTTP header
		"Accept"=>"*/*",
		"Accept-Charset"=>"utf-8",
		// "Accept-Encoding"=>"gzip, deflate, sdch",
		//HTTP entity header
		"Content-Type"=>"*/*",
		"Content-Encoding"=>"utf-8",
	);

	// data being to send
	private $data;
	// return from curl_exec()
	private $response;

	/**
	 * constructor and destructor
	 * @param $url:
	 */
	public function __construct($url){
		if( !is_string($url) ) // url must be a string
			return false;
		$this->url = $url;
		$this->init();
	}

	public function __destruct(){
		curl_close($this->chandle);
	}

	private function init(){
		$this->chandle = curl_init($this->url); // init a curl communication
		curl_setopt($this->chandle, CURLOPT_RETURNTRANSFER, true); // set CURLOPT_RETURNTRANSFER true, it means curl_exec() will return a result on success.
		return true;
	}

	/**
	 * set & get url
	 */
	public function set_url($url){
		if( !is_string($url) ) // url must be a string
			return false;
		$this->url = $url;
		curl_setopt($ch, CURLOPT_URL, $url);
		return true;
	}
	 public function get_url(){
		 return $this->url;
	 }

	/**
	 * @param $header: an array, [header: value]
	 */
	public function set_header($header){
		is_array($header);
	}
	public function get_header(){
		return $this->header;
	}

	/**
	 *
	 */
	public function set_data($data){
		$this->data = $data;
	}
	public function get_data(){
		return $this->data;
	}

	/**
	 *
	 */
	public function get_response(){
		return $this->response;
	}

	/**
	 *
	 */
	private function apply_header(){
		if( !is_array($this->header) )
			return false;
		$header=[]; $i=0;
		while( list($key,$value) = each($this->header) ){
			if( is_string($value) ){
				$header[$i]="$key:$value";
				$i++;
			}
		}
		curl_setopt($this->chandle, CURLOPT_HTTPHEADER, $header);
		// curl_setopt($this->chandle, CURLOPT_HEADER, true);
		// curl_setopt($this->chandle, CURLINFO_HEADER_OUT, true);
		return $header;
	}
	public function request(){
		$this->apply_header();
		$this->response = curl_exec($this->chandle);
		return $this->response;
	}
}
