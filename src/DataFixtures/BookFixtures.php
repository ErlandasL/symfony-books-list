<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Create some sample books
        $book1 = new Book();
        $book1->setTitle('The Catcher in the Rye');
        $book1->setAuthor('J.D. Salinger');
        $book1->setPublicationYear(1951);
        $book1->setIsbn('978-0-316-76948-0');
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('To Kill a Mockingbird');
        $book2->setAuthor('Harper Lee');
        $book2->setPublicationYear(1960);
        $book2->setIsbn('978-0-06-112008-4');
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('1984');
        $book3->setAuthor('George Orwell');
        $book3->setPublicationYear(1949);
        $book3->setIsbn('978-0-452-28423-4');
        $manager->persist($book3);

        // You can add as many books as you like

        // Save all the persisted books to the database
        $manager->flush();
    }
}
