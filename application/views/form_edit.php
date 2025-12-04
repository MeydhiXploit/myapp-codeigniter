<?php $this->load->view('partials/header.php'); ?>
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Tambah Artikel Baru</h1>
                        </div>
                    </div>
                </div>
            </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">      
            <h1>Edit Artikel</h1>
            <?php echo form_open_multipart(); ?>
            <div class="form-group">
                <div>
                    <form method="post"></form>
                    <label for="name">Judul</label>
                    <?php echo form_input('title',$blog['title'],'class="form-control"'); ?>
                 </div>
                <div>
                    <label for="content">content</label>
                    <?php echo form_textarea('content',$blog['content'],'class="form-control"'); ?>
                </div>
                <div>
                    <label for="url">URL</label>
                    <?php echo form_input('url',$blog['url'],'class="form-control"'); ?>
                </div>
                <div>
                    <label for="cover">Cover</label>
                    <?php echo form_upload('cover',$blog['cover'],'class="form-control"'); ?>
                </div>
                <div class="mt-2 mb-2">
                    <button class="btn btn-primary" type="submit">EDIT ARTIKEL</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php'); ?>