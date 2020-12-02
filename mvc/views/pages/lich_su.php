<table class="table table-bordered tbl">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên Người Nhận</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Ngày Mua</th>
      <th scope="col">Xem</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach ($data["get_order"] as $key) {?>
      <tr class="tr-t">
        <th scope="row"><?php echo $i; ?></th>
        <td><?php echo $key["username"]?></td>
        <td><?php echo $key["address"]?></td>
        <td>
          <?php 
            $date = new DateTime($key['date_order']);
            echo $date->format('d-m-Y' . '/' .' H:i:s');
          ?>
          
        </td>
        <th scope="row"><a href="<?php echo url("Cart/detail_lich_su_mua_hang/".$key["id"]) ?>">Xem chi tiết<?php echo $key["id"] ?></a></th>
      </tr>
    <?php $i++;} ?>
    </tbody>
</table>