<h2>Dosens</h2>

<a href="<?php echo URL; ?>/Dosens/input" class="btn">Input Dosen</a>

<table>
      <tr>
            <th>NO</th>
            <th>NIDN</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nidn']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/dosens/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/dosens/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>