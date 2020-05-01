<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200428120927 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, date_creation DATE NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, img VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, duree VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, etablissement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evennement (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, adresse VARCHAR(255) NOT NULL, adresse_complementaire VARCHAR(255) NOT NULL, cp VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, INDEX IDX_5C15C7744B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudier (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, formation_id INT DEFAULT NULL, INDEX IDX_B0A0835DFB88E14F (utilisateur_id), INDEX IDX_B0A0835D5200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE covoiturage (id INT AUTO_INCREMENT NOT NULL, tchat_id INT DEFAULT NULL, vehicule VARCHAR(255) NOT NULL, date_depart DATE NOT NULL, date_arrivee DATE NOT NULL, adresse_depart VARCHAR(255) NOT NULL, complement_adresse_depart VARCHAR(255) NOT NULL, cp_adresse_depart VARCHAR(255) NOT NULL, ville_adresse_depart VARCHAR(255) NOT NULL, adresse_arrivee VARCHAR(255) NOT NULL, complement_adresse_arrivee VARCHAR(255) NOT NULL, cp_adresse_arrivee VARCHAR(255) NOT NULL, ville_adresse_arrivee VARCHAR(255) NOT NULL, INDEX IDX_28C79E89CACEEE58 (tchat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tchat (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, niveau_etudes VARCHAR(255) NOT NULL, entreprise VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_717E22E3FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, matiere VARCHAR(255) NOT NULL, anciennete INT NOT NULL, UNIQUE INDEX UNIQ_ED767E4FFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salarie (id INT AUTO_INCREMENT NOT NULL, utilisitateur_id INT DEFAULT NULL, entreprise VARCHAR(255) NOT NULL, anciennete VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_828E3A1A14BB872F (utilisitateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, tchat_id INT DEFAULT NULL, date_envoi DATE NOT NULL, contenu VARCHAR(255) NOT NULL, INDEX IDX_B6BD307FCACEEE58 (tchat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE envoyer (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, message_id INT DEFAULT NULL, INDEX IDX_9E6AFC01FB88E14F (utilisateur_id), INDEX IDX_9E6AFC01537A1329 (message_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, date_expiration DATE NOT NULL, niveau_etudes INT NOT NULL, entreprise VARCHAR(255) NOT NULL, entreprise_adresse_postale VARCHAR(255) NOT NULL, entreprise_cp VARCHAR(255) NOT NULL, entreprise_ville VARCHAR(255) NOT NULL, nb_max_candidats INT NOT NULL, INDEX IDX_AF86866F4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evennement ADD CONSTRAINT FK_5C15C7744B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE etudier ADD CONSTRAINT FK_B0A0835DFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE etudier ADD CONSTRAINT FK_B0A0835D5200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE covoiturage ADD CONSTRAINT FK_28C79E89CACEEE58 FOREIGN KEY (tchat_id) REFERENCES tchat (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE formateur ADD CONSTRAINT FK_ED767E4FFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE salarie ADD CONSTRAINT FK_828E3A1A14BB872F FOREIGN KEY (utilisitateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FCACEEE58 FOREIGN KEY (tchat_id) REFERENCES tchat (id)');
        $this->addSql('ALTER TABLE envoyer ADD CONSTRAINT FK_9E6AFC01FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE envoyer ADD CONSTRAINT FK_9E6AFC01537A1329 FOREIGN KEY (message_id) REFERENCES message (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE utilisateur ADD complement_adresse VARCHAR(255) DEFAULT NULL, ADD code_postal VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD sexe TINYINT(1) NOT NULL, ADD loisirs VARCHAR(255) DEFAULT NULL, ADD telephone VARCHAR(25) NOT NULL, ADD img_profil VARCHAR(255) DEFAULT NULL, ADD possede_permis TINYINT(1) NOT NULL, ADD possede_vehicule TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE evennement DROP FOREIGN KEY FK_5C15C7744B89032C');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F4B89032C');
        $this->addSql('ALTER TABLE etudier DROP FOREIGN KEY FK_B0A0835D5200282E');
        $this->addSql('ALTER TABLE covoiturage DROP FOREIGN KEY FK_28C79E89CACEEE58');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FCACEEE58');
        $this->addSql('ALTER TABLE envoyer DROP FOREIGN KEY FK_9E6AFC01537A1329');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE evennement');
        $this->addSql('DROP TABLE etudier');
        $this->addSql('DROP TABLE covoiturage');
        $this->addSql('DROP TABLE tchat');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE formateur');
        $this->addSql('DROP TABLE salarie');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE envoyer');
        $this->addSql('DROP TABLE offre');
        $this->addSql('ALTER TABLE utilisateur DROP complement_adresse, DROP code_postal, DROP ville, DROP sexe, DROP loisirs, DROP telephone, DROP img_profil, DROP possede_permis, DROP possede_vehicule');
    }
}
