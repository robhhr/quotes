function submitForm() {
  let formReset = document.getElementsByClassName('quote-submit')[0];
  formReset.submit();
  formReset.reset();
  return false;
}

jQuery(() => {

  let quoteSubmit = document.getElementsByClassName('quote-submit');
  let quoteAuthor = document.getElementById('author');
  let quote = document.getElementById('quote');
  let quoteSource = document.getElementById('quote-source');
  let quoteURL = document.getElementById('source-url');
  let submitButton = document.getElementById('submit-quote');

  window.addEventListener('popstate', function() {
    window.location = window.location;
  });

// Ajax to get quotes on homepage
  jQuery('.quote-request').on('click', function(event) {
      event.preventDefault();
      jQuery.ajax({
        method: 'GET',
        url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
        data: {
          comment_status: "closed"
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        }
      }).done(function(response) {
        history.pushState('', '', response[0].link);
        for(let i = 0; i < 1; i++) {
         jQuery('.site-main-home').empty().append(
           `<article class="home-container">
              <div class="ajax-content">
                <p>${response[0].content.rendered}</p>
                <p> - ${response[0].title.rendered}${response[0]._qod_quote_source &&`, 
                  <a href="${response[0]._qod_quote_source_url}"class="ajax-link">${response[0]._qod_quote_source}</a>
                </p>`}
              </div>
            </article>`);
            }
          });
      });

// Ajax to post quotes
  jQuery(quoteSubmit).on('submit', function(event) {
      event.preventDefault();
      jQuery.ajax({
        method: "POST",
        url: red_vars.rest_url + "wp/v2/posts/",
        data: {
          comment_status: "closed",
          title: (jQuery(quoteAuthor).val()),
          content: (jQuery(quote).val()),
          _qod_quote_source: (jQuery(quoteURL).val()),
          _qod_quote_source_url: (jQuery(quoteSource).val()),
          status: 'pending',
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader("X-WP-Nonce", red_vars.wpapi_nonce);
        }
      }).done(function() {
        alert('Quote submitted successfully');
        submitForm();
      }).fail(function() {
        alert('Please try again');
      }) 
  });
});