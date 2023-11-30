<!DOCTYPE html>
<html lang="en">
<head>
<title>How to Generate QR Code in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-4">

<div class="card">
    <div class="card-header">
        <h2>Simple QR Code</h2>
    </div>
    <div class="card-body">
        {!! QrCode::size(300)->generate('https://pixel.tj/') !!}
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Color QR Code</h2>
    </div>
    <div class="card-body">
        {!! QrCode::size(300)->backgroundColor(255,255,0)->generate('https://pixel.tj/uslugi/razrabotka-prilozhenij/') !!}
    </div>
</div>

</div>
</body>
</html>