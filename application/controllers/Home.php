<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Home
 * @author      Muhammad Haibah <inibah97@gmail.com>
 * @link        https://github.com/inibah97
 */
class Home extends CI_Controller
{
	/**
	 * User data
	 * 
	 * @var object
	 */
	private $_user;

	/**
	 * Construct functions
	 * 
	 * @return void
	 */
	public function __construct()
	{
		// Load the parent construct
		parent::__construct();

		// Load the libraries
		$this->load->library(['session']);

		// Load the helpers
		$this->load->helper(['url']);

		// Load the models
		$this->load->model(['Users_model']);

		$this->load->model('Portfolio_model');
		$this->load->library('form_validation');

		// Check session
		$this->checkSession();

		// Get user data from resource by session
		$this->_user = $this->Users_model->getUserByField([
			'username' => $this->session->username
		], true);
	}

	/**
	 * Default for this controller.
	 *
	 * @return void
	 */
	public function index()
	{
		$data = [
			'page' => [
				'title' => 'Home'
			],
			'user' => (array) $this->_user
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
	}

	public function add_portfolio()
	{
		$data = [
			'page' => [
				'title' => 'Tambah Portfolio'
			],
			'user' => (array) $this->_user
		];

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('add_portfolio', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$this->Portfolio_model->tambahPortfolio();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('home/add_portfolio');
		}
	}

	public function view_portfolio()
	{
		$data = [
			'page' => [
				'title' => 'Table Portfolio'
			],
			'user' => (array) $this->_user
		];
		$data['portfolio'] = $this->Portfolio_model->getAllPortfolio();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('view_portfolio', $data);
		$this->load->view('templates/footer', $data);
	}

	public function hapus($id)
	{
		$this->Portfolio_model->hapusPortfolio($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('home/view_portfolio');
	}

	public function edit($id)
	{
		$data = [
			'page' => [
				'title' => 'Edit Portfolio'
			],
			'user' => (array) $this->_user
		];
		$data['portfolio'] = $this->Portfolio_model->getPortfolioById($id);
		$data['jenis'] = ['Certificate', 'Seminar', 'Portfolio'];

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('edit', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$this->Portfolio_model->editPortfolio();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('home/view_portfolio');
		}
	}

	/**
	 * Check Session
	 * 
	 * @return void
	 */
	private function checkSession()
	{
		if (!$this->session->has_userdata('username')) {
			redirect('login');
			die;
		}
	}
}
