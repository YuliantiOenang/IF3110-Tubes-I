<?php
	// Contoh dari file content.

	// Include auth.php, untuk memeriksa user sudah login atau belum.
	require_once('auth.php');

	// Tentukan file css dan javascript.
	$css_file = 'styles/sample.css';
	$js_file = 'scripts/sample.js';

	// Tulis title
	$page_title = 'Hello RuSerBa!';

	// Include begin.
	require_once('begin.php');
?>
<p id="gambar">
<img src="http://placekitten.com/200/200" alt="Cat" />
</p>
<div id="paragraf">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi lorem, malesuada quis hendrerit eget, accumsan sed sapien. Praesent viverra viverra metus quis rutrum. Mauris sit amet euismod ligula. Ut quis luctus purus, quis tincidunt ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut dictum ante. Ut metus lacus, lacinia ut velit vel, scelerisque congue mauris. Ut mollis ante quis dui imperdiet mollis.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi lorem, malesuada quis hendrerit eget, accumsan sed sapien. Praesent viverra viverra metus quis rutrum. Mauris sit amet euismod ligula. Ut quis luctus purus, quis tincidunt ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut dictum ante. Ut metus lacus, lacinia ut velit vel, scelerisque congue mauris. Ut mollis ante quis dui imperdiet mollis.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi lorem, malesuada quis hendrerit eget, accumsan sed sapien. Praesent viverra viverra metus quis rutrum. Mauris sit amet euismod ligula. Ut quis luctus purus, quis tincidunt ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut dictum ante. Ut metus lacus, lacinia ut velit vel, scelerisque congue mauris. Ut mollis ante quis dui imperdiet mollis.
</p>
</div>
<?php
	require_once('end.php');
?>
