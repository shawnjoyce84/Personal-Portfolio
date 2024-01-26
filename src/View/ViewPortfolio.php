<?php

namespace Portfolio\View;

use Portfolio\Model\ModelPortfolio;

class ViewPortfolio extends ModelPortfolio {

    public function __construct() {
        $this->modelportfolio = new ModelPortfolio();
    }

    // portfolio html header
    public function Portfolio_Header() {
        $settings = $this->modelportfolio->Portfolio_Settings();
        echo $settings['status'];
    }
}
// EOF