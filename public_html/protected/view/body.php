<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Визитка</title>
    <?php include 'protected/php/includeStyles.php' ?>
</head>
<body>
    <?php include 'header.php' ?>
    <section class="flex">
        <main>
            <?php include 'aboutMe.php' ?>
            <?php include 'myProjects.php' ?>
            <?php include 'experience.php' ?>
            <?php include 'github.php' ?>
        </main>
        <aside>
            <?php include 'address.php' ?>
            <?php include 'skills.php' ?>
            <?php include 'education.php' ?>
            <?php include 'languages.php' ?>
            <?php include 'certificates.php' ?>
            <?php include 'interests.php' ?>
            <?php include 'credits.php' ?>
        </aside>
    </section>
</body>
<footer>
    <?php include 'protected/php/includeScriptsPost.php' ?>
</footer>
</html>