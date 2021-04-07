<?php foreach ($data as $index => $row) : ?>
    <tr>
        <td> <?= $index + 1 ?> </td>
        <td> <?= $row->username ?> </td>
        <td> <?= $row->email ?> </td>
        <td> <?= $row->image ?> </td>
        <td width="143px" class="p-1">
            <a href="<?= URL('dashboard/' . segment()[1] . '/edit/' . $row->id) ?>" class="btn btn-sm btn-primary box-shadow-2"><i class="ft-edit"></i></a>
            <form class="d-inline" method="post" action="<?= URL('dashboard/' . segment()[1] . '/delete') ?>">
                <input type="hidden" name="id" value="<?= $row->id ?>">
                <button onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-sm btn-danger box-shadow-2"><i class="ft-trash"></i></button>
            </form>
            <a href="<?= URL('dashboard/profile/show/' . $row->id) ?>" class="btn btn-sm btn-info box-shadow-2"><i class="ft-eye"></i></a>
        </td>
    </tr>
<?php endforeach; ?>