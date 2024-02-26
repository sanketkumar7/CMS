<?php if($co){?>
    <form action="" method="post" id='co_mapping_mark_form' onsubmit="event.preventDefault();">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="row text-danger fw-bold fs-4">
                        1.Mid-Semester Test-1(max.Marks <?= $co_default['max_marks_mid_sem_test_1'] ?>)
                    </div>
                    <div class="row">
                        <div class="col-8 gx-0">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Outcome</th>
                                        <th>Max.Marks(Out of <?= $co_default['max_marks_mid_sem_test_1'] ?>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter=0;
                                    foreach($co as $row){ ;?>
                                        
                                        <?php if($row['mid_sem_test_1']){ ?>
                                        <tr>
                                            <td><?=++$counter;?></td>
                                            <td><?=$row['unit']?></td>
                                            <td><input type="text" min=1 max="<?= $co_default['max_marks_mid_sem_test_1']?>"  name=<?=$row['unit']."_mid_sem_test_1"?> class="form-control" required></td>
                                        </tr>
                                        <?php } 
                                            }?>   
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row text-danger fw-bold fs-4">
                        2.Quiz(max.Marks <?= $co_default['max_marks_quiz'] ?>)
                    </div>
                    <div class="row">
                        <div class="col-8 gx-0">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Outcome</th>
                                        <th>Max.Marks(Out of <?= $co_default['max_marks_quiz'] ?>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=0;
                                    foreach($co as $row){ ;?>
                                        
                                        <?php if($row['quiz']){ ?>
                                        <tr>
                                            <td><?=++$counter;?></td>
                                            <td><?=$row['unit']?></td>
                                            <td><input type="text" min=1 max="<?= $co_default['max_marks_quiz']?>" name=<?=$row['unit']."_quiz"?> class="form-control" required></td>
                                        </tr>
                                        <?php } 
                                            }?>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row text-danger fw-bold fs-4">
                        3.Surprise Test(max.Marks <?= $co_default['max_marks_surprise_test'] ?>)
                    </div>
                    <div class="row">
                        <div class="col-8 gx-0">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Outcome</th>
                                        <th>Max.Marks(Out of <?= $co_default['max_marks_surprise_test'] ?>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $counter=0;
                                    foreach($co as $row){ ;?>
                                        
                                        <?php if($row['surprise_test']){ ?>
                                        <tr>
                                            <td><?=++$counter;?></td>
                                            <td><?=$row['unit']?></td>
                                            <td><input type="text" min=1 max="<?= $co_default['max_marks_surprise_test']?>" name=<?=$row['unit']."_surprise_test"?> class="form-control" required></td>
                                        </tr>
                                        <?php } 
                                            }?>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row text-danger fw-bold fs-4">
                        4.External Theory(max.Marks <?= $co_default['max_marks_external_theory'] ?>)
                    </div>
                    <div class="row">
                        <div class="col-8 gx-0">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Outcome</th>
                                        <th>Max.Marks(Out of <?= $co_default['max_marks_external_theory'] ?>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $counter=0;
                                    foreach($co as $row){ ;?>
                                        
                                        <?php if($row['external_theory']){ ?>
                                        <tr>
                                            <td><?=++$counter;?></td>
                                            <td><?=$row['unit']?></td>
                                            <td><input type="text" min=1 max="<?= $co_default['max_marks_external_theory']?>" name=<?=$row['unit']."_external_theory"?> class="form-control" required></td>
                                        </tr>
                                        <?php } 
                                            }?>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row text-danger fw-bold fs-4">
                        5.Mid-Semester Test-2(max.Marks <?= $co_default['max_marks_mid_sem_test_2'] ?>)
                    </div>
                    <div class="row">
                        <div class="col-8 gx-0">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Outcome</th>
                                        <th>Max.Marks(Out of <?= $co_default['max_marks_mid_sem_test_2'] ?>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $counter=0;
                                    foreach($co as $row){ ;?>
                                        
                                        <?php if($row['mid_sem_test_2']){ ?>
                                        <tr>
                                            <td><?=++$counter;?></td>
                                            <td><?=$row['unit']?></td>
                                            <td><input type="text" min=1 max="<?= $co_default['max_marks_mid_sem_test_2']?>" name=<?=$row['unit']."_mid_sem_test_2"?> class="form-control" required></td>
                                        </tr>
                                        <?php } 
                                            }?>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row text-danger fw-bold fs-4">
                        6.Assignment(max.Marks <?= $co_default['max_marks_assignment'] ?>)
                    </div>
                    <div class="row">
                        <div class="col-8 gx-0">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Course Outcome</th>
                                        <th>Max.Marks(Out of <?= $co_default['max_marks_assignment'] ?>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $counter=0;
                                    foreach($co as $row){ ;?>
                                        
                                        <?php if($row['assignment']){ ?>
                                        <tr>
                                            <td><?=++$counter;?></td>
                                            <td><?=$row['unit']?></td>
                                            <td><input type="text" min=1 max="<?= $co_default['max_marks_assignment']?>" name=<?=$row['unit']."_assignment"?> class="form-control" required></td>
                                        </tr>
                                        <?php } 
                                            }?>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        <div class="row g-0 ">
            <div class="col text-end">
                <?php if($mark_lock??''){?>
                    <div class="row">
                        <div class="col ms-auto mt-2">
                            <h5>LOCKED</h5>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger" onclick="alert('Cannot make changes anymore! Locked')">APPLY CHANGES</button>
                        </div>
                    </div>
                <?php }else { ?>
                    <div style="margin-top: -2%; margin-bottom: 1%;">
                    <button class="btn btn-danger" onclick="js_set_co_mapping_mark_lock()" >LOCK</button>
                    <button class="btn btn-danger ms-2" onclick="js_set_co_mapping_mark()">APPLY CHANGES</button>
                    </div>
                <?php }?>
            </div>
        </div>
    </form>
    <script>
    function js_set_co_mapping_mark(){
                var formData = $('#co_mapping_mark_form').serialize();
                $.ajax({
                    
                    url: "<?=base_url('index.php/sop/set_co_mapping_mark/') . $course_code ?>",
                            method: 'POST',
                            data:formData,
                            success: function(response) {
                                var parse_response=JSON.parse(response);
                                console.log(parse_response);
                                if(parse_response.updated){
                                    alert('Changes applied.');
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
<?php }?>
