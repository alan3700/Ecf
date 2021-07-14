<?php $page='Contact'; ?>
<?php include('parts/header.php'); ?>
    <main>
        <section class="contact">
            <h1>Nous contacter</h1>
            <form action="page-de-traitement" method="post">
                <div class="container grid-contact">
                    <div class="nom">
                        <label style='display:block;' class="label" for="pseudo">Votre nom</label>
                        <input type="text" id="pseudo" placeholder="Entrez votre nom">  
                    </div>
                    <div class="e-mail">
                        <label style='display:block;' class="label" for="pseudo">Votre e-mail</label>
                        <input type="text" id="pseudo" placeholder="Entrez votre e-mail">  
                    </div>
                    <div class="text-area">
                        <label style='display:block;' class="label" for="msg"> Votre Message </label>
                        <textarea minlength="1" maxlength="256" id="msg" placeholder="Tapez votre message"></textarea>
                    </div>
                    <div class="btn-container">
                    <button class="btn-submit" type="submit" form="form" value="Submit">Envoyer<img src="img/Icon feather-arrow-right-circle.svg">
                </button>
                </div>
                </div>
            </form>
        </section>
    </main>
<?php include('parts/footer.php'); ?>