<?php
$about = true;
require_once './templates/header.php';
?>
<div class="row" style="padding-left: 15px; padding-right: 15px; ">
  <div class="jumbotron" style="padding: 0px; margin-bottom: 15px">
    <img src="./images/system/burova_big.jpg" class="img-rounded img-responsive">
  </div>
  <div class="row">
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
  <form class="form-inline" action="./?random=true" method="post">
    <a href="#write_modal" data-toggle="modal" class="btn btn-lg btn-success btn-block"><?php echo _("Hello, world!") ?></a>
  </form>
  </div>
  </div>
  <div class="well" style="margin-top: 15px; margin-bottom: 0px">
    <p><?php echo _("TrashPad descriptions") ?></p><?php echo _("Away from the computer? Open TrashPad on the phone. It is fully optimized for smartphones.") ?>
  </div>
  <div class="col-lg-4">
    <h3><?php echo _("Simpleness")?></h3>
    <p><?php echo _("Simpleness description")?></p>
  </div>
  <div class="col-lg-4">
    <h3><?php echo _("Anonymity")?></h3>
    <p><?php echo _("Anonymity description")?></p>
  </div>
  <div class="col-lg-4">
    <h3><?php echo _("Fast")?></h3>
    <p><?php echo _("Speed description")?></p>
</div>
</div>
<?php
require_once './templates/footer.php';
?>