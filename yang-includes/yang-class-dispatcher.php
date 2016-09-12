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
	 */
	public function __construct($action, $method){
		$this->action = $action;
	}

	/**
	 * destructor
	 */
	public function __destruct(){

	}

	/**
	 * 
	 */
	public function action_isset(){
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
	private function do_action(){
		$this->action_isset(); // check the action file
		include_once $this->file; // execute action
	}

	/**
	 * do the action
	 */
	private function set_action($action){
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