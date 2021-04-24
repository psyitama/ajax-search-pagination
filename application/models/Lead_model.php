<?php
class Lead_model extends CI_Model
{
    public function get_all_clients()
    {
        return $this->db->query("SELECT * FROM clients")->result_array();
    }

    public function search_client($post)
    {
        return $this->db->query("SELECT * FROM clients WHERE concat(first_name, ' ', last_name) LIKE ?", "%" . $post['name'] . "%")->result_array();
    }

    public function date_range($post)
    {
        $query = "SELECT * FROM clients WHERE joined_datetime>= ? AND joined_datetime<= ?;";
        $values = array($post['from_date'], $post['to_date']);

        return $this->db->query($query, $values)->result_array();
    }
}
