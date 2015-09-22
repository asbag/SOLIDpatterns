<?php
/**
 * @author David Mezquíriz Osés
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
 
    function printCurrentPage() {
        echo "current page content";
    }
}
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

interface Printer {

	function printPage($page);
}

class PlainTextPrinter implements Printer {

	function printPage($page) {
		echo $page;
	}

}

class HtmlPrinter implements Printer {

	function printPage($page) {
		echo '<div style="single-page">' . $page . '</div>';
	}

}