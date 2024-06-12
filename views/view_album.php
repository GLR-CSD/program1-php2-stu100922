
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>album lijst</title>
    <link rel="stylesheet" href="public/css/simple.css">
</head>
<body>
<h1>album lijst</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Artiesten</th>
        <th>Releas datum</th>
        <th>URL</th>
        <th>Afbeelding</th>
        <th>Prijs</th>
    </tr>
    <?php foreach ($Album as $Album): ?>
        <tr>
            <td><?= $Album->getId() ?></td>
            <td><?= $Album->getNaam() ?></td>
            <td><?= $Album->getArtiest() ?></td>
            <td><?= $Album->getReleaseDatum() ?></td>
            <td><a href=" <?= $Album->getUrl() ?>">clik hier</a> </td>
            <td><img src="../media><?= $Album->getAfbeelding() ?>"></td>
            <td><?= $Album->getPrijs() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="notice">
    <h2>Album Toevoegen:</h2>
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="toevoegen.php" method="post">
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" value="<?= $formValues['voornaam'] ?? '' ?>" required>
        <?php if (isset($errors['voornaam'])): ?>
            <span style="color: red;"><?= $errors['voornaam'] ?></span>
        <?php endif; ?><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" value="<?= $formValues['achternaam'] ?? '' ?>"  required>
        <?php if (isset($errors['achternaam'])): ?>
            <span style="color: red;"><?= $errors['achternaam'] ?></span>
        <?php endif; ?><br>

        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="text" id="telefoonnummer" name="telefoonnummer" value="<?= $formValues['telefoonnummer'] ?? '' ?>">
        <?php if (isset($errors['telefoonnummer'])): ?>
            <span style="color: red;"><?= $errors['telefoonnummer'] ?></span>
        <?php endif; ?><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $formValues['email'] ?? '' ?>">
        <?php if (isset($errors['email'])): ?>
            <span style="color: red;"><?= $errors['email'] ?></span>
        <?php endif; ?><br>

        <label for="opmerkingen">Opmerkingen:</label><br>
        <textarea id="opmerkingen" name="opmerkingen" rows="4" cols="50">
            <?= $formValues['opmerkingen'] ?? '' ?>
        </textarea><br>
        <input type="submit" value="Toevoegen">
    </form>
</div>

</body>
</html>
