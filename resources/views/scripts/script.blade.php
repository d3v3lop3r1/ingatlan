
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/lightbox-plus-jquery.js"></script>

<script src="/js/simple.money.format.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39"
    },
    "button": {
      "background": "transparent",
      "text": "#14a7d0",
      "border": "#14a7d0"
    }
  },
  "content": {
    "message": "A weboldalon cookie-kat használunk, hogy biztonságos böngészés mellett a legjobb felhasználói élményt nyújthassunk.",
    "dismiss": "Elfogadom",
    "link": "Részletes leírás",
    "href": "/cookiepolicy"
  }
});
</script>

<script>
{{--  Money format  --}}
$('.money').simpleMoneyFormat();
</script>
