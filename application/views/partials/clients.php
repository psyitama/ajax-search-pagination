<thead class="thead-dark">
    <tr>
        <th scope="col">leads_id</th>
        <th scope="col">first name</th>
        <th scope="col">last name</th>
        <th scope="col">registered datetime</th>
        <th scope="col">email</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($clients as $client): ?>
    <tr>
        <th scope="row"><?=$client['id']?></th>
        <td><?=$client['first_name']?></td>
        <td><?=$client['last_name']?></td>
        <td><?=date_format(date_create($client['joined_datetime']), "F j Y")?></td>
        <td><?=$client['email']?></td>
    </tr>
    <?php endforeach;?>
</tbody>
