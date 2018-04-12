<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180324074545 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE result ADD supp1 VARCHAR(2) NOT NULL, ADD supp2 VARCHAR(2) NOT NULL, ADD supp3 VARCHAR(2) NOT NULL, ADD supp4 VARCHAR(2) NOT NULL, ADD supp5 VARCHAR(2) NOT NULL, DROP supps1, DROP supps2, DROP supps3, DROP supps4, DROP supps5');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE result ADD supps1 VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, ADD supps2 VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, ADD supps3 VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, ADD supps4 VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, ADD supps5 VARCHAR(2) NOT NULL COLLATE utf8_unicode_ci, DROP supp1, DROP supp2, DROP supp3, DROP supp4, DROP supp5');
    }
}
