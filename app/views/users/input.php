<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="user_email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="user_password" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="user_alamat" required></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="user_hp" required></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="user_pos" required></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><input type="text" name="user_role" required></td>
        </tr>
        <tr>
            <td>Aktif</td>
            <td><input type="text" name="user_aktif" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>