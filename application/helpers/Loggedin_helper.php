<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Helpers General_helper
 *
 * This Helpers for ...
 * 
 * @package   CodeIgniter
 * @category  Helpers
 * @author    
 *
 */

// ------------------------------------------------------------------------

if (!function_exists('loggedIn')) {
    /**
     * view
     *
     * This view helpers for auto add heder and footer
     *
     * @param   string $body_path
     * @param   array $body_data
     * @param   string $title
     * @return  ...
     */
    function loggedIn()
    {
        if ($this->session->has_userdata('loggedIn')) {
            if ($this->session->userdata('loggedIn') == 1) {
                redirect(base_url('dashboard'));
            }
        } else {
            redirect(base_url('login'));
        }
    }
}
