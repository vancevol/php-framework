<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>将PHP代码嵌入到HTML中</title>
    <style>
        header {
            background-color: #f5f8fc;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<?php require "partials/nav.view.php" ?>

<form action="/tasks" method="GET">
    <textarea name="description" id="description" cols="50" rows="3"  required></textarea>
    <button type="submit">Submit</button>
</form>

</body>
</html>
