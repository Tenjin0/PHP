<?php 
	class Form{

		private $data;
		public function __construct($data =[]){

			$this->datas = $data;

		}
		private function input($name, $label , $type, $class=null){

			$value = (isset($this->datas['inputs']['name']))? $this->datas['inputs']['name']:"";
			$error = (isset($this->datas['errors'][$name]))? 'has-error':"";
			$messageError = (isset($this->datas['errors'][$name]))? $this->datas['errors'][$name]:"";


			return "<div id=\"div$name\" class=\" formpack col-md-6 $error\">
						<label for=\"$name\"> $label</label>
						<input required id=\"$name\" class=\"form-control\" type=\"$type\" name=\"$name\" value=\"".$value."\">
						<div id=\"alert$name\" class=\"alert alert-block alert-danger\" style=\"display:none\">
								$messageError
						</div>
					</div>"
						// .
					// "<script type=\"text/javascript\">\$(function(){
					// 		if ( \$( \"#div$name\" ).is( \".has-error\" ) ){
					// 				\$(\"#alert$name\").show(\"slow\");
					// 		};
					// 	});
					// </script>\n"
						;
		}

		public function text($name, $label, $class){
			return $this->input($name, $label,"text");
		}

		public function email($name, $label , $class){
			return $this->input($name, $label,"email");
		}

		public function password($name, $label, $class){
			return $this->input($name, $label,"password");
		}
	}
