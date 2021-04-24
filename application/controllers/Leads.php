<?php
class Leads extends CI_Controller
{
    public function index()
    {
        $data['rows'] = count($this->lead->get_all_clients());

        $this->load->view('templates/header');
        $this->load->view('leads/index', $data);
        $this->load->view('templates/footer');
    }

    public function index_html()
    {
        $data['clients'] = $this->lead->get_all_clients();
        $this->load->view('partials/clients', $data);
    }

    public function search_client()
    {
        $user_data = $this->input->post();

        $data['clients'] = $this->lead->search_client($user_data);
        $this->load->view('partials/clients', $data);
    }

    public function date_joined()
    {
        $user_data = $this->input->post();

        $data['clients'] = $this->lead->date_range($user_data);
        $this->load->view('partials/clients', $data);
    }

    public function pagination()
    {
        $user_data = $this->input->post();

        $data['clients'] = $this->lead->paginate_pages($user_data);
        $this->load->view('partials/clients', $data);
    }
}
