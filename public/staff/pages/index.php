<?php require_once('../../../private/initialize.php'); ?>

<?php
	$pages = [
		['id' => '1', 'name' => 'first'],
		['id' => '2', 'name' => 'second'],
		['id' => '3', 'name' => 'third'],
	];
?>


<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
	<div class="actions">
		<a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create new page</a>
	</div>
	<div class="content">
		<div class="listing">
			<h1>Pages</h1>
			<table class="list">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
				<?php foreach($pages as $page) { ?>
					<tr>
						<td><?php echo htmlchars($page['id']); ?></td>
						<td><?php echo htmlchars($page['name']); ?></td>
						<td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . htmlchars(urlencode($page['id']))); ?>">page</a></td>
						<td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . htmlchars(urlencode($page['id']))); ?>">edit</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
<?php include(SHARED_PATH . 'staff/footer.php'); ?>