<?php

use userApp\User;

$user = new User("1111", "Petras", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user2 = new User("2222", "Petras2", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user3 = new User("3333", "Petras3", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user4 = new User("4444", "Petras4", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user5 = new User("5555", "Petras5", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user6 = new User("6666", "Petras6", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user7 = new User("7777", "Petras7", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user8 = new User("8888", "Petras8", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user9 = new User("9999", "Petras9", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");
$user10 = new User("0000", "Petras0", "Petraitis", "Direktorius", "petraitis@imone.lt", "2000$", "Dirbantis");

?>
<table>
  <tr>
    <th>AsmensKodas</th>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Pareigos</th>
    <th>El_Pastas</th>
    <th>Darbo_Uzmokestis</th>
    <th>Busena</th>
  </tr>
  <?php foreach($user->showProfile() as $list):?>
    <tr>
        <td><?=$list['AsmensKodas']?></td>
    </tr>
  <?php endforeach ?>
</table>