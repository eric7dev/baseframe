<?php
$ARR_latestposts = array(
    '101',
    '021',
    '631',
    '557',
); ?>
<h1>Blog</h1>
<p>Latest posts.</p>
<ul class='latestposts'>
  <li><a href="#"><?php echo 'post.'.$ARR_latestposts[0]; ?></a><p>post description</p></li>
  <li><a href="#"><?php echo 'post.'.$ARR_latestposts[1]; ?></a><p>post description</p></li>
  <li><a href="#"><?php echo 'post.'.$ARR_latestposts[2]; ?></a><p>post description</p></li>
  <li><a href="#"><?php echo 'post.'.$ARR_latestposts[3]; ?></a><p>post description</p></li>
</ul>
<style><?php include "blog.css"; ?></style>
<script><?php include "blog.js"; ?></script>
