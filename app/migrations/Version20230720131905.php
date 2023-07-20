<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230720131905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project_img (id INT AUTO_INCREMENT NOT NULL, project_id INT NOT NULL, name VARCHAR(255) NOT NULL, size INT NOT NULL, UNIQUE INDEX UNIQ_29B9124F166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project_img ADD CONSTRAINT FK_29B9124F166D1F9C FOREIGN KEY (project_id) REFERENCES projects (id)');
        $this->addSql('ALTER TABLE education CHANGE year year VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE experience DROP date_end, CHANGE date_start date_start VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE projects ADD name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_img DROP FOREIGN KEY FK_29B9124F166D1F9C');
        $this->addSql('DROP TABLE project_img');
        $this->addSql('ALTER TABLE education CHANGE year year DATE NOT NULL');
        $this->addSql('ALTER TABLE experience ADD date_end DATE NOT NULL, CHANGE date_start date_start DATE NOT NULL');
        $this->addSql('ALTER TABLE projects DROP name');
    }
}
