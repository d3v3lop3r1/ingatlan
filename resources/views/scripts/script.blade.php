<script src="https://cdn.tiny.cloud/1/p6m8lhexspx7dmy6l8rqm29mvnlrn9xabxoswnh5uu7l3nfk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script src="/js/jquery-3.2.0.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/app.js"></script>
<script src="/js/simple.money.format.js"></script>
<script src="/js/lightbox.js"></script>
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

tinymce.init({
    selector:'textarea',
    font_formats: 'Roboto, sans-serif',
    convert_fonts_to_spans : true,
    plugins: "template table lists fullscreen hr link preview print visualblocks",
    menubar: "file insert table ",
    toolbar1: "template | styleselect | fontselect forecolor fontsizeselect | alignleft aligncenter alignright | table bullist",
    toolbar2: "undo redo | bold italic underline strikethrough | fullscreen preview hr| h1 h2 h3 h4 | link print visualblocks",
    fontsize_formats: '10px 12px 14px 16px 18px 20px 22px 24px',
    block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3; Header 4=h4',
    color_map: [
    "000000", "Black",
    "808080", "Gray",
    "FFFFFF", "White",
    "FF0000", "Red",
    "FFFF00", "Yellow",
    "008000", "Green",
    "0000FF", "Blue"
  ],
    content_css : '/css/myLayoutTynimce.css',
    forced_root_block : 'p',
    language: 'hu_HU',
    language_url : '/tinymce/languages/hu_HU.js',
    height: 300,
    templates: "/templates/templates.php",


});

</script>
