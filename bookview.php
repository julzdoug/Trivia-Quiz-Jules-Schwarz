<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="container-fluid">
    <span class="navbar-brand mb-0 col">Opportunity</span>
  <h1 class="col">PhPMyAdmin SQL Books Database</h1>
  </div>
    <?php 
    require "./includes/db.php";
    //$_GET deliver the 'id' of the URL  'bookview.php?id=$id' 
    if (isset($_GET['id'])){
    $id = $_GET['id'];
}
else {
    // If the ID is missing abbort.
    exit('Attention: The Identifyer is missing');
}    //if we get the ID continue
// this echo is to check if the id is working.    
//echo "id = $id<br>";

    // SQL-Statment formulates all the data of the Id information
    $sqlStatement = $dbConnection->query("SELECT `title`,`genre`,`author`,`description`, `publisher` ,`ISBN`,`price`, `currency`,`used` FROM `books` WHERE `id` = $id");
    $row = $sqlStatement->fetch(\PDO::FETCH_ASSOC);


    

    

    ?>
<table class="table table-hover">
    <thead>
        <tr class="bg-primary text-white">
            <th scope="col"><?php echo $row['ISBN']; ?></th>
            <th scope="col"><?php echo $row['title']; ?>/<?php echo $row['author']; ?></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        //automatic insert info
        foreach ($row as $columnName => $value) {
            // construct of the for loop
            $translatedColumnName = translateColumnName($columnName);

            echo "<tr class='table-hover'>           
            <td class='bg-light' style='width: 300px;'>$translatedColumnName</td>
            <td>$value</td>
        </tr>";
        }
        ?>
        
    </tbody>
</table>

<button type="button" class="btn btn-info col " onclick="document.location = 'index.php';" >Back</button>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© Oppertunity Jules Schwarz</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</body>
</html>