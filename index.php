<?php
include 'debug.php';
include 'connection.php';
$query = "SELECT * FROM articles INNER JOIN authors ON author_id = authors.id";
// $query2 = "SELECT * FROM categories INNER JOIN articles_categories on category_id = categories.id";
$query2 = "SELECT * FROM categories";
$query3 = "SELECT * FROM authors";
$results = $conn->query($query);
$results2 = $conn->query($query2);
$results3 = $conn->query($query3);
?>




<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Blog from scratch</title>


</head>

<body>



    <div class="container">
        <header>
            <img src="./Asset/image.png" alt="icone image">
            <h1>Blog from sratch</h1>
        </header>
        <div class="filter">
            <select name="author" id="filter">
                <option value="0">Filter by authors</option>
                <?php
                foreach ($results3 as $i3) {
                ?>
                <option value="<?php echo $i['id'] ?>">
                    <?php echo $i3['firstname'] ?>
                    <?php echo $i3['lastname'] ?>
                </option>
                <?php
                }
                ?>
            </select>

            <select name="categories" id="filter2">
                <option value="0">Filter by categories</option>
                <?php
                foreach ($results2 as $i2) {
                ?>

                <option value="<?php echo $i2['id'] ?>">
                    <?php echo $i2['category'] ?>
                </option>
                <?php
                }
                ?>

            </select>

        </div>
        <div class="articlebox">
            <?php
            foreach ($results as $i) {
            ?>
            <div class="only">
                <img src="<?php
                echo $i['image_url']
                    ?>" class="imagine" alt=" <?php echo $i['image_alt'] ?>">

                <h2>
                    <?php echo $i['title']; ?>
                </h2>

                <div>
                    <h3>By
                        <?php
                echo $i['firstname'];
                        ?>
                        <?php
                echo $i['lastname'];
                        ?>
                    </h3>

                    <h4>
                        <?php echo $i['reading_time'] ?>
                    </h4>
                </div>
                <p>
                    <?php echo substr($i['content'], 0, 200) . '...'; ?>
                </p>

                <a href="/article.php?id=<?php echo $i['id'] ?>" id="more">Lire la suite ...</a>

                <h5></h5>
            </div>
            <?php
            }
            ?>

            <!-- <div id="only">

                <h2>20 VS code shortcuts</h2>
                <div>
                    <h3>By Gérard Manvussa</h3>
                    <h4>8 min read</h4>
                </div>


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci suscipit sint asperiores
                    nesciunt omnis modi nisi repudiandae et, illo blanditiis? Ea asperiores explicabo similique
                    voluptates quis voluptatibus error maxime accusantium.</p>

                <p id="more">Lire la suite ...</p>
                <div class="categorie">
                    <div>
                        <p>1</p>
                    </div>
                    <div>
                        <p>2</p>
                    </div>

                </div>

            </div>
            <div id="only">

                <h2>20 VS code shortcuts</h2>
                <div>
                    <h3>By Gérard Manvussa</h3>
                    <h4>8 min read</h4>
                </div>


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci suscipit sint asperiores
                    nesciunt omnis modi nisi repudiandae et, illo blanditiis? Ea asperiores explicabo similique
                    voluptates quis voluptatibus error maxime accusantium.</p>

                <p id="more">Lire la suite ...</p>
            </div>
            <div id="only">

                <h2>What is JSON ?</h2>
                <div>
                    <h3>By Paul Auchon</h3>
                    <h4>3 min read</h4>
                </div>


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci suscipit sint asperiores
                    nesciunt omnis modi nisi repudiandae et, illo blanditiis? Ea asperiores explicabo similique
                    voluptates quis voluptatibus error maxime accusantium.</p>

                <p id="more">Lire la suite ...</p>
            </div>

            <div id="only">

                <h2>What is JSON ?</h2>
                <div>
                    <h3>By Paul Auchon</h3>
                    <h4>3 min read</h4>
                </div>


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci suscipit sint asperiores
                    nesciunt omnis modi nisi repudiandae et, illo blanditiis? Ea asperiores explicabo similique
                    voluptates quis voluptatibus error maxime accusantium.</p>

                <p id="more">Lire la suite ...</p>
            </div>
            <div id="only">

                <h2>20 VS code shortcuts</h2>
                <div>
                    <h3>By Gérard Manvussa</h3>
                    <h4>8 min read</h4>
                </div>


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci suscipit sint asperiores
                    nesciunt omnis modi nisi repudiandae et, illo blanditiis? Ea asperiores explicabo similique
                    voluptates quis voluptatibus error maxime accusantium.</p>

                <p id="more">Lire la suite ...</p> -->
        </div>
    </div>
    </div>
    <footer>
        <p>&copy;2020 - blogfromscratch</p>
    </footer>
</body>

</html>