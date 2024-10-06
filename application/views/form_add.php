<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <h1>Tambah artikel</h1>
    <form method="POST">
        <div>
            <label for="name">Judul</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="content">content</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="url">URL</label>
            <input type="text" name="url">
        </div>
        <div>
            <button type="submit">Simpan artikel</button>
        </div>
    </form>
</body>
</html>