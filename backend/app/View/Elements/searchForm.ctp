<?php echo $this->Form->create('Post', array('url' => '/posts/index')) ?>

<fieldset>
	<legend>検索</legend>
	<dl>
		<dt><label>ID</label></dt>
		<dd><?php echo $this->Form->input('id', array('type' => 'numeric', 'div' => false, 'label' => false)) ?></dd>
		<dt><label>タイトル</label></dt>
		<dd><?php echo $this->Form->input('title', array('type' => 'string', 'div' => false, 'label' => false)) ?></dd>
	</dl>
	<?php echo $this->Form->submit('検索', array('div' => false, 'escape' => false)) ?>

</fieldset>

<?php echo $this->Form->end() ?>
