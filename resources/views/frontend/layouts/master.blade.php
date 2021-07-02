<!doctype html>
  <html lang="en" class="default">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="keywords" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    
    <link rel="icon" type="/frontend/image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" type="/frontend/image/x-icon" href="favicon.ico">

    <link rel="stylesheet" href="/frontend/css/theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/leoblog.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/megamenu.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/leomenusidebar.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/typo.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/iview.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/jquery.mCustomScrollbar.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/jquery-ui.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/jquery.ui.theme.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/jquery.fancybox_1.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/aeuc_front.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/slick-theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/unique.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/colorpicker.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/paneltool.css" type="text/css" media="all">
    <link rel="stylesheet" href="/frontend/css/headerposition1516708727.css" type="text/css" media="all">

    @yield('css')

    <script type="text/javascript">
      var LEO_COOKIE_THEME = "LEO_COSMETICS_PANEL_CONFIG";
      var add_cart_error = "An error occurred while processing your request. Please try again";
      var buttoncompare_title_add = "Add to Compare";
      var buttoncompare_title_remove = "Remove from Compare";
      var buttonwishlist_title_add = "Add to Wishlist";
      var buttonwishlist_title_remove = "Remove from WishList";
      var cancel_rating_txt = "Cancel Rating";
      var comparator_max_item = 3;
      var compared_products = [];
      var disable_review_form_txt = "Not exists a criterion to review for this product or this language";
      var enable_dropdown_defaultcart = 1;
      var enable_flycart_effect = 1;
      var enable_notification = 1;
      var height_cart_item = "135";
      var isLogged = false;
      var leo_token = "74e24797edc7e3f756c9186bbd9e6957";
      var lf_is_gen_rtl = false;
      var number_cartitem_display = 3;
      var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"$0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"$0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"$0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"$0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":0,"summary_string":"0 items","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Leo Cosmetics","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-full-width":true,"page-index":true,"tax-display-enabled":true},"admin_notifications":[]},"shop":{"name":"Leo Cosmetics","logo":"\/prestashop\/leo_cosmetics\/img\/leo-cosmestic-logo-1516035079.jpg","stores_icon":"\/prestashop\/leo_cosmetics\/img\/logo_stores.png","favicon":"\/prestashop\/leo_cosmetics\/img\/favicon.ico"},"urls":{"base_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/","current_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/","shop_domain_url":"https:\/\/apollotran.com","img_ps_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/","img_cat_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/c\/","img_lang_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/l\/","img_prod_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/","img_manu_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/m\/","img_sup_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/su\/","img_ship_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/s\/","img_store_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/st\/","img_col_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/co\/","img_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/themes\/leo_cosmetics\/assets\/img\/","css_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/themes\/leo_cosmetics\/assets\/css\/","js_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/themes\/leo_cosmetics\/assets\/js\/","pic_url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/upload\/","pages":{"address":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/address","addresses":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/addresses","authentication":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/login","cart":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/cart","category":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=category","cms":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=cms","contact":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/contact-us","discount":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/discount","guest_tracking":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/guest-tracking","history":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/order-history","identity":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/identity","index":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/","my_account":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/my-account","order_confirmation":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/order-confirmation","order_detail":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=order-detail","order_follow":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/order-follow","order":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/order","order_return":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=order-return","order_slip":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/credit-slip","pagenotfound":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/page-not-found","password":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/password-recovery","pdf_invoice":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=pdf-invoice","pdf_order_return":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=pdf-order-return","pdf_order_slip":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=pdf-order-slip","prices_drop":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/prices-drop","product":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/index.php?controller=product","search":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/search","sitemap":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/sitemap","stores":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/stores","supplier":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/supplier","register":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/login?create_account=1","order_login":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/order?login=1"},"alternative_langs":{"en-us":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/","fr-fr":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/fr\/","de-de":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/de\/","it-it":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/it\/","es-es":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/es\/","ar-sa":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/ar\/"},"theme_assets":"\/prestashop\/leo_cosmetics\/themes\/leo_cosmetics\/assets\/","actions":{"logout":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/?mylogout="},"no_picture_image":{"bySize":{"small_default":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-small_default.jpg","width":98,"height":108},"cart_default":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-cart_default.jpg","width":110,"height":110},"home_default":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-home_default.jpg","width":240,"height":265},"medium_default":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-medium_default.jpg","width":254,"height":254},"large_default":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-large_default.jpg","width":800,"height":800}},"small":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-small_default.jpg","width":98,"height":108},"medium":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-home_default.jpg","width":240,"height":265},"large":{"url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/img\/p\/en-default-large_default.jpg","width":800,"height":800},"legend":""}},"configuration":{"display_taxes_label":true,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/"}],"count":1},"link":{"protocol_link":"https:\/\/","protocol_content":"https:\/\/"},"time":1622948421,"static_token":"74e24797edc7e3f756c9186bbd9e6957","token":"67cd5562d2b822b64c5472f1ced4cc85"};
      var productcompare_add = "The product has been added to list compare";
      var productcompare_add_error = "An error occurred while adding. Please try again";
      var productcompare_max_item = "You cannot add more than 3 product(s) to the product comparison";
      var productcompare_remove = "The product was successfully removed from list compare";
      var productcompare_remove_error = "An error occurred while removing. Please try again";
      var productcompare_url = "https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/module\/leofeature\/productscompare";
      var productcompare_viewlistcompare = "View list compare";
      var review_error = "An error occurred while processing your request. Please try again";
      var show_popup = 1;
      var type_dropdown_defaultcart = "dropdown";
      var type_flycart_effect = "fade";
      var width_cart_item = "265";
      var wishlist_add = "The product was successfully added to your wishlist";
      var wishlist_cancel_txt = "Cancel";
      var wishlist_confirm_del_txt = "Delete selected item?";
      var wishlist_del_default_txt = "Cannot delete default wishlist";
      var wishlist_email_txt = "Email";
      var wishlist_loggin_required = "You must be logged in to manage your wishlist";
      var wishlist_ok_txt = "Ok";
      var wishlist_quantity_required = "You must enter a quantity";
      var wishlist_remove = "The product was successfully removed from your wishlist";
      var wishlist_reset_txt = "Reset";
      var wishlist_send_txt = "Send";
      var wishlist_send_wishlist_txt = "Send wishlist";
      var wishlist_url = "https:\/\/apollotran.com\/prestashop\/leo_cosmetics\/en\/module\/leofeature\/mywishlist";
      var wishlist_viewwishlist = "View your wishlist";
    </script>
    <script type="text/javascript">
     var choosefile_text = "Choose file";
     var turnoff_popup_text = "Do not show this popup again";

     var size_item_quickview = 89;
     var style_scroll_quickview = 'vertical';

     var size_item_page = 102;
     var style_scroll_page = 'horizontal';

     var size_item_quickview_attr = 113;
     var style_scroll_quickview_attr = 'vertical';

     var size_item_popup = 113;
     var style_scroll_popup = 'vertical';
   </script>

   <script type="text/javascript">
     var FancyboxI18nClose = "Close";
     var FancyboxI18nNext = "Next";
     var FancyboxI18nPrev = "Previous";
     var current_link = "http://apollotran.com/prestashop/leo_cosmetics/en/";
     var currentURL = window.location;
     currentURL = String(currentURL);
     currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
     current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
     var text_warning_select_txt = "Please select One to remove?";
     var text_confirm_remove_txt = "Are you sure to remove footer row?";
     var close_bt_txt = "Close";
     var list_menu = [];
     var list_menu_tmp = {};
     var list_tab = [];
     var isHomeMenu = 0;
   </script>

   <script>
      /**
       * List functions will run when document.ready()
       */
       var ap_list_functions = [];
      /**
       * List functions will run when window.load()
       */
       var ap_list_functions_loaded = [];

      /**
       * List functions will run when document.ready() for theme
       */

       var products_list_functions = [];
     </script>


     <script type="text/javascript">
      var leoOption = {
        category_qty:0,
        product_list_image:0,
        product_one_img:1,
        productCdown: 1,
        productColor: 0,
        homeWidth: 240,
        homeheight: 265,
      }

      ap_list_functions.push(function(){
        if (typeof $.LeoCustomAjax !== "undefined" && $.isFunction($.LeoCustomAjax)) {
          var leoCustomAjax = new $.LeoCustomAjax();
          leoCustomAjax.processAjax();
        }
      });
    </script>
  </head>
  <body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-enabled fullwidth">
    <main id="page">

      @include('frontend.includes.header')

      <aside id="notifications">
        <div class="container">
        </div>
      </aside>
      <section id="wrapper">
        <nav data-depth="1" class="breadcrumb hidden-sm-down">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span class="navigation-pipe">/</span>
              <a itemprop="item" href="https://apollotran.com/prestashop/leo_cosmetics/en/">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
          </ol>
        </nav>
        <div class="row">
          <div id="content-wrapper" class="col-lg-12 col-xs-12">
            <section id="main">
              <section id="content" class="page-home">

                @yield('slideImages')
                @yield('imagesBanner')

                @yield('content')
              </section>
              <footer class="page-footer">

                <!-- Footer content -->

              </footer>
            </section>
          </div>
        </div>
      </section>

      @include('frontend.includes.footer')

      <div id="back-top"><a href="#" class="fa fa-angle-double-up"></a></div>
    </main>
    <script type="text/javascript" src="/frontend/js/bottom-91be0075.js"></script>
    <script type="text/javascript">
      var choosefile_text = "Choose file";
      var turnoff_popup_text = "Do not show this popup again";

      var size_item_quickview = 89;
      var style_scroll_quickview = 'vertical';

      var size_item_page = 102;
      var style_scroll_page = 'horizontal';

      var size_item_quickview_attr = 113;
      var style_scroll_quickview_attr = 'vertical';

      var size_item_popup = 113;
      var style_scroll_popup = 'vertical';
    </script>

    @yield('script')
  </body>
  </html>
