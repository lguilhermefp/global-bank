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
	<div class="content">
		<div class="listing">
			<h1>Pages</h1>
			<table>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>&nbsp;</th>
				</tr>
				<?php foreach($pages as $page) { ?>
					<tr>
						<td><?php echo $page['id'] ?></td>
						<td><?php echo $page['name'] ?></td>
						<td><a class="action" href="<?php echo url_for('/staff/pages/new_page.php?id=' . $page['id']); ?>">page</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
<?php include(SHARED_PATH . 'staff/footer.php'); ?>