<?php 
	class Validator{
		
		private $requirements;
		private $data; 
		private $errors;
		private $isValid;
		
		public function __construct(array $data, array $requirements){
			$this->requirements = $requirements;
			$this->data = $data;
			$this->errors = array();
			$isValid = true;
		}
		
		public function validate(){
			foreach($this->requirements as $key=>$value){
				
				if(array_key_exists("required",$value) && $value["required"]){
					
					if(!$this->data[$key]){
						$isValid = false;
						$this->errors[$key."_required"] = "Полето <strong>$key</strong>  е задължително";
					}
				}
				if(array_key_exists("max",$value)){
					
					if(strlen($this->data[$key])>$value["max"]){
						$isValid = false;
						$this->errors[$key."_len"] = "Полето <strong>$key</strong> е с максимална дължина <strong>".$value["max"]."</strong> символа.";
					}
				}
				if(array_key_exists("min",$value)){
					if(strlen($this->data[$key])<$value["min"]){
						$isValid = false;
						$this->errors[$key."_len"] = "Полето <strong>$key</strong>  е с минимална дължина <strong>".$value["min"]."</strong> символа.";
					}
				}
				if(array_key_exists("int",$value)){
					$number = strpos($this->data[$key], '.') === false ? intval($this->data[$key]) : floatval($this->data[$key]);
					
					if(!is_int(($number))){
						$isValid = false;
						$this->errors[$key."_int"] = "Полето <strong>$key</strong>  трябва да е цяло число";
					}
				}	
			}
			
			return $this->errors;	
		}
		
	}
	
?>