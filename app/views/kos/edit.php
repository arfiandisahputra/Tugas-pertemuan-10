<h2>Edit Kos</h2>

<form action="<?php echo URL; ?>/kos/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['kos_id']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="kos_nama" value="<?php echo $data['row']['kos_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="kos_harga" value="<?php echo $data['row']['kos_harga']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>