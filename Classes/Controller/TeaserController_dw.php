<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Dirk Wenzel <wenzel@webfox01.de>, Agentur Webfox
 *  Michael Kasten <kasten@webfox01.de>, Agentur Webfox
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package t3events
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_T3events_Controller_TeaserController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * teaserRepository
	 *
	 * @var Tx_T3events_Domain_Repository_TeaserRepository
	 */
	protected $teaserRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		        $sortBy = $this->settings['sortBy'];
		        $maxItems = $this->settings['maxItems'];
		        $maxHighlighted = $this->settings['maxHighlighted'];
		        $highlightsToTop = $this->settings['highlightsToTop'];
		        
		        if($highlightsToTop){
		            //$highlights=$this->teaserRepository->findByIsHighlight(TRUE);
		            /**
		            * @todo implement this
		            */
		            $highlights=$this->teaserRepository->findHighlightsSorted($sortBy, $maxHighlighted);
		            $this->view->assign('highlights', $highlights);
		            
		            // neu
		            $demand = t3lib_div::makeInstance('Tx_T3events_Domain_Model_TeaserDemand');
					$demand->setHighlightsOnly(TRUE);
					if($this->settings['sortBy']=='date'){
						$demand->setSortBy('event.performances.date');
						var_dump($demand->getSortBy());	
					}
					if($this->settings['maxHighlighted']){
						//var_dump($this->settings['maxHighlighted']);
						//$demand->setLimit((integer)$this->settings['maxHighlighted']);
						$demand->setLimit(3);
					}
					$this->view->assign('hiTest', $this->teaserRepository->findDemanded($demand));
		            // eof neu
		            
		            $teasers = $this->teaserRepository->findByIsHighlight(FALSE);
		            /**
		            * @todo implement this
		            * $teasers = $this->teaserRepository->findNotHighlight($sortBy, $maxItems-$maxHighlighted);
		            */
		            $this->view->assign('teasers', $teasers);
		        }else{
		            $teasers = $this->teaserRepository->findAll();
		            /**
		            * @todo implement
		            * $teasers = $this->teaserRepository->findSorted($sortBy, $maxItems);
		            */
		            $this->view->assign('teasers', $teasers);    
		        }
	}

	/**
	 * action show
	 *
	 * @param Tx_T3events_Domain_Model_Teaser $teaser
	 * @return void
	 */
	public function showAction(Tx_T3events_Domain_Model_Teaser $teaser) {
		$this->view->assign('teaser', $teaser);
	}

	/**
	 * injectTeaserRepository
	 *
	 * @param Tx_T3events_Domain_Repository_TeaserRepository $teaserRepository
	 * @return void
	 */
	public function injectTeaserRepository(Tx_T3events_Domain_Repository_TeaserRepository $teaserRepository) {
		$this->teaserRepository = $teaserRepository;
	}

	/**
	 * action showEvent
	 *
	 * @param Tx_T3events_Domain_Model_Teaser $teaser
	 * @return void
	 */
	public function showEventAction(Tx_T3events_Domain_Model_Teaser $teaser) {
			    $event = $teaser->getEvent();
		        #$this->view->assign('event', $event);
		        $this->redirect('show', 'Event', NULL, array('event'=>$event));
	}

}
?>