<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190409084229 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "portrait")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "landscape")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "cityscape")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "nature")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "sport")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "animal")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "design")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "children")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "alien")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "tux")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "puppies")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "object")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "chuck norris")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "programming")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "super man")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "porn")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "hentai")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "Gill bates")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "Angular Merkel")');
        $this->addSql('INSERT INTO tag(id, label) VALUE(UUID(), "rasmus")');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM tag WHERE label = "portrait"');
        $this->addSql('DELETE FROM tag WHERE label = "landscape"');
        $this->addSql('DELETE FROM tag WHERE label = "cityscape"');
        $this->addSql('DELETE FROM tag WHERE label = "nature"');
        $this->addSql('DELETE FROM tag WHERE label = "sport"');
        $this->addSql('DELETE FROM tag WHERE label = "animal"');
        $this->addSql('DELETE FROM tag WHERE label = "design"');
        $this->addSql('DELETE FROM tag WHERE label = "children"');
        $this->addSql('DELETE FROM tag WHERE label = "alien"');
        $this->addSql('DELETE FROM tag WHERE label = "tux"');
        $this->addSql('DELETE FROM tag WHERE label = "puppies"');
        $this->addSql('DELETE FROM tag WHERE label = "object"');
        $this->addSql('DELETE FROM tag WHERE label = "chuck norris"');
        $this->addSql('DELETE FROM tag WHERE label = "programming"');
        $this->addSql('DELETE FROM tag WHERE label = "super man"');
        $this->addSql('DELETE FROM tag WHERE label = "porn"');
        $this->addSql('DELETE FROM tag WHERE label = "hentai"');
        $this->addSql('DELETE FROM tag WHERE label = "Gill bates"');
        $this->addSql('DELETE FROM tag WHERE label = "Angular Merkel"');
        $this->addSql('DELETE FROM tag WHERE label = "rasmus"');
    }
}
