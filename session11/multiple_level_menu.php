

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=shop_laptop', 'root', 'koodinh');
            
            $pdo->exec('set names utf8');
            function printMenu($pdo, $parent_id)
            {

                $cats = $pdo->query('SELECT * FROM category WHERE parent_id = '.$parent_id);
                //nếu là danh mục cha
                if ($parent_id==0) {
                    foreach ($cats as $r) {
                        echo '<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						'.$r['name'].'</a>';
                        printMenu($pdo, $r['id']);
                        echo '</li>';
                    }
                } else {
                    //nếu là danh mục con
                    echo '<div class="dropdown-menu">';
                    foreach ($cats as $r) {
                        echo '<a class="dropdown-item" href="#">'.$r['name'].'</a>';
                    }
                    echo '</div>';
                }
            }
            ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <?php //in menu từ danh mục cha
                    printMenu($pdo, 0);?>

                </ul>

            </div>
        </nav>
    </div>
</body>
</html>