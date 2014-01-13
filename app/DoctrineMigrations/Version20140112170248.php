<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140112170248 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE coffee (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE coffee_entries (id INT AUTO_INCREMENT NOT NULL, coffee_id INT DEFAULT NULL, comment VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_6A22CFC378CD6D6E (coffee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE coffee_entries ADD CONSTRAINT FK_6A22CFC378CD6D6E FOREIGN KEY (coffee_id) REFERENCES coffee (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE coffee_entries DROP FOREIGN KEY FK_6A22CFC378CD6D6E");
        $this->addSql("DROP TABLE coffee");
        $this->addSql("DROP TABLE coffee_entries");
    }
}
