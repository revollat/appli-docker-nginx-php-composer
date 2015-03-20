<!-- example.com/src/pages/hello.php -->
<?php
use Symfony\Component\Routing;
$generator = new Routing\Generator\UrlGenerator($routes, $context);
?>

Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
<br><br>
<a href="<?php echo $generator->generate('hello', array('name' => 'LP-IMASH'));?>">Hello lpimash</a>