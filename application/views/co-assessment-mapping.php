<div class="page-wrapper" style="background: white;">
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card bg-dark">
                        <div class="card-body text-center">
                            <h5 class='text-light'>CO - Assessment Mapping</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="" onsubmit="event.preventDefault();">
    <div class="container ms-5 row">
        <div class="col-3">
            <div class="form-group">
                <label for="departments">Choose Institute/Department:</label>
                <select class="form-control" name="departments" id="departments" onchange="select_programs_list(this.value)">
                <option value="--">--</option>
                <?php foreach ($departments as $name=>$department) {?>
                        <option value="<?=$department['code']?>"><?=$department['name']?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="col-3" id='programs'>
            <div class="form-group">
                <label for="prog">Program:</label>
                <select class="form-control" name="program" id="prog" onchange='select_courses_list(this.value)'>
                    <option value="--">--</option>
                </select>
            </div>
        </div>
        <div class="col-3" id='courses'>
            <div class="form-group">
                <label for="course">Course:</label>
                <select class="form-control" name="course" id="course">
                    <?php if($courses){
                            foreach($courses as $code=>$course){ ?>
                            <option value="<?=$code?>"><?=$course?></option>
                    <?php } 
                }else{ ?>
                    <option value="--">--</option>
                <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-3 d-flex align-items-center mt-2">
            <div>
                <button class="btn btn-outline-danger" onclick='get_co_mapping()'>PROCEED</button>
                <button type="reset" class="btn btn-light" onclick='reset_first_field()'>RESET</button>
            </div>
        </div>
    </div>
    </form>
    <div class="container" id='co_mapping'>
        
    </div>
    <div class="container" id="co_mark_mapping">
        
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function select_programs_list(institute_name){
        $.post('<?=base_url("index.php/sop/select_programs_list")?>', {institute:institute_name }, function(response) {
            var jsonResponse = JSON.parse(response);
            if (jsonResponse.details_load){
                $('#programs').html(jsonResponse.programs_html);
            }
        });
    }

    function select_courses_list(program_name){
        $.post('<?=base_url("index.php/sop/select_courses_list")?>', {program:program_name }, function(response) {
            var jsonResponse = JSON.parse(response);
            if (jsonResponse.details_load){
                $('#courses').html(jsonResponse.courses_html);
            }
        });
    }

    function get_co_mapping(){
        var course_code=document.getElementById('course').value;
        if(course_code !='--'){
            $.post('<?=base_url("index.php/sop/get_co_mapping")?>', {course_code:course_code }, function(response) { 
                var jsonResponse = JSON.parse(response);
                if (jsonResponse.details_load){
                    $('#co_mapping').html(jsonResponse.co_html);
                    $('#co_mark_mapping').html(jsonResponse.co_mark_html);
                }
            });
        }
        else{
            alert('Please select the Course.');
        }
    }
    function reset_first_field(){
        $('#co_mapping').empty();
        $('#co_mark_mapping').empty();
        $('#programs').html(`<div class="form-group">
                <label for="prog">Program:</label>
                <select class="form-control" name="program" id="prog" onchange='select_courses_list(this.value)'>
                    <option value="--">--</option>
                </select>
            </div>`);
        $('#courses').html(`
            <div class="form-group">
                <label for="prog">Course:</label>
                <select class="form-control" name="program" id="prog" onchange='select_courses_list(this.value)'>
                    <option value="--">--</option>
                </select>
            </div>
        `);


    }
</script>
