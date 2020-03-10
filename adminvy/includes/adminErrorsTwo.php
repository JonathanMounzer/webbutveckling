<?php if (count($errorsTwo) > 0) : ?>
  <div class="errorTwo">
  	<?php foreach ($errorsTwo as $errorTwo) : ?>
  	  <p><?php print $errorTwo ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>