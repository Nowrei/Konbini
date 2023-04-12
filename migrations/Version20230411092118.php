<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230411092118 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_categorie_id INT NOT NULL, titre_article VARCHAR(255) NOT NULL, sous_titre_article VARCHAR(255) DEFAULT NULL, image_article VARCHAR(255) NOT NULL, media_article VARCHAR(255) NOT NULL, desc_article VARCHAR(5000) NOT NULL, date_article DATETIME NOT NULL, validation_article VARCHAR(10) NOT NULL, INDEX IDX_23A0E6679F37AE5 (id_user_id), INDEX IDX_23A0E669F34925F (id_categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, type_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, titre_role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE suggestion (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, titre_suggestion VARCHAR(255) NOT NULL, contenue_suggestion VARCHAR(2000) NOT NULL, source_suggestion VARCHAR(255) DEFAULT NULL, INDEX IDX_DD80F31B79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_role_id INT NOT NULL, mail_user VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_user VARCHAR(255) NOT NULL, prenom_user VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D64920E84520 (mail_user), INDEX IDX_8D93D64989E8BDC (id_role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6679F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E669F34925F FOREIGN KEY (id_categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE suggestion ADD CONSTRAINT FK_DD80F31B79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64989E8BDC FOREIGN KEY (id_role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6679F37AE5');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E669F34925F');
        $this->addSql('ALTER TABLE suggestion DROP FOREIGN KEY FK_DD80F31B79F37AE5');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64989E8BDC');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE suggestion');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
