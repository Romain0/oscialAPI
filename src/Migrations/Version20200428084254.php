<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200428084254 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE socialiser');
        $this->addSql('ALTER TABLE envoyer DROP FOREIGN KEY fk_envoyer_id_message_id_message');
        $this->addSql('ALTER TABLE envoyer DROP FOREIGN KEY fk_envoyer_id_utilisateur_id_utilisateur');
        $this->addSql('ALTER TABLE envoyer ADD CONSTRAINT FK_9E6AFC017B149D69 FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur)');
        $this->addSql('ALTER TABLE envoyer ADD CONSTRAINT FK_9E6AFC01A58C187C FOREIGN KEY (ID_message) REFERENCES message (ID_message)');
        $this->addSql('ALTER TABLE envoyer RENAME INDEX fk_envoyer_id_message_id_message TO IDX_9E6AFC01A58C187C');
        $this->addSql('ALTER TABLE etudier DROP FOREIGN KEY fk_id_formation_id_formation');
        $this->addSql('ALTER TABLE etudier DROP FOREIGN KEY fk_id_utilisateur_id_utilisateur');
        $this->addSql('ALTER TABLE etudier ADD CONSTRAINT FK_B0A0835D7B149D69 FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur)');
        $this->addSql('ALTER TABLE etudier ADD CONSTRAINT FK_B0A0835D5ED8C9B7 FOREIGN KEY (ID_formation) REFERENCES formation (ID_formation)');
        $this->addSql('ALTER TABLE etudier RENAME INDEX fk_id_formation_id_formation TO IDX_B0A0835D5ED8C9B7');
        $this->addSql('ALTER TABLE covoiturage DROP FOREIGN KEY fk_covoit_id_tchat_id_tchat');
        $this->addSql('ALTER TABLE covoiturage CHANGE ID_tchat ID_tchat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE covoiturage ADD CONSTRAINT FK_28C79E8956E7865E FOREIGN KEY (ID_tchat) REFERENCES tchat (ID_tchat)');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY fk_etudiant_id_utilisateur_id_utilisateur');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E37B149D69 FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur)');
        $this->addSql('ALTER TABLE formateur DROP FOREIGN KEY fk_formateur_id_utilisateur_id_utilisateur');
        $this->addSql('ALTER TABLE formateur ADD CONSTRAINT FK_ED767E4F7B149D69 FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur)');
        $this->addSql('ALTER TABLE salarie DROP FOREIGN KEY fk_salarie_is_utilisateur_id_utilisateur');
        $this->addSql('ALTER TABLE salarie ADD CONSTRAINT FK_828E3A1A7B149D69 FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur)');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY fk_id_tchat_id_tchat');
        $this->addSql('ALTER TABLE message CHANGE ID_tchat ID_tchat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F56E7865E FOREIGN KEY (ID_tchat) REFERENCES tchat (ID_tchat)');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY fk_offre_id_post_id_post');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F19BB4C25 FOREIGN KEY (ID_post) REFERENCES post (ID_post)');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY fk_evenement_id_post_id_post');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E19BB4C25 FOREIGN KEY (ID_post) REFERENCES post (ID_post)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE socialiser (ID_utilisateur_1 INT NOT NULL, ID_utilisateur_2 INT NOT NULL, socialiser_date_amitie DATETIME NOT NULL, socialiser_statut VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, socialiser_date_statut DATETIME NOT NULL, INDEX fk_di_utilisateur_2_id_utilisateur (ID_utilisateur_2), INDEX IDX_1416113717A5175D (ID_utilisateur_1), PRIMARY KEY(ID_utilisateur_1, ID_utilisateur_2)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE socialiser ADD CONSTRAINT fk_di_utilisateur_2_id_utilisateur FOREIGN KEY (ID_utilisateur_2) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE socialiser ADD CONSTRAINT fk_id_utilisateur_1_id_utilisateur FOREIGN KEY (ID_utilisateur_1) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP TABLE test');
        $this->addSql('ALTER TABLE covoiturage DROP FOREIGN KEY FK_28C79E8956E7865E');
        $this->addSql('ALTER TABLE covoiturage CHANGE ID_tchat ID_tchat INT NOT NULL');
        $this->addSql('ALTER TABLE covoiturage ADD CONSTRAINT fk_covoit_id_tchat_id_tchat FOREIGN KEY (ID_tchat) REFERENCES tchat (ID_tchat) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE envoyer DROP FOREIGN KEY FK_9E6AFC017B149D69');
        $this->addSql('ALTER TABLE envoyer DROP FOREIGN KEY FK_9E6AFC01A58C187C');
        $this->addSql('ALTER TABLE envoyer ADD CONSTRAINT fk_envoyer_id_message_id_message FOREIGN KEY (ID_message) REFERENCES message (ID_message) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE envoyer ADD CONSTRAINT fk_envoyer_id_utilisateur_id_utilisateur FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE envoyer RENAME INDEX idx_9e6afc01a58c187c TO fk_envoyer_id_message_id_message');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E37B149D69');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT fk_etudiant_id_utilisateur_id_utilisateur FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudier DROP FOREIGN KEY FK_B0A0835D7B149D69');
        $this->addSql('ALTER TABLE etudier DROP FOREIGN KEY FK_B0A0835D5ED8C9B7');
        $this->addSql('ALTER TABLE etudier ADD CONSTRAINT fk_id_formation_id_formation FOREIGN KEY (ID_formation) REFERENCES formation (ID_formation) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudier ADD CONSTRAINT fk_id_utilisateur_id_utilisateur FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudier RENAME INDEX idx_b0a0835d5ed8c9b7 TO fk_id_formation_id_formation');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E19BB4C25');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT fk_evenement_id_post_id_post FOREIGN KEY (ID_post) REFERENCES post (ID_post) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur DROP FOREIGN KEY FK_ED767E4F7B149D69');
        $this->addSql('ALTER TABLE formateur ADD CONSTRAINT fk_formateur_id_utilisateur_id_utilisateur FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F56E7865E');
        $this->addSql('ALTER TABLE message CHANGE ID_tchat ID_tchat INT NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT fk_id_tchat_id_tchat FOREIGN KEY (ID_tchat) REFERENCES tchat (ID_tchat) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F19BB4C25');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT fk_offre_id_post_id_post FOREIGN KEY (ID_post) REFERENCES post (ID_post) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salarie DROP FOREIGN KEY FK_828E3A1A7B149D69');
        $this->addSql('ALTER TABLE salarie ADD CONSTRAINT fk_salarie_is_utilisateur_id_utilisateur FOREIGN KEY (ID_utilisateur) REFERENCES utilisateur (ID_utilisateur) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
