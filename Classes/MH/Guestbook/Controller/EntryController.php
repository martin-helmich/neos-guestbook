<?php
namespace MH\Guestbook\Controller;



/*                                                                        *
 * This script belongs to the TYPO3 Flow package "MH.Guestbook".          *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        */



use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use \MH\Guestbook\Domain\Model\Entry;



/**
 * Controller for handling guestbook entries.
 *
 * @Flow\Scope("singleton")
 *
 * @author     Martin Helmich <typo3@martin-helmich.de>
 * @package    MH\Guestbook
 * @subpackage Controller
 */
class EntryController extends ActionController
{



	//
	// ATTRIBUTES
	//



	/**
	 * @Flow\Inject
	 * @var \MH\Guestbook\Domain\Repository\EntryRepository
	 */
	protected $entryRepository;



	//
	// ACTION METHODS
	//



	/**
	 * Shows a list of entries.
	 *
	 * @return void
	 */
	public function indexAction()
	{
		$this->view->assign('entries', $this->entryRepository->findAll());
	}



	/**
	 * Shows a form for creating a new entry object.
	 *
	 * @return void
	 */
	public function newAction()
	{
	}



	/**
	 * Adds the given new entry object to the entry repository.
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $entry A new entry to add.
	 * @return void
	 */
	public function createAction(Entry $entry)
	{
		$this->entryRepository->add($entry);
		$this->addFlashMessage('Der Gästebucheintrag wurde erfolgreich erstellt.');
		$this->redirect('index');
	}



	/**
	 * Removes the given entry object from the entry repository.
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $entry The entry to delete
	 * @return void
	 */
	public function deleteAction(Entry $entry)
	{
		$this->entryRepository->remove($entry);
		$this->addFlashMessage('Deleted a entry.');
		$this->redirect('index');
	}

}
