 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <title>Cadastro de Livros</title>
 </head>

 <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 60px;">
     <div class="container-fluid">
       <a class="navbar-brand" href="#"><img src="img/meu.png" alt="logo" style="height: 80px;"></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" aria-current="page" href="AreaFuncionario.php">Home</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Livros
             </a>
             <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item nav-link" href="../View/CadLivro.php">Cadastrar</a></li>
               <li><a class="dropdown-item nav-link" href="../View/VisualizarLivro.php">Buscar</a></li>
             </ul>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Quadrinhos
             </a>
             <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item nav-link" href="../View/CadQuadrinho.php">Cadastrar</a></li>
               <li><a class="dropdown-item nav-link" href="../View/VisualizarQuadrinho.php">Buscar</a></li>
             </ul>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Revistas
             </a>
             <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item nav-link" href="../View/CadRevista.php">Cadastrar</a></li>
               <li><a class="dropdown-item nav-link" href="../View/VisualizarRevista.php">Buscar</a></li>
             </ul>
           </li>
           <li class="nav-item dropdown ">
             <a class="nav-link" href="../Controller/logout.php">
               Sair
             </a>
           </li>
         </ul>
       </div>
     </div>
   </nav>

   <div class="container">
     <form action="../Controller/inserirLivro.php" method="get" class="row g-3" style="margin-top: 20px;">

       <div class="col-md-6">
         <label for="inputNome" class="form-label">Nome do Livro</label>
         <input type="text" name="livro" class="form-control" id="inputNome">
       </div>
       <div class="col-md-6">
         <label for="inputGenero" class="form-label">Gênero</label>
         <input type="text" name="genero" class="form-control" id="inputGenero">
       </div>

       <div class="col-md-4">
         <label for="inputAno" class="form-label">Ano</label>
         <input type="number" name="ano" class="form-control" id="inputAno">
       </div>

       <div class="col-md-4">
         <label for="inputAutor" class="form-label">Autor</label>
         <input type="text" name="autor" class="form-control" id="inputAutor">
       </div>

       <div class="col-md-4">
         <label for="inputEditora" class="form-label">Editora</label>
         <input type="text" name="editora" class="form-control" id="inputEditora">
       </div>

       <div class="col-12">
         <label for="inputCapa" class="form-label">Capa</label>
         <input type="text" name="capa" class="form-control" id="inputCapa">
       </div>

       <div class="col-12">
         <label for="inputURL" class="form-label">URL</label>
         <input type="text" name="url" class="form-control" id="inputURL">
       </div>


       <div class="col-md-12">
         <label for="inputResenha" class="form-label">Resenha</label>
         <textarea type="text" name="resenha" class="form-control" id="inputResenha" rows="6"></textarea>
       </div>

       <div class="col-12">
         <button type="submit" class="btn btn-primary">Cadastrar</button>
       </div>
     </form>
   </div>
 </body>

 </html>