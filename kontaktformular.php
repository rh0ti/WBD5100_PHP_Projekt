
<!--------------------------------------------- BEREICH KONTAKTFORMULAR----------------------------------------------->

 <section id="third-page">
    <div class="row position-relative">
        <div class="col-xl-8 contact-left ">
            <img src="./img/header-1.jpg" class="img-fluid header-image" alt="Responsive image">
        </div>
        <div class="col-lg-4 contact-right d-flex align-items-center justify-content-center flex-column">
            <div>
                <h1>Kontaktformular</h1>
                <p>Hast du eine Frage? Dann schreib uns.</p>
            </div>
            <div class="contact-form">
<!--------------------------------------------- PHP ----------------------------------------------->
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class="error">Bitte alle Felder ausfüllen!</p>';
                    }
                    else if($_GET['error'] == "invaliduid&mail"){
                        echo '<p class="error">Bitte gib ein gültigen Email oder Namen ein!</p>';
                    }
                    else if($_GET['error'] == "success"){ 
                        echo '<p class="error">Deine Email wurde versendet!</p>';
                    }
                }       
            ?>
<!-------------------------------------------------------------------------------------------------->
            <form method="post" action="includes/kontaktformular_send_email.inc.php">
                <fieldset class="form-group">
                    <div class="form-check">
                        <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Herr" checked="">
                        Herr
                        </label>
                    </div>

                    <div class="form-check">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Frau">
                        Frau
                        </label>
                    </div>

                    <label for="Name"></label>
                    <input type="text" id="Name" class="form-control" name="Name" placeholder="Name" value="">

                    <label for="Email"></label>
                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter email">

                    <label for="exampleSelect1"></label>
                    <select class="form-control" id="exampleSelect1">
                        <option selected="">Bitte Land wählen</option>
                        <option value="1">Schweiz</option>
                        <option value="2">Frankreich</option>
                        <option value="3">Deutschland</option>
                        <option value="4">Italien</option> 
                    </select>

                    <label for="Betreff"><b></b></label><br>
                    <input type="text" class="form-control" id="Betreff" name="Betreff" placeholder="Betreff"><br><br>

                    <label for="Nachricht" class="text-white">Deine Nachricht</label>
                    <textarea class="form-control" id="Nachricht" name="Nachricht" rows="3"></textarea> <br>
                        
                    <div class="form-check">
                        <label class="form-check-label text-white">
                        <input class="form-check-input" type="checkbox" value="" checked="">
                        Newsletter
                        </label>
                        <br>
                        <br>
                        <fieldset>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </fieldset>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

