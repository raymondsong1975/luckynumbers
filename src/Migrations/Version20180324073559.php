<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180324073559 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE result (id INT AUTO_INCREMENT NOT NULL, lotto_id INT NOT NULL, draw_number VARCHAR(50) NOT NULL, number1 VARCHAR(2) NOT NULL, number2 VARCHAR(2) NOT NULL, number3 VARCHAR(2) NOT NULL, number4 VARCHAR(2) NOT NULL, number5 VARCHAR(2) NOT NULL, number6 VARCHAR(2) NOT NULL, number7 VARCHAR(2) NOT NULL, number8 VARCHAR(2) NOT NULL, number9 VARCHAR(2) NOT NULL, number10 VARCHAR(2) NOT NULL, supps1 VARCHAR(2) NOT NULL, supps2 VARCHAR(2) NOT NULL, supps3 VARCHAR(2) NOT NULL, supps4 VARCHAR(2) NOT NULL, supps5 VARCHAR(2) NOT NULL, INDEX IDX_136AC113F93CA43E (lotto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC113F93CA43E FOREIGN KEY (lotto_id) REFERENCES lotto (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE result');
    }
}
