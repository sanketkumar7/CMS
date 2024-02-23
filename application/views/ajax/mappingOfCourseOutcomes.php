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
        <div class="row gx-0" style="margin-top: -2%;">
            <table class="table table-bordered  border">
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
                    <?php for($i=1;$i<6;$i++){?>
                    <tr>
                        <td>CO<?=$i?></td>
                        <td><input type="checkbox" name="" id="" class="form-check-input" <?php if($lock??'') echo "disabled"?>></td>
                        <td><input type="checkbox" name="" id="" class="form-check-input" <?php if($lock??'') echo "disabled"?>></td>
                        <td><input type="checkbox" name="" id="" class="form-check-input" <?php if($lock??'') echo "disabled"?>></td>
                        <td><input type="checkbox" name="" id="" class="form-check-input" <?php if($lock??'') echo "disabled"?>></td>
                        <td><input type="checkbox" name="" id="" class="form-check-input" <?php if($lock??'') echo "disabled"?>></td>
                        <td><input type="checkbox" name="" id="" class="form-check-input" <?php if($lock??'') echo "disabled"?>></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
                <tfoot>
                    <tr></tr>
                </tfoot>
            </table>
            <div class="row g-0 my-3 ">
                <div class="col text-end">
                <button class="btn btn-danger">LOCK</button>
            <button class="btn btn-danger ms-2">APPLY CHANGES</button>
                </div>
            </div>
        </div>