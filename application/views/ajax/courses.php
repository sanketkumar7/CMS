<div class="form-group">
    <label for="course">Choose a Course:</label>
    <select class="form-control" name="course" id="course">
    <option value="--">Select Course</option>
        <?php if($courses){
                foreach($courses as $code=>$course){ ?>
                <option value="<?=$code?>"><?=$code?>:<?=$course?></option>
        <?php } 
    }else{ ?>
        <option value="--">--</option>
    <?php } ?>
    </select>
</div>