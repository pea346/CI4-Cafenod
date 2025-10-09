<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mood Board - Cafenod</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 40px;
            color: #fff;
            background-color: #111;
            background-image: url('/images/coffee_roadMap.jpg'); /* update with your actual image path */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        h1, h2, h3 {
            font-family: 'Pacifico', cursive;
            color: #D2B48C;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .section {
            background-color: rgba(17, 17, 17, 0.7);
            padding: 25px;
            margin-bottom: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(210, 180, 140, 0.3);
            transition: 0.3s ease;
        }

        .section:hover {
            box-shadow: 0 6px 14px rgba(210, 180, 140, 0.5);
        }

        /* Color Palette */
        .palette {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .color {
            width: 90px;
            height: 90px;
            border-radius: 8px;
            border: 2px solid #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .color:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.8);
        }

        /* Typography */
        .typography p {
            margin: 10px 0;
            font-size: 1.1em;
        }

        .font-pacifico {
            font-family: 'Pacifico', cursive;
            color: #D2B48C;
        }

        /* Buttons */
        .buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            transition: 0.3s ease;
        }

        .btn-primary {
            background-color: #D2B48C;
            color: #222;
        }
        .btn-secondary {
            background-color: #555;
            color: #fff;
        }
        .btn-border {
            background-color: transparent;
            border: 2px solid #D2B48C;
            color: #D2B48C;
        }
        .btn-disabled {
            background-color: #444;
            color: #777;
            cursor: not-allowed;
        }

        /* Button Hover Effects */
        .btn-primary:hover {
            background-color: #c19a6b;
            color: #fff;
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.8);
            transform: scale(1.05);
        }
        .btn-secondary:hover {
            background-color: #777;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }
        .btn-border:hover {
            background-color: #D2B48C;
            color: #222;
            box-shadow: 0px 4px 10px rgba(210, 180, 140, 0.6);
            transform: scale(1.05);
        }

        /* Cards */
        .card {
            background-color: rgba(180, 180, 180, 0.1);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            max-width: 250px;
            box-shadow: 0px 2px 6px rgba(212, 231, 177, 0.4);
            font-family: 'Montserrat', sans-serif;
            margin: 10px;
            transition: 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 4px 12px rgba(210, 180, 140, 0.6);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Logos */
        .logo {
            width: 100px;
            height: 100px;
            border: 2px solid #D2B48C;
            display: inline-block;
            margin: 10px;
            border-radius: 10px;
            background-color: rgba(210, 180, 140, 0.1);
            box-shadow: 0px 2px 8px rgba(210, 180, 140, 0.4);
            transition: 0.4s ease;
        }

        .logo:hover {
            transform: rotate(10deg) scale(1.1);
            box-shadow: 0px 4px 12px rgba(210, 180, 140, 0.6);
        }

        .circle {
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <h1>Cafenod Mood Board</h1>

    <div class="section">
        <h2>Color Palette</h2>
        <div class="palette">
            <div class="color" style="background:#6b4f4f;"></div>
            <div class="color" style="background:#d2b48c;"></div>
            <div class="color" style="background:#f5f5dc;"></div>
            <div class="color" style="background:#3e2c2c;"></div>
        </div>
    </div>

    <div class="section typography">
        <h2>Typography</h2>
        <p class="font-pacifico">Pacifico (Cursive) – for headers and titles</p>
        <p style="font-family:'Montserrat', sans-serif;">Montserrat (Sans-serif) – for body and button text</p>
    </div>

    <div class="section">
        <h2>Buttons</h2>
        <div class="buttons">
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-secondary">Secondary</button>
            <button class="btn btn-border">Border</button>
            <button class="btn btn-disabled" disabled>Disabled</button>
        </div>
    </div>

    <div class="section">
        <h2>Cards</h2>
        <div class="cards">
            <div class="card">Classic Coffee Card</div>
            <div class="card">Latte Card</div>
            <div class="card">Espresso Card</div>
        </div>
    </div>

    <div class="section">
        <h2>Logos</h2>
        <div class="logo"></div>
        <div class="logo circle"></div>
    </div>
</body>
</html>
