<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Add New Contacts</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="contacts-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("contacts/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="name">Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <textarea placeholder="Enter Name" id="ctrl-name"  required="" rows="5" name="name" class=" form-control"><?php  echo $this->set_field_value('name',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <textarea placeholder="Enter Email" id="ctrl-email"  required="" rows="5" name="email" class=" form-control"><?php  echo $this->set_field_value('email',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="phone">Phone <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <textarea placeholder="Enter Phone" id="ctrl-phone"  required="" rows="5" name="phone" class=" form-control"><?php  echo $this->set_field_value('phone',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="subject">Subject <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <textarea placeholder="Enter Subject" id="ctrl-subject"  required="" rows="5" name="subject" class=" form-control"><?php  echo $this->set_field_value('subject',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="message">Message <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <textarea placeholder="Enter Message" id="ctrl-message"  required="" rows="5" name="message" class=" form-control"><?php  echo $this->set_field_value('message',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="submit_date">Submit Date <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <textarea placeholder="Enter Submit Date" id="ctrl-submit_date"  required="" rows="5" name="submit_date" class=" form-control"><?php  echo $this->set_field_value('submit_date',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <div class="form-ajax-status"></div>
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
