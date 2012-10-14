<?php
namespace MH\Guestbook\Domain\Model;



/*                                                                        *
 * This script belongs to the TYPO3 Flow package "MH.Guestbook".          *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        */



use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;



/**
 * Models a single guestbook entry.
 *
 * @Flow\Entity
 *
 * @author     Martin Helmich <typo3@martin-helmich.de>
 * @package    MH\Guestbook
 * @subpackage Domain\Model
 */
class Entry
{



	//
	// ATTRIBUTES
	//



	/**
	 * The entry date.
	 *
	 * @var \DateTime
	 */
	protected $date;


	/**
	 * The author
	 *
	 * @Flow\Validate(type="NotEmpty")
	 * @var string
	 */
	protected $author;


	/**
	 * The email
	 *
	 * @Flow\Validate(type="EmailAddress")
	 * @var string
	 */
	protected $email;


	/**
	 * The content
	 *
	 * @Flow\Validate(type="NotEmpty")
	 * @var string
	 */
	protected $content;



	//
	// CONSTRUCTOR
	//



	/**
	 * Creates a new guestbook entry.
	 *
	 * Sets this entry's timestamp to the current date and time.
	 */
	public function __construct()
	{
		$this->date = new \DateTime('now');
	}



	//
	// GETTER METHODS
	//



	/**
	 * Get the entry's date.
	 *
	 * @return \DateTime The entry's date.
	 */
	public function getDate()
	{
		return $this->date;
	}



	/**
	 * Get the entry's author.
	 *
	 * @return string The entry's author.
	 */
	public function getAuthor()
	{
		return $this->author;
	}



	/**
	 * Get the author's email address.
	 *
	 * @return string The author's email address.
	 */
	public function getEmail()
	{
		return $this->email;
	}



	/**
	 * Get the entry's content.
	 *
	 * @return string The entry's content.
	 */
	public function getContent()
	{
		return $this->content;
	}



	//
	// SETTER METHODS
	// 



	/**
	 * Sets this entry's date.
	 *
	 * @param \DateTime $date The entry's date.
	 * @return void
	 */
	public function setDate(\DateTime $date)
	{
		$this->date = $date;
	}



	/**
	 * Sets this entry's author.
	 *
	 * @param string $author The entry's author.
	 * @return void
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
	}



	/**
	 * Sets the author's email address.
	 *
	 * @param string $email The author's email address.
	 * @return void
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}



	/**
	 * Sets this entry's content.
	 *
	 * @param string $content The entry's content.
	 * @return void
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}



}

