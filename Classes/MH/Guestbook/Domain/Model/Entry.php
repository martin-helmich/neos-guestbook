<?php
namespace MH\Guestbook\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "MH.Guestbook".          *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Entry
 *
 * @Flow\Entity
 */
class Entry {

	/**
	 * The date
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * The author
	 * @var string
	 */
	protected $author;

	/**
	 * The email
	 * @var string
	 */
	protected $email;

	/**
	 * The content
	 * @var string
	 */
	protected $content;


	/**
	 * Get the Entry's date
	 *
	 * @return \DateTime The Entry's date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets this Entry's date
	 *
	 * @param \DateTime $date The Entry's date
	 * @return void
	 */
	public function setDate(\DateTime $date) {
		$this->date = $date;
	}

	/**
	 * Get the Entry's author
	 *
	 * @return string The Entry's author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets this Entry's author
	 *
	 * @param string $author The Entry's author
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}

	/**
	 * Get the Entry's email
	 *
	 * @return string The Entry's email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets this Entry's email
	 *
	 * @param string $email The Entry's email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Get the Entry's content
	 *
	 * @return string The Entry's content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Sets this Entry's content
	 *
	 * @param string $content The Entry's content
	 * @return void
	 */
	public function setContent($content) {
		$this->content = $content;
	}

}
?>