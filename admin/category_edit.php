<?php
include '../lib/include.php';
if ($_POST['name']&& isset($_POST['slug'])) {
    checkCsrf();
    $slug = $_POST['slug'];
    if (preg_match('^[a-z\-0-9]+$', $slug)) {
        $name = $pdo->quote($_POST['name']);
        $slug = $pdo->quote($_POST['slug']);
        if (isset($_GET['id'])) {
            $id=$pdo->quote($_GET['id']);
            $pdo->query("UPDATE categorie SET name=$name,slug=$slug Where id=$id");

        } else{
            $pdo->query("INSERT INTO categories SET name=$name ,slug=$slug");
    }
      setFlash('la categorie a bien été ajouteé');
        header('location:category.php');
        die();

    } else{
        setFlash('le slug n\'est pas valide', 'danger');
    }
}
if (isset($_GET['id'])){
    $id=$pdo->quote($_GET['id']);
    $select =$pdo->query("SELECT * FROM categories Where id=$id");
    if ($select->rowCount()==0)
    {
        setFlash("Il n'y a pas de catégorie avec cet ID",'danger');
        header('location:category.php');
        die();
    }
    $_POST=$select->fetch();

}
    ?>
<h1>Editer une catégorie</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="name" >Nom de la categorie</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
    </div>
    <div class="form-group">
        <label for="slug" >URL de la categorie</label>
        <input type="text" class="form-control" id="slug" name="slug" value="<?php if(isset($_POST['slug'])){echo $_POST['slug'];} ?>">
    </div>
    <?= csrfInput();?>

    <button type="submit" class="btn btn-default">Enregistrer ></button>

</form>
