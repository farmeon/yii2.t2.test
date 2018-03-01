
<option
    value="<?= $category['id']?>"
    <?php if($category['id'] == $this->model->user_id) echo ' selected'?>
    ><?= $tab . $category['username']?></option>
<?php if( isset($category['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab . '-')?>
    </ul>
<?php endif;?>