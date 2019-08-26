<?php require_once('header.php') ?>

	<!-- start banner Area -->
    <section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contato				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="page_contato.php"> Contato</a></p>
						</div>	
					</div>
				</div>
			</section>
            <!-- End banner Area -->		
            

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
                        <div class="map-wrap" style="width:100%; height: 445px;" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7680.457296350456!2d-47.900114!3d-15.739039000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe418719f2419bca9!2sMinist%C3%A9rio+Semear!5e0!3m2!1spt-BR!2sbr!4v1566408976999!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-map-marker"></span>
								</div>
								<div class="contact-details">
									<h5>Brasília, Asa Norte</h5>
									<p>
                                        SCRN 716 Bloco B Loja 48
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>(61) 9 8245-3557</h5>
									<p>Pastor Mauro</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>contato@ministeriosemear.com.br</h5>
									<p>Envie-nos um email a qualquer momento!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
                        <h4 class="text-heading">Envie-nos uma mensagem</h4>
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Seu nome"  class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Seu e-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Assunto" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Mensagem"  required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right; background: #dd9819;">Enviar</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

<?php require_once('footer.php') ?>