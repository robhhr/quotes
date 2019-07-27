// jQuery(".quote-request").on("click", function(event) {
//     event.preventDefault();
//     jQuery.ajax({
//       method: "GET",
//       url: red_vars.rest_url + "wp/v2/posts/",
//       beforeSend: function(xhr) {
//         xhr.setRequestHeader("X-WP-Nonce", red_vars.wpapi_nonce);
//       }
//     }).done(function(response) {
//     //   jQuery('.article-home').append(response[0].name);
//     function getNumber() {
//         const randomNumber = Math.floor(Math.random() * 2);
//         console.log(response[randomNumber].excerpt);
//     }


//     // console.log(response[0].excerpt);
//     // console.log(response[0].title);
//     });
//   });
  jQuery('.quote-request').on('click', function(event) {
    event.preventDefault();
    jQuery.ajax({
      method: 'GET',
      url: red_vars.rest_url + 'wp/v2/posts/',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }
    }).done(function(response) {
        for(let i = 0; i < 1; i++) {
       jQuery('.article-home').append(`<div class="ajax-content"><p>${response[0].content.rendered}</p><h2> - ${response[0].title.rendered}</h2></div>`);
       console.log(response)
          }
        });
    });