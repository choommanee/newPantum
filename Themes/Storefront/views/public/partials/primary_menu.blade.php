<ul class="nav navbar-nav">
    @each('public.partials.mega_menu.menu', $primaryMenu->menus(), 'menu')
</ul>
@push('scripts')
    <script>
        $('#menu_normal').width(400);

        function hidemenudetail(menuid){
            $('#menu_normal').width(500);
            $( '#menuMain'+menuid ).removeClass( "col-sm-6" );
            $( '#menuMain'+menuid ).addClass( "col-sm-12" );
            $('.menushowdetail').html('');
            $('.menushowdetail').hide();
        }

        function showMenudetail(slug,menuid){


            if(slug=='single-function-xXtLnviB'){
              /*  $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');*/

                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://save2home.com/public/en/products/m6600nw" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://save2home.com/public/en/products/m6600nw" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="https://save2home.com/storage/media/l1DbfUyo6wA6sonx8KrCJCLyecC3mU39bEOTel4N.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a>\n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">M6600NW</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">MONOCHROME LASER MULTFUNCTION\n</span>\n' +
                    '            </a><br/><a  href="https://save2home.com/public/en/products/m6600nw" style=\'color:#555\'>\n' +
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
                $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');
                html ='<div class="product-image1  clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://save2home.com/en/products/cp2500dn" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://save2home.com/en/products/cp2500dn" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="https://save2home.com/storage/media/VcE8T7LwG78CF2yu1coWge4zgzWLR5yChJINYCsB.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n</a>'+
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">CP2500DN</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">COLOR  LASER PRINTER</span>\n' +
                    '            </a><br/><a href="https://save2home.com/en/products/cp2500dn" style=\'color:#555\'>\n' +
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
                $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');

                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://save2home.com/public/en/products/p2500w" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://save2home.com/public/en/products/p2500w" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="https://save2home.com/storage/media/tfuWoUgyehvvsIa8P1dhtJhc5pjSbA07pTvax7oq.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="https://save2home.com/public/en/products/p2500w" class="product-card">\n' +

                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">P2500W</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">Monochrome Laser Printer</span>\n' +
                    '            </a><br/><a href="https://save2home.com/public/en/products/p2500w" style=\'color:#555\'>\n' +
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
                $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');
                html ="<div class=\"product-image1 clearfix col-md-12\" style=\"text-align: center;border-left: 1px solid #ded8d8; \">\n" +
                    "<a href=\"https://save2home.com/public/en/products/m6600nw\" class=\"product-card\">\n" +
                    "    </a><div class=\"product-card-inner\"><a href=\"https://save2home.com/public/en/products/m6600nw\" class=\"product-card\">\n" +
                    "        <div class=\"product-image clearfix col-md-12\">\n" +
                    "            <ul class=\"product-ribbon list-inline\">\n" +
                    "                \n" +
                    "                            </ul>\n" +
                    "\n" +
                    "            \n" +
                    "                <div class=\"image-holder\" style=\"height: 150px\">\n" +
                    "                    <img src=\"https://save2home.com/storage/media/l1DbfUyo6wA6sonx8KrCJCLyecC3mU39bEOTel4N.png\">\n" +
                    "                </div>\n" +
                    "            \n" +
                    "\n" +
                    "        </a><div class=\"clearfix col-md-12\" style=\"text-align: center\"><a href=\"https://save2home.com/public/en/products/m6600nw\" class=\"product-card\">\n" +

                    "            \n" +
                    "            <span class=\"product-name\" style=\"color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;\">M6600NW</span><br>\n" +
                    "            <span class=\"product-name\" style=\"color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */\">MONOCHROME LASER MULTFUNCTION\n</span>\n" +
                    "            </a><br/><a  href=\"https://save2home.com/public/en/products/m6600nw\"  style='color:#555'>\n" +
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
                $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');
                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://save2home.com/public/en/products/p3500dn" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://save2home.com/public/en/products/p3500dn" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 150px">\n' +
                    '                    <img src="https://save2home.com/storage/media/bv8vGkyqaFsZuhtU0Y5fZQSN11NFBl80jxRvkRPB.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="https://save2home.com/public/en/products/p3500dn" class="product-card">\n' +
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">P3500DN</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">Monochrome Laser Printer</span>\n' +
                    '            </a><br/><a  href="https://save2home.com/public/en/products/p3500dn" style=\'color:#555\'>\n' +
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

                $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');
                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://save2home.com/en/products/pc-211rb" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://save2home.com/en/products/pc-211rb" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 180px">\n' +
                    '                    <img src="https://save2home.com/storage/media/UoVn9jYYELw9FaUHuCHEYmOQkN7SK37RVY3wCtoJ.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="https://save2home.com/en/products/pc-211rb" class="product-card">\n' +
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">PC-211RB</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">High quality assurance, reliable prints</span>\n' +
                    '            </a><br/><a  href="https://save2home.com/en/products/pc-211rb" style=\'color:#555\'>\n' +
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
                $('#menu_normal').width(700);

                $( '#menuMain'+menuid ).removeClass( "col-sm-12" );
                $( '#menuMain'+menuid ).addClass( "col-sm-6" );

                $('.menushowdetail').html('');

                html ='<div class="product-image1 clearfix col-md-12" style="text-align: center;border-left: 1px solid #ded8d8;">\n' +
                    '<a href="https://save2home.com/en/products/dl-500" class="product-card">\n' +
                    '    </a><div class="product-card-inner"><a href="https://save2home.com/en/products/dl-500" class="product-card">\n' +
                    '        <div class="product-image clearfix col-md-12">\n' +
                    '            <ul class="product-ribbon list-inline">\n' +
                    '                \n' +
                    '                            </ul>\n' +
                    '\n' +
                    '            \n' +
                    '                <div class="image-holder" style="height: 180px">\n' +
                    '                    <img src="https://save2home.com/storage/media/HxBEyrjr74CJNHzTpuZO6sJzoKfgXsFPaDMQNhfq.png">\n' +
                    '                </div>\n' +
                    '            \n' +
                    '        </div>\n' +
                    '\n' +
                    '        </a><div class="clearfix col-md-12" style="text-align: center"><a href="https://save2home.com/en/products/dl-500" class="product-card">\n' +
                    '            \n' +
                    '            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;">DL-500H</span><br>\n' +
                    '            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */">High quality assurance</span>\n' +
                    '            </a><br/><a  href="https://save2home.com/en/products/dl-500" style=\'color:#555\'>\n' +
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
