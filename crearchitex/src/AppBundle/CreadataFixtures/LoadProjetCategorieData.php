<?php

    namespace AppBundle\DataFixtures\ORM;

    use AppBundle\Entity\ProjetCategorie;
    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

/*
     * Symfony creArchiteX project
     * by Alexandre HARELIMANA
     * under Pr. Gregory Berger's advises
     */

    class LoadProjetcategorieData extends AbstractFixture implements OrderedFixtureInterface
    {

        private $projetCategorie = [
            ['categorie' => '3', 'decription' => 'Construction en dur', 'isVisible' => '1'],
            ['categorie' => '1', 'decription' => 'Construction en Briques', 'isVisible' => '1'],
        ];

        public function load(ObjectManager $manager)
        {


            foreach ($this->projetCategories as $proca)
            {
                $proca = new \ProjetCategorie();
                $proca->setCategorie($proca['categorie']);
                $proca->setDescription($proca['description']);
                $proca->setIsVisible($proca['isVisible']);

                $manager->persist($proca);
            }

            $manager->flush();
        }

        public function getOrder() {
		return 5;
	}
    }
    