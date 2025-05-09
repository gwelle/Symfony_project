<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509100557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE product_cart (product_id INT NOT NULL, cart_id INT NOT NULL, PRIMARY KEY(product_id, cart_id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_864BAA164584665A ON product_cart (product_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_864BAA161AD5CDBF ON product_cart (cart_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE product_cart ADD CONSTRAINT FK_864BAA164584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE product_cart ADD CONSTRAINT FK_864BAA161AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE product_cart DROP CONSTRAINT FK_864BAA164584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE product_cart DROP CONSTRAINT FK_864BAA161AD5CDBF
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE product_cart
        SQL);
    }
}
