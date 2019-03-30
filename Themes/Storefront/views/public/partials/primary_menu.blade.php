<ul class="nav navbar-nav">
    @each('public.partials.mega_menu.menu', $primaryMenu->menus(), 'menu')
</ul>
@push('scripts')
    <script>
        $('#menu_normal').width(400);

        function showMenudetail(slug,menuid){
            $('#menu_normal').width(700);

            $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
            $( '#menuMain'+menuid ).addClass( "col-sm-6" );

            $('.menushowdetail').html('');

            if(slug=='single-function-xXtLnviB'){

                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="http://pt.socail-easy.com/public/en/products/m6600nw" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="http://pt.socail-easy.com/public/en/products/m6600nw" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/l1DbfUyo6wA6sonx8KrCJCLyecC3mU39bEOTel4N.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a>\n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">M6600NW</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">MONOCHROME LASER MULTFUNCTION\n</span>\n' +
                    '            </a><br/><a  href="http://pt.socail-easy.com/public/en/products/m6600nw">\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';
               // $('.menushowdetail').html(html);
               // $('.menushowdetail').show();

            }

            if(slug=='high-speed-zy6CsfbI'){
                html ='<div class="product-image1  clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://pt.socail-easy.com/en/products/cp2500dn" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://pt.socail-easy.com/en/products/cp2500dn" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/VcE8T7LwG78CF2yu1coWge4zgzWLR5yChJINYCsB.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n</a>'+
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">CP2500DN</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">COLOR  LASER PRINTER</span>\n' +
                    '            </a><br/><a href="https://pt.socail-easy.com/en/products/cp2500dn" >\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';

                 $('.menushowdetail').html(html);
                 $('.menushowdetail').show();
            }
            if(slug=='multifunction-Ftm1kJl1'){
                html='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://pt.socail-easy.com/en/products/cm7105dn-z5RwEzz1" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://pt.socail-easy.com/en/products/cm7105dn-z5RwEzz1" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/o97WtnBjXdm0J2eXwkfcWKjdINkQ5YWilxOTi32k.png">\n' +
                    '                </div>\n' +
                    '            \n' +

                    '        </div>\n' +
                    '</a>' +
                    '        <div class="clearfix col-md-12" style="text-align: center"><a href="https://pt.socail-easy.com/en/products/cm7105dn-z5RwEzz1" class="product-card">\n' +

                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">CM7105DN</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">COLOR MULTI FUNCTION LASER PRINTER</span>\n' +
                    '            </a><br/><a href="https://pt.socail-easy.com/en/products/cm7105dn-z5RwEzz1" >\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';

                $('.menushowdetail').html(html);
                $('.menushowdetail').show();
            }

            if(slug=='single-function'){

                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="http://pt.socail-easy.com/public/en/products/p2500w" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="http://pt.socail-easy.com/public/en/products/p2500w" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/tfuWoUgyehvvsIa8P1dhtJhc5pjSbA07pTvax7oq.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="http://pt.socail-easy.com/public/en/products/p2500w" class="product-card">\n' +

                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">P2500W</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">Monochrome Laser Printer</span>\n' +
                    '            </a><br/><a href="http://pt.socail-easy.com/public/en/products/p2500w">\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';
                $('.menushowdetail').html(html);
                $('.menushowdetail').show();

            }

            if(slug=='multifunction'){
                html ="<div class=\"product-image1 clearfix col-md-12\" style=\"text-align: center;border-left: 1px solid #ded8d8; \">\n" +
                    "<a href=\"http://pt.socail-easy.com/public/en/products/m6600nw\" class=\"product-card\">\n" +
                    "    </a><div class=\"product-card-inner\"><a href=\"http://pt.socail-easy.com/public/en/products/m6600nw\" class=\"product-card\">\n" +
                    "        <div class=\"product-image clearfix col-md-12\">\n" +
                    "            <ul class=\"product-ribbon list-inline\">\n" +
                    "                \n" +
                    "                            </ul>\n" +
                    "\n" +
                    "            \n" +
                    "                <div class=\"image-holder\" style=\"height: 150px\">\n" +
                    "                    <img src=\"http://pt.socail-easy.com//storage/media/l1DbfUyo6wA6sonx8KrCJCLyecC3mU39bEOTel4N.png\">\n" +
                    "                </div>\n" +
                    "            \n" +
                    "\n" +
                    "        </a><div class=\"clearfix col-md-12\" style=\"text-align: center\"><a href=\"http://pt.socail-easy.com/public/en/products/m6600nw\" class=\"product-card\">\n" +

                    "            \n" +
                    "            <span class=\"product-name\" style=\"color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;\">M6600NW</span><br>\n" +
                    "            <span class=\"product-name\" style=\"color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */\">MONOCHROME LASER MULTFUNCTION\n</span>\n" +
                    "            </a><br/><a  href=\"http://pt.socail-easy.com/public/en/products/m6600nw\" >\n" +
                    "                more\n" +
                    "            </a>\n" +
                    "        </div>\n" +
                    "\n" +
                    "    </div>\n" +
                    "\n" +
                    "</div>";
                $('.menushowdetail').html(html);
                $('.menushowdetail').show();
            }

            if(slug=='high-speed'){
                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="http://pt.socail-easy.com/public/en/products/p3500dn" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="http://pt.socail-easy.com/public/en/products/p3500dn" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/bv8vGkyqaFsZuhtU0Y5fZQSN11NFBl80jxRvkRPB.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="http://pt.socail-easy.com/public/en/products/p3500dn" class="product-card">\n' +
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">P3500DN</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">Monochrome Laser Printer</span>\n' +
                    '            </a><br/><a  href="http://pt.socail-easy.com/public/en/products/p3500dn" >\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';
                $('.menushowdetail').html(html);
                $('.menushowdetail').show();

            }

            if(slug=='toner'){
                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://pt.socail-easy.com/en/products/pc-211rb" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://pt.socail-easy.com/en/products/pc-211rb" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/eVr47yggaj5v5Tyf60n6X2W6fnnWqmncA0HomAsY.png">\n' +
                    '                </div>\n' +

                    '        </div>\n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="https://pt.socail-easy.com/en/products/pc-211rb" class="product-card">\n' +

                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">PC-211RB</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">High quality assurance, reliable prints</span>\n' +
                    '            </a><br/><a  href="https://pt.socail-easy.com/en/products/pc-211rb" >\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';

                $('.menushowdetail').html(html);
                $('.menushowdetail').show();
            }

            if(slug=='drum'){
                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://pt.socail-easy.com/en/products/dl-500" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://pt.socail-easy.com/en/products/dl-500" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="http://pt.socail-easy.com//storage/media/HxBEyrjr74CJNHzTpuZO6sJzoKfgXsFPaDMQNhfq.png" title="DL-500H">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="https://pt.socail-easy.com/en/products/dl-500" class="product-card">\n' +
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">DL-500H</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">High quality assurance</span>\n' +
                    '            </a><br/><a  href="https://pt.socail-easy.com/en/products/dl-500">\n' +
                    '                more\n' +
                    '            </a>\n' +
                    '        </div>\n' +
                    '\n' +
                    '    </div>\n' +
                    '\n' +
                    '</div>';

                $('.menushowdetail').html(html);
                $('.menushowdetail').show();
            }
        }
    </script>
@endpush
