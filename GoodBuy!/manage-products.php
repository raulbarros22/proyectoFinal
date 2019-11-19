<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Administrar Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="assets/css/Collapsible-sidebar-left-or-right--Content-overlay.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Vertical-Mobile-Collapsible-Menu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam|Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <?php
require 'navbarg.php';
require 'dbConnector.php';
$db = $baseDatos;
$titulo = '';
$precio = '';
$descripcion = '';
$imgURL = '';
if (isset($_POST) && (count($_POST) > 0)) {
    try {
        if (isset($_POST['form']) && $_POST['form'] == 'form1') {
            $insert = "INSERT INTO products values (default, now(), now(), '" . $_POST['title'] . "', " . $_POST['price'] . ", './images/" . $_POST['imgURL'] . "', '" . $_POST['description'] . "')";
            $query = $db->prepare($insert);
            $query->execute();
        } else if (isset($_POST['form']) && $_POST['form'] == 'form2') {
            $insert = "UPDATE products SET titulo = '" . $_POST['title'] . "', precio = " . $_POST['price'] . ", imageURL = '" . $_POST['imgURL'] . "', description = '" . $_POST['description'] . "' WHERE id = " . $_POST['id'];
            $query = $db->prepare($insert);
            $query->execute();
        } else if (isset($_POST['delete'])) {
            $delete = "DELETE FROM products WHERE id = " . $_POST['id'];
            $query = $db->prepare($delete);
            $query->execute();
        }

    } catch (\Throwable $th) {
        echo $th;
    }

} else if ((isset($_GET) && (count($_GET) > 0))) {
    $query = $db->prepare("SELECT * from products where titulo like '" . $_GET['buscador'] . "%'");
    $query->execute();
    $results = $query->fetch(PDO::FETCH_ASSOC);
    $titulo = $results['titulo'];
    $precio = $results['precio'];
    $descripcion = $results['description'];
    $imgURL = $results['imageURL'];
    $id = $results['id'];
}

?>
    <section>
        <div id="add-product"><a class="btn btn-sm" data-toggle="collapse" aria-expanded="true"
                aria-controls="collapse-1" href="#collapse-1" role="button">Añadir Prodcutos &nbsp;<i
                    class="fas fa-arrow-down"></i></a>
            <div class="collapse show" id="collapse-1">
                <section id="add-form">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="/proyectoFinal/GoodBuy!/manage-products.php">
                                    <div class="form-group"><label>Titulo</label><input class="form-control" type="text"
                                            name="title" required=""></div>
                                    <div class="form-group"><label>Precio</label><input class="form-control"
                                            type="number" step=".01" name="price" required=""></div>
                                    <div class="form-group"><label>Descripción</label><textarea class="form-control"
                                            name="description" required=""></textarea></div>
                                    <div class="form-group"><label>Imagen</label><input class="d-flex" type="file"
                                            name="imgURL" required="" accept="image/*"></div>
                                    <div><input type="hidden" name="form" value="form1"></div>
                                    <div class="form-row" id="button-row">
                                        <div class="col"><button class="btn btn-success"
                                                type="submit">Añadir</button><button class="btn btn-danger" type="reset"
                                                style="margin-left: 12px;">Resetear</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section>
        <div id="mod-product"><a class="btn btn-sm" data-toggle="collapse" aria-expanded="true"
                aria-controls="collapse-2" href="#collapse-2" role="button">Modificar/Eliminar Producto&nbsp;<i
                    class="fas fa-arrow-down"></i></a>
            <div class="collapse show" id="collapse-2">
                <section id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form action="" method="get">
                                    <div class="form-group"><input class="form-control" type="search"
                                            data-toggle="tooltip" data-bs-tooltip="" data-placement="bottom"
                                            placeholder="Buscar" name="buscador"
                                            title="Busque un producto para modificarlo o eliminarlo"></div>
                                </form>
                                <form method="post" action="/proyectoFinal/GoodBuy!/manage-products.php">
                                    <div class="form-group"><label>Titulo</label><input class="form-control" type="text"
                                    <?php echo $disabled = isset($results) ? '' : 'disabled'; ?> name="title" value='<?=$titulo?>'></div>
                                    <div class="form-group"><label>Precio</label><input class="form-control"
                                            type="number" <?php echo $disabled = isset($results) ? '' : 'disabled'; ?> name="price" value='<?=$precio?>'></div>
                                    <div class="form-group"><label>Descripción</label><textarea class="form-control"
                                    <?php echo $disabled = isset($results) ? '' : 'disabled'; ?> name="description"><?=$descripcion?></textarea></div>
                                    <div class="form-group"><label>Imagen</label><input class="d-flex" type="file"
                                    <?php echo $disabled = isset($results) ? '' : 'disabled'; ?> name="imgURL"></div>
                                    <div><input type="hidden" name="form" value="form2"></div>
                                    <div><input type="hidden" name="id" value="<?=$id?>"></div>
                                    <div class="form-row" id="button-row">
                                        <div class="col"><button class="btn btn-success"
                                                type="submit" <?php echo $disabled = isset($results) ? '' : 'disabled'; ?>>Modificar</button></div>
                                    </div>
                                </form>
                                <form method="post" action="/proyectoFinal/GoodBuy!/manage-products.php">
                                <div><input type="hidden" name="delete" value="true"></div>
                                <div><input type="hidden" name="id" value="<?=$id?>"></div>
                                <button class="btn btn-danger"
                                                type="submit" <?php echo $disabled = isset($results) ? '' : 'disabled'; ?>>Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="assets/js/Collapsible-sidebar-left-or-right--Content-overlay.js"></script>
</body>

</html>
