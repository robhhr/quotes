jQuery(".quote-request").on("click", function(event) {
    event.preventDefault();
    jQuery.ajax({
      method: "GET",
      url: red_vars.rest_url + "wp/v2/posts/",
      beforeSend: function(xhr) {
        xhr.setRequestHeader("X-WP-Nonce", red_vars.wpapi_nonce);
      }
    }).done(function(response) {
    //   jQuery('.article-home').append(response[0].name);
    console.log(response[0].id)
    });
  });