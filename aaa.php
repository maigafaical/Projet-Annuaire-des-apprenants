<div class="col-4">
                        <label class="text-danger" for="" required>Tuteur</label>

                        <?php              
              $bdd= new PDO('mysql:host=localhost;dbname=annuaire','root','');

              $reponse = $bdd->query('SELECT nom, prenom FROM tuteur');
            ?>
                        <select name="tuteur">
                            <option value="">Choisir...</option>
                            <?php while ($d = $reponse->fetch()) { ?>

                            <option><?= $d['nom'] ?> <?= $d['prenom'] ?></option>
                            <?php } ?>


                        
                        </select>
        </div>