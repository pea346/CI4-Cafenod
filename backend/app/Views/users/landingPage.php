<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafenod - Coffee House</title>
    <style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        color: #fff;
        background-color: #222;
    }

    /* Header & Footer */
    header, footer {
        background-color: #111;
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

    /* Buttons */
    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        font-weight: bold;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        text-decoration: none;
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

    /* Cards */
    .cards {
        display: flex;
        justify-content: center;
        gap: 20px;
        padding: 40px;
    }
    .card {
        background-color: #333;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        max-width: 250px;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.4);
    }
    .card img {
        max-width: 100%;
        border-radius: 6px;
        margin-bottom: 15px;
    }
    .card h3 {
        margin: 10px 0;
    }
    .card p {
        font-size: 0.9em;
        color: #ccc;
    }

    /* CTA Section */
    .cta {
        background-color: #444;
        text-align: center;
        padding: 50px 20px;
        margin: 40px 0;
        border-radius: 8px;
    }
    .cta h2 {
        font-size: 2em;
        margin-bottom: 15px;
    }
    .cta p {
        font-size: 1.1em;
        margin-bottom: 20px;
        color: #ddd;
    }
</style>

</head>
<body>

<section class="hero">
    <div class="hero-content">
        <h1>TIME TO DISCOVER COFFEE HOUSE</h1>
        <p>The coffee is brewed by first roasting the green coffee beans...</p>
        <a href="#" class="btn btn-primary">TESTY COFFEE</a>
        <a href="#" class="btn btn-secondary">LEARN MORE</a>
    </div>
</section>

<!-- 3 Cards -->
<div class="cards">

</div>

<!-- CTA Section -->


<!-- Buttons Demo -->
<div style="text-align:center; padding:30px;">
</div>




</body>
</html>