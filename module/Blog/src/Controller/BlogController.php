<?php

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
	public function indexAction()
	{
		$posts = [
			'Hello Word',
			'Hello guy',
			'My post'
		];

		return new ViewModel(['posts'=>$posts]);
	}

}