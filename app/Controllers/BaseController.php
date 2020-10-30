<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);



				$menu_array = ['Vehicle' => ['index', 'form'],
												'Makes' => ['index', 'create']];

				$this->html = '';
				foreach ($menu_array as $chave_principal => $valor_principal) {

					foreach ($valor_principal as $sub_chave => $sub_valor) {

					$this->html .= '  <li class="active">
							<a href="'.\base_url('public/'.$chave_principal).'/'.$sub_valor.'">
								<i class="menu-icon fa fa-tachometer"></i>
								<span class="menu-text"> '.$chave_principal.' - '.$sub_valor.' </span>
							</a>

							<b class="arrow"></b>
						</li>';
						}
					}




		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

}
