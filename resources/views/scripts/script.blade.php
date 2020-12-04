
<script src="/js/jquery-3.5.1.min.js" ></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="/js/app.js"></script>
<script src="/js/bootstrap.js"></script>

<script src="/js/lightbox.min.js"></script>
<script src="/js/simple.money.format.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>

<script>
    {{--  Money format  --}}
    $('.money').simpleMoneyFormat();
</script>
<script>
    function onSubmit(token) {
      document.getElementById("messenger_id").submit();
    }
  </script>

