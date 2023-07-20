<?php class Job{
	protected $title;
  	
	public function _construct($title)
	{
	  $this->title = $title;
	}	

	public function title()
	{
		return $this->title;
	}


    }
