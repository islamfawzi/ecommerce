<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$homepage = file_get_contents('http://www.example.com/');


?>
<div class="container">
    <h2>Ecommerce</h2>
    <p>ecommerce product view</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Attachments</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Product 1</td>
            <td>100.00 $</td>
            <td>Product 1 Description</td>
            <td><a href="">view Attachment</a></td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>200.00 $</td>
            <td>Product 2 Description</td>
            <td><a href="">view Attachment</a></td>
        </tr>
        <tr>
            <td>Product 3</td>
            <td>300.00 $</td>
            <td>Product 3 Description</td>
            <td><a href="">view Attachment</a></td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>

