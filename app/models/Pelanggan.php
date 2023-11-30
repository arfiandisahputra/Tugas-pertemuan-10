<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_pelanggan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $kos_id = $_POST['kos_id'];
          $user_full_name = $_POST['user_full_name'];
          $user_alamat = $_POST['user_alamat'];
          $user_hp = $_POST['user_hp'];
          $user_ktp = $_POST['user_ktp'];
          $user_id = $_POST['user_id'];
          $pel_aktif = $_POST['pel_aktif'];

          $sql = "INSERT INTO tb_pelanggan SET kos_id=:kos_id, user_full_name=:user_full_name, user_alamat=:user_alamat, user_hp=:user_hp, user_ktp=:user_ktp, user_id=:user_id, pel_aktif=:pel_aktif";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":kos_id", $kos_id);
          $stmt->bindParam(":user_full_name", $user_full_name);
          $stmt->bindParam(":user_alamat", $user_alamat);
          $stmt->bindParam(":user_hp", $user_hp);
          $stmt->bindParam(":user_ktp", $user_ktp);
          $stmt->bindParam(":user_id", $user_id);
          $stmt->bindParam(":user_aktif", $user_aktif);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $kos_id = $_POST['kos_id'];
          $kos_id = $_POST['user_full_name'];
          $user_alamat = $_POST['user_alamat'];
          $user_hp = $_POST['user_hp'];
          $user_ktp = $_POST['user_ktp'];
          $user_id = $_POST['user_id'];
          $pel_aktif = $_POST['pel_aktif'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_pelanggan
          SET kos_id=:kos_id, user_full_name=:user_full_name, user_alamat=:user_alamat, user_hp=:user_hp, user_ktp=:user_ktp, user_id=:user_id, pel_aktif=:pel_aktif WHERE pel_id=:pel_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":kos_id", $kos_id);
          $stmt->bindParam(":user_full_name", $user_full_name);
          $stmt->bindParam(":user_alamat", $user_alamat);
          $stmt->bindParam(":user_hp", $user_hp);
          $stmt->bindParam(":user_ktp", $user_ktp);
          $stmt->bindParam(":user_id", $user_id);
          $stmt->bindParam(":pel_aktif", $pel_aktif);
          $stmt->bindParam(":pel_id", $id);

          $stmt->execute();
     }
}
