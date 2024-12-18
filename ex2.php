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
        font-weight: 400;
        font-style: normal;
        margin-left: 100px;
    
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>การเขียนโปรแกรมด้วย php</h1>
    664485034 <br>
    นายกิตตินันท์ จิระราชวโร 66/96


    <div class="alert alert-success">
    <strong>Success!</strong> Indicates a successful or positive action. <br>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button> 
    <div class="card bg-danger text-white">
    <div class="card-body">ยินดีต้อนรับ</div>
  </div>
<br>
<br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="pic1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">กิตตินันท์ จิระราชวโร</h4>
    <p class="card-text">กิตตินันท์ไงหนู ไม่คุ้นหูเลยหรอ</p>
    <a href="https://www.youtube.com/" class="btn btn-primary">See Profile</a>
  </div>
</div>


<br><br><br>
<button type="button" class="btn btn-outline-primary"
id="alert">ทดสอบ sweetalert</button>
ิ<br><br><br>
<button type="button" class="btn btn-outline-primary"
id="alert2">ทดสอบ sweetalert2</button>
<br><br><br>
<button type="button" class="btn btn-outline-primary"
id="alert3">รักนะจุ๊บๆ</button>
<br><br><br>



</div>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- sweet alert2-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
      
            $('#alert2').click(function() {
                Swal.fire(
                    'แล้วไงล่ะ',
                    'You clicked the button!',
                    'success'
                );
            });

            $('#alert3').click(function() {
                Swal.fire(
                    'อย่าเอ๋อ',
                    'You clicked the button!',
                    'success'
                );
            });
  
    </script>




</html>






