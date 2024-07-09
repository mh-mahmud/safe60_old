<?php include(APPPATH."views/admin/common/header.php"); ?>


    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        
        <!-- top-nav -->
        <?php include(APPPATH."views/admin/common/top_nav.php"); ?>

        <div class="clearfix"></div>


        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            <?php include(APPPATH."views/admin/common/sidebar.php"); ?>


            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- FLASH MESSAGE -->
                    <?php include(APPPATH."views/admin/common/flash.php"); ?>

                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Add Questions</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                
                                <div class="portlet-title">
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn sbold red" href="<?php echo base_url('manage_questions/'.$match_id); ?>">
                                                <i class="fa fa-arrow-left"></i>
                                                Go Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="panel panel-default" style="padding:15px;text-align:center;background-color:#4B5765;color:#fff">
                                                    <span class="caption-subject bold uppercase">
                                                        Match Name: 
                                                    </span>
                                                    <span class="caption-subject ">
                                                        <?= $match_name->title; ?> =&gt; <?= $match_name->league_title; ?>
                                                    </span>
                                                </div>

                                            </div>
                                            
                                        </div>
                                    </div>



                                    <?php $i=1; foreach($new_questions as $val) : ?>

                                    <div class="panel panel-success">
                                    <div class="panel-heading">
                                        &nbsp;
                                    </div>
                                    <div class="panel-body">

                                        <form method="POST" action="<?php echo base_url('admin/create_match_option_static'); ?>">
                                            <input type="hidden" name="match_option_id" value="<?php echo $match_id; ?>">
                                            <div class="form-group">
                                                <span><b><?= $i; ?>. Question</b></span>:
                                                <br><br>
                                                <input type="text" name="match_option_name" class="form-control" value="<?php echo $val->question_title ?>">
                                            </div>

                                            <div class="form-group">
                                                <span><b>Capital</b></span>:
                                                <input type="text" name="capital" class="form-control" value="0">
                                            </div>

                                            <?php if( $val->answer_type == 'TEAM_NAME' ) { ?>

                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_1); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_2); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } else if( $val->answer_type == 'TEAM_NAME_WITH_DRAW' ) { ?>

                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_1); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_2); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="Draw" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } else if( $val->answer_type == 'TEAM_NAME_WITH_TIE' ) { ?>

                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_1); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_2); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="Tie" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } else if( $val->answer_type == 'TEAM_NAME_WITH_NOGOAL' ) { ?>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_1); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_2); ?>" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                          <input name="first_option_title[]" type="text" class="form-control" value="No Goal" required>
                                                      </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <div class="form-group has-success">
                                                          <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                          <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            } else if( $val->answer_type == 'CUSTOM' ) {
                                                $get_data = $this->db->query("SELECT * FROM bet_answers WHERE question_id='{$val->id}'")->result();
                                            ?>

                                              <?php foreach( $get_data as $val ) : ?>
                                                <div>
                                                  <div class="row">
                                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group has-success">
                                                            <label for="first_option_title" class="control-label mb-1">Answer</label>
                                                            <input name="first_option_title[]" type="text" class="form-control" value="<?php echo $val->answer; ?>" required>
                                                        </div>
                                                      </div>

                                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group has-success">
                                                            <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                                            <input autocomplete="off" name="first_option_coin[]" type="text" class="form-control" required>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                              <?php endforeach; ?>

                                            <?php } ?>

                                            <input class="btn btn-info" type="submit" name="submit" value="Submit">

                                        </form>

                                    </div>
                                    </div>
                                    <?php $i++; endforeach; ?>




                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            

        </div>
        <!-- END CONTAINER -->


        <!-- question modal -->
        <div id="createQuestionModal" class="modal fade" tabindex="-1" data-width="400">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Create Match Question</h4>
                    </div>
                    <div class="modal-body" style="padding:20px !important;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="<?php echo base_url('admin/create_match_option_static'); ?>" method="post">
                                    <input type="hidden" name="match_option_id" value="<?php echo $match_id; ?>">

                                  <div class="row">

                                    <div class="col-md-12 col-xs-12">

                                        <div class="form-group has-success">
                                            <label for="match_option_name" class="control-label mb-1">Question</label>
                                            <select id="match_option_name" name="match_option_name" class="form-control" required>
                                                <option value="">--- select ---</option>
                                                <?php $j=1; foreach($questions as $val) : ?>
                                                    <option data-answer-type="<?php echo $val->answer_type; ?>" data-id="<?php echo $val->id; ?>" value="<?php echo $val->question_title; ?>"><?php echo $j .'. '. $val->question_title; ?></option>
                                                <?php $j++; endforeach; ?>
                                            </select>
                                        </div>

                                    </div>

                                    

                                    <!-- <div class="col-md-1 col-xs-2">
                                      <div class="form-group">
                                        <a id="add" style="color:#fff;margin-top:25px;" class="btn btn-success"> <i class="fa fa-plus"></i> </a>
                                      </div>
                                    </div>
                                    <div class="col-md-1 col-xs-2">
                                      <div class="form-group">
                                        <a id="minus" style="color:#fff;margin-top:25px;" class="btn btn-danger"> <i class="fa fa-minus"></i> </a>
                                      </div>
                                    </div> -->

                                  </div>

                                    <!-- <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <div class="form-group has-success">
                                              <label for="first_option_title" class="control-label mb-1">Answer</label>
                                              <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_1); ?>" required>
                                          </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <div class="form-group has-success">
                                              <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                              <input name="first_option_coin[]" type="text" class="form-control" required>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <div class="form-group has-success">
                                              <label for="first_option_title" class="control-label mb-1">Answer</label>
                                              <input name="first_option_title[]" type="text" class="form-control" value="<?php echo ucwords($title_2); ?>" required>
                                          </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <div class="form-group has-success">
                                              <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                              <input name="first_option_coin[]" type="text" class="form-control" required>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row option-data" style="display:none">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <div class="form-group has-success">
                                              <label for="first_option_title" class="control-label mb-1">Answer</label>
                                              <input name="first_option_title[]" type="text" class="form-control">
                                          </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                          <div class="form-group has-success">
                                              <label for="first_option_coin" class="control-label mb-1">Coin</label>
                                              <input name="first_option_coin[]" type="text" class="form-control">
                                          </div>
                                        </div>
                                    </div> -->

                                    <div class="add-options"></div>

                                    <div>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-sm btn-info btn-block">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- chnage answer modal -->
        <div id="editAnswerModal" class="modal fade" tabindex="-1" data-width="400">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit Answer</h4>
                    </div>
                    <div class="modal-body" style="padding:20px !important;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="<?php echo base_url('admin/edit_option_title'); ?>" method="post">
                                    <input id="hidden_option_title" type="hidden" name="hidden_option_title">
                                    
                                    <div class="form-group has-success">
                                        <label for="option_title" class="control-label mb-1">Answer</label>
                                        <input id="option_title" name="option_title" type="text" class="form-control" required>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="option_coin" class="control-label mb-1">Coin</label>
                                        <input id="option_coin" name="option_coin" type="text" class="form-control" required>
                                    </div>
                                    
                                    <div>
                                        <input class="btn btn-sm btn-info btn-block" type="submit" name="submit" value="Submit">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit question modal -->
        <div id="editQuestionModal" class="modal fade" tabindex="-1" data-width="400">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit Match Question</h4>
                    </div>
                    <div class="modal-body" style="padding:20px !important;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="<?php echo base_url('admin/edit_match_bet_name'); ?>" method="post">
                                    <input id="hidden_match_bet_id" type="hidden" name="hidden_match_bet_id">
                                    
                                    <div class="form-group has-success">
                                        <label for="match_option_title" class="control-label mb-1">Match Question</label>
                                        <input id="match_option_title" name="match_option_title" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="match_option_title" class="control-label mb-1">Match Status</label>
                                        <select id="bet_status" class="form-control" name="bet_status" required="">
                                            <option value="">-- select --</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <input class="btn btn-sm btn-info btn-block" type="submit" name="submit" value="Submit">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>

<?php include(APPPATH."views/admin/common/footer.php"); ?>
<script>

    $("#add").on("click", function() {
        $('.option-data:first').clone().show().addClass('option-data-new').appendTo('.add-options');
    });
    $("#minus").on("click", function() {
        // $('.option-data:last').remove();
        $('.option-data-new:last').remove();
    });

    $('.btn-go-back').click(function() {
        history.go(-1);
        return false;
    });

    $('.option-modal').on('click', function() {
        var data_id = $(this).attr('data-id');
        var data_value = $(this).attr('data-title');
        var data_coin = $(this).attr('data-value');
        // var data_option_serial = $(this).attr('data-option_serial');
        $('#hidden_option_title').attr('value', data_id);
        $('#option_title').attr('value', data_value);
        // $('#option_serial').attr('value', data_option_serial);
        $('#option_coin').attr('value', data_coin);
    });

    $('.bet-edit-modal').on('click', function() {
        var data_id = $(this).attr('data-id');
        var data_status = $(this).attr('data-status');
        var data_bettitle = $(this).attr('data-bettitle');
        var data_match_option_serial = $(this).attr('data-match_option_serial');
        $('#hidden_match_bet_id').attr('value', data_id);
        $('#match_option_title').attr('value', data_bettitle);
        $("#bet_status").val(data_status);
        // $('#match_option_serial').attr('value', data_match_option_serial);
    });

    $("#match_option_name").on("change", function() {
        var question_id = $('option:selected',this).data("id");
        var answer_type = $('option:selected',this).data("answer-type");
        var match_title = "<?php echo $match_title ?>";
        var url_prefix = "<?php echo base_url(); ?>";

        // ajax request
        $.ajax({
            type: "POST",
            url: url_prefix + 'admin/get_answer_data',
            data: {
                question_id: question_id,
                match_title: match_title,
                answer_type: answer_type
            },
            dataType: 'json',
            success: function(data) {
                    // console.log(data);
                if(data.error==0) {
                    $(".add-options").html(data.get_data);
                }
                else if(data.error==1) {
                   console.log("failed!"); 
                }
            },
            error:function(exception){
                console.log(exception);
            }
        });

    });

</script>