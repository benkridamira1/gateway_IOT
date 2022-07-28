<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220728082643 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gateway (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, pulling_period INTEGER NOT NULL, pushing_period INTEGER NOT NULL, host VARCHAR(255) NOT NULL, port INTEGER NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, use_tls INTEGER NOT NULL, topic VARCHAR(255) NOT NULL, log_file VARCHAR(255) NOT NULL, backup_file VARCHAR(255) NOT NULL, hw_model VARCHAR(255) NOT NULL, sw_version VARCHAR(255) NOT NULL, serial_number VARCHAR(255) NOT NULL, board_serial_number VARCHAR(255) NOT NULL, asset_id VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE meter (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, node_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, serial_number VARCHAR(255) NOT NULL, manufacturer VARCHAR(255) NOT NULL, method VARCHAR(255) NOT NULL, port VARCHAR(255) NOT NULL, baudrate INTEGER NOT NULL, token VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE gateway');
        $this->addSql('DROP TABLE meter');
    }
}
