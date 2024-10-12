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

                <h1>Tambah artikel</h1>
                <?php echo form_open_multipart(); ?>
                    <div class="form-group">
                        <label for="name">Judul</label>
                        <?php echo form_input('title',null,'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="content">content</label>
                        <?php echo form_textarea('content',null,'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="cover">cover</label>
                        <?php echo form_upload('cover',null,'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <?php echo form_input('url',null,'class="form-control"'); ?>
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <button class="btn btn-primary" type="submit">SIMPAN ARTIKEL</button>
                    </div>
                <?php echo form_close(); ?>
                </form>
            
            </div>
        </div>
    </div>
<?php $this->load->view('partials/footer.php'); ?>
