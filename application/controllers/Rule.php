<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Recruit Controller Class
 *
 * @author Yujin Kim <yujin.gaya@gmail.com>
 * @copyright Copyright (c) 학생문화공간위원회
 *
 */

class Rule extends CI_Controller {

    public function index(){

        $this->load->view('head');
		$this->load->view('global-nav');
        $this->load->view('recruit/recruit');
        $this->load->view('footer');

    }

}
