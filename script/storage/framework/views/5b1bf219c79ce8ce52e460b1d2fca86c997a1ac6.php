<?php if(env('DISCUSS_COMMENT_KEY') != null): ?>
<div id="disqus_thread"></div>
<script>
"use strict";	
//disqus comment api
var disqus_config = function () {
this.page.url = "<?php echo e(Request::url()); ?>"; 
this.page.identifier = "<?php echo e(Request::url()); ?>"; 
};
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://'+"<?php echo e(env('DISCUSS_COMMENT_KEY')); ?>"+'/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/components/disquss.blade.php ENDPATH**/ ?>