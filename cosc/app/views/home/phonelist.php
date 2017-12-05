<?php require_once '../app/views/templates/header.php'?>
    <h2>Phone list</h2>
    <table class='table table-striped table-condensed'>

            <th>name</th>
            <th>Phone number</th>

        <?php foreach ($data['list'] as $items){ ?>
            <tr>
                <td><?=$items['Name']?></td>
                <td><?=$items['Phone']?></td>
            </tr>
        <?php }?>
    </table>
    <a href= '/remind/create'> create new reminder</a>
<?php require_once '../app/views/templates/footer.php'?>