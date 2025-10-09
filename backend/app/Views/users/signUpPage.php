<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - Cafenod</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
      background-color: #111; /* same dark theme */
      background-image: url('/images/coffee_login.jpg'); /* use same background as login */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: rgba(129, 102, 67, 0.8); /* same translucent brown card */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 2px 8px rgba(255, 255, 255, 0.6);
      width: 350px;
      text-align: center;
    }

    h1 {
      font-size: 2rem;
      color: #D2B48C; /* coffee gold */
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
      box-shadow: 0px 4px 10px rgba(134, 106, 69, 0.6);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Sign Up</h1>
    <form method="post" action="">
      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Password:</label>
      <input type="password" name="password" required>

      <label>Confirm Password:</label>
      <input type="password" name="confirm_password" required>

      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
