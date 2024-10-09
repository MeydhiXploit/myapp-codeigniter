<?php $this->load->view('partials/header.php'); ?>
        <header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Selamat Datang</h1>
                            <span class="subheading">Website Meydhi Ari Nugroho</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <form method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="find" class="form-control" placeholder="Cari Artikel" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-info" type="submit" id="button-addon2">Cari</button>
                        </div>                  
                    </form>
                    <?php foreach ($blog as $blogs) : ?>
                    <div class="post-preview">
                        <a href="<?php echo site_url('blog/detail/'.$blogs['url']); ?>">
                            <h2 class="post-title">
                                <?php echo $blogs['title'] ?>
                            </h2>
                        </a>
                        <p class="post-meta">
                            Posted on <?php echo $blogs['date']; ?>
                            <div>
                                <a class="btn btn-info" href="<?php echo site_url('blog/edit/'.$blogs['id']); ?>">Edit</a>
                                <a class="btn btn-danger" href="<?php echo site_url('blog/delete/'.$blogs['id']); ?>">Delete</a><br>     
                            </div>
                        </p>
                    <?php echo $blogs['content']; ?>
                </div>
                    <hr> <?php endforeach;?>
            </div>
        </div>
<?php $this->load->view('partials/footer.php'); ?>       