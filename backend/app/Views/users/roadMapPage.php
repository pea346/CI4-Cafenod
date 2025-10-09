
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafenod Roadmap</title>
    <style>
        /* General Reset */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #222; /* Match landing dark theme */
        }

        /* Header + Footer */
        header, footer {
            background-color: #111; /* Dark header/footer */
            padding: 20px;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Shared Section */
        section {
            padding: 40px;
            text-align: center;
        }

        /* Roadmap Section */
        .roadmap {
            background-color: #333; /* Dark card-style background */
            color: #fff;
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
        }

        .roadmap h1 {
            font-size: 2.5rem;
            color: #D2B48C; /* Coffee gold, same as landing button */
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .roadmap ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .roadmap li {
            margin-bottom: 20px;
            padding: 20px;
            border-left: 4px solid #D2B48C; /* gold accent */
            background-color: #444;
            border-radius: 5px;
        }

        .roadmap li strong {
            font-size: 1.2rem;
            color: #fff;
        }
    </style>
</head>
<body>

<section class="roadmap">
    <h1>Project Road Map</h1>
    <ul>
        <li>
            <strong>User Management</strong><br>
            Manage users with sign up, login, profile update, and account deletion.
        </li>
        <li>
            <strong>Product Management</strong><br>
            Manage coffee items with add, view, edit, and delete options.
        </li>
        <li>
            <strong>Order Management</strong><br>
            Handle cart, checkout, order history, and cancellations.
        </li>
    </ul>
</section>



</body>
</html>
