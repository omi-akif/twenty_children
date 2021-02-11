<?php $uri = $this->uri->segment(1); ?>
<nav class="nav-sidebar">
	<ul class="nav">
		<li class="<?=$uri == 'my-profile'?'active':'';?>"><a href="<?=base_url('my-profile')?>">আমার প্রোফাইল</a></li>
		<li class="<?=$uri == 'application-list'?'active':'';?>"><a href="<?=base_url('application-list')?>">আবেদনের তালিকা</a></li>
		<li class="<?=$uri == 'application-form'?'active':'';?>"><a href="<?=base_url('application-form')?>">আবেদনের ভর্তি ফরম</a></li>
		<!-- <li class=""><a href="javascript:;">লগ-আউট</a></li> -->
	</ul>
</nav>