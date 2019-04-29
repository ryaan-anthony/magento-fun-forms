<?php
$this->startSetup();
$this->run("
    DROP TABLE IF EXISTS {$this->getTable('funforms/submission')};
    CREATE TABLE {$this->getTable('funforms/submission')} (
        `id` int(10) UNSIGNED NOT NULL auto_increment,
        `subject` varchar(255) NOT NULL,
        `message` text,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;
");
$this->endSetup();
