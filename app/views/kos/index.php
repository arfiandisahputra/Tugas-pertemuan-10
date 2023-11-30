<h2>Kos</h2>

<a href="<?php echo URL; ?>/kos/input" class="btn">Input Kos</a>

<table id="dtb">
<thead>
      <tr>
            <th>NO</th>
            <th>ID KOS</th>
            <th>NAMA KOS</th>
            <th>HARGA</th>
            <th>EDIT</th>
      </tr> 
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['kos_id']; ?></td>
                  <td><?php echo $row['kos_nama']; ?></td>
                  <td><?php echo $row['kos_harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/kos/edit/<?php echo $row['kos_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>
      </tbody>

</table>