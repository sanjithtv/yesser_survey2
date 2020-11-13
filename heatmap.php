<?php
include 'header.php';

$survey_list = getSurveyList();
?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Survey List (For Heat map)</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Year</th>
                                    	<th>Month</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($survey_list as $key => $value) { ?>
                                        <tr>
                                        	<td><?php echo $key;?></td>
                                        	<td><?php echo $value['name'];?></td>
                                        	<td><?php echo $value['year'];?></td>
                                        	<td><?php echo getMonth($value['month']);?></td>
                                        	<td><button type="button" id="heatmap" onclick="heatmapJSON(<?php echo $key;?>)" class="btn btn-info btn-fill pull-center">Generate JSON</button></td>
                                        	<td><span id="stage">&nbsp;</span></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        
<?php
include 'footer.php';
?>
