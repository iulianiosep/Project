<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'users', 'action' => 'login'));
	//Router::connect('/', array('controller' => 'posts', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/dashboard', array('controller' => 'users', 'action' => 'index'));
	Router::connect('/login', array('controller' => 'posts', 'action' => 'display'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/rank', array('controller' => 'users', 'action' => 'rank'));
	Router::connect('/doc', array('controller' => 'users', 'action' => 'doc'));
	Router::connect('/multiplayer', array('controller' => 'users', 'action' => 'multiplayer'));
	Router::connect('/oracle', array('controller' => 'buildings', 'action' => 'oracle'));
	Router::connect('/ibm', array('controller' => 'buildings', 'action' => 'ibm'));
	Router::connect('/microsoft', array('controller' => 'buildings', 'action' => 'microsoft'));
	Router::connect('/google', array('controller' => 'buildings', 'action' => 'google'));
	Router::connect('/oracle_floor_1', array('controller' => 'buildings', 'action' => 'oracle_floor_1'));
	Router::connect('/oracle_floor_2', array('controller' => 'buildings', 'action' => 'oracle_floor_2'));
	Router::connect('/oracle_floor_3', array('controller' => 'buildings', 'action' => 'oracle_floor_3'));
	Router::connect('/google_floor_1', array('controller' => 'buildings', 'action' => 'google_floor_1'));
	Router::connect('/google_floor_2', array('controller' => 'buildings', 'action' => 'google_floor_2'));
	Router::connect('/google_floor_3', array('controller' => 'buildings', 'action' => 'google_floor_3'));
	Router::connect('/ibm_floor_1', array('controller' => 'buildings', 'action' => 'ibm_floor_1'));
	Router::connect('/ibm_floor_2', array('controller' => 'buildings', 'action' => 'ibm_floor_2'));
	Router::connect('/microsoft_floor_1', array('controller' => 'buildings', 'action' => 'microsoft_floor_1'));
	Router::connect('/microsoft_floor_2', array('controller' => 'buildings', 'action' => 'microsoft_floor_2'));
	//Router::connect('/my_profile', array('controller' => 'users', 'action' => 'profile'));
	Router::connect('/admin', array('controller' => 'users', 'action' => 'admin'));
	Router::connect('/add', array('controller' => 'users', 'action' => 'add'));



/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
