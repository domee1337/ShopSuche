<?php
namespace ShopSuche\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;


class ShopSucheRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('websearch', 'ShopSuche\Controllers\ContentController@sendRequest');
	}

}
