<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3events".
 *
 * Auto generated 05-02-2018 18:13
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Events',
  'description' => 'Manage events, show teasers, list and single views.',
  'category' => 'plugin',
  'version' => '0.42.0',
  'state' => 'beta',
  'uploadfolder' => 1,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'author' => 'Dirk Wenzel, Michael Kasten',
  'author_email' => 't3events@gmx.de, kasten@webfox01.de',
  'author_company' => 'Agentur Webfox GmbH, Consulting Piezunka Schamoni - Information Technologies GmbH',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '8.7.0-8.7.99',
      't3calendar' => '0.4.0-0.0.0',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:487:{s:9:"ChangeLog";s:4:"0117";s:9:"README.md";s:4:"0c20";s:20:"class.ext_update.php";s:4:"7242";s:13:"composer.json";s:4:"8bee";s:21:"ext_conf_template.txt";s:4:"59cb";s:12:"ext_icon.gif";s:4:"fed2";s:17:"ext_localconf.php";s:4:"93d5";s:14:"ext_tables.php";s:4:"e182";s:14:"ext_tables.sql";s:4:"6011";s:28:"ext_typoscript_constants.txt";s:4:"885b";s:24:"ext_typoscript_setup.txt";s:4:"b837";s:27:"Classes/CallStaticTrait.php";s:4:"d302";s:41:"Classes/InvalidConfigurationException.php";s:4:"a7ac";s:36:"Classes/InvalidFileTypeException.php";s:4:"3988";s:32:"Classes/MissingFileException.php";s:4:"9d59";s:33:"Classes/PatternReplacingTrait.php";s:4:"6a2d";s:37:"Classes/ResourceNotFoundException.php";s:4:"93dd";s:38:"Classes/UnsupportedMethodException.php";s:4:"1ba6";s:44:"Classes/Command/CleanUpCommandController.php";s:4:"312d";s:41:"Classes/Command/TaskCommandController.php";s:4:"dd68";s:51:"Classes/Configuration/ConfigurationManagerTrait.php";s:4:"b6ba";s:48:"Classes/Configuration/PeriodConstraintLegend.php";s:4:"6307";s:48:"Classes/Controller/AbstractBackendController.php";s:4:"e5f5";s:41:"Classes/Controller/AbstractController.php";s:4:"f6cc";s:46:"Classes/Controller/AudienceRepositoryTrait.php";s:4:"fe17";s:46:"Classes/Controller/CategoryRepositoryTrait.php";s:4:"60d3";s:45:"Classes/Controller/CompanyRepositoryTrait.php";s:4:"2554";s:34:"Classes/Controller/DemandTrait.php";s:4:"3f11";s:36:"Classes/Controller/DownloadTrait.php";s:4:"6bd7";s:49:"Classes/Controller/EntityNotFoundHandlerTrait.php";s:4:"8f93";s:38:"Classes/Controller/EventController.php";s:4:"aaf3";s:46:"Classes/Controller/EventDemandFactoryTrait.php";s:4:"9a0d";s:51:"Classes/Controller/EventLocationRepositoryTrait.php";s:4:"1452";s:43:"Classes/Controller/EventRepositoryTrait.php";s:4:"dcaa";s:47:"Classes/Controller/EventTypeRepositoryTrait.php";s:4:"dd76";s:52:"Classes/Controller/FilterableControllerInterface.php";s:4:"11b4";s:48:"Classes/Controller/FilterableControllerTrait.php";s:4:"1270";s:40:"Classes/Controller/FlashMessageTrait.php";s:4:"96d1";s:43:"Classes/Controller/GenreRepositoryTrait.php";s:4:"bfe0";s:38:"Classes/Controller/ModuleDataTrait.php";s:4:"4321";s:50:"Classes/Controller/NotificationRepositoryTrait.php";s:4:"2e21";s:47:"Classes/Controller/NotificationServiceTrait.php";s:4:"e813";s:44:"Classes/Controller/PerformanceController.php";s:4:"73fd";s:52:"Classes/Controller/PerformanceDemandFactoryTrait.php";s:4:"9ac1";s:49:"Classes/Controller/PerformanceRepositoryTrait.php";s:4:"a385";s:46:"Classes/Controller/PersistenceManagerTrait.php";s:4:"d694";s:47:"Classes/Controller/PersonDemandFactoryTrait.php";s:4:"9ce8";s:50:"Classes/Controller/RoutableControllerInterface.php";s:4:"c1f5";s:35:"Classes/Controller/RoutingTrait.php";s:4:"7fd1";s:34:"Classes/Controller/SearchTrait.php";s:4:"3cd5";s:35:"Classes/Controller/SessionTrait.php";s:4:"f60c";s:43:"Classes/Controller/SettingsUtilityTrait.php";s:4:"a142";s:38:"Classes/Controller/SignalInterface.php";s:4:"a8c1";s:34:"Classes/Controller/SignalTrait.php";s:4:"c2ff";s:42:"Classes/Controller/TaskRepositoryTrait.php";s:4:"148d";s:37:"Classes/Controller/TranslateTrait.php";s:4:"054d";s:43:"Classes/Controller/VenueRepositoryTrait.php";s:4:"989c";s:46:"Classes/Controller/Backend/EventController.php";s:4:"69b2";s:49:"Classes/Controller/Backend/ScheduleController.php";s:4:"d66a";s:36:"Classes/Controller/Routing/Route.php";s:4:"a30b";s:37:"Classes/Controller/Routing/Router.php";s:4:"d2cd";s:46:"Classes/Controller/Routing/RouterInterface.php";s:4:"2ea7";s:57:"Classes/DataProvider/Form/EventPluginFormDataProvider.php";s:4:"f69b";s:58:"Classes/DataProvider/Legend/AbstractPeriodDataProvider.php";s:4:"6e06";s:66:"Classes/DataProvider/Legend/LayeredLegendDataProviderInterface.php";s:4:"1acb";s:53:"Classes/DataProvider/Legend/PeriodAllDataProvider.php";s:4:"a7ad";s:57:"Classes/DataProvider/Legend/PeriodDataProviderFactory.php";s:4:"3121";s:56:"Classes/DataProvider/Legend/PeriodFutureDataProvider.php";s:4:"34c5";s:54:"Classes/DataProvider/Legend/PeriodPastDataProvider.php";s:4:"9822";s:58:"Classes/DataProvider/Legend/PeriodSpecificDataProvider.php";s:4:"0257";s:57:"Classes/DataProvider/Legend/PeriodUnknownDataProvider.php";s:4:"1914";s:69:"Classes/DataProvider/RouteLoader/RouteLoaderDataProviderInterface.php";s:4:"e17d";s:52:"Classes/Domain/Factory/Dto/AbstractDemandFactory.php";s:4:"1b28";s:53:"Classes/Domain/Factory/Dto/DemandFactoryInterface.php";s:4:"c661";s:49:"Classes/Domain/Factory/Dto/EventDemandFactory.php";s:4:"e580";s:47:"Classes/Domain/Factory/Dto/MapPropertyTrait.php";s:4:"c855";s:55:"Classes/Domain/Factory/Dto/PerformanceDemandFactory.php";s:4:"008f";s:60:"Classes/Domain/Factory/Dto/PeriodAwareDemandFactoryTrait.php";s:4:"8d20";s:50:"Classes/Domain/Factory/Dto/PersonDemandFactory.php";s:4:"943c";s:48:"Classes/Domain/Factory/Dto/SkipPropertyTrait.php";s:4:"7450";s:37:"Classes/Domain/Model/AddressTrait.php";s:4:"8bd7";s:33:"Classes/Domain/Model/Audience.php";s:4:"ec37";s:43:"Classes/Domain/Model/CategorizableTrait.php";s:4:"865b";s:33:"Classes/Domain/Model/Category.php";s:4:"2121";s:32:"Classes/Domain/Model/Company.php";s:4:"7be7";s:32:"Classes/Domain/Model/Content.php";s:4:"5004";s:30:"Classes/Domain/Model/Event.php";s:4:"e3fd";s:38:"Classes/Domain/Model/EventLocation.php";s:4:"d75a";s:34:"Classes/Domain/Model/EventType.php";s:4:"ceb8";s:30:"Classes/Domain/Model/Genre.php";s:4:"f971";s:43:"Classes/Domain/Model/GeoCodingInterface.php";s:4:"eeb2";s:37:"Classes/Domain/Model/Notification.php";s:4:"b72a";s:34:"Classes/Domain/Model/Organizer.php";s:4:"c3d3";s:36:"Classes/Domain/Model/Performance.php";s:4:"25c5";s:42:"Classes/Domain/Model/PerformanceStatus.php";s:4:"c936";s:31:"Classes/Domain/Model/Person.php";s:4:"d8c2";s:35:"Classes/Domain/Model/PersonType.php";s:4:"119a";s:29:"Classes/Domain/Model/Task.php";s:4:"ffe6";s:36:"Classes/Domain/Model/TicketClass.php";s:4:"d2f7";s:30:"Classes/Domain/Model/Venue.php";s:4:"2490";s:43:"Classes/Domain/Model/Dto/AbstractDemand.php";s:4:"3932";s:57:"Classes/Domain/Model/Dto/AudienceAwareDemandInterface.php";s:4:"5ea6";s:53:"Classes/Domain/Model/Dto/AudienceAwareDemandTrait.php";s:4:"442c";s:57:"Classes/Domain/Model/Dto/CategoryAwareDemandInterface.php";s:4:"9e89";s:53:"Classes/Domain/Model/Dto/CategoryAwareDemandTrait.php";s:4:"5a71";s:44:"Classes/Domain/Model/Dto/DemandInterface.php";s:4:"8b47";s:44:"Classes/Domain/Model/Dto/EmConfiguration.php";s:4:"5598";s:40:"Classes/Domain/Model/Dto/EventDemand.php";s:4:"204a";s:62:"Classes/Domain/Model/Dto/EventLocationAwareDemandInterface.php";s:4:"1438";s:58:"Classes/Domain/Model/Dto/EventLocationAwareDemandTrait.php";s:4:"8f20";s:58:"Classes/Domain/Model/Dto/EventTypeAwareDemandInterface.php";s:4:"a4b0";s:54:"Classes/Domain/Model/Dto/EventTypeAwareDemandTrait.php";s:4:"e10a";s:54:"Classes/Domain/Model/Dto/GenreAwareDemandInterface.php";s:4:"57e0";s:50:"Classes/Domain/Model/Dto/GenreAwareDemandTrait.php";s:4:"c7a2";s:51:"Classes/Domain/Model/Dto/LocationAwareInterface.php";s:4:"8853";s:47:"Classes/Domain/Model/Dto/LocationAwareTrait.php";s:4:"0f73";s:39:"Classes/Domain/Model/Dto/ModuleData.php";s:4:"c7dc";s:54:"Classes/Domain/Model/Dto/OrderAwareDemandInterface.php";s:4:"109f";s:50:"Classes/Domain/Model/Dto/OrderAwareDemandTrait.php";s:4:"a41b";s:46:"Classes/Domain/Model/Dto/PerformanceDemand.php";s:4:"727c";s:55:"Classes/Domain/Model/Dto/PeriodAwareDemandInterface.php";s:4:"3b97";s:51:"Classes/Domain/Model/Dto/PeriodAwareDemandTrait.php";s:4:"0a2a";s:41:"Classes/Domain/Model/Dto/PersonDemand.php";s:4:"96a0";s:35:"Classes/Domain/Model/Dto/Search.php";s:4:"a523";s:55:"Classes/Domain/Model/Dto/SearchAwareDemandInterface.php";s:4:"4aa5";s:51:"Classes/Domain/Model/Dto/SearchAwareDemandTrait.php";s:4:"5f51";s:42:"Classes/Domain/Model/Dto/SearchFactory.php";s:4:"6a61";s:55:"Classes/Domain/Model/Dto/StatusAwareDemandInterface.php";s:4:"c70d";s:51:"Classes/Domain/Model/Dto/StatusAwareDemandTrait.php";s:4:"9186";s:54:"Classes/Domain/Model/Dto/VenueAwareDemandInterface.php";s:4:"2cac";s:50:"Classes/Domain/Model/Dto/VenueAwareDemandTrait.php";s:4:"f621";s:56:"Classes/Domain/Repository/AbstractDemandedRepository.php";s:4:"e973";s:67:"Classes/Domain/Repository/AudienceConstraintRepositoryInterface.php";s:4:"ac13";s:63:"Classes/Domain/Repository/AudienceConstraintRepositoryTrait.php";s:4:"38da";s:48:"Classes/Domain/Repository/AudienceRepository.php";s:4:"2723";s:67:"Classes/Domain/Repository/CategoryConstraintRepositoryInterface.php";s:4:"7343";s:63:"Classes/Domain/Repository/CategoryConstraintRepositoryTrait.php";s:4:"f511";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"7520";s:47:"Classes/Domain/Repository/CompanyRepository.php";s:4:"98d0";s:47:"Classes/Domain/Repository/ContentRepository.php";s:4:"e25b";s:57:"Classes/Domain/Repository/DemandedRepositoryInterface.php";s:4:"33e7";s:53:"Classes/Domain/Repository/DemandedRepositoryTrait.php";s:4:"d151";s:53:"Classes/Domain/Repository/EventLocationRepository.php";s:4:"444c";s:45:"Classes/Domain/Repository/EventRepository.php";s:4:"119a";s:68:"Classes/Domain/Repository/EventTypeConstraintRepositoryInterface.php";s:4:"90c7";s:64:"Classes/Domain/Repository/EventTypeConstraintRepositoryTrait.php";s:4:"fd68";s:49:"Classes/Domain/Repository/EventTypeRepository.php";s:4:"5fb8";s:64:"Classes/Domain/Repository/GenreConstraintRepositoryInterface.php";s:4:"eba2";s:60:"Classes/Domain/Repository/GenreConstraintRepositoryTrait.php";s:4:"3a3b";s:45:"Classes/Domain/Repository/GenreRepository.php";s:4:"bd57";s:67:"Classes/Domain/Repository/LocationConstraintRepositoryInterface.php";s:4:"dfdd";s:63:"Classes/Domain/Repository/LocationConstraintRepositoryTrait.php";s:4:"2a26";s:52:"Classes/Domain/Repository/NotificationRepository.php";s:4:"a1f8";s:51:"Classes/Domain/Repository/PerformanceRepository.php";s:4:"8f98";s:57:"Classes/Domain/Repository/PerformanceStatusRepository.php";s:4:"fb97";s:65:"Classes/Domain/Repository/PeriodConstraintRepositoryInterface.php";s:4:"9d8a";s:61:"Classes/Domain/Repository/PeriodConstraintRepositoryTrait.php";s:4:"5041";s:46:"Classes/Domain/Repository/PersonRepository.php";s:4:"8db8";s:65:"Classes/Domain/Repository/StatusConstraintRepositoryInterface.php";s:4:"b63d";s:61:"Classes/Domain/Repository/StatusConstraintRepositoryTrait.php";s:4:"5d9e";s:44:"Classes/Domain/Repository/TaskRepository.php";s:4:"e205";s:53:"Classes/Domain/Repository/TaskRepositoryInterface.php";s:4:"7427";s:64:"Classes/Domain/Repository/VenueConstraintRepositoryInterface.php";s:4:"23a7";s:60:"Classes/Domain/Repository/VenueConstraintRepositoryTrait.php";s:4:"d60d";s:45:"Classes/Domain/Repository/VenueRepository.php";s:4:"39e2";s:32:"Classes/Hooks/BackendUtility.php";s:4:"39c9";s:31:"Classes/Hooks/ItemsProcFunc.php";s:4:"f2da";s:37:"Classes/Object/ObjectManagerTrait.php";s:4:"4d0f";s:36:"Classes/Resource/ResourceFactory.php";s:4:"bc7a";s:32:"Classes/Resource/VectorImage.php";s:4:"0ed5";s:36:"Classes/Service/ExtensionService.php";s:4:"bea6";s:44:"Classes/Service/ModuleDataStorageService.php";s:4:"8a60";s:39:"Classes/Service/NotificationService.php";s:4:"60cb";s:31:"Classes/Service/RouteLoader.php";s:4:"915d";s:43:"Classes/Session/NamespaceAwareInterface.php";s:4:"eed8";s:36:"Classes/Session/SessionInterface.php";s:4:"b93c";s:39:"Classes/Session/Typo3BackendSession.php";s:4:"c7e3";s:32:"Classes/Session/Typo3Session.php";s:4:"c7b1";s:39:"Classes/Update/MigratePluginRecords.php";s:4:"e562";s:37:"Classes/Update/MigrateTaskRecords.php";s:4:"d9c4";s:42:"Classes/Utility/EmConfigurationUtility.php";s:4:"13ac";s:28:"Classes/Utility/GeoCoder.php";s:4:"4757";s:35:"Classes/Utility/SettingsUtility.php";s:4:"ec44";s:38:"Classes/Utility/TableConfiguration.php";s:4:"8739";s:41:"Classes/Utility/TemplateLayoutUtility.php";s:4:"10f6";s:26:"Classes/View/IcalTrait.php";s:4:"aba6";s:31:"Classes/View/Event/ListIcal.php";s:4:"7fd2";s:31:"Classes/View/Event/ShowIcal.php";s:4:"7a3a";s:37:"Classes/View/Performance/ListIcal.php";s:4:"ac09";s:37:"Classes/View/Performance/ShowIcal.php";s:4:"c55c";s:44:"Classes/ViewHelpers/FindEventsViewHelper.php";s:4:"a00f";s:44:"Classes/ViewHelpers/HeaderDataViewHelper.php";s:4:"f23f";s:41:"Classes/ViewHelpers/MetaTagViewHelper.php";s:4:"c1af";s:42:"Classes/ViewHelpers/TitleTagViewHelper.php";s:4:"b2cc";s:47:"Classes/ViewHelpers/Be/EditRecordViewHelper.php";s:4:"0c2a";s:52:"Classes/ViewHelpers/Event/PerformancesViewHelper.php";s:4:"73d4";s:58:"Classes/ViewHelpers/Format/AbstractDateRangeViewHelper.php";s:4:"2dc6";s:51:"Classes/ViewHelpers/Format/ArrayToCsvViewHelper.php";s:4:"fc70";s:45:"Classes/ViewHelpers/Format/DateRangeTrait.php";s:4:"631e";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"c966";s:56:"Classes/ViewHelpers/Format/Event/DateRangeViewHelper.php";s:4:"c852";s:62:"Classes/ViewHelpers/Format/Performance/DateRangeViewHelper.php";s:4:"b810";s:48:"Classes/ViewHelpers/Location/CountViewHelper.php";s:4:"1707";s:49:"Classes/ViewHelpers/Location/UniqueViewHelper.php";s:4:"5ccd";s:43:"Configuration/FlexForms/flexform_events.xml";s:4:"9636";s:55:"Configuration/TCA/tx_t3events_domain_model_audience.php";s:4:"96f3";s:54:"Configuration/TCA/tx_t3events_domain_model_company.php";s:4:"6966";s:52:"Configuration/TCA/tx_t3events_domain_model_event.php";s:4:"1f5b";s:60:"Configuration/TCA/tx_t3events_domain_model_eventlocation.php";s:4:"8c70";s:56:"Configuration/TCA/tx_t3events_domain_model_eventtype.php";s:4:"42a7";s:52:"Configuration/TCA/tx_t3events_domain_model_genre.php";s:4:"4e1a";s:59:"Configuration/TCA/tx_t3events_domain_model_notification.php";s:4:"f06b";s:56:"Configuration/TCA/tx_t3events_domain_model_organizer.php";s:4:"bb1f";s:58:"Configuration/TCA/tx_t3events_domain_model_performance.php";s:4:"c4ff";s:64:"Configuration/TCA/tx_t3events_domain_model_performancestatus.php";s:4:"0a0e";s:53:"Configuration/TCA/tx_t3events_domain_model_person.php";s:4:"1054";s:57:"Configuration/TCA/tx_t3events_domain_model_persontype.php";s:4:"c0e8";s:51:"Configuration/TCA/tx_t3events_domain_model_task.php";s:4:"f518";s:58:"Configuration/TCA/tx_t3events_domain_model_ticketclass.php";s:4:"b16d";s:52:"Configuration/TCA/tx_t3events_domain_model_venue.php";s:4:"b888";s:42:"Configuration/TCA/Overrides/tt_content.php";s:4:"cb6c";s:62:"Configuration/TCA/Overrides/tx_t3events_domain_model_event.php";s:4:"1d57";s:38:"Configuration/TSConfig/PageTSConfig.ts";s:4:"79df";s:38:"Configuration/TypoScript/constants.txt";s:4:"4999";s:34:"Configuration/TypoScript/setup.txt";s:4:"ccf7";s:23:"Documentation/Index.rst";s:4:"5a29";s:22:"Documentation/Makefile";s:4:"c4b9";s:26:"Documentation/Settings.yml";s:4:"f946";s:21:"Documentation/conf.py";s:4:"1578";s:35:"Documentation/visibility_matrix.ods";s:4:"55c1";s:51:"Documentation/AdministratorsManual/UpdateScripts.md";s:4:"9170";s:37:"Documentation/Configuration/Index.rst";s:4:"9c14";s:40:"Documentation/Configuration/Templates.md";s:4:"fcb1";s:46:"Documentation/Configuration/Overview/Index.rst";s:4:"e31a";s:32:"Documentation/Credits/Images.txt";s:4:"ed16";s:31:"Documentation/Credits/Index.rst";s:4:"f7dc";s:28:"Documentation/HowTo/HowTo.md";s:4:"2ec0";s:39:"Documentation/Images/ComboViewMonth.png";s:4:"2173";s:38:"Documentation/Images/ComboViewYear.png";s:4:"805f";s:34:"Documentation/Images/MiniMonth.png";s:4:"a7ea";s:38:"Documentation/Images/createRecords.png";s:4:"f69d";s:41:"Documentation/Images/eventExtendedTab.png";s:4:"f491";s:40:"Documentation/Images/eventGeneralTab.png";s:4:"b2d8";s:36:"Documentation/Introduction/Index.rst";s:4:"1c16";s:49:"Documentation/Introduction/WhatDoesItDo/Index.rst";s:4:"f3fc";s:33:"Documentation/To-doList/Index.rst";s:4:"5048";s:35:"Documentation/UsersManual/Index.rst";s:4:"6857";s:52:"Documentation/UsersManual/AuxiliaryRecords/Index.rst";s:4:"34b3";s:43:"Documentation/UsersManual/Events/Images.txt";s:4:"88f5";s:42:"Documentation/UsersManual/Events/Index.rst";s:4:"ce1a";s:49:"Documentation/UsersManual/InsertPlugins/Index.rst";s:4:"153b";s:45:"Documentation/UsersManual/Overview/Images.txt";s:4:"5ade";s:44:"Documentation/UsersManual/Overview/Index.rst";s:4:"439c";s:40:"Documentation/ViewHelpers/ViewHelpers.md";s:4:"f75d";s:56:"Documentation/ViewHelpers/Format/ArrayToCsvViewHelper.md";s:4:"6b6d";s:61:"Documentation/ViewHelpers/Format/Event/DateRangeViewHelper.md";s:4:"da17";s:67:"Documentation/ViewHelpers/Format/Performance/DateRangeViewHelper.md";s:4:"edcd";s:53:"Documentation/ViewHelpers/Location/CountViewHelper.md";s:4:"873a";s:54:"Documentation/ViewHelpers/Location/UniqueViewHelper.md";s:4:"2f08";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"eeba";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"2824";s:46:"Resources/Private/Language/de.locallang_m1.xlf";s:4:"8351";s:46:"Resources/Private/Language/de.locallang_m2.xlf";s:4:"5691";s:52:"Resources/Private/Language/de.locallang_mod_main.xlf";s:4:"d7bc";s:43:"Resources/Private/Language/fr.locallang.xlf";s:4:"fdb2";s:40:"Resources/Private/Language/locallang.xlf";s:4:"ec9c";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"81b3";s:53:"Resources/Private/Language/locallang_csh_flexform.xml";s:4:"a11e";s:78:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_audience.xlf";s:4:"c493";s:77:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_company.xlf";s:4:"74ff";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_event.xml";s:4:"a613";s:83:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_eventlocation.xml";s:4:"dceb";s:79:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_eventtype.xml";s:4:"58ec";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_genre.xml";s:4:"e7a0";s:78:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_location.xml";s:4:"a566";s:79:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_organizer.xml";s:4:"703f";s:81:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_performance.xml";s:4:"49ec";s:87:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_performancestatus.xml";s:4:"b813";s:74:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_task.xml";s:4:"08b9";s:81:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_ticketclass.xml";s:4:"1b19";s:75:"Resources/Private/Language/locallang_csh_tx_t3events_domain_model_venue.xml";s:4:"7c5d";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"5d4d";s:43:"Resources/Private/Language/locallang_m1.xlf";s:4:"95b4";s:43:"Resources/Private/Language/locallang_m2.xlf";s:4:"6af1";s:49:"Resources/Private/Language/locallang_mod_main.xlf";s:4:"d4c9";s:38:"Resources/Private/Layouts/Default.html";s:4:"ad45";s:46:"Resources/Private/Layouts/Backend/Default.html";s:4:"6b08";s:50:"Resources/Private/Partials/Backend/FormErrors.html";s:4:"4d63";s:57:"Resources/Private/Partials/Backend/Common/SearchForm.html";s:4:"fb66";s:60:"Resources/Private/Partials/Backend/Common/SearchSubject.html";s:4:"5efd";s:51:"Resources/Private/Partials/Event/ICalendarItem.html";s:4:"87f9";s:46:"Resources/Private/Partials/Event/ListItem.html";s:4:"6b8c";s:48:"Resources/Private/Partials/Event/Properties.html";s:4:"5e7f";s:48:"Resources/Private/Partials/Event/SingleItem.html";s:4:"21f1";s:50:"Resources/Private/Partials/EventLocation/Item.html";s:4:"4c9c";s:56:"Resources/Private/Partials/EventLocation/Properties.html";s:4:"e8d0";s:51:"Resources/Private/Partials/Location/Properties.html";s:4:"b5ff";s:46:"Resources/Private/Partials/Organizer/Item.html";s:4:"8487";s:52:"Resources/Private/Partials/Organizer/Properties.html";s:4:"4f90";s:57:"Resources/Private/Partials/Performance/ICalendarItem.html";s:4:"ecad";s:48:"Resources/Private/Partials/Performance/Item.html";s:4:"cfe2";s:52:"Resources/Private/Partials/Performance/ListItem.html";s:4:"b3bc";s:57:"Resources/Private/Partials/Performance/ListItemShort.html";s:4:"30ee";s:54:"Resources/Private/Partials/Performance/Properties.html";s:4:"6a49";s:49:"Resources/Private/Partials/Person/Properties.html";s:4:"41df";s:48:"Resources/Private/Partials/TicketClass/Item.html";s:4:"38cd";s:48:"Resources/Private/Partials/TicketClass/List.html";s:4:"7e92";s:54:"Resources/Private/Partials/TicketClass/Properties.html";s:4:"e335";s:48:"Resources/Private/Partials/Venue/Properties.html";s:4:"34dc";s:51:"Resources/Private/Templates/Backend/Event/List.html";s:4:"ba7c";s:54:"Resources/Private/Templates/Backend/Schedule/List.html";s:4:"0cf1";s:43:"Resources/Private/Templates/Event/List.html";s:4:"e534";s:43:"Resources/Private/Templates/Event/List.ical";s:4:"d640";s:48:"Resources/Private/Templates/Event/QuickMenu.html";s:4:"8e9a";s:43:"Resources/Private/Templates/Event/Show.html";s:4:"81fb";s:43:"Resources/Private/Templates/Event/Show.ical";s:4:"4ee7";s:53:"Resources/Private/Templates/Performance/Calendar.html";s:4:"b3f8";s:49:"Resources/Private/Templates/Performance/List.html";s:4:"980c";s:49:"Resources/Private/Templates/Performance/List.ical";s:4:"ebcb";s:54:"Resources/Private/Templates/Performance/QuickMenu.html";s:4:"0cc0";s:49:"Resources/Private/Templates/Performance/Show.html";s:4:"c71b";s:49:"Resources/Private/Templates/Performance/Show.ical";s:4:"1a2b";s:49:"Resources/Private/Templates/TicketClass/List.html";s:4:"d2a8";s:49:"Resources/Private/Templates/TicketClass/Show.html";s:4:"b45c";s:43:"Resources/Private/Templates/Venue/List.html";s:4:"aabc";s:43:"Resources/Private/Templates/Venue/Show.html";s:4:"ce43";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"556c";s:32:"Resources/Public/Css/backend.css";s:4:"388c";s:30:"Resources/Public/Css/forms.css";s:4:"0c90";s:31:"Resources/Public/Css/styles.css";s:4:"ffb3";s:38:"Resources/Public/Css/t3eventsBasic.css";s:4:"4cf4";s:47:"Resources/Public/Css/t3eventsBasic.original.css";s:4:"40e0";s:40:"Resources/Public/Icons/calendar-blue.svg";s:4:"7e75";s:35:"Resources/Public/Icons/calendar.svg";s:4:"db63";s:48:"Resources/Public/Icons/event-calendar-symbol.svg";s:4:"1ab5";s:41:"Resources/Public/Icons/event-calendar.svg";s:4:"31a5";s:47:"Resources/Public/Icons/module_icon_schedule.png";s:4:"c547";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:43:"Resources/Public/Icons/static_countries.gif";s:4:"1103";s:60:"Resources/Public/Icons/tx_t3events_domain_model_audience.gif";s:4:"1103";s:59:"Resources/Public/Icons/tx_t3events_domain_model_company.gif";s:4:"905a";s:57:"Resources/Public/Icons/tx_t3events_domain_model_event.gif";s:4:"c924";s:65:"Resources/Public/Icons/tx_t3events_domain_model_eventlocation.gif";s:4:"2959";s:61:"Resources/Public/Icons/tx_t3events_domain_model_eventtype.gif";s:4:"c055";s:57:"Resources/Public/Icons/tx_t3events_domain_model_genre.gif";s:4:"5bb5";s:60:"Resources/Public/Icons/tx_t3events_domain_model_location.gif";s:4:"2959";s:64:"Resources/Public/Icons/tx_t3events_domain_model_notification.gif";s:4:"1103";s:61:"Resources/Public/Icons/tx_t3events_domain_model_organizer.gif";s:4:"3e33";s:63:"Resources/Public/Icons/tx_t3events_domain_model_performance.gif";s:4:"ff9d";s:69:"Resources/Public/Icons/tx_t3events_domain_model_performancestatus.gif";s:4:"5adf";s:58:"Resources/Public/Icons/tx_t3events_domain_model_person.png";s:4:"a8b9";s:62:"Resources/Public/Icons/tx_t3events_domain_model_persontype.png";s:4:"cac1";s:56:"Resources/Public/Icons/tx_t3events_domain_model_task.png";s:4:"136e";s:58:"Resources/Public/Icons/tx_t3events_domain_model_teaser.gif";s:4:"acae";s:63:"Resources/Public/Icons/tx_t3events_domain_model_ticketclass.gif";s:4:"06be";s:57:"Resources/Public/Icons/tx_t3events_domain_model_venue.gif";s:4:"4934";s:39:"Resources/Public/Images/dummy-image.png";s:4:"8084";s:46:"Resources/Public/Images/period_constraints.svg";s:4:"7f41";s:40:"Resources/Public/JavaScript/accordion.js";s:4:"49d0";s:39:"Resources/Public/JavaScript/calendar.js";s:4:"849f";s:43:"Resources/Public/JavaScript/jquery-2.1.4.js";s:4:"d64c";s:25:"Tests/Build/UnitTests.xml";s:4:"8bdf";s:40:"Tests/Unit/PatternReplacingTraitTest.php";s:4:"d493";s:51:"Tests/Unit/Command/CleanUpCommandControllerTest.php";s:4:"7746";s:48:"Tests/Unit/Command/TaskCommandControllerTest.php";s:4:"a46d";s:58:"Tests/Unit/Configuration/ConfigurationManagerTraitTest.php";s:4:"256e";s:55:"Tests/Unit/Configuration/PeriodConstraintLegendTest.php";s:4:"ce17";s:55:"Tests/Unit/Controller/AbstractBackendControllerTest.php";s:4:"8c32";s:48:"Tests/Unit/Controller/AbstractControllerTest.php";s:4:"9cc9";s:53:"Tests/Unit/Controller/AudienceRepositoryTraitTest.php";s:4:"ba80";s:53:"Tests/Unit/Controller/CategoryRepositoryTraitTest.php";s:4:"7c37";s:52:"Tests/Unit/Controller/CompanyRepositoryTraitTest.php";s:4:"5f23";s:41:"Tests/Unit/Controller/DemandTraitTest.php";s:4:"16c5";s:43:"Tests/Unit/Controller/DownloadTraitTest.php";s:4:"1014";s:56:"Tests/Unit/Controller/EntityNotFoundHandlerTraitTest.php";s:4:"50a2";s:45:"Tests/Unit/Controller/EventControllerTest.php";s:4:"4a93";s:53:"Tests/Unit/Controller/EventDemandFactoryTraitTest.php";s:4:"4000";s:58:"Tests/Unit/Controller/EventLocationRepositoryTraitTest.php";s:4:"9912";s:50:"Tests/Unit/Controller/EventRepositoryTraitTest.php";s:4:"28a8";s:54:"Tests/Unit/Controller/EventTypeRepositoryTraitTest.php";s:4:"4be1";s:55:"Tests/Unit/Controller/FilterableControllerTraitTest.php";s:4:"716f";s:47:"Tests/Unit/Controller/FlashMessageTraitTest.php";s:4:"c506";s:50:"Tests/Unit/Controller/GenreRepositoryTraitTest.php";s:4:"d839";s:45:"Tests/Unit/Controller/ModuleDataTraitTest.php";s:4:"b708";s:57:"Tests/Unit/Controller/NotificationRepositoryTraitTest.php";s:4:"4ce3";s:54:"Tests/Unit/Controller/NotificationServiceTraitTest.php";s:4:"beeb";s:51:"Tests/Unit/Controller/PerformanceControllerTest.php";s:4:"1cb7";s:59:"Tests/Unit/Controller/PerformanceDemandFactoryTraitTest.php";s:4:"a564";s:56:"Tests/Unit/Controller/PerformanceRepositoryTraitTest.php";s:4:"ce25";s:53:"Tests/Unit/Controller/PersistenceManagerTraitTest.php";s:4:"bb32";s:54:"Tests/Unit/Controller/PersonDemandFactoryTraitTest.php";s:4:"6b40";s:42:"Tests/Unit/Controller/RoutingTraitTest.php";s:4:"7be3";s:41:"Tests/Unit/Controller/SearchTraitTest.php";s:4:"0c82";s:42:"Tests/Unit/Controller/SessionTraitTest.php";s:4:"ccd1";s:50:"Tests/Unit/Controller/SettingsUtilityTraitTest.php";s:4:"af75";s:49:"Tests/Unit/Controller/TaskRepositoryTraitTest.php";s:4:"0641";s:50:"Tests/Unit/Controller/VenueRepositoryTraitTest.php";s:4:"5134";s:53:"Tests/Unit/Controller/Backend/EventControllerTest.php";s:4:"5540";s:56:"Tests/Unit/Controller/Backend/ScheduleControllerTest.php";s:4:"15b3";s:43:"Tests/Unit/Controller/Routing/RouteTest.php";s:4:"0862";s:44:"Tests/Unit/Controller/Routing/RouterTest.php";s:4:"40e4";s:64:"Tests/Unit/DataProvider/Form/EventPluginFormDataProviderTest.php";s:4:"df1c";s:65:"Tests/Unit/DataProvider/Legend/AbstractPeriodDataProviderTest.php";s:4:"d199";s:64:"Tests/Unit/DataProvider/Legend/PeriodDataProviderFactoryTest.php";s:4:"6d72";s:56:"Tests/Unit/Domain/Factory/Dto/EventDemandFactoryTest.php";s:4:"8919";s:62:"Tests/Unit/Domain/Factory/Dto/PerformanceDemandFactoryTest.php";s:4:"2672";s:67:"Tests/Unit/Domain/Factory/Dto/PeriodAwareDemandFactoryTraitTest.php";s:4:"0b1a";s:57:"Tests/Unit/Domain/Factory/Dto/PersonDemandFactoryTest.php";s:4:"9b7c";s:44:"Tests/Unit/Domain/Model/AddressTraitTest.php";s:4:"5255";s:40:"Tests/Unit/Domain/Model/AudienceTest.php";s:4:"d553";s:50:"Tests/Unit/Domain/Model/CategorizableTraitTest.php";s:4:"5530";s:39:"Tests/Unit/Domain/Model/CompanyTest.php";s:4:"e2ff";s:39:"Tests/Unit/Domain/Model/ContentTest.php";s:4:"5fcd";s:45:"Tests/Unit/Domain/Model/EventLocationTest.php";s:4:"1b13";s:37:"Tests/Unit/Domain/Model/EventTest.php";s:4:"3895";s:41:"Tests/Unit/Domain/Model/EventTypeTest.php";s:4:"ffeb";s:37:"Tests/Unit/Domain/Model/GenreTest.php";s:4:"1e70";s:44:"Tests/Unit/Domain/Model/NotificationTest.php";s:4:"0186";s:41:"Tests/Unit/Domain/Model/OrganizerTest.php";s:4:"f84f";s:49:"Tests/Unit/Domain/Model/PerformanceStatusTest.php";s:4:"cbe3";s:43:"Tests/Unit/Domain/Model/PerformanceTest.php";s:4:"373e";s:38:"Tests/Unit/Domain/Model/PersonTest.php";s:4:"f01f";s:42:"Tests/Unit/Domain/Model/PersonTypeTest.php";s:4:"b791";s:36:"Tests/Unit/Domain/Model/TaskTest.php";s:4:"b256";s:43:"Tests/Unit/Domain/Model/TicketClassTest.php";s:4:"f04a";s:37:"Tests/Unit/Domain/Model/VenueTest.php";s:4:"1344";s:50:"Tests/Unit/Domain/Model/Dto/AbstractDemandTest.php";s:4:"daa8";s:60:"Tests/Unit/Domain/Model/Dto/AudienceAwareDemandTraitTest.php";s:4:"5bb9";s:60:"Tests/Unit/Domain/Model/Dto/CategoryAwareDemandTraitTest.php";s:4:"6937";s:51:"Tests/Unit/Domain/Model/Dto/EmConfigurationTest.php";s:4:"b071";s:47:"Tests/Unit/Domain/Model/Dto/EventDemandTest.php";s:4:"50b2";s:65:"Tests/Unit/Domain/Model/Dto/EventLocationAwareDemandTraitTest.php";s:4:"5f7b";s:61:"Tests/Unit/Domain/Model/Dto/EventTypeAwareDemandTraitTest.php";s:4:"86e2";s:57:"Tests/Unit/Domain/Model/Dto/GenreAwareDemandTraitTest.php";s:4:"cdfd";s:54:"Tests/Unit/Domain/Model/Dto/LocationAwareTraitTest.php";s:4:"f15b";s:46:"Tests/Unit/Domain/Model/Dto/ModuleDataTest.php";s:4:"9450";s:57:"Tests/Unit/Domain/Model/Dto/OrderAwareDemandTraitTest.php";s:4:"52a5";s:53:"Tests/Unit/Domain/Model/Dto/PerformanceDemandTest.php";s:4:"4ad7";s:58:"Tests/Unit/Domain/Model/Dto/PeriodAwareDemandTraitTest.php";s:4:"046c";s:58:"Tests/Unit/Domain/Model/Dto/SearchAwareDemandTraitTest.php";s:4:"19bf";s:49:"Tests/Unit/Domain/Model/Dto/SearchFactoryTest.php";s:4:"82f7";s:42:"Tests/Unit/Domain/Model/Dto/SearchTest.php";s:4:"15fd";s:58:"Tests/Unit/Domain/Model/Dto/StatusAwareDemandTraitTest.php";s:4:"af5d";s:57:"Tests/Unit/Domain/Model/Dto/VenueAwareDemandTraitTest.php";s:4:"1644";s:63:"Tests/Unit/Domain/Repository/AbstractDemandedRepositoryTest.php";s:4:"8f62";s:70:"Tests/Unit/Domain/Repository/AudienceConstraintRepositoryTraitTest.php";s:4:"a75e";s:55:"Tests/Unit/Domain/Repository/AudienceRepositoryTest.php";s:4:"5b70";s:70:"Tests/Unit/Domain/Repository/CategoryConstraintRepositoryTraitTest.php";s:4:"f628";s:55:"Tests/Unit/Domain/Repository/CategoryRepositoryTest.php";s:4:"4273";s:54:"Tests/Unit/Domain/Repository/ContentRepositoryTest.php";s:4:"6767";s:60:"Tests/Unit/Domain/Repository/DemandedRepositoryTraitTest.php";s:4:"7ad0";s:52:"Tests/Unit/Domain/Repository/EventRepositoryTest.php";s:4:"1041";s:71:"Tests/Unit/Domain/Repository/EventTypeConstraintRepositoryTraitTest.php";s:4:"1268";s:56:"Tests/Unit/Domain/Repository/EventTypeRepositoryTest.php";s:4:"ea08";s:67:"Tests/Unit/Domain/Repository/GenreConstraintRepositoryTraitTest.php";s:4:"3518";s:52:"Tests/Unit/Domain/Repository/GenreRepositoryTest.php";s:4:"a751";s:58:"Tests/Unit/Domain/Repository/PerformanceRepositoryTest.php";s:4:"95c4";s:64:"Tests/Unit/Domain/Repository/PerformanceStatusRepositoryTest.php";s:4:"d6b3";s:68:"Tests/Unit/Domain/Repository/PeriodConstraintRepositoryTraitTest.php";s:4:"204c";s:53:"Tests/Unit/Domain/Repository/PersonRepositoryTest.php";s:4:"8eea";s:68:"Tests/Unit/Domain/Repository/StatusConstraintRepositoryTraitTest.php";s:4:"e04b";s:51:"Tests/Unit/Domain/Repository/TaskRepositoryTest.php";s:4:"84a0";s:67:"Tests/Unit/Domain/Repository/VenueConstraintRepositoryTraitTest.php";s:4:"04f1";s:52:"Tests/Unit/Domain/Repository/VenueRepositoryTest.php";s:4:"98b2";s:65:"Tests/Unit/Domain/Repository/Fixtures/FindDemandedHookFixture.php";s:4:"ee64";s:38:"Tests/Unit/Hooks/ItemsProcFuncTest.php";s:4:"4b12";s:44:"Tests/Unit/Object/ObjectManagerTraitTest.php";s:4:"e48e";s:43:"Tests/Unit/Resource/ResourceFactoryTest.php";s:4:"864b";s:39:"Tests/Unit/Resource/VectorImageTest.php";s:4:"693d";s:43:"Tests/Unit/Service/ExtensionServiceTest.php";s:4:"d208";s:51:"Tests/Unit/Service/ModuleDataStorageServiceTest.php";s:4:"5618";s:46:"Tests/Unit/Service/NotificationServiceTest.php";s:4:"d608";s:38:"Tests/Unit/Service/RouteLoaderTest.php";s:4:"d2f4";s:46:"Tests/Unit/Session/Typo3BackendSessionTest.php";s:4:"0c9b";s:39:"Tests/Unit/Session/Typo3SessionTest.php";s:4:"45ad";s:46:"Tests/Unit/Update/MigratePluginRecordsTest.php";s:4:"acd7";s:44:"Tests/Unit/Update/MigrateTaskRecordsTest.php";s:4:"9227";s:49:"Tests/Unit/Utility/EmConfigurationUtilityTest.php";s:4:"f44e";s:42:"Tests/Unit/Utility/SettingsUtilityTest.php";s:4:"f346";s:45:"Tests/Unit/Utility/TableConfigurationTest.php";s:4:"0ea0";s:48:"Tests/Unit/Utility/TemplateLayoutUtilityTest.php";s:4:"3b9a";s:33:"Tests/Unit/View/IcalTraitTest.php";s:4:"2b97";s:58:"Tests/Unit/ViewHelpers/Format/ArrayToCsvViewHelperTest.php";s:4:"4458";s:63:"Tests/Unit/ViewHelpers/Format/Event/DateRangeViewHelperTest.php";s:4:"e4a6";s:69:"Tests/Unit/ViewHelpers/Format/Performance/DateRangeViewHelperTest.php";s:4:"61b8";s:55:"Tests/Unit/ViewHelpers/Location/CountViewHelperTest.php";s:4:"fc74";s:56:"Tests/Unit/ViewHelpers/Location/UniqueViewHelperTest.php";s:4:"b261";}',
);

