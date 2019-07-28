jQuery(() => {

  window.addEventListener('popstate', function() {
    window.location = window.location;
  });
  
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
         jQuery('.site-main-home').empty().append(`<div class="ajax-content"><p>${response[0].content.rendered}</p><p> - ${response[0].title.rendered}</p>, <span><a href="${response[0]._qod_quote_source_url}">${response[0]._qod_quote_source}</a></span></div>`);
            }
          });
      });
  });