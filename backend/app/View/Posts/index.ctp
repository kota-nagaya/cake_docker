<!-- File: /app/View/Posts/index.ctp -->
<?php
// 実際はユーザーテーブルに紐ついているdaxtraのテーブル
// フォルダ内のjsonファイルを取得
$dir = new Folder(WWW_ROOT . 'files/json');
debug($files = $dir->find('.*\.json', true));

$files = $dir->find('.*\.json', true);
// jsonをデコード
$file = new File(WWW_ROOT . 'files/json/json_001_職歴書_404777_cv_demo.pl.json');
debug($file->read());
$file->close();
?>


<h1>Posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>

	<!-- ここで $posts 配列をループして、投稿情報を表示 -->
	<?php foreach ($posts as $post) : ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td>
				<?php
				echo $this->Html->link(
					$post['Post']['title'],
					array('action' => 'view', $post['Post']['id'])
				);
				?>
			</td>
			<td>
				<?php
				echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' => 'Are you sure?')
				);
				?>
				<?php
				echo $this->Html->link(
					'Edit',
					array('action' => 'edit', $post['Post']['id'])
				);
				?>
			</td>
			<td>
				<?php echo $post['Post']['created']; ?>
			</td>
		</tr>
	<?php endforeach; ?>



</table>

<?php echo $this->element('searchForm'); ?>
