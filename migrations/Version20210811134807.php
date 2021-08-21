<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210811134807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE arrestation (id INT AUTO_INCREMENT NOT NULL, identite_emetteur VARCHAR(255) NOT NULL, identite_attache VARCHAR(255) NOT NULL, date_heure VARCHAR(255) NOT NULL, nom_suspect VARCHAR(255) NOT NULL, prenom_suspect VARCHAR(255) NOT NULL, date_naissance_suspect VARCHAR(255) NOT NULL, numero_suspect VARCHAR(255) NOT NULL, description LONGBLOB NOT NULL, permis_conduire VARCHAR(3) NOT NULL, permis_ppa VARCHAR(3) NOT NULL, heure_droit VARCHAR(255) NOT NULL, recidiviste TINYINT(1) NOT NULL, cooperation VARCHAR(3) NOT NULL, photo_fouille_un VARCHAR(255) NOT NULL, photo_fouille_deux VARCHAR(255) DEFAULT NULL, fair_reproche LONGBLOB NOT NULL, carte_identite VARCHAR(255) NOT NULL, permis_conduire_img VARCHAR(255) DEFAULT NULL, permis_ppa_img VARCHAR(255) DEFAULT NULL, suspect_face VARCHAR(255) NOT NULL, suspect_dos VARCHAR(255) NOT NULL, suspect_profil_un VARCHAR(255) NOT NULL, suspect_profil_deux VARCHAR(255) NOT NULL, photo_vehicule_un VARCHAR(255) DEFAULT NULL, photo_vehicule_deux VARCHAR(255) DEFAULT NULL, photo_plaque VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE arrestation');
    }
}
