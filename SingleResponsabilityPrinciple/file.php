<?php
/**
 * @author David Mezqu�riz Os�s
 * Single responsability principle
 * A class should have only one reason to change.
 */


/*
 *  We can easily think of two different actors here: Book Management 
 *  (like the librarian) and Data Presentation Mechanism (like the way 
 *  we want to deliver the content to the user - on-screen, graphical UI, 
 *  text-only UI, maybe printing). These are two very different actors.
 * Mixing business logic with presentation is bad because it is against 
 * the Single Responsibility Principle (SRP). Take a look at the following code:
class Book {
 
    function getTitle() {
        return "A Great Book";
    }
 
    function getAuthor() {
        return "John Doe";
    }
 
    function turnPage() {
        // pointer to next page
    }
 
    function getCurrentPage() {
        return "current page content";
    }
 
    function save() {
        $filename = '/documents/'. $this->getTitle(). ' - ' . $this->getAuthor();
        file_put_contents($filename, serialize($this));
    }
 
}
*/
 


/**
 * 
 * @author david
 * Moving the persistence operation to another class will 
 * clearly separate the responsibilities and we will be 
 * free to exchange persistence methods without affecting 
 * our Book class. For example implementing a DatabasePersistence 
 * class would be trivial and our business logic built around 
 * operations with books will not change.
 */
class Book {
    function getTitle() {
        return "A Great Book";
    }
 
    function getAuthor() {
        return "John Doe";
    }
 
    function turnPage() {
        // pointer to next page
    }
 
    function getCurrentPage() {
        return "current page content";
    }
}
 
class SimpleFilePersistence {
    function save(Book $book) {
        $filename = '/documents/' . $book->getTitle() . ' - ' . $book->getAuthor();
        file_put_contents($filename, serialize($book));
    }
}