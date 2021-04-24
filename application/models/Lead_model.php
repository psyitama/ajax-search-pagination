<?php
class Lead_model extends CI_Model
{
    public function get_all_clients()
    {
        return $this->db->query("SELECT * FROM leads")->result_array();
    }

    public function search_client($post)
    {
        return $this->db->query("SELECT * FROM leads WHERE concat(first_name, ' ', last_name) LIKE ?", "%" . $post['name'] . "%")->result_array();
    }

    public function date_range($post)
    {
        $query = "SELECT * FROM leads WHERE registered_datetime>= ? AND registered_datetime<= ?;";
        $values = array($post['from_date'], $post['to_date']);

        return $this->db->query($query, $values)->result_array();
    }

    public function paginate_pages($page_number)
    {
        $page = ($page_number['page_number'] - 1) * 5;

        return $this->db->query("SELECT * FROM leads LIMIT ?, 5", $page)->result_array();
    }
}
