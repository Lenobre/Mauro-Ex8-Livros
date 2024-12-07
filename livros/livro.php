<?php
$teamID = isset($_GET["id"]) ? $_GET["id"] : null;

if (!$teamID)
  header("Location: index.php");

require_once("components/table.php");
require_once("models/Livro.php");

$team = new Livro();

if (!$team->exist($teamID))
  header("Location: index.php");

$title = "Ver Livro";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>

<body>
  <div class="p-4">
    <div class="p-4">
      <div class="flex">
        <h1 class="text-2xl font-bold">Livro</h1>

        <a href="index.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ml-auto">Voltar página</a>
      </div>

      <div class="mt-2">
        <form class="grid grid-cols-8 gap-2">
          <?php
          $currentTeam = $team->get($teamID);
          ?>

          <div class="mb-5 col-span-3">
            <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900">Título</label>
            <input type="text" id="titulo" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["titulo"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-3">
            <label for="idioma" class="block mb-2 text-sm font-medium text-gray-900">Idioma</label>
            <input type="text" id="idioma" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["idioma"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-2">
            <label for="paginas" class="block mb-2 text-sm font-medium text-gray-900">Páginas</label>
            <input type="number" id="paginas" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["paginas"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-3">
            <label for="editora" class="block mb-2 text-sm font-medium text-gray-900">Editora</label>
            <input type="text" id="editora" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["editora"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-3">
            <label for="data_publicacao" class="block mb-2 text-sm font-medium text-gray-900">Data de Publicação</label>
            <input type="date" id="data_publicacao" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["data_publicacao"] ?>" readonly />
          </div>

          <div class="mb-5 col-span-2">
            <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900">ISBN</label>
            <input type="text" id="isbn" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["isbn"] ?>" readonly />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>