<?php
namespace MH\Guestbook\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "MH.Guestbook".          *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \MH\Guestbook\Domain\Model\Entry;

/**
 * Entry controller for the MH.Guestbook package 
 *
 * @Flow\Scope("singleton")
 */
class EntryController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \MH\Guestbook\Domain\Repository\EntryRepository
	 */
	protected $entryRepository;

	/**
	 * Shows a list of entries
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('entries', $this->entryRepository->findAll());
	}

	/**
	 * Shows a single entry object
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $entry The entry to show
	 * @return void
	 */
	public function showAction(Entry $entry) {
		$this->view->assign('entry', $entry);
	}

	/**
	 * Shows a form for creating a new entry object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new entry object to the entry repository
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $newEntry A new entry to add
	 * @return void
	 */
	public function createAction(Entry $newEntry) {
		$this->entryRepository->add($newEntry);
		$this->addFlashMessage('Created a new entry.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing entry object
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $entry The entry to edit
	 * @return void
	 */
	public function editAction(Entry $entry) {
		$this->view->assign('entry', $entry);
	}

	/**
	 * Updates the given entry object
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $entry The entry to update
	 * @return void
	 */
	public function updateAction(Entry $entry) {
		$this->entryRepository->update($entry);
		$this->addFlashMessage('Updated the entry.');
		$this->redirect('index');
	}

	/**
	 * Removes the given entry object from the entry repository
	 *
	 * @param \MH\Guestbook\Domain\Model\Entry $entry The entry to delete
	 * @return void
	 */
	public function deleteAction(Entry $entry) {
		$this->entryRepository->remove($entry);
		$this->addFlashMessage('Deleted a entry.');
		$this->redirect('index');
	}

}

?>