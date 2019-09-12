
<?php

//codemirror modes
if(isset($codemirror_modes)){
    echo '<div style="display: none;" id="codemirror_modes">' . json_encode($codemirror_modes) . '</div>';
}

//stats
$this->load->view('defaults/stats');

//Javascript
$this->carabiner->js('jquery.js');
$this->carabiner->js('bootstrap.min.js');
$this->carabiner->js('jquery.timers.js');
//$this->carabiner->js('jquery.dataTables.min.js');
$this->carabiner->js('codemirror/lib/codemirror.js');


$this->carabiner->js('stikked.js');

$this->carabiner->display('js');

?>

  </div>
</div>

<!-- Footer -->
<div id="footer">
    <div id="footer_inner">
        <div id="footer_social" class="repeat">
            <h2 class="rulelight light">Follow <span>Linaro</span></h2>
            <a target="_blank" href="http://www.linaro.org/blog" class="repeat socials blog" title="Visit the Linaro Blog"><span></span>Blog</a>
            <a target="_blank" href="https://launchpad.net/linaro" class="repeat socials launchpad" title="See Linaro's Current Project Blueprints"><span></span>Launchpad</a>
            <a target="_blank" href="http://planet.linaro.org" class="repeat socials planet pad-right" title="Read blog posts from around the web about Linaro"><span></span>Planet</a>
            <a target="_blank" href="http://www.facebook.com/pages/Linaro/155974581091106" class="repeat socials facebook" title="Visit Linaro's Facebook page"><span></span>Facebook</a>
            <a target="_blank" href="http://www.flickr.com/photos/linaroorg/" class="repeat socials flickr" title="See photos from Linaro events on our Flickr channel"><span></span>Flickr</a>
            <a target="_blank" href="https://plus.google.com/112814496864921562564" class="repeat socials gplus" title="Connect with Linaro on Google+"><span></span>Google+</a>
            <a target="_blank" href="http://twitter.com/linaroorg" class="repeat socials twitter" title="Connect with Linaro on Twitter"><span></span>Twitter</a>
            <a target="_blank" href="http://www.youtube.com/user/linaroorg" class="repeat socials youtube" title="View video content from Linaro on YouTube"><span></span>Youtube</a>
        </div>

        <div id="footer_nav" class="repeat">
            <p class="rulelight light small">
                Portions of this content &copy; 2010 - 2012 <span>Linaro</span>
            </p>
            <p class="light small">
                <a target="_blank" href="http://www.linaro.org/sitemap" title="View a full sitemap of www.linaro.org">Sitemap</a>|
                <a target="_blank" href="http://www.linaro.org/legal" title="Linaro Terms, Conditions and Privacy Policy">Legal</a>|
                <a target="_blank" href="http://www.linaro.org/contact" title="Contact details for Linaro">Contact</a></p>
        </div>
    </div>
</div>
<!-- End Footer -->

	</body>
</html>
