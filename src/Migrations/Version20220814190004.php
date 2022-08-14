<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220814190004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bitbag_onboarding_wizard_status (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, completed TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_14A16BFCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bitbag_onboarding_wizard_status ADD CONSTRAINT FK_14A16BFCA76ED395 FOREIGN KEY (user_id) REFERENCES sylius_admin_user (id)');
        $this->addSql('ALTER TABLE bitbag_mollie_configuration RENAME INDEX uniq_23cc85048298f TO UNIQ_23CC8504C6B58E54');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription DROP FOREIGN KEY FK_5E346303B3185C');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription DROP FOREIGN KEY FK_5E346303E415FB15');
        $this->addSql('DROP INDEX IDX_5E346303E415FB15 ON bitbag_mollie_subscription');
        $this->addSql('DROP INDEX UNIQ_5E346303B3185C ON bitbag_mollie_subscription');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription ADD subscriptionConfiguration_id INT DEFAULT NULL, ADD orderItem_id INT DEFAULT NULL, DROP order_item_id, DROP subscription_configuration_id, CHANGE created_at createdAt DATETIME NOT NULL, CHANGE started_at startedAt DATETIME DEFAULT NULL, CHANGE recent_failed_payments_count recentFailedPaymentsCount INT DEFAULT 0 NOT NULL, CHANGE processing_state processingState VARCHAR(255) DEFAULT \'none\' NOT NULL, CHANGE payment_state paymentState VARCHAR(255) DEFAULT \'pending\' NOT NULL');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription ADD CONSTRAINT FK_5E3463038534B6CE FOREIGN KEY (subscriptionConfiguration_id) REFERENCES bitbag_mollie_subscription_configuration (id)');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription ADD CONSTRAINT FK_5E346303E76E9C94 FOREIGN KEY (orderItem_id) REFERENCES sylius_order_item (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5E3463038534B6CE ON bitbag_mollie_subscription (subscriptionConfiguration_id)');
        $this->addSql('CREATE INDEX IDX_5E346303E76E9C94 ON bitbag_mollie_subscription (orderItem_id)');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_configuration ADD subscriptionId VARCHAR(255) DEFAULT NULL, ADD mandateId VARCHAR(255) DEFAULT NULL, DROP subscription_id, DROP mandate_id, CHANGE host_name hostName VARCHAR(255) NOT NULL, CHANGE number_of_repetitions numberOfRepetitions INT NOT NULL, CHANGE payment_details_configuration paymentDetailsConfiguration LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_schedule DROP FOREIGN KEY FK_79B927C0D38231D4');
        $this->addSql('DROP INDEX IDX_79B927C0D38231D4 ON bitbag_mollie_subscription_schedule');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_schedule CHANGE scheduled_date scheduledDate DATETIME NOT NULL, CHANGE fulfilled_date fulfilledDate DATETIME DEFAULT NULL, CHANGE schedule_index scheduleIndex INT NOT NULL, CHANGE mollie_subscription_id mollieSubscription_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_schedule ADD CONSTRAINT FK_79B927C03D55A12B FOREIGN KEY (mollieSubscription_id) REFERENCES bitbag_mollie_subscription (id)');
        $this->addSql('CREATE INDEX IDX_79B927C03D55A12B ON bitbag_mollie_subscription_schedule (mollieSubscription_id)');
        $this->addSql('ALTER TABLE sylius_order DROP FOREIGN KEY FK_6196A1F99A1887DC');
        $this->addSql('DROP INDEX IDX_6196A1F99A1887DC ON sylius_order');
        $this->addSql('ALTER TABLE sylius_order DROP subscription_id, DROP recurring_sequence_index');
        $this->addSql('ALTER TABLE sylius_product_variant DROP recurring, DROP recurring_times, DROP recurring_interval');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bitbag_onboarding_wizard_status');
        $this->addSql('ALTER TABLE bitbag_mollie_configuration RENAME INDEX uniq_23cc8504c6b58e54 TO UNIQ_23CC85048298F');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription DROP FOREIGN KEY FK_5E3463038534B6CE');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription DROP FOREIGN KEY FK_5E346303E76E9C94');
        $this->addSql('DROP INDEX UNIQ_5E3463038534B6CE ON bitbag_mollie_subscription');
        $this->addSql('DROP INDEX IDX_5E346303E76E9C94 ON bitbag_mollie_subscription');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription ADD order_item_id INT DEFAULT NULL, ADD subscription_configuration_id INT DEFAULT NULL, DROP subscriptionConfiguration_id, DROP orderItem_id, CHANGE createdat created_at DATETIME NOT NULL, CHANGE startedat started_at DATETIME DEFAULT NULL, CHANGE processingstate processing_state VARCHAR(255) CHARACTER SET utf8 DEFAULT \'none\' NOT NULL COLLATE `utf8_unicode_ci`, CHANGE recentfailedpaymentscount recent_failed_payments_count INT DEFAULT 0 NOT NULL, CHANGE paymentstate payment_state VARCHAR(255) CHARACTER SET utf8 DEFAULT \'pending\' NOT NULL COLLATE `utf8_unicode_ci`');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription ADD CONSTRAINT FK_5E346303B3185C FOREIGN KEY (subscription_configuration_id) REFERENCES bitbag_mollie_subscription_configuration (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription ADD CONSTRAINT FK_5E346303E415FB15 FOREIGN KEY (order_item_id) REFERENCES sylius_order_item (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5E346303E415FB15 ON bitbag_mollie_subscription (order_item_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5E346303B3185C ON bitbag_mollie_subscription (subscription_configuration_id)');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_configuration ADD subscription_id VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ADD mandate_id VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, DROP subscriptionId, DROP mandateId, CHANGE hostname host_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, CHANGE numberofrepetitions number_of_repetitions INT NOT NULL, CHANGE paymentdetailsconfiguration payment_details_configuration LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci` COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_schedule DROP FOREIGN KEY FK_79B927C03D55A12B');
        $this->addSql('DROP INDEX IDX_79B927C03D55A12B ON bitbag_mollie_subscription_schedule');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_schedule CHANGE molliesubscription_id mollie_subscription_id INT DEFAULT NULL, CHANGE scheduleddate scheduled_date DATETIME NOT NULL, CHANGE fulfilleddate fulfilled_date DATETIME DEFAULT NULL, CHANGE scheduleindex schedule_index INT NOT NULL');
        $this->addSql('ALTER TABLE bitbag_mollie_subscription_schedule ADD CONSTRAINT FK_79B927C0D38231D4 FOREIGN KEY (mollie_subscription_id) REFERENCES bitbag_mollie_subscription (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_79B927C0D38231D4 ON bitbag_mollie_subscription_schedule (mollie_subscription_id)');
        $this->addSql('ALTER TABLE sylius_order ADD subscription_id INT DEFAULT NULL, ADD recurring_sequence_index INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_order ADD CONSTRAINT FK_6196A1F99A1887DC FOREIGN KEY (subscription_id) REFERENCES bitbag_mollie_subscription (id) ON UPDATE NO ACTION');
        $this->addSql('CREATE INDEX IDX_6196A1F99A1887DC ON sylius_order (subscription_id)');
        $this->addSql('ALTER TABLE sylius_product_variant ADD recurring TINYINT(1) DEFAULT \'0\' NOT NULL, ADD recurring_times INT DEFAULT NULL, ADD recurring_interval VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`');
    }
}
