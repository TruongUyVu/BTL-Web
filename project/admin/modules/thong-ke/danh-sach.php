<script type="text/javascript">
  function deleteAction(){
    return confirm("Bạn có muốn xóa danh mục này không?");
  }
</script>
 <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       Tổng doanh thu
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tổng doanh thu</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="POST" accept-charset="utf-8">
                <label>Ngày bắt đầu</label>
                <input class="hangbanchay" type="date" name="dau" value="<?php if(isset($_POST['dau'])){ echo $_POST['dau']; } ?>" >
                <label>Ngày kết thúc</label>
                <input class="hangbanchay" type="date" name="cuoi" value="<?php if(isset($_POST['cuoi'])){ echo $_POST['cuoi']; } ?>" >
                <button type="submit" name="btnSubmit">Kiểm tra</button>

              </form>
              <br>

        </div>  
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Tên nhân viên</th>
                  
                  <th>Số lượng bán được</th>
                  <th>Tổng tiền</th>
                  <!-- <th>Ghi chú</th> -->

                </tr>
                </thead>
                <tbody>

                <?php
                if(isset($_POST['btnSubmit']) && $_POST['dau'] !== '' && $_POST['cuoi'] !== '' ){
                  $dau = $_POST['dau'];

                  $sau = $_POST['cuoi'];

                  $dau1 = explode('-', $dau);
                  $arr= [];
                  array_push($arr, $dau1[2], $dau1[1],$dau1[0]);
                  $dau2 = implode('',$arr);
                  $sau1 = explode('-', $sau);
                  $arr1= [];
                  array_push($arr1, $sau1[2], $sau1[1],$sau1[0]);
                  $sau2 = implode('',$arr1);

                  $sql_chitiet1 = "SELECT  * FROM order_detal WHERE (date_xuly BETWEEN '$dau2'  AND '$sau2') ";
                  $query1 = mysqli_query($conn,$sql_chitiet1);

                
                ?>
                <?php
                $tongdoanhthu = 0;
                while($dong_chitiet1 = mysqli_fetch_array($query1)){
                $sql_chitiet = "SELECT * FROM san_pham WHERE Ten_sp = '".$dong_chitiet1['product_id']."' ";
                $query = mysqli_query($conn,$sql_chitiet);
                $dong_chitiet2 = mysqli_fetch_array($query);
                
                 ?>
                 <tr>
                 <td><?php echo $dong_chitiet1['product_id'] ?></td>
                 <td><?php echo $dong_chitiet1['Ten_nv'] ?></td>

                 <td><?php echo $dong_chitiet1['da_ban'] ?></td>
                <td><?php echo number_format ($dong_chitiet1['Gia_sp']) ?> VNĐ</td>
                  
                 <td><?php if($dong_chitiet1['Gia_sp'] >= 400000000){ /*echo 'Đạt doanh thu cao'*/ ;
                  $tongdoanhthu += $dong_chitiet1['da_ban']*$dong_chitiet2['Gia_sp']; }
                 else {
                  /*echo 'Bình thường';*/
                 } ?></td>
               <?php }} ?>
               <tr>
                 <th colspan="5">Tổng doanh thu bán hàng: <?php if(isset($_POST['btnSubmit'])){ echo number_format($tongdoanhthu, 0, ',', '.');} ?> VNĐ </th>
               </tr>

                </tbody>
                
              </table>
              


    
  
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
          

</div>
 