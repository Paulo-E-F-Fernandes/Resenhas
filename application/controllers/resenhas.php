<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resenhas extends CI_Controller
{
        /*
         * Construtor
         */
        function  __construct()
        {
                parent::__construct();
                $this->load->model('resenhas_model');
                $this->load->library('resenhas_functions');
                //$this->lang->load('form_validation', 'portugues');
        }
       
        public function buscar() 
        {
                //if ($this->input->post())
                //{
                        $data = Resenhas_Functions::update_menu_lateral('resenha_menu');
                        //$consulta = $this->resenhas_model->buscar_resenha($this->input->post('q'));
                        $consulta = $this->resenhas_model->buscar_resenha('Luciano');

//                        if (!empty($consulta))
//                        {
//                                $data['content'] = 'lista_resenha_content';
//                                $data['data'] = array('consulta' => $consulta);
//                        }
//                        else
//                        {
                                $data['content'] = 'lista_vazia_content';
                                $data['data'] = array('teste' => base_url());
//                        }
                        
                        $this->load->view('includes/template', $data);
                //}
        }
}

/* End of file resenhas.php */
/* Location: ./system/application/controllers/resenhas.php */