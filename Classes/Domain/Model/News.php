<?php

namespace NewtVision\Newsadditionalfields\Domain\Model;

/*
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License, either version 3
 * of the License, or (at your option) any later version.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class News
 *
 * @package NewtVision\Newsadditionalfields\Domain\Model
 */
class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * publicationsId
     *
     * @var \integer
     */
    protected $publicationsId;

    /**
     * publicationsLog
     *
     * @var \integer
     */
    protected $publicationsLog;

    /**
     * publicationsIsbn10
     *
     * @var \string
     */
    protected $publicationsIsbn10;

    /**
     * publicationsIsbn13
     *
     * @var \string
     */
    protected $publicationsIsbn13;

    /**
     * publicationsIssn
     *
     * @var \string
     */
    protected $publicationsIssn;

    /**
     * publicationsPublisher
     *
     * @var \string
     */
    protected $publicationsPublisher;

    /**
     * publicationsYear
     *
     * @var \integer
     */
    protected $publicationsYear;

    /**
     * publicationsStarttime
     *
     * @var \DateTime
     */
    protected $publicationsStarttime;

    /**
     * publicationsEndtime
     *
     * @var \DateTime
     */
    protected $publicationsEndtime;

    /**
     * publicationsPartners
     *
     * @var \string
     */
    protected $publicationsPartners;

    /**
     * publicationsAuthor
     *
     * @var \string
     */
    protected $publicationsAuthor;

    /**
     * publicationsCorporate
     *
     * @var \string
     */
    protected $publicationsCorporate;

    /**
     * publicationsFormat
     *
     * @var \string
     */
    protected $publicationsFormat;

    /**
     * publicationsLanguage
     *
     * @var \string
     */
    protected $publicationsLanguage;

    /**
     * publications
     *
     * @var \string
     */
    protected $publicationsReference;

    /**
     * publicationsPages
     *
     * @var \string
     */
    protected $publicationsPages;

    /**
     * Returns the publicationsId
     *
     * @return \integer $publicationsId
     */
    public function getPublicationsId() {
        return $this->publicationsId;
    }

    /**
     * Sets the publicationsId
     *
     * @param \integer $publicationsId
     * @return void
     */
    public function setPublicationsId($publicationsId) {
        $this->publicationsId = $publicationsId;
    }

    /**
     * Returns the publicationsLog
     *
     * @return \integer $publicationsLog
     */
    public function getPublicationsLog() {
        return $this->publicationsLog;
    }

    /**
     * Sets the publicationsLog
     *
     * @param \integer $publicationsLog
     * @return void
     */
    public function setPublicationsLog($publicationsLog) {
        $this->publicationsLog = $publicationsLog;
    }

    /**
     * Returns the publicationsIsbn10
     *
     * @return \string $publicationsIsbn10
     */
    public function getPublicationsIsbn10() {
        return $this->publicationsIsbn10;
    }

    /**
     * Sets the publicationsIsbn10
     *
     * @param \string $publicationsIsbn10
     * @return void
     */
    public function setPublicationsIsbn10($publicationsIsbn10) {
        $this->publicationsIsbn10 = $publicationsIsbn10;
    }

    /**
     * Returns the publicationsIsbn13
     *
     * @return \string $publicationsIsbn13
     */
    public function getPublicationsIsbn13() {
        return $this->publicationsIsbn13;
    }

    /**
     * Sets the publicationsIsbn13
     *
     * @param \string $publicationsIsbn13
     * @return void
     */
    public function setPublicationsIsbn13($publicationsIsbn13) {
        $this->publicationsIsbn13 = $publicationsIsbn13;
    }

    /**
     * Returns the publicationsIssn
     *
     * @return \string $publicationsIssn
     */
    public function getPublicationsIssn() {
        return $this->publicationsIssn;
    }

    /**
     * Sets the publicationsIssn
     *
     * @param \string $publicationsIssn
     * @return void
     */
    public function setPublicationsIssn($publicationsIssn) {
        $this->publicationsIssn = $publicationsIssn;
    }

    /**
     * Returns the publicationsPublisher
     *
     * @return \string $publicationsPublisher
     */
    public function getPublicationsPublisher() {
        return $this->publicationsPublisher;
    }

    /**
     * Sets the publicationsPublisher
     *
     * @param \string $publicationsPublisher
     * @return void
     */
    public function setPublicationsPublisher($publicationsPublisher) {
        $this->publicationsPublisher = $publicationsPublisher;
    }

    /**
     * Returns the publicationsYear
     *
     * @return \integer $publicationsYear
     */
    public function getPublicationsYear() {
        return $this->publicationsYear;
    }

    /**
     * Sets the publicationsYear
     *
     * @param \integer $publicationsYear
     * @return void
     */
    public function setPublicationsYear($publicationsYear) {
        $this->publicationsYear = $publicationsYear;
    }

    /**
     * Get start time
     *
     * @return \DateTime
     */
    public function getpublicationsStarttime() {
        return $this->publicationsStarttime;
    }

    /**
     * Set start time
     *
     * @param integer $publicationsStarttime start time
     * @return void
     */
    public function setpublicationsStarttime($publicationsStarttime) {
        $this->publicationsStarttime = $publicationsStarttime;
    }

    /**
     * Get year of publicationsStarttime
     *
     * @return integer
     */
    public function getYearOfpublicationsStarttime() {
        return $this->getpublicationsStarttime()->format('Y');
    }

    /**
     * Get month of publicationsStarttime
     *
     * @return integer
     */
    public function getMonthOfpublicationsStarttime() {
        return $this->getpublicationsStarttime()->format('m');
    }

    /**
     * Get day of publicationsStarttime
     *
     * @return integer
     */
    public function getDayOfpublicationsStarttime() {
        return (int)$this->publicationsStarttime->format('d');
    }


    /**
     * Get end time
     *
     * @return \DateTime
     */
    public function getpublicationsEndtime() {
        return $this->publicationsEndtime;
    }

    /**
     * Set end time
     *
     * @param integer $publicationsEndtime end time
     * @return void
     */
    public function setpublicationsEndtime($publicationsEndtime) {
        $this->publicationsEndtime = $publicationsEndtime;
    }

    /**
     * Get year of publicationsEndtime
     *
     * @return integer
     */
    public function getYearOfpublicationsEndtime() {
        return $this->getpublicationsEndtime()->format('Y');
    }

    /**
     * Get month of publicationsEndtime
     *
     * @return integer
     */
    public function getMonthOfpublicationsEndtime() {
        return $this->getpublicationsEndtime()->format('m');
    }

    /**
     * Get day of publicationsEndtime
     *
     * @return integer
     */
    public function getDayOfpublicationsEndtime() {
        return (int)$this->publicationsEndtime->format('d');
    }

    /**
     * Returns the publicationsPartners
     *
     * @return \string $publicationsPartners
     */
    public function getPublicationsPartners() {
        return $this->publicationsPartners;
    }

    /**
     * Sets the publicationsPartners
     *
     * @param \string $publicationsPartners
     * @return void
     */
    public function setPublicationsPartners($publicationsPartners) {
        $this->publicationsPartners = $publicationsPartners;
    }

    /**
     * Returns the publicationsAuthor
     *
     * @return \string $publicationsAuthor
     */
    public function getPublicationsAuthor() {
        return $this->publicationsAuthor;
    }

    /**
     * Sets the publicationsAuthor
     *
     * @param \string $publicationsAuthor
     * @return void
     */
    public function setPublicationsAuthor($publicationsAuthor) {
        $this->publicationsAuthor = $publicationsAuthor;
    }

    /**
     * Returns the publicationsCorporate
     *
     * @return \string $publicationsCorporate
     */
    public function getPublicationsCorporate() {
        return $this->publicationsCorporate;
    }

    /**
     * Sets the publicationsCorporate
     *
     * @param \string $publicationsCorporate
     * @return void
     */
    public function setPublicationsCorporate($publicationsCorporate) {
        $this->publicationsCorporate = $publicationsCorporate;
    }

    /**
     * Returns the publicationsFormat
     *
     * @return \string $publicationsFormat
     */
    public function getPublicationsFormat() {
        return $this->publicationsFormat;
    }

    /**
     * Sets the publicationsFormat
     *
     * @param \string $publicationsFormat
     * @return void
     */
    public function setPublicationsFormat($publicationsFormat) {
        $this->publicationsFormat = $publicationsFormat;
    }

    /**
     * Returns the publicationsLanguage
     *
     * @return \string $publicationsLanguage
     */
    public function getPublicationsLanguage() {
        return $this->publicationsLanguage;
    }

    /**
     * Sets the publicationsLanguage
     *
     * @param \string $publicationsLanguage
     * @return void
     */
    public function setPublicationsLanguage($publicationsLanguage) {
        $this->publicationsLanguage = $publicationsLanguage;
    }

    /**
     * Returns the publicationsReference
     *
     * @return \string $publicationsReference
     */
    public function getPublicationsReference() {
        return $this->publicationsReference;
    }

    /**
     * Sets the publicationsReference
     *
     * @param \string $publicationsReference
     * @return void
     */
    public function setPublicationsReference($publicationsReference) {
        $this->publicationsReference = $publicationsReference;
    }

    /**
     * Returns the publicationsPages
     *
     * @return \string $publicationsPages
     */
    public function getPublicationsPages() {
        return $this->publicationsPages;
    }

    /**
     * Sets the publicationsPages
     *
     * @param \string $publicationsPages
     * @return void
     */
    public function setPublicationsPages($publicationsPages) {
        $this->publicationsPages = $publicationsPages;
    }

}