 <?php if (!empty($messages)) : ?>
     <!-- // kaip cia ':' veikia? -->
     <?php foreach ($messages as $message) : ?>
         <div class="<?= $message['type'] ?>"><?= $message['msg'] ?></div>
     <?php endforeach ?>
 <?php endif ?>