<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240925085754 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE studylink.commentaire_post_id_commentairepost_seq CASCADE');
        $this->addSql('DROP SEQUENCE studylink.utilisateur_id_utilisateur_seq CASCADE');
        $this->addSql('DROP SEQUENCE studylink.Événement_id_Événement_seq CASCADE');
        $this->addSql('DROP SEQUENCE studylink.post_id_post_seq CASCADE');
        $this->addSql('DROP SEQUENCE studylink.inscription_id_inscription_seq CASCADE');
        $this->addSql('CREATE SEQUENCE comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE post_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE comment (id INT NOT NULL, utilisateur_id INT NOT NULL, post_id INT NOT NULL, texte VARCHAR(255) DEFAULT NULL, date_creation TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9474526CFB88E14F ON comment (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_9474526C4B89032C ON comment (post_id)');
        $this->addSql('COMMENT ON COLUMN comment.date_creation IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE post (id INT NOT NULL, title TEXT DEFAULT NULL, picture INT DEFAULT NULL, likes_count INT DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN post.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN post.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "user" (email)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4B89032C FOREIGN KEY (post_id) REFERENCES post (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE studylink.inscription');
        $this->addSql('DROP TABLE studylink.utilisateur');
        $this->addSql('DROP TABLE studylink.post');
        $this->addSql('DROP TABLE studylink.Événement');
        $this->addSql('DROP TABLE studylink.commentaire_post');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SCHEMA studylink');
        $this->addSql('DROP SEQUENCE comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE post_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE user_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE studylink.commentaire_post_id_commentairepost_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE studylink.utilisateur_id_utilisateur_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE studylink.Événement_id_Événement_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE studylink.post_id_post_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE studylink.inscription_id_inscription_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE studylink.inscription (id_inscription SERIAL NOT NULL, nom VARCHAR(100) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, id_utilisateur INT DEFAULT NULL, "id_Événement" INT DEFAULT NULL, statut VARCHAR(50) NOT NULL, PRIMARY KEY(id_inscription))');
        $this->addSql('CREATE TABLE studylink.utilisateur (id_utilisateur SERIAL NOT NULL, nom VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, role VARCHAR(50) NOT NULL, date_creation TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id_utilisateur))');
        $this->addSql('CREATE UNIQUE INDEX utilisateur_email_key ON studylink.utilisateur (email)');
        $this->addSql('CREATE TABLE studylink.post (id_post SERIAL NOT NULL, titre VARCHAR(100) NOT NULL, texte TEXT NOT NULL, date_creation TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT CURRENT_TIMESTAMP, id_utilisateur INT NOT NULL, "id_Événement" INT DEFAULT NULL, PRIMARY KEY(id_post))');
        $this->addSql('CREATE TABLE studylink.Événement ("id_Événement" SERIAL NOT NULL, "nom_Événement" VARCHAR(100) NOT NULL, description TEXT DEFAULT NULL, "date_Événement" TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, lieu VARCHAR(255) DEFAULT NULL, categorie VARCHAR(100) DEFAULT NULL, id_utilisateur INT DEFAULT NULL, PRIMARY KEY(id_Événement))');
        $this->addSql('CREATE TABLE studylink.commentaire_post (id_commentairepost SERIAL NOT NULL, texte TEXT NOT NULL, date_creation TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT CURRENT_TIMESTAMP, id_utilisateur INT DEFAULT NULL, id_post INT DEFAULT NULL, PRIMARY KEY(id_commentairepost))');
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT FK_9474526CFB88E14F');
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT FK_9474526C4B89032C');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE "user"');
    }
}
