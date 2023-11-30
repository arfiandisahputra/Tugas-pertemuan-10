<h2>Edit Kos</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['kos_id']; ?>">
    <table>
        <tr>
            <td>KOS ID</td>
            <td><input type="text" name="kos_id" value="<?php echo $data['row']['kos_id']; ?>" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="user_full_name" value="<?php echo $data['row']['user_full_name']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="user_alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="user_ktp" value="<?php echo $data['row']['user_ktp']; ?>" required></td>
        </tr>
        <tr>
            <td>USER ID</td>
            <td><input type="text" name="user_id" value="<?php echo $data['row']['user_id']; ?>" required></td>
        </tr>
        <tr>
            <td>PEL AKTIF</td>
            <td><input type="text" name="pel_aktif" value="<?php echo $data['row']['pel_aktif']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>