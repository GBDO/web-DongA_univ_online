<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('test_model');
		
		//변수 선언
		$default = 10;

		//배열 선언
		$data = array();

		$data['list'] = array(1,2,3,4,5,6,7,8,9,10);
		$data['number'] = 10;
		$data['string'] = "문자열";

		echo "하잉";  // 컨트롤러에서 호출한거
		echo "<br>";

		//변수 호출
		echo $default;
		echo "<br>";

		//모델에서 호출한것 
		//model/test_model.php  function test() 호출
		echo $this->test_model->test(); 
		echo "<br>";

		//뷰에서 호출한것
		//view/test/test.php 를 가져오기만 한것
		$this->load->view('test/test' , $data); 



	}
}
