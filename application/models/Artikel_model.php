<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-12-17T06:43:28+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Artikel_model.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-12-18T16:36:05+07:00
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model{

  private $table = 'artikel';
  private $id = 'artikel.id';

  public function get_all()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by($this->id,'desc');
    $query = $this->db->get();
    return $query->result();
  }

}
