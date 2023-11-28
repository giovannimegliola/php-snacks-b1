<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>

  <div class="container">
    <h1 class="py-4">Login Check</h1>
    <p>Enter your personal information to verify access</p>

    <form action="logincheck.php" method="get">
      <label for="name" class="py-4">Name:</label>
      <input type="text" name="name" required><br>

      <label for="mail" class="py-4">Email:</label>
      <input type="email" name="mail" required><br>

      <label for="age" class="py-4">Age:</label>
      <input type="text" name="age" required><br>

      <input type="submit" class="btn btn-primary " value="Check">
    </form>

  </div>

</body>

</html>