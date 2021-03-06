<?php
/**
 * @author David Mezqu�riz Os�s
 * Single responsability principle
 * A class should have only one reason to change.
 * 
 * 
 * class Book {
 
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
 
    function getLocation() {
        // returns the position in the library
        // ie. shelf number & room number
    }
 
}

 * We can reason that the actor operations are the 
 * ones interested in the methods getTitle(), getAuthor() 
 * and getLocation(). The clients may also have access to 
 * the application to select a book and read the first few 
 * pages to get an idea about the book and decide if they 
 * want it or not. So the actor readers may be interested 
 * in all the methods except getLocations(). An ordinary 
 * client doesn't care where the book is kept in the library. 
 * The book will be handed over to the client by the librarian. 
 * So, we do indeed have a violation of SRP.
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

class BookLocator {

	function locate(Book $book) {
		// returns the position in the library
		// ie. shelf number & room number
		$libraryMap->findBookBy($book->getTitle(), $book->getAuthor());
	}
}
