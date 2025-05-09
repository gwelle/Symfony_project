<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509092904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE author ADD article_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE author ADD CONSTRAINT FK_BDAFD8C87294869C FOREIGN KEY (article_id) REFERENCES article (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_BDAFD8C87294869C ON author (article_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE author DROP CONSTRAINT FK_BDAFD8C87294869C
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_BDAFD8C87294869C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE author DROP article_id
        SQL);
    }
}
