<h1><?php echo $blog['title']; ?></h1>
<a href="<?php echo site_url('blog/edit/'.$blog['id']) ?>">Edit</a>
<?php echo $blog['content']; ?>
