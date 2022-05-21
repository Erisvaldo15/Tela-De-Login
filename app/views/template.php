<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head> 
<body>
    <main>
       <?php require_once "../app/views/".$this->controller->view; ?>
    </main>
</body>
</html>