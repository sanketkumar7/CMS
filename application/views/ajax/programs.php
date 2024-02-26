<div class="form-group">
    <label for="prog">Program:</label>
    <select class="form-control" name="programs" id="prog" onchange='select_courses_list(this.value)'>
        <option value="--">Select Program</option>
        <?php if($programs){
                foreach($programs as $code=>$name){ ?>
                <option value="<?=$code?>"><?=$name?></option>
        <?php } 
    } else{ ?>
        <option value="--">--</option>
    <?php } ?>
    </select>
</div>