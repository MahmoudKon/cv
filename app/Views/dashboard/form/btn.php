<a href="<?= URL('dashboard/' . segment()[1] . '/edit/' . $row->id) ?>" class="btn btn-sm btn-primary box-shadow-2"><i class="ft-edit"></i></a>
<form class="d-inline" method="post" action="<?= URL('dashboard/' . segment()[1] . '/delete') ?>">
    <input type="hidden" name="id" value="<?= $row->id ?>">
    <button onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-sm btn-danger box-shadow-2"><i class="ft-trash"></i></button>
</form>
