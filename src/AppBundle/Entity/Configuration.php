<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Mosque;

/**
 * Configuration
 */
class Configuration {

    const SOURCE_API = 'api';
    const SOURCE_CALENDAR = 'calendar';
    const SOURCE_CHOICES = [
        self::SOURCE_API,
        self::SOURCE_CALENDAR
    ];
    const METHOD_ISNA = 'ISNA';
    const METHOD_UOIF = 'UOIF';
    const METHOD_Karachi = 'Karachi';
    const METHOD_MWL = 'MWL';
    const METHOD_Makkah = 'Makkah';
    const METHOD_Egypt = 'Egypt';
    const METHOD_CUSTOM = 'CUSTOM';
    const METHOD_CHOICES = [
        self::METHOD_ISNA,
        self::METHOD_UOIF,
        self::METHOD_Karachi,
        self::METHOD_MWL,
        self::METHOD_Makkah,
        self::METHOD_Egypt,
        self::METHOD_CUSTOM,
    ];

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $jumuaTime = "13:30";

    /**
     * @var boolean
     */
    private $jumuaAsDuhr = false;
    
    /**
     * @var boolean
     */
    private $noJumua = false;
    
    /**
     * @var boolean
     */
    private $jumuaDhikrReminderEnabled = false;
    
    /**
     * @var integer
     */
    private $jumuaDhikrReminderTimeout = 20;

    /**
     * @var string
     */
    private $aidTime;

    /**
     * @var int
     */
    private $imsakNbMinBeforeFajr = 0;

    /**
     * @var string
     */
    private $maximumIshaTimeForNoWaiting;

    /**
     * @var array
     */
    private $waitingTimes = [10, 10, 10, 5, 10];

    /**
     * @var array
     */
    private $adjustedTimes = [0, 0, 0, 0, 0];

    /**
     * @var array
     */
    private $fixedTimes = ["", "", "", "", ""];

    /**
     * @var array
     */
    private $duaAfterPrayerShowTimes = [11, 9, 9, 9, 10];

    /**
     * @var int
     */
    private $hijriAdjustment = 0;

    /**
     * @var bool
     */
    private $hijriDateEnabled = true;

    /**
     * @var bool
     */
    private $duaAfterAzanEnabled = true;

    /**
     * @var bool
     */
    private $duaAfterPrayerEnabled = true;

    /**
     * @var bool
     */
    private $azanBip = true;

    /**
     * @var bool
     */
    private $azanVoiceEnabled = false;

    /**
     * @var bool
     */
    private $iqamaBip = true;

    /**
     * @var bool
     */
    private $urlQrCodeEnabled = true;

    /**
     * @var string
     */
    private $sourceCalcul = self::SOURCE_API;

    /**
     * @var string
     */
    private $prayerMethod = 'ISNA';

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $timezone = 'auto';

    /**
     * @var string
     */
    private $dst = 'auto';

    /**
     * @var int
     */
    private $fajrDegree;

    /**
     * @var int
     */
    private $ishaDegree;

    /**
     * @var int
     */
    private $iqamaDisplayTime = 45;

    /**
     * @var int
     */
    private $azanDuaDisplayTime = 30;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $prayerTimeSite;

    /**
     * @var array
     */
    private $calendar = [];

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var Mosque
     */
    private $mosque;

    /**
     * @var bool
     */
    private $smallScreen = false;
    
    /**
     * @var bool
     */
    private $randomHadithEnabled = true;

    /**
     * @var string
     */
    private $backgroundColor = "#000000";

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set jumuaTime
     *
     * @param string $jumuaTime
     *
     * @return Configuration
     */
    public function setJumuaTime($jumuaTime) {
        $this->jumuaTime = $jumuaTime;

        return $this;
    }

    /**
     * Get jumuaTime
     *
     * @return string
     */
    public function getJumuaTime() {
        return $this->jumuaTime;
    }

    function isJumuaAsDuhr() {
        return $this->jumuaAsDuhr;
    }

    function setJumuaAsDuhr($jumuaAsDuhr) {
        $this->jumuaAsDuhr = $jumuaAsDuhr;
    }

    /**
     * Set aidTime
     *
     * @param string $aidTime
     *
     * @return Configuration
     */
    public function setAidTime($aidTime) {
        $this->aidTime = $aidTime;

        return $this;
    }

    /**
     * Get aidTime
     *
     * @return string
     */
    public function getAidTime() {
        return $this->aidTime;
    }

    /**
     * Set imsakNbMinBeforeFajr
     *
     * @param integer $imsakNbMinBeforeFajr
     *
     * @return Configuration
     */
    public function setImsakNbMinBeforeFajr($imsakNbMinBeforeFajr) {
        $this->imsakNbMinBeforeFajr = $imsakNbMinBeforeFajr;

        return $this;
    }

    /**
     * Get imsakNbMinBeforeFajr
     *
     * @return int
     */
    public function getImsakNbMinBeforeFajr() {
        return $this->imsakNbMinBeforeFajr;
    }

    /**
     * Set maximumIshaTimeForNoWaiting
     *
     * @param string $maximumIshaTimeForNoWaiting
     *
     * @return Configuration
     */
    public function setMaximumIshaTimeForNoWaiting($maximumIshaTimeForNoWaiting) {
        $this->maximumIshaTimeForNoWaiting = $maximumIshaTimeForNoWaiting;

        return $this;
    }

    /**
     * Get maximumIshaTimeForNoWaiting
     *
     * @return \DateTime
     */
    public function getMaximumIshaTimeForNoWaiting() {
        return $this->maximumIshaTimeForNoWaiting;
    }

    /**
     * Set waitingTimes
     *
     * @param array $waitingTimes
     *
     * @return Configuration
     */
    public function setWaitingTimes($waitingTimes) {
        $this->waitingTimes = $waitingTimes;

        return $this;
    }

    /**
     * Get waitingTimes
     *
     * @return array
     */
    public function getWaitingTimes() {
        return array_map(function($value) {
            return (int) $value;
        }, $this->waitingTimes);
    }

    /**
     * Set prayerTimesAdjustment
     *
     * @param array $adjustedTimes
     *
     * @return Configuration
     */
    public function setAdjustedTimes($adjustedTimes) {
        $this->adjustedTimes = $adjustedTimes;

        return $this;
    }

    /**
     * Get adjustedTimes
     *
     * @return array
     */
    public function getAdjustedTimes() {
        return $this->adjustedTimes;
    }

    /**
     * Set prayerTimesFixing
     *
     * @param array $fixedTimes
     *
     * @return Configuration
     */
    public function setFixedTimes($fixedTimes) {
        $this->fixedTimes = $fixedTimes;

        return $this;
    }

    /**
     * Get fixedTimes
     *
     * @return array
     */
    public function getFixedTimes() {
        return $this->fixedTimes;
    }

    /**
     * Set duaAfterPrayerShowTimes
     *
     * @param array $duaAfterPrayerShowTimes
     *
     * @return Configuration
     */
    public function setDuaAfterPrayerShowTimes($duaAfterPrayerShowTimes) {
        $this->duaAfterPrayerShowTimes = $duaAfterPrayerShowTimes;

        return $this;
    }

    /**
     * Get duaAfterPrayerShowTimes
     *
     * @return array
     */
    public function getDuaAfterPrayerShowTimes() {
        return $this->duaAfterPrayerShowTimes;
    }

    /**
     * Set hijriAdjustment
     *
     * @param integer $hijriAdjustment
     *
     * @return Configuration
     */
    public function setHijriAdjustment($hijriAdjustment) {
        $this->hijriAdjustment = $hijriAdjustment;

        return $this;
    }

    /**
     * Get hijriAdjustment
     *
     * @return int
     */
    public function getHijriAdjustment() {
        return $this->hijriAdjustment;
    }

    /**
     * Set hijriDateEnabled
     *
     * @param boolean $hijriDateEnabled
     *
     * @return Configuration
     */
    public function setHijriDateEnabled($hijriDateEnabled) {
        $this->hijriDateEnabled = $hijriDateEnabled;

        return $this;
    }

    /**
     * Get hijriDateEnabled
     *
     * @return bool
     */
    public function getHijriDateEnabled() {
        return $this->hijriDateEnabled;
    }

    /**
     * Set duaAfterAzanEnabled
     *
     * @param boolean $duaAfterAzanEnabled
     *
     * @return Configuration
     */
    public function setDuaAfterAzanEnabled($duaAftertdhanEnabled) {
        $this->duaAfterAzanEnabled = $duaAftertdhanEnabled;

        return $this;
    }

    /**
     * Get duaAfterAzanEnabled
     *
     * @return bool
     */
    public function getDuaAfterAzanEnabled() {
        return $this->duaAfterAzanEnabled;
    }

    /**
     * Set duaAfterPrayerEnabled
     *
     * @param boolean $duaAfterPrayerEnabled
     *
     * @return Configuration
     */
    public function setDuaAfterPrayerEnabled($duaAfterPrayerEnabled) {
        $this->duaAfterPrayerEnabled = $duaAfterPrayerEnabled;

        return $this;
    }

    /**
     * Get douaaAfterPrayerEnabled
     *
     * @return bool
     */
    public function getDuaAfterPrayerEnabled() {
        return $this->duaAfterPrayerEnabled;
    }

    /**
     * Set urlQrCodeEnabled
     *
     * @param boolean $urlQrCodeEnabled
     *
     * @return Configuration
     */
    public function setUrlQrCodeEnabled($urlQrCodeEnabled) {
        $this->urlQrCodeEnabled = $urlQrCodeEnabled;

        return $this;
    }

    /**
     * Get urlQrCodeEnabled
     *
     * @return bool
     */
    public function getUrlQrCodeEnabled() {
        return $this->urlQrCodeEnabled;
    }

    /**
     * Set sourceCalcul
     *
     * @param string $sourceCalcul
     *
     * @return Configuration
     */
    public function setSourceCalcul($sourceCalcul) {
        $this->sourceCalcul = $sourceCalcul;

        return $this;
    }

    /**
     * Get sourceCalcul
     *
     * @return string
     */
    public function getSourceCalcul() {
        return $this->sourceCalcul;
    }

    /**
     * Set prayerMethod
     *
     * @param string $prayerMethod
     *
     * @return Configuration
     */
    public function setPrayerMethod($prayerMethod) {
        $this->prayerMethod = $prayerMethod;

        return $this;
    }

    /**
     * Set latitude
     *
     * @param integer $latitude
     *
     * @return Mosque
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return int
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param integer $longitude
     *
     * @return Mosque
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return int
     */
    public function getLongitude() {
        return $this->longitude;
    }

    function getTimezone() {
        return $this->timezone;
    }

    function setTimezone($timezone) {
        $this->timezone = $timezone;
    }

    function getDst() {
        return $this->dst;
    }

    function setDst($dst) {
        $this->dst = $dst;
    }

    /**
     * Get prayerMethod
     *
     * @return string
     */
    public function getPrayerMethod() {
        return $this->prayerMethod;
    }

    /**
     * Set fajrDegree
     *
     * @param integer $fajrDegree
     *
     * @return Configuration
     */
    public function setFajrDegree($fajrDegree) {
        $this->fajrDegree = $fajrDegree;

        return $this;
    }

    /**
     * Get fajrDegree
     *
     * @return int
     */
    public function getFajrDegree() {
        return $this->fajrDegree;
    }

    /**
     * Set ishaDegree
     *
     * @param integer $ishaDegree
     *
     * @return Configuration
     */
    public function setIshaDegree($ishaDegree) {
        $this->ishaDegree = $ishaDegree;

        return $this;
    }

    /**
     * Get ishaDegree
     *
     * @return int
     */
    public function getIshaDegree() {
        return $this->ishaDegree;
    }

    /**
     * Set iqamaDisplayTime
     *
     * @param integer $iqamaDisplayTime
     *
     * @return Configuration
     */
    public function setIqamaDisplayTime($iqamaDisplayTime) {
        $this->iqamaDisplayTime = $iqamaDisplayTime;

        return $this;
    }

    /**
     * Get iqamaDisplayTime
     *
     * @return int
     */
    public function getIqamaDisplayTime() {
        return $this->iqamaDisplayTime;
    }

    /**
     * Set azanDuaDisplayTime
     *
     * @param integer $azanDuaDisplayTime
     *
     * @return Configuration
     */
    public function setAzanDuaDisplayTime($azanDuaDisplayTime) {
        $this->azanDuaDisplayTime = $azanDuaDisplayTime;

        return $this;
    }

    /**
     * Get adhanDouaaDisplayTime
     *
     * @return int
     */
    public function getAzanDuaDisplayTime() {
        return $this->azanDuaDisplayTime;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Configuration
     */
    public function setSite($site) {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * Set prayerTimeSite
     *
     * @param string $prayerTimeSite
     *
     * @return Configuration
     */
    public function setPrayerTimeSite($prayerTimeSite) {
        $this->prayerTimeSite = $prayerTimeSite;

        return $this;
    }

    /**
     * Get prayerTimeSite
     *
     * @return string
     */
    public function getPrayerTimeSite() {
        return $this->prayerTimeSite;
    }

    /**
     * Set calendar
     *
     * @param string $prayerTimeSite
     *
     * @return Configuration
     */
    public function setCalendar($calendar) {
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Get calendar
     *
     * @return string
     */
    public function getCalendar(): array {
        return $this->calendar;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Configuration
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param string $updated
     *
     * @return Configuration
     */
    public function setUpdated($updated) {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return string
     */
    public function getUpdated() {
        return $this->updated;
    }

    function getMosque() {
        return $this->mosque;
    }

    function setMosque(Mosque $mosque) {
        $this->mosque = $mosque;
    }

    function getAzanBip() {
        return $this->azanBip;
    }

    function getIqamaBip() {
        return $this->iqamaBip;
    }

    function setAzanBip($azanBip) {
        $this->azanBip = $azanBip;
    }

    function setIqamaBip($iqamaBip) {
        $this->iqamaBip = $iqamaBip;
    }

    function isAzanVoiceEnabled() {
        return $this->azanVoiceEnabled;
    }

    function setAzanVoiceEnabled($azanVoiceEnabled) {
        $this->azanVoiceEnabled = $azanVoiceEnabled;
    }

    function isCalendar() {
        return $this->sourceCalcul === self::SOURCE_CALENDAR;
    }

    /**
     * Get formated array config for js use
     * @return array
     */
    public function getFormatedConfig() {
        return [
            "joumouaaTime" => $this->getJumuaTime(),
            "jumuaAsDuhr" => $this->isJumuaAsDuhr(),
            "aidTime" => $this->getAidTime(),
            "imsakNbMinBeforeSobh" => $this->getImsakNbMinBeforeFajr(),
            "maximumIchaTimeForNoWaiting" => $this->getMaximumIshaTimeForNoWaiting(),
            "prayersWaitingTimes" => $this->getWaitingTimes(),
            "duaAfterPrayerShowTimes" => $this->getDuaAfterPrayerShowTimes(),
            "prayerTimesAdjustment" => $this->getAdjustedTimes(),
            "prayerTimesFixing" => $this->getFixedTimes(),
            "hijriAdjustment" => $this->getHijriAdjustment(),
            "hijriDateEnabled" => $this->getHijriDateEnabled(),
            "azanBip" => $this->getAzanBip(),
            "azanVoiceEnabled" => $this->isAzanVoiceEnabled(),
            "iqamaBip" => $this->getIqamaBip(),
            "douaaAfterAdhanEnabled" => $this->getDuaAfterAzanEnabled(),
            "douaaAfterPrayerEnabled" => $this->getDuaAfterPrayerEnabled(),
            "calculChoice" => $this->getSourceCalcul(),
            "prayerMethod" => $this->getPrayerMethod(),
            "latitude" => $this->getLatitude(),
            "longitude" => $this->getLongitude(),
            "timezone" => $this->getTimezone(),
            "dst" => $this->getDst(),
            "fajrDegree" => $this->getFajrDegree(),
            "ichaaDegree" => $this->getIshaDegree(),
            "iqamaDisplayTime" => $this->getIqamaDisplayTime(),
            "adhanDouaaDisplayTime" => $this->getAzanDuaDisplayTime(),
            "slug" => $this->mosque->getSlug(),
            "lastUpdatedDate" => $this->mosque->getUpdated(),
            "backgroundColor" => $this->getBackgroundColor(),
            "calendar" => $this->getCalendar(),
            "noJumua" => $this->isNoJumua(),
            "jumuaDhikrReminderEnabled" => $this->isJumuaDhikrReminderEnabled(),
            "jumuaDhikrReminderTimeout" => $this->getJumuaDhikrReminderTimeout(),
            "randomHadithEnabled" => $this->isRandomHadithEnabled(),
        ];
    }

    /**
     * @return boolean
     */
    function getSmallScreen() {
        return $this->smallScreen;
    }

    function setSmallScreen($smallScreen) {
        $this->smallScreen = $smallScreen;
    }

    /**
     * @return string
     */
    function getBackgroundColor() {
        return $this->backgroundColor;
    }

    function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    function isNoJumua() {
        return $this->noJumua;
    }

    function setNoJumua($noJumua) {
        $this->noJumua = $noJumua;
    }
    
    function isJumuaDhikrReminderEnabled() {
        return $this->jumuaDhikrReminderEnabled;
    }

    function getJumuaDhikrReminderTimeout() {
        return $this->jumuaDhikrReminderTimeout;
    }

    function setJumuaDhikrReminderEnabled($jumuaDhikrReminderEnabled) {
        $this->jumuaDhikrReminderEnabled = $jumuaDhikrReminderEnabled;
    }

    function setJumuaDhikrReminderTimeout($jumuaDhikrReminderTimeout) {
        $this->jumuaDhikrReminderTimeout = $jumuaDhikrReminderTimeout;
    }
    
    function isRandomHadithEnabled() {
        return $this->randomHadithEnabled;
    }

    function setRandomHadithEnabled($randomHadithEnabled) {
        $this->randomHadithEnabled = $randomHadithEnabled;
    }

}
