<?php

/* 
    * POST - to create a resource
    * PATCH - to update a resource
    * PUT - to replace a resource
    * GET - to get a resource or a list of resources
    * DELETE - to delete a resource

*/


echo '<pre>';
var_dump($_GET);
echo '</pre>';

$keyword = '';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    //echo $keyword.'<br>';
}
?>
<!-- // everything after? itsa query parameter and be access via superglobal GET?keyword=dbfbbdbdb
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <title>Super Global</title>
</head>
<body>
<form class = "form-group" action="<?php ?>" method="get">    
<div class = "form group">
<input class = "form-group" type = "text" name = "keyword" <?php echo $keyword ?>
    placeholder = "Type and hit hit enter"> </input>
  
<button class = "btn btn-primary">Search</button>
</div> 
</form>
</body>
</html>

