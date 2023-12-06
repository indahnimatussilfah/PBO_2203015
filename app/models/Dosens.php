<?php

namespace App\Models;

use App\Core\Model;

class Dosens extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_dosens";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];

            $sql = "INSERT INTO tb_dosens
            SET nidn=:nidn, nama=:nama, email=:email, alamat=:alamat";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nidn", $nidn);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":alamat", $alamat);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_dosens WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }
/*
      public function update()
      {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $id = $_POST['id'];

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nidn", $nidn);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
*/

public function update()
{
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    $sql = "UPDATE tb_dosens SET nidn=:nidn, nama=:nama, email=:email, alamat=:alamat WHERE id=:id";

    $stmt = $this->db->prepare($sql);

    $stmt->bindParam(":nidn", $nidn);
    $stmt->bindParam(":nama", $nama);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":alamat", $alamat);
    $stmt->bindParam(":id", $id);

    $stmt->execute();
}


      public function delete($id)
      {
            $sql = "DELETE FROM tb_dosens WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
