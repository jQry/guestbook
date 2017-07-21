<?php
	include_once(dirname(dirname(__FILE__)).'/helpers/common.php');

    $url = 'https://www.youtube.com/watch?v=fJoZtgZzOPU&index=12&list=PLDqNp_Q28_fHEb-rqK_qWJS_dOQ9O1Dmb';
    $width = '100%';
    $height = '200px';
	$src = getYoutubeEmbedUrl($url); // sample video in comment
?>

<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	    <title>Guest Book</title>
	    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	    <meta name="viewport" content="width=device-width" />

	    <!-- Bootstrap core CSS     -->
	    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	    <!--  Material Dashboard CSS    -->
	    <link href="../../assets/css/material-dashboard.css" rel="stylesheet" />
	    <!--  CSS for Demo Purpose, don't include it in your project     -->
	    <link href="../../assets/css/guestbook.css" rel="stylesheet" />
	    <link href="../../assets/css/common.css" rel="stylesheet" />
	    <!--     Fonts and icons     -->
	    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	</head>
	<body>
	    <div class="wrapper">
	        <div class="main-panel">
	            <div class="content">
	                <div class="container-fluid">
	                    <div class="row">
	                        <div class="col-md-8 col-md-offset-1">
	                            <h3 class="title text-center">Guest Book</h3>
	                            <br />
	                            <div class="nav-center">
	                                <ul class="nav nav-pills nav-pills-warning nav-pills-icons" role="tablist">
	                                    <!-- color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger" -->
	                                    <li>
	                                        <a href="#obituary" role="tab" data-toggle="tab">
	                                            <i class="material-icons">account_circle</i> Obituary
	                                        </a>
	                                    </li>
	                                    <li>
	                                        <a href="#service-details" role="tab" data-toggle="tab">
	                                            <i class="material-icons">info</i> Service Details
	                                        </a>
	                                    </li>
	                                    <li class="active">
	                                        <a href="#guest-book" role="tab" data-toggle="tab">
	                                            <i class="material-icons">book</i> Guest Book
	                                        </a>
	                                    </li>
	                                    <li>
	                                        <a href="#flowers-gifts" role="tab" data-toggle="tab">
	                                            <i class="material-icons">card_giftcard</i> Flowers + Gifts
	                                        </a>
	                                    </li>
	                                </ul>
	                            </div>

	                            <div class="tab-content">
	                                <div class="tab-pane" id="obituary">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h4 class="card-title">Obituary</h4>
	                                            <p class="category">
	                                                More information here
	                                            </p>
	                                        </div>
	                                        <div class="card-content">
	                                            Obituary Info
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="service-details">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h4 class="card-title">Service Details</h4>
	                                            <p class="category">
	                                                More information here
	                                            </p>
	                                        </div>
	                                        <div class="card-content">
	                                            Service Details Info
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="tab-pane active" id="guest-book">
	                                    <div class="card">
	                                        <div class="card-header">
			                                    <h4 class="card-title">Guest Book</h4>
			                                </div>
	                                        <div class="card-content">
	                                        	<div class="row">
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <label>Share a memory</label>
					                                        <div class="form-group label-floating">
					                                            <label class="control-label">Please use this space to share your remembrances and condolences</label>
					                                            <textarea class="form-control" rows="2" id="share_memory"></textarea>
					                                        </div>

					                                        <div class="form-group label-floating text-center hide loading"></div>

					                                        <div class="form-group label-floating video_preview hide">
					                                            <div class="col-md-6">
					                                            	<iframe id="video_preview" class="note-video-clip" frameborder="0" height="<?php echo $height; ?>" src="<?php echo $src; ?>" width="<?php echo $width; ?>"></iframe>
					                                            </div>
					                                            <div class="col-md-6">
																	<h5 id="video_preview_title"></h5>
																	<small id="video_preview_description"></small>
																</div>
					                                        </div>

					                                        <div class="form-group label-floating gesture-preview hide">
					                                            <div class="col-md-4 gesture">
					                                            	<img id="gesture_preview" src="">
					                                            </div>
					                                            <div class="col-md-8" id="share-message"></div>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>

					                            <div class="row">
					                                <div class="col-md-12">
					                                    <ul class="nav nav-pills nav-pills-rose">
					                                        <li class="active">
					                                            <a href="#upload-photo-video" data-toggle="tab">Upload Photo/Video</a>
					                                        </li>
					                                        <li>
					                                            <a href="#embed-video" data-toggle="tab">Embed Video</a>
					                                        </li>
					                                        <li>
					                                            <a href="#light-virtual-candle" data-toggle="tab">Light Virtual Candle</a>
					                                        </li>
					                                        <li>
					                                            <a href="#leave-virtual-gift" data-toggle="tab">Leave Virtual Gift</a>
					                                        </li>
					                                        <li>
					                                            <a href="#send-flowers" data-toggle="tab">Send Flowers</a>
					                                        </li>
					                                    </ul>
					                                    <div class="tab-content">
					                                        <div class="tab-pane active" id="upload-photo-video">
																<p>Upload Photo/Video</p>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                                        </div>
					                                        <div class="tab-pane" id="embed-video">
					                                        	<p>Embed Video</p>
					                                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                                        	<p>You can add any youtube video here.</p>
					                                        	<div class="col-md-12">
					                                                <div class="form-group label-floating">
					                                                    <label class="control-label">Paste Youtube Video</label>
					                                                    <input type="text" class="form-control" name="embed_video" id="embed_video" value="" />
					                                                </div>
					                                            </div>
					                                        </div>
					                                        <div class="tab-pane" id="light-virtual-candle">
					                                        	<p>Light Virtual Candle</p>
					                                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					                                        	<div id="candle-slider" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
															        <!-- Loading Screen -->
															        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('../../assets/img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
															        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-beige.png" data-candle="1" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-blue.png" data-candle="2" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-dove.png" data-candle="3" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-green-camo.png" data-candle="4" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-green.png" data-candle="5" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-heart.png" data-candle="6" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-henna.png" data-candle="7" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/candle-lilly.png" data-candle="8" />
															            </div>
															        </div>
															    </div>
					                                        </div>
					                                        <div class="tab-pane" id="leave-virtual-gift">
					                                        	<p>Leave Virtual Gift</p>
					                                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					                                        	<div id="gesture-slider" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
															        <!-- Loading Screen -->
															        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('../../assets/img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
															        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-prayer.png" data-gesture="1" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-veteran.png" data-gesture="2" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-dove.png" data-gesture="3" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-hug.png" data-gesture="4" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-angel.png" data-gesture="5" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-flag_usa.png" data-gesture="6" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-heart.png" data-gesture="7" />
															            </div>
															            <div>
															                <img class="cursor" data-u="image" src="https://s3.amazonaws.com/CFSV2/obituaries/gestures/gesture-rose.png" data-gesture="8" />
															            </div>
															        </div>
															    </div>
					                                        </div>
					                                        <div class="tab-pane" id="send-flowers">
					                                        	<p>Send Flowers</p>
					                                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					                                        </div>
					                                    </div>
					                                    <div class="row mt-20">
					                                    	<div class="col-md-12">
					                                    		<button class="btn btn-success btn-round pull-right">
							                                        <i class="material-icons">favorite</i> Share
							                                    </button>
					                                    	</div>
					                                    </div>
			                                		</div>
			                                	</div>
			                                </div>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="flowers-gifts">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h4 class="card-title">Flowers + Gifts</h4>
	                                            <p class="category">
	                                                More information here
	                                            </p>
	                                        </div>
	                                        <div class="card-content">
	                                            Flowers + Gifts Info
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="row">
			                        <div class="col-md-12">
			                            <ul class="timeline timeline-simple">
			                                <li class="timeline-inverted" id="comment1">
			                                    <div class="timeline-badge">
			                                        <div class="user">
									                    <div class="photo">
									                        <img src="../../assets/img/faces/card-profile1-square.jpg">
									                    </div>
									                </div>
			                                    </div>
			                                    <div class="timeline-panel">
			                                        <div class="timeline-heading">
			                                        	<div class="col-md-11">
			                                        		<span class="label label-danger">George Lucas</span>
			                                            	<small class="pl-10">1 hour ago</small>
			                                        	</div>
			                                        	<div class="col-md-1">
		                                        			<i class="material-icons text-danger text-right cursor" rel="tooltip" data-placement="bottom" title="Remove" data-remove-comment="1">close</i>
			                                        	</div>
			                                        </div>
			                                        <div class="timeline-body">
			                                        	<p>
				                                        	<center>
																<iframe class="note-video-clip" frameborder="0" height="<?php echo $height; ?>" src="<?php echo $src; ?>?rel=0&showinfo=0&color=white&iv_load_policy=3" width="<?php echo $width; ?>"></iframe>
															</center>
														</p>
			                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			                                        </div>
			                                        <div class="row">
			                                        	<div class="col-md-12">
					                                        <div class="col-md-1 col-sm-1 pull-right">
					                                            <button class="btn btn-just-icon btn-simple btn-twitter" rel="tooltip" data-placement="bottom" title="Tweet">
					                                                <i class="fa fa-twitter"></i>
					                                            </button>
					                                        </div>
					                                        <div class="col-md-1 col-sm-1 pull-right">
					                                            <button class="btn btn-just-icon btn-simple btn-facebook" rel="tooltip" data-placement="bottom" title="Share">
					                                                <i class="fa fa-facebook-square"> </i>
					                                            </button>
					                                        </div>
					                                        <div class="col-md-1 col-sm-1 pull-right" data-comment="1">
					                                            <button class="btn btn-just-icon btn-simple btn-facebook" rel="tooltip" data-placement="bottom" title="Comment">
					                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
					                                            </button>
					                                        </div>
			                                        	</div>
			                                        </div>

			                                        <div class="row hide comment1">
			                                            <div class="col-md-12">
			                                                <div class="form-group label-floating">
			                                                    <label class="control-label">Write a comment...</label>
			                                                    <input type="text" class="form-control">
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </li>
			                                <li class="timeline-inverted" id="comment2">
			                                    <div class="timeline-badge">
			                                        <div class="user">
									                    <div class="photo">
									                        <img src="../../assets/img/faces/marc.jpg">
									                    </div>
									                </div>
			                                    </div>
			                                    <div class="timeline-panel">
			                                        <div class="timeline-heading">
			                                        	<div class="col-md-11">
			                                        		<span class="label label-success">Tom Hanks</span>
			                                            	<small class="pl-10">3 hours ago</small>
			                                        	</div>
			                                            <div class="col-md-1">
		                                        			<i class="material-icons text-danger text-right cursor" rel="tooltip" data-placement="bottom" title="Remove" data-remove-comment="2">close</i>
			                                        	</div>
			                                        </div>
			                                        <div class="timeline-body">
			                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			                                        </div>
			                                        <div class="row">
			                                        	<div class="col-md-12">
					                                        <div class="col-md-1 col-sm-1 pull-right">
					                                            <button class="btn btn-just-icon btn-simple btn-twitter" rel="tooltip" data-placement="bottom" title="Tweet">
					                                                <i class="fa fa-twitter"></i>
					                                            </button>
					                                        </div>
					                                        <div class="col-md-1 col-sm-1 pull-right">
					                                            <button class="btn btn-just-icon btn-simple btn-facebook" rel="tooltip" data-placement="bottom" title="Share">
					                                                <i class="fa fa-facebook-square"> </i>
					                                            </button>
					                                        </div>
					                                        <div class="col-md-1 col-sm-1 pull-right" data-comment="2">
					                                            <button class="btn btn-just-icon btn-simple btn-facebook" rel="tooltip" data-placement="bottom" title="Comment">
					                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
					                                            </button>
					                                        </div>
			                                        	</div>
			                                        </div>
			                                        <div class="row hide comment2">
			                                            <div class="col-md-12">
			                                                <div class="form-group label-floating">
			                                                    <label class="control-label">Write a comment...</label>
			                                                    <input type="text" class="form-control">
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </li>
			                                <li class="timeline-inverted" id="comment3">
			                                    <div class="timeline-badge">
			                                        <div class="user">
									                    <div class="photo">
									                        <img src="../../assets/img/faces/avatar.jpg">
									                    </div>
									                </div>
			                                    </div>
			                                    <div class="timeline-panel">
			                                        <div class="timeline-heading">
			                                        	<div class="col-md-11">
				                                            <span class="label label-info">Meryl Streep</span>
				                                            <small class="pl-10">12 hours ago</small>
			                                            </div>
			                                            <div class="col-md-1">
		                                        			<i class="material-icons text-danger text-right cursor" rel="tooltip" data-placement="bottom" title="Remove" data-remove-comment="3">close</i>
			                                        	</div>
			                                        </div>
			                                        <div class="timeline-body">
			                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			                                        </div>
			                                        <div class="row">
			                                        	<div class="col-md-12">
					                                        <div class="col-md-1 col-sm-1 pull-right">
					                                            <button class="btn btn-just-icon btn-simple btn-twitter" rel="tooltip" data-placement="bottom" title="Tweet">
					                                                <i class="fa fa-twitter"></i>
					                                            </button>
					                                        </div>
					                                        <div class="col-md-1 col-sm-1 pull-right">
					                                            <button class="btn btn-just-icon btn-simple btn-facebook" rel="tooltip" data-placement="bottom" title="Share">
					                                                <i class="fa fa-facebook-square"> </i>
					                                            </button>
					                                        </div>
					                                        <div class="col-md-1 col-sm-1 pull-right" data-comment="3">
					                                            <button class="btn btn-just-icon btn-simple btn-facebook" rel="tooltip" data-placement="bottom" title="Comment">
					                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
					                                            </button>
					                                        </div>
			                                        	</div>
			                                        </div>
			                                        <div class="row hide comment3">
			                                            <div class="col-md-12">
			                                                <div class="form-group label-floating">
			                                                    <label class="control-label">Write a comment...</label>
			                                                    <input type="text" class="form-control">
			                                                </div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </li>
			                            </ul>
			                        </div>
			                    </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>
	<!--   Core JS Files   -->
	<script src="../../assets/js/plugins/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/jquery-ui.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/sweetalert2.js"></script>
	<script src="../../assets/js/plugins/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/material.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
	<script src="../../assets/js/plugins/jquery.tagsinput.js"></script>
	<script src="../../assets/js/plugins/material-dashboard.js"></script>
	<script src="../../assets/js/plugins/jssor.slider-25.2.0.min.js"></script>
	<script src="../../assets/js/guestbook/guestbook.js"></script>
	<script src="../../assets/js/guestbook/candle-slider.js"></script>
	<script src="../../assets/js/guestbook/gesture-slider.js"></script>
</html>