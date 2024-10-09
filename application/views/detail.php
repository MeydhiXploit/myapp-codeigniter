<?php $this->load->view('partials/header.php'); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $blog['title']; ?></h1>  
                            <span class="meta">
                                Posted by <?php echo $blog['date']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div>
                            <a class="btn btn-primary" href="<?php echo site_url('blog/edit/'.$blog['id']) ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo site_url('blog/delete/'.$blog['id']) ?>">Delete</a> 
                        </div>
                        <div>
                            <?php echo $blog['content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <hr>

<?php $this->load->view('partials/footer.php'); ?>
