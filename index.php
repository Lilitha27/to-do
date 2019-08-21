<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do list</title>
</head>
<body>
    <div class="list">
        <h1 class="header">To do</h1>
            <ul>
                <li><span class="item">wash dishes </span></li>
                <li><span class="item done">cook</span></li>

    
            </ul>
            <form class="item-add" action="index.php" method="post">
                <input type="text" name="name" placeholder="Type new item here." class="input" autocomplete="off">
                <input type="submit" value="add" class="submit">

            </form>
    </div>
</body>
</html>