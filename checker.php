<?php
// set API Endpoint and Access Key (and any options of your choice)
$endpoint = 'live';
$access_key = 'KEY';
// Initialize CURL:
$ch = curl_init('http://apilayer.net/api/'.$endpoint.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Store the data:
$json = curl_exec($ch);
curl_close($ch);
// Decode JSON response:
$exchangeRates = json_decode($json, true);
// Access the exchange rate values, e.g. GBP:
$USD = $exchangeRates['quotes']['USDUSD'];
$EUR = $exchangeRates['quotes']['USDEUR'];
$GBP = $exchangeRates['quotes']['USDGBP'];
$CAD = $exchangeRates['quotes']['USDCAD'];
$HKD = $exchangeRates['quotes']['USDHKD'];
#$IRR = $exchangeRates['quotes']['USDIRR'];
$IRR = shell_exec("irr-rate.sh 2>&1");
$IRR_N = $exchangeRates['quotes']['USDIRR'];
$AED = $exchangeRates['quotes']['USDAED'];
$TRY = $exchangeRates['quotes']['USDTRY'];
$SAR = $exchangeRates['quotes']['USDSAR'];
$MYR = $exchangeRates['quotes']['USDMYR'];
$CNY = $exchangeRates['quotes']['USDCNY'];
$UAH = $exchangeRates['quotes']['USDUAH'];
$BYN = $exchangeRates['quotes']['USDBYN'];
$now = date("Y-m-d h:i:s");$now2 = date("YmdH");
$msg = '<html><body>';
$msg .= '<p style="font-family: Tahoma; font-size: 14px;"><strong>Hello</strong></p>';
$msg .= '<p style="font-family: Tahoma; font-size: 14px;">From below table you can find the currency exchange rates based on currencylayer.com & sanarate.ir. Update time: ' . $now . '.</p>';
$msg .= '<table rules="all" border="1" style="border-color: #666; font-family: Tahoma; font-size: 14px;" cellpadding="10">';
$msg .= '<tr style="background: #eee;"><td><strong>Currency</strong></td><td><strong>Rate</strong></td></tr>';
$msg .= '<tr>';
$msg .= '<td>USD</td><td>' . $USD . '</td>';
$msg .= '</tr>';
$msg .= '<td>EUR</td><td>' . $EUR . '</td>';
$msg .= '</tr>';
$msg .= '<td>GBP</td><td>' . $GBP . '</td>';
$msg .= '</tr>';
$msg .= '<td>CAD</td><td>' . $CAD . '</td>';
$msg .= '</tr>';
$msg .= '<td>HKD</td><td>' . $HKD . '</td>';
$msg .= '</tr>';
$msg .= '<td>IRR</td><td>' . $IRR . '</td>';
$msg .= '</tr>';
$msg .= '<td>IRR O</td><td>' . $IRR_N . '</td>';
$msg .= '</tr>';
$msg .= '<td>AED</td><td>' . $AED . '</td>';
$msg .= '</tr>';
$msg .= '<td>TRY</td><td>' . $TRY . '</td>';
$msg .= '</tr>';
$msg .= '<td>SAR</td><td>' . $SAR . '</td>';
$msg .= '</tr>';
$msg .= '<td>MYR</td><td>' . $MYR . '</td>';
$msg .= '</tr>';
$msg .= '<td>CNY</td><td>' . $CNY . '</td>';
$msg .= '</tr>';
$msg .= '<td>UAH</td><td>' . $UAH . '</td>';
$msg .= '</tr>';
$msg .= '<td>BYN</td><td>' . $BYN . '</td>';
$msg .= '</tr>';
$msg .= "</tr>\n";
$msg .= '</table>';
$msg .= '<p style="font-family: Tahoma; font-size: 14px;">Thanks,</br>Currency Exchanger</p>';
$msg .= '</body>';
$msg .= '</html>';
echo $msg;
?>
