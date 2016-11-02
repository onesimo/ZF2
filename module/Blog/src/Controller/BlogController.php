<?php

namespace Blog\Controller;

use Blog\Categories;
use Blog\PHPCategory;
use Blog\ZendCategory;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Sql\Sql;
use Zend\Db\TableGateway\TableGateway;

class BlogController extends AbstractActionController
{
	public function indexAction()
	{
		$posts = [
			'Hello Word',
			'Hello guy',
			'My post'
		];

		$c = $this->getServiceLocator()->get(Categories::class);
		$categories = $c->select();
 
		return new ViewModel(['posts'=>$posts,'categories' => $categories]);
	}

}