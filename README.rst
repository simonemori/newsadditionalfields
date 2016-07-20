TYPO3 Extension "newsadditionalfields"
============================

This extension simply adds fields to a news record of EXT:news.

**Required**

- TYPO3 CMS 6.2 LTS
- EXT:news 3.2.0

**License**

GPLv2

Installation
------------

- Install the extension
- Create/Open a news record and the new fields

Templates
---------

You can output the additional field by using ``{newsItem.FIELDNAME}``. As an example: ::

	<f:if condition="{newsItem.publicationsAuthor}">
        <strong><f:translate key="news.publicationsAuthor" /></strong>: {newsItem.publicationsAuthor}<br/>
    </f:if>
	
The fields added are:

- publicationsId
- publicationsLog
- publicationsIsbn10
- publicationsIsbn13
- publicationsIssn
- publicationsPublisher
- publicationsYear
- publicationsStarttime
- publicationsEndtime
- publicationsPartners
- publicationsAuthor
- publicationsCorporate
- publicationsFormat
- publicationsLanguage
- publicationsReference
- publicationsPages

 
 
