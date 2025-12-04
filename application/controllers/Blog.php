<?php 
    class Blog extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('Blog_model');
        }
        
        public function index(){
            $query = $this->Blog_model->getBlogs();
            $data['blog'] = $query->result_array();
            $this->load->view('blog',$data);
        }

        public function detail($url){   
            $query = $this->Blog_model->getSingleBlog('url',$url);
            $data['blog'] = $query->row_array();
            $this->load->view('detail',$data);
        }

        public function add(){
            $this->form_validation->set_rules('title','Judul','required');
            $this->form_validation->set_rules('url','URL','required|alpha_dash');
            $this->form_validation->set_rules('content','Konten','required');

            //BILA TRUE KITA SIMPAN
            if($this->form_validation->run() === TRUE){
                $data['title'] = $this->input->post('title');
                $data['content'] = $this->input->post('content');
                $data['url'] = $this->input->post('url');
                // jadi ini blog model ke insert blog dengan membawa data
                // dan akan di parsing di method insertBlog dengan cara membuat
                // sebuah paramater data di dalam method tersebut 
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpeg|png|jpg';
                $config['max_size'] = 1000;
                $config['max_width'] = 2000;
                $config['max_height'] = 1600;
                
                $this->load->library('upload',$config);
                if ( ! $this->upload->do_upload('cover'))
                {
                    echo $this->upload->display_errors();
                }   
                else
                {
                    $data['cover'] = $this->upload->data()['file_name'];
                }


                $id = $this->Blog_model->insertBlog($data);
                if($id){
                    echo "data berhasil di simpan";
                    redirect('/');
                }else{
                    echo "data gagal di simpan";
                }
            }

            $this->load->view('form_add');
             
        }
        public function edit($id){
            $query = $this->Blog_model->getSingleBlog('id',$id);
            $data['blog'] = $query->row_array();    
            // apakah jika ada input post maka muncul ini
            if($this->input->post()){
                $post['title'] = $this->input->post('title');
                $post['content'] = $this->input->post('content');
                $post['url'] = $this->input->post('url');
               
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpeg|png|jpg';
                $config['max_size'] = 1000;
                $config['max_width'] = 2000;
                $config['max_height'] = 1600;
               
                $this->load->library('upload',$config);
                $this->upload->do_upload('cover');
                //jika bila tidak kosong variabel file_name ini
                if (!empty($this->upload->data()['file_name']))
                {
                    // maka kita tambahkan data file name ini kedalam post cover
                    $post['cover'] = $this->upload->data()['file_name'];
                }
                // jadi ini blog model ke insert blog dengan membawa post
                // dan akan di parsing di method insertBlog dengan cara membuat
                // sebuah paramater post di dalam method tersebut 
                $id = $this->Blog_model->updateBlog($id,$post);
                if($id){
                    echo "berhasil di simpan";
                    redirect('/');
                }else{
                    echo "data gagal di simpan";
                }
            }
            $this->load->view('form_edit',$data);
        }
        public function delete($id){
            $this->Blog_model->deleteBlog($id);
            redirect('/');
        }
    }