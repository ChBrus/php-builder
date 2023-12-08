<?php if (isset($_POST['webpage-styles'])): ?>
    <head>
        <?= $_POST['webpage-styles']['header'] ?>
        <title>¡Alerta!</title>
    </head>
    <body>
<?php endif; ?>
<div class="alert alert-danger query-msg" role="alert">
    <?php if (isset($_POST['header'])): ?>
        <h4 class="alert-heading">
            <?= $_POST['header'] ?>
        </h4>
        <hr>
    <?php endif; ?>
    <p class="description">
        <?= $_POST['msg'] ?>
    </p>
    <?php if (isset($_POST['icon'])): ?>
        <button type="button" class="btn btn-outline-danger w-100" id="query-msg-btn-icon" location="<?= $_POST['location'] ?>">
            <?= $_POST['icon'] ?>
            <span class="btn-description">Confirmar</span>
        </button>
    <?php endif; ?>
</div>
<?php if (isset($_POST['webpage-styles'])): ?>
        <?= $_POST['webpage-styles']['script'] ?>
    </body>
<?php endif; ?>