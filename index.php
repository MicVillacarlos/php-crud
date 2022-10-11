<?php
 require_once("../php-crud/php/components.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD</title>
        <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="styles.css">
        <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
    </head>
    <body>
        <main>
            <div class="d-flex mar">
                <form class="mui-form">
                    <div class="form-container">
                        <h2>Book Inventory</h2>
                        <?php inputElement( $placeholder="Title", $name="title" )?>     
                        <?php inputElement( $placeholder="Author", $name="author" )?>
                        <?php inputElement( $placeholder="Genre", $name="genre" )?>
                    </div>
                    <div class="form-container">
                        <button type="submit" class="mui-btn mui-btn--raised mui-btn--primary">Upload</button>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>