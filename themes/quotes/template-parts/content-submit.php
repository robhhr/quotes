<?php
/**
 * Template part for displaying posts.
 *
 * @package quotes-on-dev
 */

?>
	<form action="" class="quote-submit">
        <label for="Quote Author">Author of Quote</label><br><input type="text" id="author">
        <label for="Quote">Quote</label><br><textarea type="text" id="quote"></textarea>
        <label for="Quote Source">Where did you find this quote? (e.g. book name)</label><br><input type="text" id="quote-source">
        <label for="Type URL">Provide the URL of the quote source, if available</label><br><input type="url" id="source-url">
        <div class="q-bottom">
            <button type="submit" id="submit-quote">
                Submit Quote
            </button>
        </div>
    </form>