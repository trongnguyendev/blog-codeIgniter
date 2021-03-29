<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('posts_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['posts'] = $this->posts_model->get_posts();
        $data['title'] = 'Post page';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/post/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($slug = NULL) {
        $data['post_item'] = $this->posts_model->get_posts($slug);
        $data['title'] = 'detail';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/post/view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create() {


        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');

        $data['title'] = 'Create a news item';

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/post/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->posts_model->store();
            $this->load->view('pages/post/success');
        }
    }


    public function edit($id) {
        echo $id;
    }

    public function update($id) {
        echo $id;
    }

    public function delete($id) {
        echo $this->posts_model->delete($id);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */