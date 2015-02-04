<?php
namespace Themes\Ellalalala\Pages {
        class Home extends \Idno\Common\Page {
            function getContent() 
            {
                $t        = \Idno\Core\site()->template();
                $t->body  = $t->draw('ellalalala/home');
                $t->title = 'Testing';
                $t->drawPage();
            }
        }
    }