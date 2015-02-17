<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Resenhas_Functions Class
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Validation and Utilities
 * @author	P. Fernandes
 */
class Resenhas_Functions {
        /**
        * Constructor
        */
        function Resenhas_Function() {
                log_message('debug', "Loader Class Initialized");
        }
        
        /**
        * Função utilizada para zerar a barra de op??es na lateral do site.
        *
        * @access public
        * @param void
        * @return array
        */
        public static function update_menu_lateral($active) {
                $data = array(
                        'autor_menu'    => '',
                        'home_menu'     => '',
                        'produto_menu'  => '',
                        'resenha_menu'  => ''
                );
                
                $data[$active] = 'class="active"';
                
                return $data;
        }
}

/* End of file resenhas_functions.php */
/* Location: ./system/application/libraries/resenhas_functions.php */