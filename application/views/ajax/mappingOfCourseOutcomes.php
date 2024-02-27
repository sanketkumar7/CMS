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
        <div class="row gx-0" style="margin-top:-2%;">
            <form action="" method="post" id='co_mapping_form' onsubmit="event.preventDefault();">
                <table class="table table-bordered  border">
                    <caption class="caption fw-bold">
                    Click on Apply changes and then Lock option. Once it is locked, it is not editable.
                    </caption>
                    <thead class='table-dark'>
                        <tr>
                            <th>CourseOutComeShortName</th>
                            <th>Assignment</th>
                            <th>Mid-Semester Test-1</th>
                            <th>Quiz</th>
                            <th>Surprise Test</th>
                            <th>Mid-Semester Test-2</th>
                            <th>External Theory</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($co as $row){?>
                        <tr>
                            <td><?= $row['unit'] ?></td>
                            <td><input type="checkbox" name="<?= $row['unit'] ?>_assignment" id="" class="form-check-input" <?php if ($co_default['co_mapping_lock'] ?? '') echo "disabled" ?> <?= $row['assignment'] ? 'checked' : '' ?>></td>
                            <td><input type="checkbox" name="<?= $row['unit'] ?>_mid_sem_test_1" id="" class="form-check-input" <?php if ($co_default['co_mapping_lock'] ?? '') echo "disabled" ?> <?= $row['mid_sem_test_1'] ? 'checked' : '' ?>></td>
                            <td><input type="checkbox" name="<?= $row['unit'] ?>_quiz" id="" class="form-check-input" <?php if ($co_default['co_mapping_lock'] ?? '') echo "disabled" ?> <?= $row['quiz'] ? 'checked' : '' ?>></td>
                            <td><input type="checkbox" name="<?= $row['unit'] ?>_surprise_test" id="" class="form-check-input" <?php if ($co_default['co_mapping_lock'] ?? '') echo "disabled" ?> <?= $row['surprise_test'] ? 'checked' : '' ?>></td>
                            <td><input type="checkbox" name="<?= $row['unit'] ?>_mid_sem_test_2" id="" class="form-check-input" <?php if ($co_default['co_mapping_lock'] ?? '') echo "disabled" ?> <?= $row['mid_sem_test_2'] ? 'checked' : '' ?>></td>
                            <td><input type="checkbox" name="<?= $row['unit'] ?>_external_theory" id="" class="form-check-input" <?php if ($co_default['co_mapping_lock'] ?? '') echo "disabled" ?> <?= $row['external_theory'] ? 'checked' : '' ?>></td>
                        </tr>
                    <?php } ?>  
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                </table>
                <div class="row g-0 my-3 ">
                    <div class="col text-end">
                        <?php if($co_default['co_mapping_lock']??''){?>
                            <div class="row">
                                    <div class="col ms-auto mt-2">
                                        <h5>LOCKED</h5>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-danger" onclick="alert('Cannot make changes anymore! Locked')">APPLY CHANGES</button>
                                    </div>
                                </div>
                            </div>
                        <?php }else { ?>
                        <button class="btn btn-danger" onclick="js_set_co_mapping_lock()" >LOCK</button>
                        <button class="btn btn-danger ms-2" onclick="js_set_co_mapping()">APPLY CHANGES</button>
                        <?php }?>
                    </div>
                </div>
            </form>
        </div>
        <script>
            function js_set_co_mapping(){
                var formData = $('#co_mapping_form').serialize();
                $.ajax({
                    
                    url: "<?=base_url('index.php/sop/set_co_mapping/') . $course_code ?>",
                            method: 'POST',
                            data:formData,
                            success: function(response) {
                                var parse_response=JSON.parse(response);
                                console.log(parse_response);
                                if(parse_response.updated){
                                    alert('Changes applied.');
                                     $('#co_mark_mapping').html(parse_response.co_mark_html);
                                }else{
                                    alert('Error occur.');
                                }
                            },
                            error: function(xhr, textStatus, errorThrown) {
                            }
                        
                });
            }

            function js_set_co_mapping_lock(){
                $.ajax({
                    
                    url: "<?=base_url('index.php/sop/set_co_mapping_lock/') ?>",
                            method: 'POST',
                            data:{
                                course_code:"<?=$course_code?>"
                            },
                            success: function(response) {
                                var jsonResponse = JSON.parse(response);
                                if (jsonResponse.details_load){
                                    alert('Course Outcomes Locked.')
                                    $('#co_mapping').html(jsonResponse.co_html);
                                    $('#co_mark_mapping').html(jsonResponse.co_mark_html);
                                }else{
                                    alert('Error occur.');
                                }
                            },
                            error: function(xhr, textStatus, errorThrown) {
                            }
                        
                });
            }
        </script>