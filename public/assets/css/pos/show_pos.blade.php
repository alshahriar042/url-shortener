
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bill Print | LecturePOS</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- <link rel="stylesheet" href="../../assets/css/demo_1/style.css"> -->
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="reports.css" media="all">
    <link rel="stylesheet" href="print.css" media="print">
    <style>
        @media all{
            .body{
                width: 80mm;
            }     
            #invoice-POS {
                /*box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);*/
                /*padding: 2mm;*/
                margin: 0 auto;
                width: 80mm;
                /*height: 500px;*/
                background: #FFF;
                font-family: Arial;
            }

            #invoice-POS ::selection {
                background: #f31544;
                color: #000;
            }

            #invoice-POS ::moz-selection {
                background: #f31544;
                color: #000;
            }

            #invoice-POS h1 {
                font-size: 1.5em;
                color: #000;
            }

            #invoice-POS h2 {
                font-size: .9em;
            }

            #invoice-POS h3 {
                font-size: 1.2em;
                font-weight: 300;
                line-height: 2em;
            }

            #invoice-POS p {
                font-size: .7em;
                color: #000;
                line-height: 1.2em;
            }

            #invoice-POS #top,
            #invoice-POS #mid,
            #invoice-POS #bot {
                border-bottom: 1px solid #000;
            }

            #invoice-POS #top {
                min-height: 100px;
            }

            #invoice-POS #mid {
                min-height: 80px;
            }

            #invoice-POS #bot {
                min-height: 20px;
            }

            #invoice-POS #bot_1 {
                min-height: 30px;
                border-bottom: 1px solid #000;
            }

            .border{
                border: 1px solid #000;
            }

            #invoice-POS #top .logo {
                height: 60px;
                width: 60px;
                background-size: 60px 60px;
            }

            #invoice-POS .clientlogo {
                float: left;
                height: 60px;
                width: 60px;
                background-size: 60px 60px;
                border-radius: 50px;
            }

            #invoice-POS .info {
                display: block;
                margin-left: 0;
            }

            #invoice-POS .title {
                float: right;
            }

            #invoice-POS .title p {
                text-align: right;
            }

            #invoice-POS table {
                width: 100%;
                border-collapse: collapse;
            }

            #invoice-POS .tabletitle {
                font-size: .6em;
                background: #EEE;
            }

            #invoice-POS .tabletitle2 {
                font-size: .7em;
                background: #EEE;
            }

            #invoice-POS .tabletitle1 {
                font-size: .6em;
                background: #EEE;
                border-bottom: 1px solid #000;
            }

            #invoice-POS .service {
                border-bottom: 1px solid #000;
                font-size: .7em;
            }

   /*     #invoice-POS .item {
            width: 20mm;
        }*/

        #invoice-POS .qty {
            width: 4mm;
            text-align: center;
        }

        #invoice-POS .payment {

            text-align:  right;
        }

        .Rate {
            width: 24mm;
            text-align:  center;
        }
        .right{
            text-align: right;
            width: 12mm;
        }
        .quantity{
            text-align: right;
            width: 10mm;
        }

        #invoice-POS .itemtext {
            font-size: .6em;

        }

        #invoice-POS #legalcopy {
            margin-top: 5mm;
            font-size: 10px;
        }

        #invoice-POS #legalcopy_12{
            margin-top: 5mm;
            font-size: 10px;
        }

        .legal { font-size: 10px; color: #000;}
        #legal{font-size: 8px; color: #000;}

        #legalcopy_12 span{
            font-size: 10px;
        }

        .legal_bottom {
            text-align: center;
        }

        .legal_right {
            text-align: right;
        }
        .text-center{
            text-align: center;
        }
        .text-left{
            text-align: left;
        }
        .text-right{
            text-align: right;
        }

        .mt-5{
            margin-top: 5px !important;
        }
        .p-0{
            padding: 0px !important;
        }

        .p-lr-5{
            padding-left: 5px !important;
            padding-right: 5px !important;
        }
        .p-b-2{
            padding-bottom: 2px !important;
        }

        .table-bordered>tfoot>tr>th{
            border: 1px solid transparent!important;
            padding: 2px;
            width: 60px;
        }

        .table-bordered>tfoot>tr>td{
            border: 1px solid transparent!important;
            padding: 1px;
        }


    }

</style>
</head>

<body onload="window.print();">
    <!-- <body onload="window.print();setTimeout('window.close()',500);"> -->
        <!-- <body> -->
            <div id="slip-print-section">
                <div id="invoice-POS">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="comp_name">
                                <h1 style="font-size: 24px;line-height: 1;">Top Gear</h1>
                            </div>
                            <div class="comp_add">
                                <span style="font-size: 18px">Auto Service BD Ltd.</span> <br>
                                <span style="font-size: 12px">2541 No. Sayeed Nagar. Madani Ave, Dhaka 1212</span>
                                <span style="font-size: 12px">Phone No: +880 1811336929</span>
                            </div>
                            <div class="memo_title" style="margin-top: 5px; padding: 2px 50px;">
                                <h4>Gate Pass</h4>
                            </div>
                        </div>
                        <hr style="margin: 5px 0px; border: 1px dashed #222;">
                        <div class="col-md-12 text-center mt-5">
                            <strong style="font-size: 14px"></strong>
                            <table>
                                <tr>
                                    <td style="border-right: 1px solid #222;">In Time</td>
                                    <td>Out Time</td>
                                </tr>

                                <tr>
                                    <th style="border-right: 1px solid #222;">14/12/2021 4:50 PM</th>
                                    <th>14/12/2021 4:50 PM</th>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <hr style="margin: 5px 0px; border: 1px dashed #222;">

                    <div class="row">
                        <div class="col-md-12 mt-10">
                            <table class="mb-10 font-size-10">
                                <tr>
                                    <th class="p-0 text-left" style="width: 60px;">Job Card No.</th>
                                    <th class="p-lr-5">:</th>
                                    <th class="p-0 text-left">TG-212001</th>
                                </tr>
                                <tr>
                                    <th class="p-0 text-left" style="width: 60px;">Gate Pass No</th>
                                    <th class="p-lr-5">:</th>
                                    <th class="p-0 text-left">612</th>
                                </tr>

                                <tr>
                                    <th class="p-0 text-left">Client Name/ID</th>
                                    <th class="p-lr-5">:</th>
                                    <th class="p-0 text-left">AL Shariar (TGCUS-12)</th>
                                </tr>

                                <tr>
                                    <th class="p-0 text-left">Mobile No.</th>
                                    <th class="p-lr-5">:</th>
                                    <th class="p-0 text-left">+880 1721365245</th>
                                </tr>

                                <tr>
                                    <th class="p-0 text-left">Address</th>
                                    <th class="p-lr-5">:</th>
                                    <th class="p-0 text-left">Client Address</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr style="border: 1px dashed #222;">
                    <!-- info row -->

                    <div class="row">
                        <div class="col-md-12">
                            <table class="font-size-8 m-auto table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-left"><span>REGISTRATION No</span></th>
                                        <th class="text-left"><span>CHESIS NO</span></th>
                                        <th class="text-left"><span>ENGINE NO</span></th>
                                        <th class="text-left"><span>BRAND/MODEL/YEAR</span></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="text-left" style="font-size:12px;">DHK-KA-1234</td>
                                        <td class="text-left" style="font-size:12px;">1695</td>
                                        <td class="text-left" style="font-size:12px;">1292</td>
                                        <td class="text-left" style="font-size:12px;">Toyota/Premio/2016</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="p-b-2 text-center" rowspan="" colspan="4" style="font-size: 10px; transform: rotate(-22deg); padding-top: 10px; "><strong>Paid</strong>  </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- <h5 style="margin-top: 10px; margin-bottom: 10px;">Your CAR IS MORE THREN JUST A CAR</h5> -->
                            <h5 style="margin-top: 10px; margin-bottom: 10px;">আপনার সহযোগিতার জন্য ধন্যবাদ</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12" style="padding-bottom: 50px;">
                            <table class="mb-15 font-size-10" style="margin: auto;">
                                <tr>
                                    <td class="text-left">Developed By</td>
                                    <td class="text-right">Printed By</td>
                                </tr>

                                <tr>
                                    <th class="text-left">NEXTGENINNOVATION LTD.</th>
                                    <th class="text-right font-size-8">Al Sahriar (12/14/2021 4:25PM )</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </body>

        </html>