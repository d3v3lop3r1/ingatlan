
<script src="/js/jquery-3.5.1.min.js" ></script>
<script src="/js/app.js"></script>
<script src="/js/bootstrap.js"></script>

<script src="/js/lightbox.min.js"></script>
<script src="/js/simple.money.format.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>

<script>
    {{--  Money format  --}}
    $('.money').simpleMoneyFormat();

    window.setTimeout(function(){
        $("#container").contents().find(".calculator-box").css("border-color","blue");
    }, 1000);
</script>

