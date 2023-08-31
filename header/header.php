<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../footer/footer.css" />
    <?php if (isset($css)) echo "<link rel='stylesheet' href='$css'>"; ?>
    <title>NEILIKKA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet"
    />
  </head>
  <body>
    <nav class="header">
      <div class="headerWrapper">
        <a class="headerLogo" href="../index.php"> Neilikka</a>
        <div class="linksWrapper">
          <ul class="navLinks">
            <li>
              <a href="../index.php">koti</a>
            </li>
            <li>
              <a href="../tuotet/tuotet.php">tuotet</a>
            </li>
            <li>
              <a href="../yhteytä/form.php">Ota yhteyttä</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
