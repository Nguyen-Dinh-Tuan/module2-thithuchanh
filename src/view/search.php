<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<?php

?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th scope="col">date</th>
        <th scope="col">descirbe</th>
    </tr>
    </thead>

    <?php foreach ($stores as $key => $store):?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $store['id'];?></td>
            <td><?php echo $store['name'];?></td>
            <td><?php echo $store['type'];?></td>
            <td><?php echo $store['price'];?></td>
            <td><?php echo $store['amount'];?></td>
            <td><?php echo $store['date'];?></td>
            <td><?php echo $store['descirbe'];?></td>
        </tr>
    <?php endforeach; ?>

</table>

