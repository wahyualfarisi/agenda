<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_agenda extends CI_Model{

  private $table = 'my_agenda';

  /**
   function getAllSuratMasuk()
   {
    return $this->db->get_where($this->table, array("jenis_surat"=> 'in'));
   }
   */
  function getDesc()
  {
    $query = $this->db->query("SELECT * FROM $this->table ORDER BY id_agenda DESC LIMIT 1 ");
    return $query;
  }

  function getAllSuratMasuk()
  {
    $query = $this->db->query("SELECT * FROM $this->table WHERE jenis_surat ='in' ");
    return $query;
  }
  function printSurat($date1, $date2, $jenis_surat)
  {
    $query = $this->db->query("SELECT * FROM $this->table WHERE jenis_surat='$jenis_surat' AND tanggal BETWEEN '$date1' AND '$date2' ORDER BY tanggal ");
    return $query;
  }

  function getAllSuratKeluar()
  {
    return $this->db->get_where($this->table, array("jenis_surat"=> 'out'));
  }

  function getAllSuratHariini()
  {
    $query = $this->db->query("SELECT * FROM $this->table WHERE tanggal=curdate() ");
    return $query;
  }

  function addSurat($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function edit_data($where)
  {
    return $this->db->get_where($this->table, $where);
  }

  function update_data($where, $data)
  {
    $this->db->where($where);
    $this->db->update($this->table, $data);
  }
  function hapus_data($where)
  {
    $this->db->where($where);
    $this->db->delete($this->table);
  }


  function hitungSuratMasuk()
  {
    $query = $this->db->query("SELECT * FROM $this->table WHERE jenis_surat='in' ");
    $total = $query->num_rows();
    return $total;
  }

  function hitungSuratKeluar()
  {
    $query = $this->db->query("SELECT * FROM $this->table WHERE jenis_surat='out' ");
    $total = $query->num_rows();
    return $total;
  }


}
