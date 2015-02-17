<?php

class Resenhas_Model extends CI_Model
{
        /*
         * Construtor
         */
        function __construct() 
        {
                parent::__construct();
        }
        
        public function buscar_resenha($parametro)
        {
                $this->db->select("res.id, prod.titulo, aut.nome");
                $this->db->from("resenha res");
                $this->db->join("produto prod", "prod.id = res.id_produto");
                $this->db->join("autor aut", "aut.id = prod.id_autor");
                $this->db->where("aut.nome like '%$parametro%' or prod.titulo like '%$parametro%'");
                
                return $this->db->get();
        }
}