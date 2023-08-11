<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Wardrobe Email confirmation</title>
    <meta name="description" content="New Account Email Template.">

    <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }

        .table_cls {
            border: 1px solid #000;
            border-collapse: collapse;

        }

        .font_14 {
            font-size: 12px;
        }

        .font_14_bold {
            font-size: 12px;
            font-weight: bold;
        }
        .font_141_bold{
            font-size: 13px;
            font-weight: 600;
        }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!-- 100% body table -->

    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8">

        <tr>
            <td>
                <table style="background-color: #fff; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>

                                <tr>
                                    <td style="padding:0 35px; float:left;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:700; font-size:32px;font-family:'Rubik',sans-serif;">
                                            Order Confirmation Email </h1>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:0 35px;text-align: start;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:700; font-size:25px;font-family:'Rubik',sans-serif;">
                                            Subject </h1>
                                        <p style="font-size: 16px;font-weight: 500;">
                                            Denir.sk | Potvrdenie objednávky ohranenej dosky [Denir.sk | Edge board
                                            order confirmation]
                                        </p>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;text-align: start;">
                                        <h1
                                            style="color:#1e1e2d; font-weight:700; font-size:25px;font-family:'Rubik',sans-serif;">
                                            Text</h1>
                                        <p style="font-size: 16px;font-weight: 500;">Dobrý deň, [Meno].
                                            Ďakujeme Vám za objednávku v konfigurátore Denir.sk!</p>
                                        <p> Nižšie nájdete rekapituláciu Vašej objednávky a postup na zaplatenie
                                            Vaša objednávka sa začne vyrábať po pripísaní platby láš účet.</p>
                                        <p>[Hello, [Name].
                                            Thank you for placing an order in the Denir.sk configurator!
                                        </p>
                                        <p>Below you will find a summary of your order and how to pay for your order.
                                            Your order will start to be produced once payment has been credited to our
                                            account.]
                                        </p>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 45px">
                                        <table style="width:670px;border: 1px solid #000;margin-top: 18px;">
                                            <tr></tr>
                                            <td style="height: 200px;">
                                                <a href="">
                                                    <img src="<?=base_url('assests/web_assets/img_web/').$image?>"
                                                        class="img-fluid" alt=""
                                                        style="height: 300px;width: 550px; margin: 27px 6px 3px 5px;padding: 0 0 17px 0;">
                                                </a>
                                            </td>
                                </tr>



                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0 45px;">
                            <table
                                style="width:670px;border: 1px solid #000;margin-top: 18px; border-collapse: collapse;">
                                <tr>
                                    <th style="font-size: 18px;border: 1px solid #000; border-collapse: collapse;">
                                        <p>
                                            Vaša objednávka
                                        </p>
                                    </th>
                                    <th style="font-size: 18px;border: 1px solid #000; border-collapse: collapse;"><p>
                                        [Your order]
                                    </p></th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #000; border-collapse: collapse;">
                                        <p class="font_14_bold">
                                            Položka č.1
                                        </p>
                                    </td>
                                    <td style="border: 1px solid #000; border-collapse: collapse;">
                                        <p>
                                            <!--[Item No 1]-->
                                            1
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #000; border-collapse: collapse;">
                                        <p class="font_14_bold">
                                            ks:
                                        </p>
                                    </td>
                                    <td style="border: 1px solid #000; border-collapse: collapse;">
                                        <p>
                                            <?=$door?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Rozmery:
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            Dĺžka: <?=$height?>
                                        </p>
                                        <p>
                                            Šírka: <?=$width?>
                                        </p>
                                        <p>
                                            Hĺbka: <?=$depth?>
                                        </p>
                                    </td>
                                </tr>
                             <!--    <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Dekor dosky:
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>[DTD material]
                                        </p>
                                        <p>

                                            [ABS Material locations (separated by comma)]
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Dekor ABS hrán:
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            [ABS Material]

                                        </p>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Cena:
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!--s DPH [price with VAT]-->
                                            <?=$subtotal?>
                                        </p>
                                        <p>
                                            <!--bez DPH [price]-->
                                            <?=$subtotal?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">

                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p style="font-size: 18px;font-weight: bold;">
                                            Spolu
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!--s DPH [all items subtotal price with VAT]-->
                                            <?=$subtotal?>
                                        </p>
                                        <p>
                                            <!--bez DPH [all items subtotal price]-->

                                            <?=$subtotal?>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">

                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p style="font-size: 18px;font-weight: bold;">
                                            Kontaktné údaje
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!--[Contact details]-->
                                        </p>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">Meno:</p>
                                    </td>
                                    <td class="table_cls">
                                        <!-- [Name] -->
                                        <?=$name?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Priezvisko:
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [Surname] -->
                                            <?=$surname?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Telefónne číslo:
                                          
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [Phone] -->
                                            <?=$phone?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Email:
                                           
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>

                                            <!-- [Email] -->
                                            <?=$email?>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">

                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p style="font-size: 18px; font-weight: bold;">
                                            Dodacia adresa
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [Delivery address] -->
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Ulica a číslo:
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                        <!-- [Address] -->
                                        <?=$address1?>
                                    </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Mesto
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [City] -->
                                            <?=$city?>
                                        </p>
                                    </td>

                                </tr>
                                <tr>

                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            PSČ
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [Zip code] -->
                                            <?=$zip?>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">

                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>

                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table_cls">
                                        <p style="font-size: 18px;font-weight: bold;">
                                            Fakturačná adresa
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [Billing address] -->
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Ulica a číslo:

                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [Billing address] -->
                                            <?=$city1?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Mesto
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <!-- [Mesto] -->
                                        <?=$zip1?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            PSČ
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!-- [PSČ] -->
                                            <?=$phone?>
                                        </p>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p style="font-size: 18px;font-weight: bold;">
                                            Firemné údaje
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            <!--Business data]-->
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            Firma
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            company
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            IČO
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            Company ID
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">
                                            IČ DPH
                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            VAT number
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p class="font_14_bold">

                                        </p>
                                    </td>
                                    <td class="table_cls">
                                        <p>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_cls">
                                        <p style="font-size: 18px;font-weight: bold;">Poznámka:</p>
                                    </td>
                                    <td class="table_cls">
                                        <p>
                                            Note
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>

                    </tr>
                    <td style="padding:0 45px;text-align: left;">
                        <table style="width:670px;margin-top: 18px;">
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Informácie pre platbu
                                    </p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Číslo účtu:
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">

                                        Suma:

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">Variabilný symbol:</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Prajeme Vám príjemný zvyšok dňa
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Denir s. r. o.

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        [Payment information
                                    </p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Account number:
                                    </p>
                                </td>
                                <td>
                                    <p class="font_141_bold">

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Amount: 
                                    </p>
                                </td>
                                <td>
                                    <p class="font_141_bold" >
                                        <?=$subtotal?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">
                                        Variable symbol:
                                    </p>
                                </td>
                                <td>
                                    <p class="font_141_bold" >

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold">

                                        We wish you a pleasant rest of the day

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font_141_bold" >Denir s. r. o.]</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </td>

        <tr>
            <td style="height:40px;">&nbsp;</td>
        </tr>

    </table>

    </td>
    </tr>

    </table>
    </td>
    </tr>
    </table>

    <!--/100% body table-->
</body>

</html>