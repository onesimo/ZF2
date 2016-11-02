<?php

namespace Blog;

use Blog\Categories;
use Blog\PHPCategory;
use Blog\ZendCategory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\TableGateway\TableGateway;

class CategoriesFactory implements FactoryInterface
{

	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		
		$adapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
		$categoriesTable = new TableGateway('categories',$adapter);

		return $categoriesTable;
	}
}