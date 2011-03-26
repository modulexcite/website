<?php
/**
 * This file is part of the Alom project.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * This source file is subject to the GPL license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Bundle\Alom\BlogBundle\Entity;

/**
 * Comment on a blog post
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * @orm:Entity
 */
class PostComment
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:GeneratedValue()
     */
    protected $id;

    /**
     * @orm:Column(type="string", length="255")
     */
    protected $email;

    /**
     * @Column(type="string", length="255")
     */
    protected $fullname;

    /**
     * @orm:Column(type="string", length="255")
     */
    protected $website;

    /**
     * @orm:Column(type="text")
     */
    protected $body;

    /**
     * @orm:Column(type="datetime")
     */
    protected $createdAt;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     */
    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    /**
     * Get Website
     *
     * @return string $website
     */
    public function getWebsite() {
        return $this->website;
    }

    /**
     * Set body of the comment
     *
     * @param string $body Body to set
     */
    public function setBody($body) {
        $this->body = $body;
    }

    /**
     * Body of the comment
     *
     * @return string
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * Set the creation date
     *
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt) {
        if (!$createdAt instanceof \DateTime) {
            $createdAt = new \DateTime($createdAt);
        }

        $this->createdAt = $createdAt;
    }

    /**
     * Get the creation date
     *
     * @return DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }
}