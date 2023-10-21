<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 01</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" type="text/css" href="/css/flex-style.css">
    <link rel="stylesheet" type="text/css" href="css/flex.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">   
</head>

<body>
    <header id="app-header" class="flex-row content-vcenter space-30 content-space-between box header">
    <img src="/imagens/logo.png" class="logo">   
    </header>
    <main>
    {{ $slot }} 
    </main>

    <footer id="app-footer" class="footer flex-row content-center box space-30">
        <div>Feito Pelos Alunos do Técnico em informatica</div>
    </footer>
</body>
</html>