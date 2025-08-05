<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h3>النص الأصلي:</h3>
    <div class="border p-3 bg-light mb-4" style="white-space: pre-wrap; direction: ltr;">
        {!! nl2br(e($original)) !!}
    </div>

    <h3>النص المترجم:</h3>
    <div class="border p-3 bg-white" style="white-space: pre-wrap; direction: rtl; text-align: right;">
        {!! nl2br(e($translated)) !!}
    </div>
</div>
</body>
</html>