<!DOCTYPE html>

<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Document</title>

</head>

<body>

    <h1>Tasks</h1>
    <ul>
        <?php foreach ($task2 as $key => $task): ?>
         <li> <a href="{{'task2/'. $key}}"> <?php echo $task ?> </a> </li>  
         <?php endforeach; ?>
   </ul>
        
</body>

</html>