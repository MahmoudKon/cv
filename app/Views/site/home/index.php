<div class="table">
    <table border="1">
        <thead>
            <tr>
                <td>#</td>
                <td>User Name</td>
                <td>Email</td>
                <td>Show</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $index => $user) { ?>
                <tr>
                    <td class="text-center"> <?= $index + 1; ?> </td>
                    <td> <?= $user->username; ?> </td>
                    <td> <?= $user->email; ?> </td>
                    <td class="text-center">
                        <form action="" method="POST">
                            <input hidden value="<?= $user->id; ?>" name="id">
                            <button type="submit"> <i class="fa fa-eye"></i> Show </button>
                        </form>
                    </td>
                </tr>
            
            <?php } ?>
        </tbody>
    </table>
</div>