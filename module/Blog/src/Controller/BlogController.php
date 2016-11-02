<?php

namespace Blog\Controller;

use Blog\Categories;
use Blog\PHPCategory;
use Blog\ZendCategory;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Sql\Sql;


class BlogController extends AbstractActionController
{
	public function indexAction()
	{
		$posts = [
			'Hello Word',
			'Hello guy',
			'My post'
		];

		//$categories = $this->getServiceLocator()->get(Categories::class);

		$adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
		
		$sql 	= new Sql($adapter);
		$select = $sql->select()->from('categories');
		$stmt 	= $sql->prepareStatementForSqlObject($select);
		$categories = $stmt->execute();

		//$categories = new CategoriesFactory();



		return new ViewModel(['posts'=>$posts,'categories' => $categories]);
	}

}