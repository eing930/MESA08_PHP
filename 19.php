<?php
    if($_REQUEST)
?>

<script>
    function chForm() {
        return true;

    }
</script>
<form action="20.php" method="get">

   <input name="account"><br>
   <input type="password" name="passwd"><br>
    <input type="radio" name="gender" value="M" checked>Male
    <input type="radio" name="gender" value="F">Female
    <br>
    <input type="checkbox" name="like[]" value="1">游泳
    <input type="checkbox" name="like[]" value="2">跑步
    <input type="checkbox" name="like[]" value="3">藍球<br>
    <input type="checkbox" name="like[]" value="4">羽球
    <input type="checkbox" name="like[]" value="5">網球
    <input type="checkbox" name="like[]" value="6">桌球<br>
    <select name="area">
        <option value ="401">北屯區</option>
        <option value ="402">西屯區</option>
        <option value ="403">南屯區</option>
        <option value ="404">中區</option>
    </select><br>
    <textarea name="memo" rows="10" cols=""40></textarea><br>
    <input type="file" name="upload"/>
    <br>
    <input type="submit" name="up" value="ok"/>
    <input type="submit" name="up" value="ok22"/>
</form>
<hr>
<form action="21.php" onsubmit="return chForm();" method="get">

    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="submit" value="ok"/>
</form>
<hr>
<form action="22.php">
    <input type="text" name="account" value="">
    <input type="text" name="account" value="">

</form>