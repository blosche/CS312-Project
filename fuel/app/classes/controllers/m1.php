<?php

class Controller_M1 extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */

	 /**
	* @var string page template
	*/
	public $template = 'templatem1';

	/**
	 * Load the template and create the $this->template object
	 */
	public function before()
	{
		if ( ! empty($this->template) and is_string($this->template))
		{
			// Load the template
			$this->template = \View::forge($this->template);
		}

		return parent::before();
	}

	/**
	 * After controller method has run output the template
	 *
	 * @param  Response  $response
	 */
	public function after($response)
	{
		// If nothing was returned default to the template
		if ($response === null)
		{
			$response = $this->template;
		}

		return parent::after($response);
	}

	
	public function action_index(){
        $this->template->title = 'Home Page';
		$this->template->content =  View::forge('m1/index');	
    }

    public function action_about()
	{
        
		$this->template->title = 'About';
		$this->template->content =  View::forge('m1/about');

    }
    public function action_colorcordinator()
	{
		$this->template->title = 'Color Coordinator';
		$this->template->content =  View::forge('m1/colorCoordinator');
    }

	

	




}?>
