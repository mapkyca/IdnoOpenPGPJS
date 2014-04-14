<?php

    namespace IdnoPlugins\OpenPGPJS {
        class Main extends \Idno\Common\Plugin {
	    
            function registerPages() {
		
		// Add OpenPGP JS 
		\Idno\Core\site()->template()->extendTemplate('shell/footer','openpgpjs/footer');
		
            }
        }
    }
