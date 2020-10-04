<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; ?>

	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Contact With Us</h2>
						<p>Please contact for any kind of informationn</p>
					</div>
				<div class="col-md-12">
					<div class="box-content">
						<?php if(isset($_GET['message'])){ 
								if($_GET['message'] == 2){
							?><div class="alert alert-danger" role="alert"> <?php echo "Failed to Register"; ?> </div>
							<?php } } ?>
						<form class="logregform" method="post" action="contactprocess.php">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Name</label>
										<input type="name" name="name" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Email</label>
										<input type="email" name="email" value="" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="clearfix space20"></div>
                            <div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Message</label>
                                        <!-- <input type="message" name="message" value="" class="form-control"> -->
                                        <textarea class="form-control" name="message" cols="10"> </textarea>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="space20"></div>
									<button type="submit" class="button btn-md pull-right">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>      
		</div>
	</div>
</div>
</div>
</section>
	
<?php include 'inc/footer.php' ?>
