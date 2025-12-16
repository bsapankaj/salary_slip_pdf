<?php

require_once 'autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// DOMPDF Options
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);
$options->set('defaultFont', 'Arial');

$dompdf = new Dompdf($options);

// HTML load
$html = '';

$html = '<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Salary Slip</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                margin: 0;
                padding: 0;
                color: #000;
            }

            .container {
                width: 100%;
                margin: 0 auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            td {
                border: 1px solid #666;
                padding: 3px 6px;
                vertical-align: middle;
            }

            .center {
                text-align: center;
            }

            .bold {
                font-weight: bold;
            }

            .right {
                text-align: right;
            }

            .left {
                text-align: left;
            }

            .red {
                color: #ff0000;
            }

            .blue {
                color: #0000ff;
            }

            .purple {
                color: #800080;
            }

            .earnings_header{
                background-color: #f2f2f2;   /* light grey */
                font-weight: bold;
                color: #000;
            }

            /* ---- BORDER FIX (IMPORTANT) ---- */
            .no_left_border {
                border-left: none !important;
            }

            .no_right_border {
                border-right: none !important;
            }

            .no_bottom_border {
                border-bottom: none !important;
            }

            .no_top_border {
                border-top: none !important;
            }

            .bold_top_border{
                border-top: 2px solid #000 !important;
            }

            .earn_row td{
                border-bottom: 1px dotted #000 !important;
            }

            .name_underline{
                display:inline-block;
                width:100%;
                border-bottom:0.5px solid #000;
                padding-bottom:-2px;
            }
        </style>
    </head>

    <body>

        <div class="container">

            <!-- HEADER -->
            <div class="center bold red" style="font-size:20px;">
                SHEOPALS PRIVATE LIMITED
            </div>
            <div class="center bold">44/10, OKHLA PHASE-2</div>
            <div class="center bold">NEW DELHI 110020</div>
            <div class="center bold purple">
                Send Pay Slip thru E.Mail for the Month of March, 2025
            </div>

            <!-- EMP DETAILS -->
            <table>
                <tr>
                    <!-- FIX HERE -->
                    <td colspan="1" class="no_right_border">Emp.Cd.</td>
                    <td colspan="2" class="left blue no_left_border no_right_border">ESPL0294</td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="3" class="left no_left_border no_right_border"></td>
                    <td colspan="3" class="right no_left_border"><span>Mode of Payment</span></td>
                </tr>

                <tr>
                    <!-- FIX HERE -->
                    <td colspan="1" class="no_right_border">Name</td>
                    <td colspan="3" class="left blue bold no_left_border no_right_border">Mr.Rupansu Kumar Takur</td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="left no_left_border no_right_border"></td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-right: -65px;">Cash</span></td>
                </tr>

                <tr>
                    <!-- FIX HERE -->
                    <td colspan="1" class="no_right_border">F/H Name</td>
                    <td colspan="2" class="left blue no_left_border no_right_border">Satvendra Thakur</td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="3" class="left no_left_border no_right_border"></td>
                    <td colspan="3" class="center no_left_border"><span style="margin-right: -65px;">DOJ</span></td>
                </tr>

                <tr>
                    <!-- FIX HERE -->
                    <td colspan="1" class="no_right_border">Desg.</td>
                    <td colspan="2" class="left blue no_left_border no_right_border">TEAM LEADER</td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="no_left_border no_right_border">Pf No.</td>
                    <td colspan="3" class="left blue no_left_border no_right_border">EXEMPTED</td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-right: -105px;">01-10-2024</span></td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Deptt.</td>
                    <td colspan="11" class="blue no_left_border">TELESALES</td>
                </tr>

                <tr>
                    <td colspan="12" style="height: 15px;"></td>
                </tr>

                <tr>
                    <td colspan="12" style="height: 15px;"></td>
                </tr>

                <tr>
                    <td colspan="12" style="height: 15px;"></td>
                </tr>

                <tr>
                    <!-- FIX HERE -->
                    <td colspan="1" class="no_right_border"></td>
                    <td colspan="2" class="left blue no_left_border no_right_border"></td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="no_left_border no_right_border">UAN</td>
                    <td colspan="3" class="left blue no_left_border no_right_border"></td>
                    <td colspan="3" class="center blue no_left_border"><span></span></td>
                </tr>

                <tr>
                    <!-- FIX HERE -->
                    <td colspan="1" class="no_right_border"></td>
                    <td colspan="2" class="left blue no_left_border no_right_border"></td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="no_left_border no_right_border">Aadhaar</td>
                    <td colspan="3" class="left blue no_left_border no_right_border">536212914427</td>
                    <td colspan="3" class="center blue no_left_border"><span></span></td>
                </tr>

                <!-- DAY WORK SECTION -->
                <tr class="bold_top_border">
                    <td colspan="1" class="no_right_border">Day Work</td>
                    <td colspan="1" class="blue no_left_border no_right_border">25.50</td>
                    <td colspan="2" class="left no_left_border no_right_border">On Duty</td>
                    <td colspan="2" class="blue no_left_border no_right_border">0.00</td>
                    <td colspan="6" class="center no_left_border">Consumed</td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Holidays</td>
                    <td colspan="1" class="blue no_left_border no_right_border">1.00</td>
                    <td colspan="2" class="left no_left_border no_right_border">Training Days</td>
                    <td colspan="2" class="blue no_left_border no_right_border">0.00</td>
                    <td colspan="3" class="left no_left_border no_right_border">LV</td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-left: -92px;">0.00</span></td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Weekly Off</td>
                    <td colspan="1" class="blue no_left_border no_right_border">4.00</td>
                    <td colspan="2" class="left no_left_border no_right_border">Maternity</td>
                    <td colspan="2" class="blue no_left_border no_right_border">0.00</td>
                    <td colspan="3" class="left no_left_border no_right_border">CL</td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-left: -92px;">0.00</span></td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Without Pay</td>
                    <td colspan="1" class="blue no_left_border no_right_border">0.50</td>
                    <td colspan="2" class="left no_left_border no_right_border">Paid Days</td>
                    <td colspan="2" class="blue bold no_left_border no_right_border">30.50</td>
                    <td colspan="3" class="left no_left_border no_right_border">SL</td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-left: -92px;">0.00</span></td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Absent</td>
                    <td colspan="1" class="blue no_left_border no_right_border">0.00</td>
                    <td colspan="2" class="left no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="3" class="left no_left_border no_right_border">L1</td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-left: -92px;">0.00</span></td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Compen.Holi</td>
                    <td colspan="1" class="blue no_left_border no_right_border">0.00</td>
                    <td colspan="2" class="left no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="3" class="left no_left_border no_right_border">L2</td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-left: -92px;">0.00</span></td>
                </tr>

                <tr>
                    <td colspan="1" class="no_right_border">Restricted</td>
                    <td colspan="1" class="blue no_left_border no_right_border">0.00</td>
                    <td colspan="2" class="left no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="3" class="left no_left_border no_right_border"></td>
                    <td colspan="3" class="center blue no_left_border"><span style="margin-left: -92px;"></span></td>
                </tr>

                <tr class="earnings_header">
                    <td colspan="1" class="bold no_right_border">EARNINGS</td>
                    <td colspan="1" class="blue no_left_border no_right_border"></td>
                    <td colspan="2" class="left no_left_border no_right_border"></td>
                    <td colspan="2" class="blue no_left_border no_right_border"></td>
                    <td colspan="3" class="left bold no_left_border no_right_border">Rate</td>
                    <td colspan="2" class="right bold no_left_border no_right_border"><span style="margin-right: 75px;">Amount</span></td>
                    <td colspan="1" class="right bold no_left_border"><span style="margin-right: 5px;">Arrears</span></td>
                </tr>
                
                <tr class="earn_row">
                    <td colspan="1" class="bold no_left_border no_right_border no_bottom_border"></td>
                    <td colspan="1" class="no_left_border no_right_border no_bottom_border">G.BasicPay</td>
                    <td colspan="2" class="left no_left_border no_right_border no_bottom_border"></td>
                    <td colspan="1" class="blue no_left_border no_right_border no_bottom_border"></td>
                    <td colspan="4" class="left blue no_left_border no_right_border no_bottom_border"><span style="margin-left: 10px;">17,500.00</span></td>
                    <td colspan="2" class="right blue no_left_border no_right_border no_bottom_border"><span style="margin-right: 75px;">17,218.00</span></td>
                    <td colspan="1" class="right blue no_left_border no_right_border no_bottom_border"><span style="margin-right: 5px;">0.00</span></td>
                </tr>

                <tr class="earn_row">
                    <td colspan="1" class="bold no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="no_left_border no_right_border no_bottom_border no_top_border">HAR</td>
                    <td colspan="2" class="left no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="blue no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="4" class="left blue no_left_border no_right_border no_bottom_border no_top_border"><span style="margin-left: 15px;">7,503.00</span></td>
                    <td colspan="2" class="right blue no_left_border no_right_border no_bottom_border no_top_border"><span style="margin-right: 75px;">7,382.00</span></td>
                    <td colspan="1" class="right blue no_left_border no_right_border no_bottom_border no_top_border"><span style="margin-right: 5px;">0.00</span></td>
                </tr>

                <tr class="earn_row">
                    <td colspan="1" class="bold no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="no_left_border no_right_border no_bottom_border no_top_border">Other Alw</td>
                    <td colspan="2" class="left no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="blue no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="4" class="left blue no_left_border no_right_border no_bottom_border no_top_border"><span style="margin-left: 15px;">1,998.00</span></td>
                    <td colspan="2" class="right blue no_left_border no_right_border no_bottom_border no_top_border"><span style="margin-right: 75px;">1,966.00</span></td>
                    <td colspan="1" class="right blue no_left_border no_right_border no_bottom_border no_top_border"><span style="margin-right: 5px;">0.00</span></td>
                </tr>

                <tr class="earn_row">
                    <td colspan="1" class="bold no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="no_left_border bold no_bottom_border no_top_border">TOTAL</td>
                    <td colspan="2" class="left bold no_left_border no_right_border "></td>
                    <td colspan="1" class="blue bold no_left_border no_right_border "></td>
                    <td colspan="4" class="left bold blue no_left_border no_right_border "><span style="margin-left: 15px;">27001.00</span></td>
                    <td colspan="2" class="right bold blue no_left_border no_right_border "><span style="margin-right: 75px;">26566.00</span></td>
                    <td colspan="1" class="right bold blue no_left_border"><span style="margin-right: 5px;">0.00</span></td>
                </tr>

                <tr class="earnings_header">
                    <td colspan="1" class="bold no_right_border">DEDUCTIONS</td>
                    <td colspan="1" class="no_left_border no_right_border bold"></td>
                    <td colspan="2" class="left bold no_left_border no_right_border "></td>
                    <td colspan="1" class="bold no_left_border no_right_border "></td>
                    <td colspan="4" class="left bold no_left_border no_right_border "><span style="margin-left: 15px;"></span></td>
                    <td colspan="2" class="right bold no_left_border no_right_border "><span style="margin-right: 75px;">Amount</span></td>
                    <td colspan="1" class="right bold no_left_border"><span style="margin-right: 5px;"></span></td>
                </tr>

                <tr class="earn_row">
                    <td colspan="1" class="bold no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="no_left_border no_right_border no_bottom_border no_top_border">LWF</td>
                    <td colspan="2" class="left no_left_border no_right_border "></td>
                    <td colspan="1" class="blue no_left_border no_right_border "></td>
                    <td colspan="4" class="left blue no_left_border no_right_border "><span style="margin-left: 15px;"></span></td>
                    <td colspan="2" class="right blue no_left_border no_right_border "><span style="margin-right: 75px;">0.75</span></td>
                    <td colspan="1" class="right blue no_left_border no_right_border "><span style="margin-right: 5px;"></span></td>
                </tr>

                <tr class="earn_row">
                    <td colspan="1" class="bold no_left_border no_right_border no_bottom_border no_top_border"></td>
                    <td colspan="1" class="no_left_border bold no_bottom_border no_top_border">TOTAL</td>
                    <td colspan="2" class="left bold no_left_border no_right_border "></td>
                    <td colspan="1" class="blue bold no_left_border no_right_border "></td>
                    <td colspan="4" class="left bold blue no_left_border no_right_border "><span style="margin-left: 15px;"></span></td>
                    <td colspan="2" class="right bold blue no_left_border no_right_border "><span style="margin-right: 75px;">0.75</span></td>
                    <td colspan="1" class="right bold blue no_left_border"><span style="margin-right: 5px;"></span></td>
                </tr>

                <tr class="earnings_header">
                    <td colspan="1" class="bold no_right_border">NET PAYABLE</td>
                    <td colspan="1" class="no_left_border no_right_border bold"></td>
                    <td colspan="2" class="left bold no_left_border no_right_border "></td>
                    <td colspan="1" class="bold no_left_border no_right_border "></td>
                    <td colspan="4" class="left bold no_left_border no_right_border"><span style="margin-left: 15px;"></span></td>
                    <td colspan="2" class="right bold blue no_left_border no_right_border "><span style="margin-right: 75px;">26565.25</span></td>
                    <td colspan="1" class="right bold no_left_border"><span style="margin-right: 5px;"></span></td>
                </tr>

                <tr class="earnings_header">
                    <td colspan="12" class="bold">(Rupees Twenty Six Thousand Five Hundred Sixty Five and Paisa Twenty Five only)</td>
                </tr>

                <tr>
                    <td colspan="12" class="no_left_border no_right_border no_bottom_border no_top_border">Remarks:</td>
                </tr>
                <tr>
                    <td colspan="11" class="no_left_border no_right_border no_bottom_border no_top_border">This is a computer generated statement, hence no signature required. </td>
                    <td colspan="1" class="no_left_border no_right_border no_bottom_border no_top_border"><span class="name_underline">Visual Pay</span></td>
                </tr>

            </table>

        </div>

    </body>

</html>';

// echo $html;exit;

$dompdf->loadHtml($html);

// Paper size
$dompdf->setPaper('A4', 'portrait');

// Render PDF
$dompdf->render();

// Browser me open
$dompdf->stream("Salary_Slip_March_2025.pdf", [
    "Attachment" => false
]);



?>