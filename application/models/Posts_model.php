<?php

class Posts_model extends CI_Model {

    public $id;
    public $title;
    public $slug;
    public $content;

    public function __construct()
    {
        $this->load->database();

        $this->load->helper('url');
        $this->title = $this->input->post('title');
        $this->slug = url_title($this->input->post('title'), 'dash', TRUE);
        $this->content = $this->input->post('text');
    }

    public function get_posts($slug = false) {
        if($slug === false) {
            $query = $this->db->get('posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->row_array();
    }

    public function find($id) {

    }

    public function store() {
        return $this->db->insert('posts', $this);
    }

    public function update() {
        $this->id = $this->input->post('id');
        return $this->db->update('posts', $this, array('id' => $this->id));
    }

    public function delete($id) {
        return $this->db->delete('posts', array('id' => $id));
    }
}