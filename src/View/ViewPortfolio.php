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
        
        if($settings['status'] != 1) {
            header("Location: error.php");
            exit();
        } else {
            echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>' . $settings['title'] . '</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <link href="css/style.css" rel="stylesheet">
            </head>
            <body>
            ';
        }
    }

    // portfolio html footer
    public function Portfolio_Footer() {
        echo '
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>
        </html>
        ';
    }
}
// EOF