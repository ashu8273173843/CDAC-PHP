class marks{
	$id = 0;//auto generating entry id
 	$s_id = 0;//student id...
	$lang1 = 0; 
	$lang2 = 0; 
	$lang3 = 0; 
	$science = 0; 
	$social = 0; 
	$math = 0; 
	$total = 0;

	public function calcTotal(){
		$this->total = $this->lang1 + $this->lang2 + $this->lang3 + $this->science + $this->social + $this->math;
	}
} 
