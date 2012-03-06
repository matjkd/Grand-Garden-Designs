<?= form_open_multipart("admin/submit_content") ?> 

<p>
    Title:<br/>
    <?= form_input('title', set_value('title')) ?>
</p>

<p>
    Menu link:<br/>
    <?= form_input('menu', set_value('menu')) ?>
</p>

<p>
Added By:<br/>
 <?= form_input('added_by') ?>
</p>



<p>
Date: <br/>
<input type="text" name="date_added" id="datepicker" value=""><br/>
</p>
<?php if (!isset($category)) {
    $category = "";
} ?>

<p>
Category:<br/>
<input type="text" name="category" id="datepicker" value="<?= set_value('category', $category) ?>"  disable="disabled" onFocus="this.blur();"><br/>
</p>

<p class="Image">
    <?= form_label('Image') ?><br/>

    <?= form_upload('file') ?>
</p>
<p>
Content:<br/>
<textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'></textarea>

</p>
<input type="submit" name="upload" class="wymupdate" />

<?= form_close() ?> 
