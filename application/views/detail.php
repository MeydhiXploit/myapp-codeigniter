<h1><?php echo $blog['title']; ?></h1>
<a href="<?php echo site_url('blog/edit/'.$blog['id']) ?>">Edit</a>
<a href="<?php echo site_url('blog/delete/'.$blog['id']) ?>">Delete</a>
<?php echo $blog['content']; ?>
