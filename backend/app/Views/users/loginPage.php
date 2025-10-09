<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
      background-color: #111; /* Dark theme */
      background-image: url('/images/coffee_login.jpg');
      background-size: cover; /* make image cover the whole page */
    background-repeat: no-repeat; /* prevent tiling */
    background-position: center; /* center the image */
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: rgba(129, 102, 67, 0.8); /* Dark card background */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 2px 8px rgba(255, 255, 255, 0.6);
      width: 350px;
      text-align: center;
    }

    h1 {
      font-size: 2rem;
      color: #D2B48C; /* Coffee gold */
      margin-bottom: 20px;
      text-transform: uppercase;
      font-weight: bold;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      text-align: left;
      font-family: 'Pacifico', cursive;
    }

    input {
      width: 90%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      background-color: #c19a6b;
      color: #fff;
    }

    input:focus {
      outline: 2px solid #D2B48C;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background-color: #D2B48C;
      color: #222;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0px 2px 6px rgba(255, 255, 255, 1);
    }

    button:hover {
      background-color: #c19a6b;
      color: white;
      box-shadow: 0px 4px 10px rgba(134, 106, 69, 0.6)
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Login Page</h1>
    <form method="post" action="">
      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Password:</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
