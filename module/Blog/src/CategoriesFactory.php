<?php

namespace Blog;

use Blog\Categories;
use Blog\PHPCategory;
use Blog\ZendCategory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CategoriesFactory implements FactoryInterface
{

	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		
		$categories = new Categories();
		$categories->addCategory(new PHPCategory());
		$categories->addCategory(new ZendCategory());

		return $categories;
	}
}