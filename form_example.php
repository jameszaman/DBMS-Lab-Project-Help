<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semantic HTML</title>
  <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
  <header>
    <?php
      include "./nav.php"
    ?>
  </header>
  <main>
    <div class="fancy-table">
      <form action="./formhandle.php" method="POST">
        <legend>Basically the title for form.</legend>

        <label for="username">Username</label>
        <input type="text" id="username" class="username" name="username" placeholder="Username" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" class="password" name="password" placeholder="Password" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" class="email" name="email" placeholder="email" required>

        <label for="dob">Date Of Birth</label>
        <input type="date" id="dob" class="dob" name="dob" placeholder="dob" required>
        
        <!-- default type is submit -->
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

