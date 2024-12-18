<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- เพิ่ม sweetalert  --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">




    <!-- font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {
        font-family: "Itim", serif;
        font-weight: 500;
        font-style: normal;
        margin-left: 100px;
    
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>โปรแกรมบันทึกข้อมูลเสื้อ</h1>
    <form class="row g-3">
  <div class="col-md-3">
    <label for="inputtext1" class="form-label">รหัสสินค้า:</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-3">
    <label for="inputname1" class="form-label">ชื่อสินค้า:</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-4">
    <label for="inputchoice" class="form-label">ประเภทเสื้อ:</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="เสื้อแข่ง, เสื้อซ้อม, เสื้อกันหนาว">
  </div>
  <div class="col-2">
    <label for="inputSize" class="form-label">ขนาด:</label>
    <select id="inputSize" class="form-select">
    <option selected>Choose...</option>
    <option>S</option>
    <option>M</option>
    <option>L</option>
    <option>XL</option>
  </div>
  <div class="col-md-2">
    <label for="inputColor" class="form-label">สี:</label>
    <input type="color" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputmaterial" class="form-label">วัสดุ:</label>
    <input type="material" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputprize" class="form-label">ราคา:</label>
    <input type="prize" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputquentity" class="form-label">จำนวนคงเหลือ:</label>
    <input type="quantity" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputdate" class="form-label">วันที่ผลิต: </label>
    <input type="date" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputname" class="form-label">ผู้ผลิต:</label>
    <input type="name" class="form-control" id="inputZip">
  </div>
 
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        คลิกเพื่อยืนยัน
      </label>
    </div>
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary"
    id="alert">ส่ง</button>
<br><br>
  <div class="col-12">
    <button type="reset" class="btn btn-primary"
    id="alert">ยกเลิก</button>
  </div>
</form>





    <h1>พัฒนาโดย</h1>
    664485034 <br>
    นายกิตตินันท์ จิระราชวโร 66/96

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- sweet alert2-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });
});
    </script>




</html>






