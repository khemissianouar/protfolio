<?php
include '../lib/include.php';
$select=$pdo->query('SELECT * FROM categories');
    $categories =$select->fetchAll();

    if (!isset($_GET['delete'])){
        checkCsrf();
        $id=$pdo->quote($_GET['delete']);
        $pdo->query("DELETE FROM categories WHERE id=$id");
        setFlash('la categorie a bien ete supprime');
        header('loacation:category.php');
    }
?>
<h1>Les catégories</h1>
<p><a href="ca" </p>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category):?>
    <tr>
    <td><?=$category['id']?></td>
    <td><?=$category['nom']?></td>
    <td><a href="category_edit.php?id<?=$category['id'] ?> " class="btn btn-default">Edit</td>
    <td><a href="?delete<?=$category['id'] ?>&<?=crsf() ?> " class="btn btn-error" onclick="return confirm(Sur du sur ! )">Supprime</td>
    <td><a href="category_edit.php?id<?=$category['id'] ?> " class="btn btn-default">Edit</td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
