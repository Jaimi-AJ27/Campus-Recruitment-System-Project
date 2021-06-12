
<?php
  session_start();
  
  require_once("connect.php");
  
  if(empty($_SESSION['Company'])) {
    header("Location:../../../index.html");
    exit();
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Company | Compose mail</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="./assets/css/pages/mailbox.css" rel="stylesheet" />
</head>
<?php

include 'header.php';
?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
               
                
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        
                        
                        
                        
                    </div>
                    <div class="col-lg-12 col-md-8">
                        <div class="ibox" id="mailbox-container">
                            <div class="mailbox-header d-flex justify-content-between">
                                <h5 class="inbox-title">Compose mail</h5>
                                <div class="inbox-toolbar m-l-20">
                                    <button class="btn btn-default btn-sm" data-action="reply" data-toggle="tooltip" data-original-title="Reply"><i class="fa fa-reply"></i></button>
                                    <button class="btn btn-default btn-sm" data-action="delete" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                                </div>
                            </div>
								

                            <div class="mailbox-body">
                                <form class="form-horizontal" method="POST" if="compose_form" action="mail.php">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">To:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="to" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Subject:</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="subject">
                                        </div>
                                    </div>
                                    <textarea id="summernote" name="message"  rows="5" cols="5">
                                        
                                    </textarea>
                                    <input class="btn btn-info m-t-20" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            <!-- END PAGE CONTENT-->
          
    <!-- BEGIN THEME CONFIG PANEL-->
   
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('.note-popover').css({
                'display': 'none'
            });
        })
    </script>
</body>

</html>