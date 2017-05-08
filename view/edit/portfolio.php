<table>
        <thead>
            <tr>
                <th id="order">Order</a></th>
                <th id="name">Naam</a></th>
                <th id="description">Beschrijving</a></th>
                <th id="img">Afbeelding</a></th>
                <th id="link">Link</a></th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project) { ?>
            <tr>
                <td><?= $project['project_order']; ?></td>
                <td><?= $project['project_name']; ?></td>
                <td><?= $project['project_description']; ?></td>
                <td><img src="<?= URL ?><?= $project['project_img']; ?>" alt="<?= $project['project_name']; ?>" style="height: 20%; width: 20%;"></td>
                <td><?= $project['project_link']; ?></td>
                <td><a href="<?= URL ?>edit/portfolio_edit/<?= $project['project_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>delete/portfolio_delete/<?= $project['project_id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>