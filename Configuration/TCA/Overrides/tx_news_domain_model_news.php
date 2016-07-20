<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$tempColumns = array(
    'publications_id' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_id',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_log' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_log',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_isbn10' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_isbn10',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_isbn13' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_isbn13',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_issn' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_issn',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_publisher' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_publisher',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_partners' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_partners',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_year' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_year',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_starttime' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_starttime',
        'config' => array(
            'type' => 'input',
            'size' => 8,
            'max' => 20,
            'eval' => 'datetime',
            'default' => 0,
        ),
    ),
    'publications_endtime' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_endtime',
        'config' => array(
            'type' => 'input',
            'size' => 8,
            'max' => 20,
            'eval' => 'datetime',
            'default' => 0,
        ),
    ),
    'publications_author' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_author',
        'config' => array(
            'type' => 'text',
            'cols' => 50,
            'rows' => 3,
        ),
    ),
    'publications_corporate' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_corporate',
        'config' => array(
            'type' => 'text',
            'cols' => 50,
            'rows' => 3,
        ),
    ),
    'publications_format' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_format',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_language' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_language',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_reference' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_reference',
        'config' => array(
            'type' => 'text',
            'cols' => 50,
            'rows' => 3,
        ),
    ),
    'publications_pages' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_pages',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
    'publications_owner' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.publications_owner',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns, TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '--div--;LLL:EXT:newsadditionalfields/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.publications
	 , publications_id, --linebreak--, publications_log, --linebreak--, publications_isbn10, --linebreak--, publications_isbn13, --linebreak--, publications_issn,
	 , publications_publisher, publications_starttime, publications_endtime, publications_year, publications_partners
	 , publications_author, --linebreak--, publications_corporate,
	 , publications_format, publications_language, publications_reference;;;richtext::rte_transform[flag=rte_disabled|mode=ts_css], publications_pages, publications_owner'
);

$TCA['tx_news_domain_model_news']['palettes']['palettePublicationAuthor'] = array(
    'showitem' => 'publications_author, --linebreak--, publications_corporate,',
    'canNotCollapse' => TRUE
);
$TCA['tx_news_domain_model_news']['palettes']['palettePublicationCode'] = array(
    'showitem' => 'publications_id, --linebreak--, publications_log, --linebreak--, publications_isbn10, --linebreak--, publications_isbn13, --linebreak--, publications_issn,',
    'canNotCollapse' => TRUE
);