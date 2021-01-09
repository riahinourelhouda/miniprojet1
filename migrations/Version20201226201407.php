<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201226201407 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD date_depart DATE NOT NULL, ADD date_retour DATE NOT NULL, ADD km_depart INT NOT NULL, ADD km_retour INT NOT NULL');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F1823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id)');
        $this->addSql('CREATE INDEX IDX_E9E2810F1823061F ON voiture (contrat_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP date_depart, DROP date_retour, DROP km_depart, DROP km_retour');
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F1823061F');
        $this->addSql('DROP INDEX IDX_E9E2810F1823061F ON voiture');
    }
}
