<?php

namespace App\Models;

use App\Core\Model;

class Kos extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_kos";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $kos_nama = $_POST['kos_nama'];
          $kos_harga = $_POST['kos_harga'];

          $sql = "INSERT INTO tb_kos SET kos_nama=:kos_nama, kos_harga=:kos_harga";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":kos_nama", $kos_nama);
          $stmt->bindParam(":kos_harga", $kos_harga);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_kos WHERE kos_id=:kos_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":kos_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $kos_nama = $_POST['kos_nama'];
          $kos_harga = $_POST['kos_harga'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_kos
          SET kos_nama=:kos_nama, kos_harga=:kos_harga WHERE kos_id=:kos_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":kos_nama", $kos_nama);
          $stmt->bindParam(":kos_harga", $kos_harga);
          $stmt->bindParam(":kos_id", $id);

          $stmt->execute();
     }
}
