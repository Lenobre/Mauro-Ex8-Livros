<?php
require_once("components/table.php");
require_once("models/Livro.php");

$title = "Livros";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>

<body>
  <div class="p-4">
    <div class="p-4">
      <h1 class="text-2xl font-bold">Livros</h1>

      <div class="mt-2">
        <?php
        $product = new Livro();
        $products = $product->getAll();

        table(["Título", "Idioma", "Quantidade de páginas", "Editora", "Data de publicação", "Editar", "Apagar"], $products);
        ?>
      </div>
    </div>
  </div>
</body>

</html>