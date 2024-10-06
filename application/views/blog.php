<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>
    <?php foreach ($blog as $blogs) : ?>
        <div>
            <h2>
                <a href="<?php echo site_url('blog/detail/'.$blogs['url']) ?>"><?php echo $blogs['title']; ?></a>
            </h2>
            <?php echo $blogs['content']; ?>
        </div>
    <?php endforeach ?>
</body>
</html>