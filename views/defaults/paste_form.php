<div class="row">
    <div class="container">
        <div class="col-xs-12">
            <div class="page-header">

                <h1><?php if(!isset($page['title'])){ ?>
                Create a new paste
                <?php } else { ?>
                    <?php echo $page['title']; ?>
                <?php } ?>

                </h1>
            </div>

        </div>
        <div class="col-xs-12">

            <? $validation_errors = validation_errors(); ?>
            <?
            if(isset($validation_errors) && $validation_errors != false){
            ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <?php echo validation_errors(); ?>
            </div>
            <?
            }
            ?>

            <form action="<?php echo base_url(); ?>" method="post" class="form-horizontal well">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-10">
                        <?php $set = array('name' => 'name', 'id' => 'name', 'class' => 'span3 form-control', 'value' => "fullname", 'maxlength' => '32', 'tabindex' => '1', 'readonly' => 'true');
                        echo form_input($set);?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                    <input value="<?php if(isset($title_set)){ echo $title_set; }?>" class="span3 form-control" type="text" id="title" name="title" tabindex="2" maxlength="32" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="lang" class="col-sm-2 control-label">Language</label>
                    <div class="col-sm-10">
                        <?php $lang_extra = 'id="lang" class="form-control select span3" tabindex="3"'; echo form_dropdown('lang', $languages, $lang_set, $lang_extra); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                                <?php
                                    $set = array('name' => 'private', 'id' => 'private', 'tabindex' => '6', 'value' => '1', 'checked' => $private_set);
                                            if ($this->config->item('private_only')){
                                                $set['checked'] = 1;
                                                $set['disabled'] = 'disabled';
                                                }
                                    echo form_checkbox($set);
                                ?>
                            <strong>Private?</strong> - private pastes aren't shown in recent listings.
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="expire" class="col-sm-2 control-label">When should we delete your paste?</label>
                    <div class="col-sm-10">
                        <div class="control-group">
                            <div class="controls">
                                <?php
                                $expire_extra = 'id="expire" class="form-control select" tabindex="7"';
                                $options = array(
                                                "0" => "Keep Forever",
                                                "30" => "30 Minutes",
                                                "60" => "1 hour",
                                                "360" => "6 Hours",
                                                "720" => "12 Hours",
                                                "1440" => "1 Day",
                                                "10080" => "1 Week",
                                                "40320" => "4 Weeks"
                                            );
                            echo form_dropdown('expire', $options, $expire_set, $expire_extra); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lang" class="col-xs-12 control-label">Paste your snippet here</label>
                    <div class="col-xs-12">
                        <div class="control-group">
                            <div class="controls">
                                <textarea id="code" class="form-control col-xs-12" name="code" rows="20" tabindex="4"><?php if(isset($paste_set)){ echo $paste_set; }?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($this->config->item('enable_captcha')){ ?>
                <div class="item_group">
                    <div class="item item_captcha">
                        <label for="captcha">Spam Protection
                            <span class="instruction">Type in the characters displayed in the picture.</span>
                        </label>
                            <img class="captcha" src="<?php echo site_url('view/captcha'); ?>?<?php echo date('U', time()); ?>" alt="captcha" width="110" height="40" />
                            <input value="<?php if(isset($captcha_set)){ echo $captcha_set; }?>" type="text" id="captcha" name="captcha" tabindex="2" maxlength="32" />
                    </div>
                </div>
            <?php } ?>
                <div class="form-actions">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-large btn-primary">
                        <i class="icon-pencil icon-white"></i>
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
