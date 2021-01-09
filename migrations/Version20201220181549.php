<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201220181549 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture ADD marque VARCHAR(30) NOT NULL, ADD couleur VARCHAR(20) NOT NULL, ADD carburant VARCHAR(20) DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL, ADD datemiseencirculation DATETIME NOT NULL, ADD disponibilité TINYINT(1) NOT NULL, ADD nombredeplace INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture DROP marque, DROP couleur, DROP carburant, DROP description, DROP datemiseencirculation, DROP disponibilité, DROP nombredeplace');
    }
}
