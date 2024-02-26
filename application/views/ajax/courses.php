<div class="form-group">
    <label for="course">Course:</label>
    <select class="form-control" name="course" id="course">
    <option value="--">Select Course</option>
        <?php if($courses){
                foreach($courses as $code=>$name){ ?><option value="<?=$code?>"><?php echo "$code:$name"?></option>
        <?php } 
    }else{ ?>
        <option value="--">--</option>
    <?php } ?>
    </select>
</div>