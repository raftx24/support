<?php namespace Cartalyst\Support\Base;
/**
 * Part of the Support package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the license.txt file.
 *
 * @package    Support
 * @version    1.1.0
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2014, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Container\Container;

class EventHandler {

	/**
	 * The container instance.
	 *
	 * @var \Illuminate\Container\Container
	 */
	protected $app;

	/**
	 * Constructor.
	 *
	 * @param  \Illuminate\Container\Container  $app
	 * @return void
	 */
	public function __construct(Container $app)
	{
		$this->app = $app;
	}

	/**
	 * Dynamically retrieve objects from the container.
	 *
	 * @param  string  $key
	 * @return mixed
	 */
	public function __get($key)
	{
		return $this->app[$key];
	}

}
