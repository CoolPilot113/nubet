<!DOCTYPE html>
<html>
<head>
    <title><?php echo e($subject); ?></title>
</head>
<body>
<h1>Olá, <?php echo e($name); ?></h1>

<p><?php echo e($subject); ?></p>

Você soliciou a troca de senha, clique ao link para que você possa gerar uma nova senha para sua conta. <br>
<a href="<?php echo e($extra['link']); ?>">Alterar Senha</a> agora.<br><br>

Se o link acima não funcionar, copie este. <br>
<b><?php echo e($extra['link']); ?></b>

<br><br>
<font color="#8b0000">Você não fez este pedido para redefinir a senha da sua conta? Apenas desconside, sua conta continua segura!</font>

<p>Obrigado.</p>
</body>
</html>

<?php /* /var/www/html/resources/views/emails/ForgotPasswordMail.blade.php */ ?>