<table>
        <thead>
            <tr>
                <th id="name">Naam</a></th>
                <th id="gender">Leeftijd</a></th>
                <th id="species">Woonplaats</a></th>
                <th id="status">Vooropleiding</a></th>
                <th id="clients">Huidige opleiding</a></th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($info as $info) { ?>
            <tr>
                <td><?= $info['info_name']; ?></td>
                <td><?= $info['info_birthdate']; ?></td>
                <td><?= $info['info_residence']; ?></td>
                <td><?= $info['info_for-study']; ?></td>
                <td><?= $info['info_cur-study']; ?></td>
                <td><a href="<?= URL ?>edit/info_edit/<?= $info['info_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>delete/info_delete/<?= $info['info_id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>