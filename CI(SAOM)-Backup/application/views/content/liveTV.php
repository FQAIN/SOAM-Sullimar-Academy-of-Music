<?php $img_url = base_url() . "assets/img/"; ?>
<?php
$this->load->helper('url');
$base_url = base_url();
?>
<section class="video-container">
    <h1 style="text-align: center">Watch Our SAOM Live Stream</h1>
  <div class="video-player">
    <!-- Include the default video to be viewed -->
    <iframe name="ifrm" id="ifrm" src="https://www.youtube.com/embed/XULUBg_ZcAU" frameborder="0" allowfullscreen width="100%" height="500px"></iframe>
  </div>
</section>

<script id="videotpl" type="text/template">
  {{#videos}}
    <li><a href="{{url}}" onclick="return loadIframe('ifrm', this.href);">{{{title}}}</a></li>
  {{/videos}}
</script>