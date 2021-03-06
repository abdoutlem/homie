<form id="customForm" method="post" action="index.php?p=home&d=sensor">
    <fieldset class="checkboxSection">
        <legend>capteurs</legend>
    <?php
    for($i = 0; $i<count($sensorList); $i++){
        ?>
        <label class="button"><p><?php echo $sensorList[$i]; ?></p><input type="checkbox" name="sensor[<?php echo $sensorList[$i]; ?>]"
            <?php echo $sensorCheck[$i]; ?>>
            <span class="checkbox"></span>
        </label>
<?php
}
    ?>
    </fieldset>
    <fieldset class="checkboxSection">
        <legend>actionneurs</legend>
        <?php
        for($i = 0; $i<count($actuatorList); $i++){
            ?><div>
            <label class="button"><?php echo $actuatorList[$i]; ?><input type="checkbox" name="actuator[<?php echo $actuatorList[$i]; ?>]"
                    <?php echo $actuatorCheck[$i]; ?>>
                <span class="checkbox"></span>
            </label>
            </div>
            <?php
        }
        ?>

    </fieldset>
    <fieldset id="textfield">
        <legend>caracteristique</legend>
        <label>
            Nom de la pièce : <br/>
            <input name="name" class="inputText" type="text" value=<?php echo $roomName; ?> required>
        </label>
        <br/>
        <label>
            Type de pièce : <br/>
            <input name="type" class="inputText" type="text" value=<?php echo $roomType; ?> required>
        </label>
        <br/>
        <label>
            Taille de la pièce (en m²) : <br/>
            <input name="size" type="text" value=<?php echo $roomSize; ?> required>
        </label>
    </fieldset>
    <section>
    <input class="lastButton" id="reset" type="reset" value="réinitialiser">
    <input class="lastButton" id="submit" type="submit" value="enregistrer">
    <input class="lastButton" id="delete" type="button" value="supprimer" onclick="this.form.submit()">
    <input id="hiddenDelete" type="text" value="   ">
    </section>
</form>
