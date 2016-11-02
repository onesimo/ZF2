<?php

namespace Blog\Controller;

use Blog\Categories;
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

		$categories = $this->getServiceLocator()->get(Categories::class);

		return new ViewModel(['posts'=>$posts,'categories' => $categories]);
	}

}