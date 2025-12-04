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
                        <!--  fungsi set_value('') agar si user tidak mengetikkan kembali -->
                        <?php echo form_input('title',set_value('title'),'class="form-control"'); ?>
                        <?= form_error('title','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="content">content</label>
                        <?php echo form_textarea('content',set_value('content'),'class="form-control"'); ?>
                        <?= form_error('content','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="cover">cover</label>
                        <?php echo form_upload('cover',set_value('cover'),'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <?php echo form_input('url',set_value('url'),'class="form-control"'); ?>
                        <?= form_error('url','<small class="text-danger pl-3">','</small>'); ?>
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
