<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode"></td>
        </tr>
        <tr>
            <td>NAMA Golongan</td>
            <td><input type="text" name="gol_nama"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>