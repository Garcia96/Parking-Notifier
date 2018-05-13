<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
</head>
<body>
    <div id="container">
        <main>
            <?= $this->fetch('content') ?>
        </main>
    </div>
</body>
</html>