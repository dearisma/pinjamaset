<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_Model extends CI_Model {

    public function view()
    {
        $this->db->select('id', 'id_anggota', 'tanggal', 'jumlah', 'foto');
        $query= $this->db->get('kas');
        return $query->result();
    }

}

/* End of file Cetak_Model.php */

?>