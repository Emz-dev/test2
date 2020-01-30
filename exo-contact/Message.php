<?php
class Message
{
    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $sujet;

    /**
     * @var string
     */
    private $contenu;

    /**
     * Get the value of auteur
     *
     * @return  string
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @param  string  $auteur
     *
     * @return  self
     */ 
    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of sujet
     *
     * @return  string
     */ 
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set the value of sujet
     *
     * @param  string  $sujet
     *
     * @return  self
     */ 
    public function setSujet(string $sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get the value of contenu
     *
     * @return  string
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @param  string  $contenu
     *
     * @return  self
     */ 
    public function setContenu(string $contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }
}