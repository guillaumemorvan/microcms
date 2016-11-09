<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title>MicroCMS - Home</title>
</head>

<body>
    <header>
        <h1>MicroCMS</h1>
    </header>
    <?php
    
    foreach($articles as $article): ?>
        <article>
            <h2><?php echo $article['art_title']; ?></h2>
            <p>
                <?php echo $article['art_content']; ?>
            </p>
        </article>
        <?php endforeach; ?>
    
    <footer><a href="http://www.randomness.fr/">MircroCMS</a> is a student work under license OCR</footer>
    
</body>

</html>