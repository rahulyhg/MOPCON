<div id="mainNav">
	<div>
		<p class="anchor"><a href="#mainNavKey" id="mainNavKey" accesskey="n">主要導覽區</a></p>
		<ul>
			<li<?php if($thisPage == 'home') echo ' class="active"'; ?>><a href="index.php">首頁</a></li>
			<li<?php if($thisPage == 'sessions') echo ' class="active"'; ?>><a href="page.php?to=sessions">議程</a></li>
			<li<?php if($thisPage == 'association') echo ' class="active"'; ?>><a href="page.php?to=association">社群</a></li>
			<li<?php if($thisPage == 'sponsors') echo ' class="active"'; ?>><a href="page.php?to=sponsors">主辦/贊助商</a></li>
			<li<?php if($thisPage == 'register') echo ' class="active"'; ?>><a href="page.php?to=register">報名資訊</a></li>
			<li<?php if($thisPage == 'location') echo ' class="active"'; ?>><a href="page.php?to=location">交通資訊</a></li>
		</ul>
	</div>
</div>