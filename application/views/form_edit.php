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
            <form method="POST" class="form-grup">
                <div>
                    <label for="name">Judul</label>
                    <input class="form-control" type="text" name="title" value="<?php echo $blog['title']; ?>">
                </div>
                <div>
                    <label for="content">content</label>
                    <textarea class="form-control" name="content" id="" cols="30" rows="10">
                        <?php echo $blog['content']; ?>
                    </textarea>
                </div>
                <div>
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name="url" value="<?php echo $blog['url']; ?>">
                </div>
                <div class="mt-2 mb-2">
                    <button class="btn btn-primary" type="submit">EDIT ARTIKEL</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php'); ?>