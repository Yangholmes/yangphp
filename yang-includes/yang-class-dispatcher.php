<?php

/**
 * 
 */

class dispatcher{

	private $action; // action
	private $folder; // action folder
	private $file; // action file

	/**
	 * constructor
	 * @param $action: string, action name
	 * @param $method: string, POST, GET or FILE
	 * @param $filter: function or script string, file filter
	 */
	public function __construct($action, $method, $filter){
		$this->action = $action;
	}

	/**
	 * destructor
	 */
	public function __destruct(){
		$this->action = null;
	}

	/**
	 * does the action exist?
	 */
	private function action_isset(){
		$this->set_folder(); // set action folder
		$file = $this->folder."/$this->action";
		if( is_file($file) && file_exists($file) ){ // chenck file, whether it exists~
			$this->file = $file;
		}
		else{
			$this->file = ""; // set a default action
			trigger_error("action $this->action is not exist!");
		}
		return true;
	}

	/**
	 * do the action
	 */
	public function do_action(){
		$this->action_isset(); // check the action file
		include_once $this->file; // execute action
	}

	/**
	 * set or change the action
	 */
	public function set_action($action){
		$this->action = $action;
	}

	/**
	 * 
	 */
	private function get_folder(){
		return $this->folder;
	}

	/**
	 * 
	 */
	private function set_folder(){
		$this->folder = SERVER.'/action';
		return $this->folder;
	}
}