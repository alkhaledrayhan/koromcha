<?php 	require_once('includes/head.php');
		require_once('config.php');
?>
<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
if(is_null($_SESSION["loggedin"])){
    header("location: login.php");
    exit;
}

try {
	// code
   
	// if something is not as expected
		// throw exception using the "throw" keyword
   
	// code, it won't be executed if the above exception is thrown
	$sql = "SELECT * FROM jobs WHERE jobId = ?";
	if($stmt = $mysqli->prepare($sql)){
		// Bind variables to the prepared statement as parameters
		$stmt->bind_param("i", $param_jobId);

		// Set parameters
		$param_jobId = $_GET['jobId'];
		if($stmt->execute()){
			
			$result 	= $stmt->get_result();
			$data 		= $result->fetch_assoc();
			$jobCategory	= $data['jobCategory'];
			$jobDeadline=$data['jobDeadline'];
			$jobAddress	=$data['jobAddress'];
			$jobSalary=$data['jobDeadline'];
			$jobExperience=$data['jobExperience'];
			$jobTitle=$data['jobTitle'];
			$jobDescription=$data['jobDescription'];
			$jobApplyProcess=$data['jobApplyProcess'];
			$jobRequirements=$data['jobRequirements'];
			$jobPostedBy=$data['jobPostedBy'];
		}
		
	}
  } catch (Exception $e) {
	// exception is raised and it'll be handled here
	// $e->getMessage() contains the error message
	header("location: index.php");
	exit;
  }
 




?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Detail</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Job Detail</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="images/blog/grid/pic1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Job Details</h4>
											<ul>
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Address</strong><span class="text-black-light"> <?php echo $jobAddress ?></span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salary</strong> <?php echo $jobSalary ?></li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Experience</strong><?php echo $jobExperience ?> Years</li>
												<li class="post-author"><i class="ti-user"></i><strong class="font-weight-700 text-black">Posted By </strong> <a href="#"><?php echo $jobPostedBy ?></a> </li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
						<div class="col-lg-8">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30"><?php echo $jobTitle ?></a>
								</h3>
								<ul class="job-info">
									<li><strong>Category	:</strong> <?php echo $jobCategory ?></li><br>
									<li><strong>Deadline	:</strong><?php echo $jobDeadline ?></li><br>
									<li><strong>Location	:</strong><i class="ti-location-pin text-black m-r5"></i> <?php echo $jobAddress ?> </li><br>
								</ul><br>
								<h5 class="font-weight-600">Job Description</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?php echo $jobDescription ?></p>
								<h5 class="font-weight-600">How to Apply</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p><?php echo $jobApplyProcess ?></p>
								<h5 class="font-weight-600">Job Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<ul class="list-num-count no-round">
									<li><?php echo $jobRequirements ?></li>

								</ul>
								<a href="#" class="site-button">Apply This Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Job Detail -->
			<!-- Our Jobs -->
			<div class="section-full content-inner">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
											<li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6">
							<div class="m-b30 blog-grid">
                                <div class="dez-post-media dez-img-effect "> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 border-1">
                                    <div class="dez-post-title ">
                                        <h5 class="post-title"><a href="#">Title of blog post</a></h5>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
											<li class="post-date"> <i class="ti-location-pin"></i> London </li>
                                            <li class="post-author"><i class="ti-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                         <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                    </div>
                                   <div class="dez-post-readmore"> 
										<a href="#" class="site-button outline">Apply Now <i class="ti-arrow-right"></i></a>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Jobs END -->
		</div>
    </div>
    <!-- Content END-->
<?php 	require_once('includes/foot.php');

?>