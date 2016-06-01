<?php

    use Doctrine\ORM\Mapping as ORM;

    /*
     * Symfony creArchiteX project
     * by Alexandre HARELIMANA
     * under Pr. Gregory Berger's advises
     */

    /**
     * ProjetCategorie
     * @ORM\Entity("RepositoryClass\AppBundle\Repository\ProjetCategorie")
     * @ORM\Table("name=ProjetCategorie")
     * @author axxa
     */
    class ProjetCategorie
    {

        //put your code here
        /**
         *
         * @var int
         * @ORM\projet_categorie_id
         * @ORM\Column(name="projet_categorie_id", type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $projetCategId;

        /**
         *
         * @var string
         * @ORM\Categorie
         * @ORM\Column(name="categorie", type="string")
         */
        private $categorie;

        /**
         *
         * @var text
         * @ORM\Description
         * @ORM\Column(name="decription", type="text")
         */
        private $decription;

        /**
         *
         * @var boolean
         * @ORM\IsVisible
         * @ORM\Column(name="is_visible", type="boolean")
         */
        private $isVisible;

        /**
         * Get categorie
         * @param string $categorie
         * @return ProjetCategorie
         * 
         */
        public function getCategorie()
        {
            return $this->categorie;
        }

        /**
         * Set categorie
         * @param string $categorie
         * @return ProjetCategorie
         * 
         */
        public function setCategorie($categorie)
        {
            return $this->categorie = $categorie;
        }

        /*         * description
         * @param text $description
         * @return ProjetCategorie
         * 
         */

        public function getDescription()
        {
            return $this->description;
        }

        /**
         * Set description
         * @param text $description
         * @return ProjetCategorie
         * 
         */
        public function setDescription($description)
        {
            return $this->description = $description;
        }

    }
    