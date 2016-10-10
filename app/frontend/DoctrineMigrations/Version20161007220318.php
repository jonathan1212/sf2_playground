<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161007220318 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE orderproduct CHANGE returnable_quantity returnableQuantity INT DEFAULT NULL');
        $this->addSql('ALTER TABLE yi_productwarehouse CHANGE user_warehouse_id user_warehouse_id INT DEFAULT NULL, CHANGE product_id product_id BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE yi_userwarehouse CHANGE user_id user_id INT DEFAULT NULL, CHANGE location_id location_id INT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE product (user_id INT DEFAULT NULL, productId INT AUTO_INCREMENT NOT NULL, date_created DATETIME NOT NULL, date_last_modified DATETIME NOT NULL, date_last_emptied DATETIME NOT NULL, name VARCHAR(255) DEFAULT \'\' NOT NULL COLLATE utf8_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, shortDescription VARCHAR(512) DEFAULT NULL COLLATE utf8_unicode_ci, click_count INT DEFAULT 0 NOT NULL, keywords VARCHAR(1024) DEFAULT \'\' COLLATE utf8_unicode_ci, status SMALLINT DEFAULT 0 NOT NULL, slug VARCHAR(1024) NOT NULL COLLATE utf8_unicode_ci, brand_id INT NOT NULL, INDEX IDX_1CF73D31A76ED395 (user_id), PRIMARY KEY(productId)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_1CF73D31A76ED395 FOREIGN KEY (user_id) REFERENCES User (user_id)');
        $this->addSql('ALTER TABLE OrderProduct CHANGE returnablequantity returnable_quantity INT DEFAULT NULL');
        $this->addSql('ALTER TABLE yi_productwarehouse CHANGE user_warehouse_id user_warehouse_id INT NOT NULL, CHANGE product_id product_id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE yi_userwarehouse CHANGE user_id user_id INT NOT NULL, CHANGE location_id location_id INT NOT NULL');
    }
}
