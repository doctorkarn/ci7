<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $this->db->from('news');
            $this->db->order_by('id', 'desc');
            $query = $this->db->get();
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $clean_text = $this->security->xss_clean($this->input->post('text'));

        $id = $this->input->post('id');
        if ($id === FALSE)
        {
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $clean_text,
            );
            return $this->db->insert('news', $data);
        }
        else
        {
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $clean_text,
            );
            $this->db->where('id', $id);
            return $this->db->update('news', $data);
        }
    }
}