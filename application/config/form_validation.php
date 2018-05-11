<?php

$config = array(
        'add_articles_rules' => array(
                array(
                        'field' => 'title',
                        'label' => 'Article title',
                        'rules' => 'required|alphadash'
                ),
                array(
                        'field' => 'body',
                        'label' => 'Article body',
                        'rules' => 'required'
                ),
            

        )
);

?>
