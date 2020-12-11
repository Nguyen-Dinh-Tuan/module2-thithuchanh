<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url("https://i.pinimg.com/736x/cb/e3/02/cbe3025a51ddc5227735f813e70acc36.jpg");
    }

    .table {
        background-color: bisque;
    }

    h {
        text-align: center;
    }
</style>
<body>

<header>
    <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white" >Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Support</strong>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<form class="form-inline mt-2 mt-md-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: honeydew">Search</button>
</form>
<a href="index.php?page=add" class="btn btn-success">Add</a>
</div>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Descirbe</th>

        <th colspan="2" scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($stores as $key => $store): ?>
        <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <td><?php echo $store['name'] ?></td>
            <td><?php echo $store['type'] ?></td>
            <td><?php echo $store['price'] ?></td>
            <td><?php echo $store['amount'] ?></td>
            <td><?php echo $store['date'] ?></td>
            <td><?php echo $store['descirbe'] ?></td>

            <td><a href="index.php?page=delete&id=<?php echo $store['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn chắc chứ?')">Delete</a>

            <td><a href="index.php?page=edit&id=<?php echo $store['id'] ?>" class="btn btn-success">Edit</a></td>
        </tr>
    <?php endforeach ?>

</table>
<footer class="container" style="color: aliceblue;background-color: black;"align="center">
    <p>© Store Manager 2020-2021</p>
</footer>
</body>
</html><?php
