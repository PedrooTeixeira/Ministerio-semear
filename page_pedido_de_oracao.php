<?php require_once('header.php')?>

<!-- BANNER -->
<section class="relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">Pedido de Oração</h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="page_pedido_de_oracao.php">Pedido de Oração</a></p>
                 </div>	
        </div>
    </div>
</section>
            <section class="sample-text-area">
                    <div class="container">
                        <h3 class="text-heading">Deixe aqui seu pedido de oração</h3>
					 
                            <!-- Default form contact -->
                            <form class="text-center border border-light p-5" action="#!">

                            <!-- Name -->
                            <input type="text"  class="form-control mb-4" placeholder="Nome">

                            <!-- Email -->
                            <input type="email" " class="form-control mb-4" placeholder="E-mail">

                            <!-- Fone -->
                            <input type="text"  class="form-control mb-4" placeholder="Telefone">

                            <!-- Assunto -->
                            <input type="email"  class="form-control mb-4" placeholder="Causa">

                            <!-- Message -->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Mensagem"></textarea>
                            </div>

                            <!-- Send button -->
                            <button class="btn btn-info btn-block" type="submit" style="background:  #dd9819; border:none;">Enviar</button>

                            </form>
                            <!-- Default form contact -->

                    </div>
                </section>


<?php require_once('footer.php')?>