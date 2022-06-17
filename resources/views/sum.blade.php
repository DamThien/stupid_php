<div style="margin:0 auto; display:flex; justify-content:center">
    <form action="" method="post">
        @csrf
        <div><input type="number" name="number1" id="" placeholder="Số thứ nhất"></div>
        <div><input type="number" name="number2" id="" placeholder="Số thứ hai"></div>
        <div><input type="number" name="sum" id="" readonly placeholder="Tổng" value="<?php if(isset($sumab)) echo $sumab ?>"></div>
        <button type="submit">Tính</button>
    </form>
</div>