<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
<h1>Hiiii</h1>
<h1>Welcome to Simple PHP MVC Starter!</h1>

<ul>
    <?php foreach ($journals as $journal) : ?>
        <li><?= $journal->name ?> (<?= $journal->publishedYear ?>)</li>
    <?php endforeach; ?>
</ul>

</html>