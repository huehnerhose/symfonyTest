<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250403143127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE hierarchy (
              id SERIAL NOT NULL,
              parent_id INT DEFAULT NULL,
              label VARCHAR(255) NOT NULL,
              PRIMARY KEY(id)
            )
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_FA7A28AE727ACA70 ON hierarchy (parent_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE
              hierarchy
            ADD
              CONSTRAINT FK_FA7A28AE727ACA70 FOREIGN KEY (parent_id) REFERENCES hierarchy (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE hierarchy DROP CONSTRAINT FK_FA7A28AE727ACA70
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE hierarchy
        SQL);
    }
}
