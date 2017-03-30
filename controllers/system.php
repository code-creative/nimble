<?php
class system
{

	function __construct($nb)
	{
		$this->nb = $nb;
	}

	function index()
	{
		
		$view_data = array();
		$view_data["now"] = $this->nb->now;
		$view_data["hello"] = $this->nb->model->hello();

		$this->nb->template->set_base("views/template.php");
		$this->nb->template->parse_template();
		$this->nb->template->add_content(
			array("find" => "{template_path}", "replace" => $this->nb->base_url("template/"))
		);
		$this->nb->template->add_view("{page_content}","views/start.php",$view_data);		
		$this->nb->template->render();
		echo $this->nb->template->get_base();
		
	}
	
	function page()
	{
		$view_data = array();
		$view_data["page_number"] = $this->nb->get_uri(1);


		$this->nb->template->set_base("views/template.php");
		$this->nb->template->parse_template();
		$this->nb->template->add_content(
			array("find" => "{template_path}", "replace" => $this->nb->base_url("template/"))
		);
		$this->nb->template->add_view("{page_content}","views/page.php",$view_data);		
		$this->nb->template->render();
		echo $this->nb->template->get_base();
	}
	
}