<div class="page-wrapper">
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
    <div class="container ms-5 row">
        <div class="col-3">
            <div class="form-group">
                <label for="departments">Choose Institute/Department:</label>
                <select class="form-control" name="departments" id="departments" onchange="select_programs_list(this.value)">
                <option value="--">--</option>
                    <option value="engineering">Engineering</option>
                    <option value="computer_science">Computer Science</option>
                    <option value="biology">Biology</option>
                    <option value="business">Business</option>
                </select>
            </div>
        </div>
        <div class="col-3" id='programs'>
            <div class="form-group">
                <label for="prog">Program:</label>
                <select class="form-control" name="programs" id="prog" onchange='select_courses_list(this.value)'>
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
        <div class="col-3 d-flex align-items-center mt-4">
            <div class="form-group">
                <button class="btn btn-danger" onclick='get_co_mapping()'>PROCEED</button>
                <button class="btn btn-light ms-2">RESET</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-body" style="background:yellow;">
                        <ul class="fw-bold">
                            <li>Instructions for CO mapping with assessments:</li>
                        </ul>
                        <ul class="ms-3">
                            <li>- Assignment: should be mapped only to higher order COS</li>
                            <li>- Quiz/MCQ based test/Surprise test/any other limited-time tests: should be mapped with basic level COS</li>
                            <li>- MST's: should not be mapped with the highest order level.</li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <table class="table table-striped">
                <thead class='bg-dark'>
                    <tr>
                        <th class="text-light">CourseOutComeShortName</th>
                        <th class="text-light">Assignment</th>
                        <th class="text-light">Mid-Semester Test-1</th>
                        <th class="text-light">Quiz</th>
                        <th class="text-light">Surprise Test</th>
                        <th class="text-light">Mid-Semester Test-2</th>
                        <th class="text-light">External Theory</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
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
        var course=document.getElementById('course').value;
        if(course !='--'){
            // retrieve the co_mapping
        }
    }
</script>
