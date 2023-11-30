<h2>Input Kos</h2>

<form action="<?php echo URL; ?>/kos/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kos_nama" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="kos_harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>