
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

        </div> <!--container-fluid-->
        <!-- Footer -->
        <footer id="footer">
            <div class="container-fluid">
                <div class="row footer-bottom p-t-20 p-b-20">
                    <div class="container">
                        <div class="col-xs-12 text-white text-center"> Copyright © <script type="text/javascript">var d = new Date(); var year = d.getFullYear(); document.write(year);</script> Linaro Limited <span class="coloured-bp">•</span> <a href="https://www.linaro.org/legal/">Legal</a> <span class="coloured-bp">•</span> <a href="https://www.linaro.org/contact/">Contact</a> <span class="coloured-bp">•</span> <a href="https://www.linaro.org/press/">Press</a> </div>
                        <div class="col-xs-12 text-white text-center m-t-10">
                            <a href="https://www.linaro.org"> <img src="https://www.linaro.org/assets/images/Linaro-logo-white.png" class="footer-logo" alt="Linaro Logo White Footer Icon"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
	</body>
</html>
