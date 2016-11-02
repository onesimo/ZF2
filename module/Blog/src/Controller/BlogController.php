<?php

namespace Blog\Controller;

use Blog\Categories;
use Blog\PHPCategory;
use Blog\ZendCategory;
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

		//$categories = new CategoriesFactory();

		return new ViewModel(['posts'=>$posts,'categories' => $categories]);
	}

}