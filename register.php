<?php 
include "menu.php";
include "header.php";
    
?>
<div class="container">
    <form action="registerP.php" method="POST">
        <h1 align="center"> สมัครสมาชิก </h1>
        <div>
            <label>Username:</label>
            <input type="text" class="form-control" name="username" >
        </div><br>
        <div>
            <label>Password:</label>
            <input type="password" class="form-control" name="password">
        </div><br>
        <hr>
        <div>
            <label>ชื่อ:</label>
            <input type="text" class="form-control" name="fname">
        </div><br>
        <div>
            <label>นามสกุล:</label>
            <input type="text" class="form-control" name="lname">
        </div><br>
        <div>
            <label>เบอร์โทรศัพท์:</label>
            <input type="text" class="form-control" name="tel">
        </div><br>
        <div>
            <label>email:</label>
            <input type="text" class="form-control" name="email">
        </div><br>
        <div>
            <label>วันเกิด:</label>
            <input type="date" class="form-control" name="birthday">
        </div><br>
        <button type="submit">ตกลง</button>
    </form>
</div><br>
<br>
<br>