<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
</header>
<!--if you want the execution to go on and show users the output, even if the include file is missing, use the include statement.-->
<?php include 'partials/header.php'; ?>
<?php include 'partials/footer.php'; ?>
<!--FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution.-->
<!--This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing-->
<h1>About us</h1>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.</p>
<footer>
    Copyright &copy; MEGACY INCORPORATED </footer>
</body>
</html>