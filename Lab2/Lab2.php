<!DOCTYPE html>
<html>
<body>

<h2>График работы докторов, каб. 333</h2>

<table>
  <tr>
    <th>П.н.</th>
    <th>Фамилия, имя</th>
    <th>График</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Сапожкова Зоя</td>
    <td>
    <?php
    $d = date("N");
    if ($d == 1 || $d == 3 || $d == 5) { ?>
       8:00-12:00
    <?php } else { ?>
      Нерабочий день
    <?php }
    ?>
    </td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Куропаткина Ефремия</td>
    <td>
    <?php
    if ($d == 2 || $d == 4 || $d == 6) { ?>
        12:00-16:00 
    <?php } else { ?>
        Нерабочий день
    <?php }
    ?>
    </td>
  </tr>
</table>

</body>
</html>
