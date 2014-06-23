<?php 
class BuildingsController extends AppController {

  		public $uses=array('Building','User');

	


	public function oracle() {
		

	}

	

	public function ibm() {
		


	}


	public function microsoft() {
		


	}



	public function google() {
   
    }







    public function oracle_floor_1() {
		

	}
	public function oracle_floor_2() {
		

	}
	public function oracle_floor_3() {
		

	}



	 public function ibm_floor_1() {
		

	}
	public function ibm_floor_2() {
		

	}





	public function google_floor_1() {
		

	}
	public function google_floor_2() {
		

	}
	public function google_floor_3() {
		

	}



	 public function microsoft_floor_1() {
		

	}
	public function microsoft_floor_2() {
		

	}
	public function logout() {
		$this->redirect($this->Auth->logout());
	}






	public function quiz_google_1(){
		
	}
	public function quiz_google_2(){
		
	}
	public function quiz_google_3(){
		
	}



	public function quiz_oracle_1(){
		
	}
	public function quiz_oracle_2(){
		
	}
	public function quiz_oracle_3(){
		
	}


	public function quiz_ibm_1(){
		
	}
	public function quiz_ibm_2(){
		
	}



	public function quiz_microsoft_1(){
		
	}
	public function quiz_microsoft_2(){
		
	}



}


?>