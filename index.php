<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Sample Project</title>

    <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <form action="./inc/insert.php" method="POST">
      <input type="text" name="ID" id="" placeholder="ID" />
      <input type="text" name="NAME" id="" placeholder="NAME" />
      <input type="submit" value="Send" />
    </form>

    <br />
    <br />

    <ul id="sortable" class="list-group">
      <?php 
                include("./inc/getData.php");
            ?>
    </ul>

    <script>
      new Sortable(sortable, {
        animation: 0,
        ghostClass: "sortable-ghost",
      });
    </script>
  </body>
</html>
