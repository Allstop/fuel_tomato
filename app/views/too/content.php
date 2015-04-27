<div id='clock'>
    <span id="pad"></span>
    <div id="setTime">請輸入倒數時間，
        <input type="text" class="timeSet" onkeyup="return ValidateNumber(this,value)" value="25"/>分鐘
        </br></br><button id="set">送出</button></div>
    <div id="do">What did you do ?
        </br>
        <textarea type="text" class="description"></textarea>
        <button id="submit">送出</button></div>
</div>
<div class="welcome_user">Welcome <?php echo $username; ?></div>