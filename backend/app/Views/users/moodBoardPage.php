<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mood Board - Cafenod</title>
    <style>
        .palette { display: flex; gap: 10px; margin-bottom: 20px; }
        .color { width: 80px; height: 80px; border-radius: 8px; }
        .btn { padding: 10px 15px; margin: 5px; border-radius: 4px; cursor: pointer; }
        .btn.primary { background: #6b4f4f; color: white; }
        .btn.secondary { background: #d2b48c; color: black; }
        .btn.bordered { border: 2px solidrgb(78, 71, 71); background: transparent; }
        .btn.disabled { background: grey; color: #ccc; cursor: not-allowed; }
        .card { border: 1px solid #ddd; border-radius: 8px; padding: 15px; width: 200px; }
        .logo { width: 80px; height: 80px; border: 2px solid black; display: inline-block; margin: 10px; }
        .circle { border-radius: 50%; }
    </style>
</head>
<body>
    <h1>Mood Board</h1>

    <h2>Color Palette</h2>
    <div class="palette">
        <div class="color" style="background:#6b4f4f;"></div>
        <div class="color" style="background:#d2b48c;"></div>
        <div class="color" style="background:#f5f5dc;"></div>
    </div>

    <h2>Typography</h2>
    <p style="font-family:sans-serif;">Font 1: Sans-serif</p>
    <p style="font-family:serif;">Font 2: Serif</p>

    <h2>Buttons</h2>
    <button class="btn primary">Primary</button>
    <button class="btn secondary">Secondary</button>
    <button class="btn bordered">Bordered</button>
    <button class="btn disabled" disabled>Disabled</button>

    <h2>Card</h2>
    <div class="card">This is a sample card</div>

    <h2>Logos</h2>
    <div class="logo"></div>
    <div class="logo circle"></div>
</body>
</html>
