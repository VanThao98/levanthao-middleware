<form action="getname" method="post">
    <div>
        <input type="text" name="getname" id="getname" placeholder="nhap ten tai đây">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    </div>
    <button type="submit">submit</button>
</form>

