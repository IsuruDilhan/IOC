<?php
	class Stocks extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('stocks/index',false);
		}
		public function stocks(){
			//require('models/Stocks_model.php');
			//$model = new Stocks_model();
			//$data = $model->getMorningStocks();
			$this->view->render('stocks/stocks',false);
		}
		public function morning_reading(){
			$this->view->render('stocks/morning_reading',false);
		}
		public function evening_reading(){
			$this->view->render('stocks/evening_reading',false);
		}
		/*
		* calculating stocks values
		* @return reading in litres after calculation
		*/
		public function calculateStocks(){
			//assigning form data
			$petrol = $_POST['petrol'];
			$spetrol = $_POST['spetrol'];
			$diesel = $_POST['diesel'];
			$sdiesel = $_POST['sdiesel'];
			//returning calculated value to ajax call
			echo self::petrolReading($petrol);
		}
		//calculates the quantity for each fuel type
		private function petrolReading($petrol){
			return $petrol*2;
		}
		private function spetrolReading($spetrol){
			return $petrol*2;
		}
		private function dieselReading($diesel){
			return $petrol*2;
		}
		private function sdieselReading($sdiesel){
			return $petrol*2;
		}
		/* 
		*end for fuel calculation functions
		*/
		//returns the stockgraph 
		public function stockgraph(){
			$this->view->render('stocks/stockgraph',false);
		} 
		//pumpreadings index page
		public function pump_readings(){
			$this->view->render('stocks/pump_readings',false);
		}
		//daily reading of pumps
		public function daily_readings(){
			$this->view->render('stocks/daily_readings',false);
		}
		//inserting pump readings
		public function insertPumpReadings(){
			echo 'Success reponse';
		}
		//editing previous pump readings
		public function previousEntries(){
			$this->view->render('stocks/pump/previousEntries',false);	
		}
		//returns statuses of pumps
		public function statuses(){
			$this->view->render('stocks/pump/statuses',false);	
		}
		//Lubricant store
		public function lubricant(){
			$this->view->render('stocks/lubricant/index',false);
			// self::search_lube();
		}
		//Lube search
		public function search_lube(){
			$this->view->render('stocks/lubricant/search_lube',false);
		}
		//renders add lubes page
		public function add_lube(){
			$this->view->render('stocks/lubricant/add_lube',false);	
		}
		//handles data from add lubePage
		public function addLube(){
			echo $_POST['prd-name'];
			echo $_POST['prd-price'];
			echo $_POST['prd-qnty'];
		}
		//renders editing in lubricants 
		public function edit_lube(){
			$this->view->render('stocks/lubricant/edit_lube',false);	
		}
		//renders suppliers
		public function suppliers(){
			$this->view->render('stocks/suppliers/index',false);
		}
		/*
		* Supplier handling functions start here
		*/
		//renders suppliers
		public function search_suppliers(){
			$this->view->render('stocks/suppliers/search',false);
		}
		/*
		* Adding suppliers 
		* renders adding page
		* @returns the status of processing
		*/
		public function add_supplier(){
			$this->view->render('stocks/suppliers/add',false);
		}

	}
?>
