<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semantic HTML</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
  <header>
    <nav>
      <a href="./awesomeville.php">Awesome Ville</a>
    </nav>
  </header>
  <main>
    <div class="fancy-table">
      <form action="./formhandle.php" method="POST">
        <legend>Basically the title for form.</legend>
        <label for="username">Username</label>
        <input type="text" id="username">
        <button>Submit</button>
      </form>
    </div>
  </main>
  <footer>
    <p>Information About this awesome website.</p>
  </footer>
  <script type="text/javascript" src="./index.js"></script>
</body>
</html>

