#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (

	publications_id varchar(255) DEFAULT '' NOT NULL,
	publications_log varchar(255) DEFAULT '' NOT NULL,
	publications_isbn10 varchar(255) DEFAULT '' NOT NULL,
	publications_isbn13 varchar(255) DEFAULT '' NOT NULL,
	publications_issn varchar(255) DEFAULT '' NOT NULL,
	publications_year int(11) DEFAULT '0' NOT NULL,
	publications_publisher varchar(255) DEFAULT '' NOT NULL,
	publications_partners varchar(255) DEFAULT '' NOT NULL,
	publications_author varchar(1024) DEFAULT '' NOT NULL,
	publications_corporate varchar(1024) DEFAULT '' NOT NULL,
	publications_format varchar(255) DEFAULT '' NOT NULL,
	publications_language varchar(255) DEFAULT '' NOT NULL,
	publications_reference varchar(255) DEFAULT '' NOT NULL,
	publications_pages varchar(255) DEFAULT '' NOT NULL,
	publications_owner varchar(255) DEFAULT '' NOT NULL
	publications_starttime int(11) DEFAULT '0' NOT NULL,
	publications_endtime int(11) DEFAULT '0' NOT NULL,
);