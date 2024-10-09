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
                <form method="POST">
                    <div class="form-grup">
                        <label for="name">Judul</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-grup">
                        <label for="content">content</label>
                        <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-grup">
                        <label for="url">URL</label>
                        <input class="form-control" type="text" name="url">
                    </div>
                    <div class="form-grup mt-2 mb-2">
                        <button class="btn btn-primary" type="submit">SIMPAN ARTIKEL</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
<?php $this->load->view('partials/footer.php'); ?>
