<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @package PayPal Express :  CodeIgniter PayPal Express Gateway
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *   
 * Description of PayPal Express Controller
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Paypal extends CI_Controller {
    // construct
    public function __construct() {
		parent::__construct();
        $this->load->model('site');     
	}
    // index page
    public function index() {
		$data['title'] = 'Paypal | TechArise';
		$data['productInfo'] = $this->site->getProduct();
		$this->load->view('paypal/index', $data);
    }
    
    // checkout page
    public function checkout($id) {
        $data['title'] = 'Checkout payment | TechArise';  
        $data['itemInfo'] = $this->site->getProduct($id)[0];
		$data['return_url'] = site_url().'paypal/callback';
        $data['surl'] = site_url().'paypal/success';;
        $data['furl'] = site_url().'paypal/failed';;
        $data['currency_code'] = 'INR';
        $this->load->view('paypal/checkout', $data);
    }
           
    // success method
    public function callback() {
        $data['title'] = 'Paypal Success | TechArise'; 
        $paymentID = $this->input->post('paymentID');
        $payerID = $this->input->post('payerID');
        $token = $this->input->post('token');
        $pid = $this->input->post('pid');
        if(!empty($paymentID) && !empty($payerID) && !empty($token) && !empty($pid) ){
            $data['paymentID'] = $paymentID;
            $data['payerID'] = $payerID;
            $data['token'] = $token;
            $data['pid'] = $pid;
            $this->load->view('paypal/success', $data);         
        } else {
            $this->load->view('paypal/failed', $data);
        }    
    } 
    
}
?>