<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Product Name</th>
        <th>Product Line</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Update Date</th>
        <th>Introduce</th>
        <th colspan="2">Option</th>
    </tr>
   <?php foreach ($showProduct as $key => $item) : ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['productName'] ?></td>
            <td><?php echo $item['productLine'] ?></td>
            <td><?php echo $item['price'] ?></td>
            <td><?php echo $item['amount'] ?></td>
            <td><?php echo $item['date'] ?></td>
            <td><?php echo $item['status'] ?></td>
            <td><button type="">Edit</button></td>
            <td><button type="">Delete</button></td>
        </tr>
    <?php endforeach; ?>
</table>