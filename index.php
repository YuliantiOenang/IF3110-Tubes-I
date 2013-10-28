<?php include "header.php";?>
<?php include "sidebar.php";?>

<article id="featured" class="body">
	<div id="slideshow">
		<input type="radio" id="button-1" name="controls" checked="checked"/>
        <label for="button-1"></label>
		<input type="radio" id="button-2" name="controls"/>
        <label for="button-2"></label>
		<input type="radio" id="button-3" name="controls"/>
        <label for="button-3"></label>
		<label for="button-1" class="arrows" id="arrow-1">></label>
        <label for="button-2" class="arrows" id="arrow-2">></label>
        <label for="button-3" class="arrows" id="arrow-3">></label>
		<div id="slideshow-inner">
			<ul>
				<li id ="slide-1">
					<img src="images/tahu.jpg"/>
					<div class="description">
						<input type="checkbox" id="show-description-1"/>
                        <label for="show-description-1" class="show-description-label">1</label>
                        <div class="description-text">
                            <h2>Tahu</h2>
                            <p>Makanan yang terbuat dari kedelai. Temennya tempe.</p>
                        </div>
					</div>
				</li>
				<li id ="slide-2">
					<img src="images/bigcola.jpg"/>
					<div class="description">
						<input type="checkbox" id="show-description-2"/>
                        <label for="show-description-2" class="show-description-label">2</label>
                        <div class="description-text">
                            <h2>BigCola</h2>
                            <p>Cola tapi big. BigCola.</p>
                        </div>
					</div>
				</li>
				<li id ="slide-3">
					<img src="images/panci.jpg"/>
					<div class="description">
						<input type="checkbox" id="show-description-3"/>
                        <label for="show-description-3" class="show-description-label">3</label>
                        <div class="description-text">
                            <h2>Panci</h2>
                            <p>Buat masak. Warnanya pink pink unyu.</p>
                        </div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</article><!-- /#featured -->

<?php include "footer.php";?>
</div>
</body>
</html>