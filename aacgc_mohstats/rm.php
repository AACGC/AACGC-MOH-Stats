<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

$rib = $data['players']['0']['ribbons'];
$med = $data['players']['0']['medals'];

//------------------------------------------------------

$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3'><center>
<b><u>Ribbon / Medal Stats</u></b>
</center></td>
</tr></table>";

$text .= "<div style='height:".$pref['moh_secth_rm']."; overflow:auto' class=''><table style='width:100%'>";


//-------------------# Ribbons #-----------------------------------

$r01 = $rib['r01'];
$r02 = $rib['r02'];
$r03 = $rib['r03'];
$r04 = $rib['r04'];
$r05 = $rib['r05'];
$r06 = $rib['r06'];
$r07 = $rib['r07'];
$r08 = $rib['r08'];
$r09 = $rib['r09'];
$r10 = $rib['r10'];
$r11 = $rib['r11'];
$r12 = $rib['r12'];
$r13 = $rib['r13'];
$r14 = $rib['r14'];
$r15 = $rib['r15'];
$r16 = $rib['r16'];
$r17 = $rib['r17'];
$r18 = $rib['r18'];
$r19 = $rib['r19'];
$r20 = $rib['r20'];
$r21 = $rib['r21'];
$r22 = $rib['r22'];
$r23 = $rib['r23'];
$r24 = $rib['r24'];
$r25 = $rib['r25'];
$r26 = $rib['r26'];
$r27 = $rib['r27'];
$r28 = $rib['r28'];
$r29 = $rib['r29'];
$r30 = $rib['r30'];

$text .= "<tr>
	  <td class='forumheader3' colspan='2'>Ribbon</td>
	  <td class='forumheader3'>Description</td>
	  <td class='forumheader3'>Awarded</td>
	  </tr>";


$text .= "<tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r01.png' /></td>
	  <td style='text-align:left' class='indent'>".$r01['name']."</td>
	  <td style='text-align:left' class='indent'>".$r01['desc']."</td>
	  <td class='indent'>".$r01['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r02.png' /></td>
	  <td style='text-align:left' class='indent'>".$r02['name']."</td>
	  <td style='text-align:left' class='indent'>".$r02['desc']."</td>
	  <td class='indent'>".$r02['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r03.png' /></td>
	  <td style='text-align:left' class='indent'>".$r03['name']."</td>
	  <td style='text-align:left' class='indent'>".$r03['desc']."</td>
	  <td class='indent'>".$r03['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r04.png' /></td>
	  <td style='text-align:left' class='indent'>".$r04['name']."</td>
	  <td style='text-align:left' class='indent'>".$r04['desc']."</td>
	  <td class='indent'>".$r04['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r05.png' /></td>
	  <td style='text-align:left' class='indent'>".$r05['name']."</td>
	  <td style='text-align:left' class='indent'>".$r05['desc']."</td>
	  <td class='indent'>".$r05['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r06.png' /></td>
	  <td style='text-align:left' class='indent'>".$r06['name']."</td>
	  <td style='text-align:left' class='indent'>".$r06['desc']."</td>
	  <td class='indent'>".$r06['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r07.png' /></td>
	  <td style='text-align:left' class='indent'>".$r07['name']."</td>
	  <td style='text-align:left' class='indent'>".$r07['desc']."</td>
	  <td class='indent'>".$r07['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r08.png' /></td>
	  <td style='text-align:left' class='indent'>".$r08['name']."</td>
	  <td style='text-align:left' class='indent'>".$r08['desc']."</td>
	  <td class='indent'>".$r08['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r09.png' /></td>
	  <td style='text-align:left' class='indent'>".$r09['name']."</td>
	  <td style='text-align:left' class='indent'>".$r09['desc']."</td>
	  <td class='indent'>".$r09['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r10.png' /></td>
	  <td style='text-align:left' class='indent'>".$r10['name']."</td>
	  <td style='text-align:left' class='indent'>".$r10['desc']."</td>
	  <td class='indent'>".$r10['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r11.png' /></td>
	  <td style='text-align:left' class='indent'>".$r11['name']."</td>
	  <td style='text-align:left' class='indent'>".$r11['desc']."</td>
	  <td class='indent'>".$r11['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r12.png' /></td>
	  <td style='text-align:left' class='indent'>".$r12['name']."</td>
	  <td style='text-align:left' class='indent'>".$r12['desc']."</td>
	  <td class='indent'>".$r12['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r13.png' /></td>
	  <td style='text-align:left' class='indent'>".$r13['name']."</td>
	  <td style='text-align:left' class='indent'>".$r13['desc']."</td>
	  <td class='indent'>".$r13['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r14.png' /></td>
	  <td style='text-align:left' class='indent'>".$r14['name']."</td>
	  <td style='text-align:left' class='indent'>".$r14['desc']."</td>
	  <td class='indent'>".$r14['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r15.png' /></td>
	  <td style='text-align:left' class='indent'>".$r15['name']."</td>
	  <td style='text-align:left' class='indent'>".$r15['desc']."</td>
	  <td class='indent'>".$r15['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r16.png' /></td>
	  <td style='text-align:left' class='indent'>".$r16['name']."</td>
	  <td style='text-align:left' class='indent'>".$r16['desc']."</td>
	  <td class='indent'>".$r16['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r17.png' /></td>
	  <td style='text-align:left' class='indent'>".$r17['name']."</td>
	  <td style='text-align:left' class='indent'>".$r17['desc']."</td>
	  <td class='indent'>".$r17['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r18.png' /></td>
	  <td style='text-align:left' class='indent'>".$r18['name']."</td>
	  <td style='text-align:left' class='indent'>".$r18['desc']."</td>
	  <td class='indent'>".$r18['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r19.png' /></td>
	  <td style='text-align:left' class='indent'>".$r19['name']."</td>
	  <td style='text-align:left' class='indent'>".$r19['desc']."</td>
	  <td class='indent'>".$r19['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r20.png' /></td>
	  <td style='text-align:left' class='indent'>".$r20['name']."</td>
	  <td style='text-align:left' class='indent'>".$r20['desc']."</td>
	  <td class='indent'>".$r20['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r21.png' /></td>
	  <td style='text-align:left' class='indent'>".$r21['name']."</td>
	  <td style='text-align:left' class='indent'>".$r21['desc']."</td>
	  <td class='indent'>".$r21['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r22.png' /></td>
	  <td style='text-align:left' class='indent'>".$r22['name']."</td>
	  <td style='text-align:left' class='indent'>".$r22['desc']."</td>
	  <td class='indent'>".$r22['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r23.png' /></td>
	  <td style='text-align:left' class='indent'>".$r23['name']."</td>
	  <td style='text-align:left' class='indent'>".$r23['desc']."</td>
	  <td class='indent'>".$r23['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r24.png' /></td>
	  <td style='text-align:left' class='indent'>".$r24['name']."</td>
	  <td style='text-align:left' class='indent'>".$r24['desc']."</td>
	  <td class='indent'>".$r24['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r25.png' /></td>
	  <td style='text-align:left' class='indent'>".$r25['name']."</td>
	  <td style='text-align:left' class='indent'>".$r25['desc']."</td>
	  <td class='indent'>".$r25['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r26.png' /></td>
	  <td style='text-align:left' class='indent'>".$r26['name']."</td>
	  <td style='text-align:left' class='indent'>".$r26['desc']."</td>
	  <td class='indent'>".$r26['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r27.png' /></td>
	  <td style='text-align:left' class='indent'>".$r27['name']."</td>
	  <td style='text-align:left' class='indent'>".$r27['desc']."</td>
	  <td class='indent'>".$r27['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r28.png' /></td>
	  <td style='text-align:left' class='indent'>".$r28['name']."</td>
	  <td style='text-align:left' class='indent'>".$r28['desc']."</td>
	  <td class='indent'>".$r28['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r29.png' /></td>
	  <td style='text-align:left' class='indent'>".$r29['name']."</td>
	  <td style='text-align:left' class='indent'>".$r29['desc']."</td>
	  <td class='indent'>".$r29['achieved']."x</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/ribbons/r30.png' /></td>
	  <td style='text-align:left' class='indent'>".$r30['name']."</td>
	  <td style='text-align:left' class='indent'>".$r30['desc']."</td>
	  <td class='indent'>".$r30['achieved']."x</td>
	  </tr>
";

//-------------------# Medals #------------------------------------

$m01 = $med['m01'];
$m02 = $med['m02'];
$m03 = $med['m03'];
$m04 = $med['m04'];
$m05 = $med['m05'];
$m06 = $med['m06'];
$m07 = $med['m07'];
$m08 = $med['m08'];
$m09 = $med['m09'];
$m10 = $med['m10'];
$m11 = $med['m11'];
$m12 = $med['m12'];
$m13 = $med['m13'];
$m14 = $med['m14'];
$m15 = $med['m15'];
$m16 = $med['m16'];
$m17 = $med['m17'];
$m18 = $med['m18'];
$m19 = $med['m19'];
$m20 = $med['m20'];
$m21 = $med['m21'];
$m22 = $med['m22'];
$m23 = $med['m23'];
$m24 = $med['m24'];
$m25 = $med['m25'];
$m26 = $med['m26'];
$m27 = $med['m27'];
$m28 = $med['m28'];
$m29 = $med['m29'];
$m30 = $med['m30'];

if($m01['achieved'] == "1")
{$m01ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m01achper = number_format(($m01['curr'] / $m01['target']) * 100, 2);
$m01ach = $m01achper."%";}

if($m02['achieved'] == "1")
{$m02ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m02achper = number_format(($m02['curr'] / $m02['target']) * 100, 2);
$m02ach = $m02achper."%";}

if($m03['achieved'] == "1")
{$m03ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m03achper = number_format(($m03['curr'] / $m03['target']) * 100, 2);
$m03ach = $m03achper."%";}

if($m04['achieved'] == "1")
{$m04ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m04achper = number_format(($m04['curr'] / $m04['target']) * 100, 2);
$m04ach = $m04achper."%";}

if($m05['achieved'] == "1")
{$m05ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m05achper = number_format(($m05['curr'] / $m05['target']) * 100, 2);
$m05ach = $m05achper."%";}

if($m06['achieved'] == "1")
{$m06ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m06achper = number_format(($m06['curr'] / $m06['target']) * 100, 2);
$m06ach = $m06achper."%";}

if($m07['achieved'] == "1")
{$m07ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m07achper = number_format(($m07['curr'] / $m07['target']) * 100, 2);
$m07ach = $m07achper."%";}

if($m08['achieved'] == "1")
{$m08ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m08achper = number_format(($m08['curr'] / $m08['target']) * 100, 2);
$m08ach = $m08achper."%";}

if($m09['achieved'] == "1")
{$m09ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m09achper = number_format(($m09['curr'] / $m09['target']) * 100, 2);
$m09ach = $m09achper."%";}

if($m10['achieved'] == "1")
{$m10ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m10achper = number_format(($m10['curr'] / $m10['target']) * 100, 2);
$m10ach = $m10achper."%";}

if($m11['achieved'] == "1")
{$m11ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m11achper = number_format(($m11['curr'] / $m11['target']) * 100, 2);
$m11ach = $m11achper."%";}

if($m12['achieved'] == "1")
{$m12ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m12achper = number_format(($m12['curr'] / $m12['target']) * 100, 2);
$m12ach = $m12achper."%";}

if($m13['achieved'] == "1")
{$m13ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m13achper = number_format(($m13['curr'] / $m13['target']) * 100, 2);
$m13ach = $m13achper."%";}

if($m14['achieved'] == "1")
{$m14ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m14achper = number_format(($m14['curr'] / $m14['target']) * 100, 2);
$m14ach = $m14achper."%";}

if($m15['achieved'] == "1")
{$m15ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m15achper = number_format(($m15['curr'] / $m15['target']) * 100, 2);
$m15ach = $m15achper."%";}

if($m16['achieved'] == "1")
{$m16ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m16achper = number_format(($m16['curr'] / $m16['target']) * 100, 2);
$m16ach = $m16achper."%";}

if($m17['achieved'] == "1")
{$m17ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m17achper = number_format(($m17['curr'] / $m17['target']) * 100, 2);
$m17ach = $m17achper."%";}

if($m18['achieved'] == "1")
{$m18ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m18achper = number_format(($m18['curr'] / $m18['target']) * 100, 2);
$m18ach = $m18achper."%";}

if($m19['achieved'] == "1")
{$m19ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m19achper = number_format(($m19['curr'] / $m19['target']) * 100, 2);
$m19ach = $m19achper."%";}

if($m20['achieved'] == "1")
{$m20ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m20achper = number_format(($m20['curr'] / $m20['target']) * 100, 2);
$m20ach = $m20achper."%";}

if($m21['achieved'] == "1")
{$m21ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m21achper = number_format(($m21['curr'] / $m21['target']) * 100, 2);
$m21ach = $m21achper."%";}

if($m22['achieved'] == "1")
{$m22ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m22achper = number_format(($m22['curr'] / $m22['target']) * 100, 2);
$m22ach = $m22achper."%";}

if($m23['achieved'] == "1")
{$m23ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m23achper = number_format(($m23['curr'] / $m23['target']) * 100, 2);
$m23ach = $m23achper."%";}

if($m24['achieved'] == "1")
{$m24ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m24achper = number_format(($m24['curr'] / $m24['target']) * 100, 2);
$m24ach = $m24achper."%";}

if($m25['achieved'] == "1")
{$m25ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m25achper = number_format(($m25['curr'] / $m25['target']) * 100, 2);
$m25ach = $m25achper."%";}

if($m26['achieved'] == "1")
{$m26ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m26achper = number_format(($m26['curr'] / $m26['target']) * 100, 2);
$m26ach = $m26achper."%";}

if($m27['achieved'] == "1")
{$m27ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m27achper = number_format(($m27['curr'] / $m27['target']) * 100, 2);
$m27ach = $m27achper."%";}

if($m28['achieved'] == "1")
{$m28ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m28achper = number_format(($m28['curr'] / $m28['target']) * 100, 2);
$m28ach = $m28achper."%";}

if($m29['achieved'] == "1")
{$m29ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m29achper = number_format(($m29['curr'] / $m29['target']) * 100, 2);
$m29ach = $m29achper."%";}

if($m30['achieved'] == "1")
{$m30ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$m30achper = number_format(($m30['curr'] / $m30['target']) * 100, 2);
$m30ach = $m30achper."%";}

$text .= "<tr>
	  <td class='forumheader3' colspan='2'>Medal</td>
	  <td class='forumheader3'>Description</td>
	  <td class='forumheader3'>Awarded</td>
	  </tr>";

$text .= "<tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m01.png' /></td>
	  <td style='text-align:left' class='indent'>".$m01['name']."</td>
	  <td style='text-align:left' class='indent'>".$m01['desc']."</td>
	  <td class='indent'>".$m01ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m02.png' /></td>
	  <td style='text-align:left' class='indent'>".$m02['name']."</td>
	  <td style='text-align:left' class='indent'>".$m02['desc']."</td>
	  <td class='indent'>".$m02ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m03.png' /></td>
	  <td style='text-align:left' class='indent'>".$m03['name']."</td>
	  <td style='text-align:left' class='indent'>".$m03['desc']."</td>
	  <td class='indent'>".$m03ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m04.png' /></td>
	  <td style='text-align:left' class='indent'>".$m04['name']."</td>
	  <td style='text-align:left' class='indent'>".$m04['desc']."</td>
	  <td class='indent'>".$m04ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m05.png' /></td>
	  <td style='text-align:left' class='indent'>".$m05['name']."</td>
	  <td style='text-align:left' class='indent'>".$m05['desc']."</td>
	  <td class='indent'>".$m05ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m06.png' /></td>
	  <td style='text-align:left' class='indent'>".$m06['name']."</td>
	  <td style='text-align:left' class='indent'>".$m06['desc']."</td>
	  <td class='indent'>".$m06ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m07.png' /></td>
	  <td style='text-align:left' class='indent'>".$m07['name']."</td>
	  <td style='text-align:left' class='indent'>".$m07['desc']."</td>
	  <td class='indent'>".$m07ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m08.png' /></td>
	  <td style='text-align:left' class='indent'>".$m08['name']."</td>
	  <td style='text-align:left' class='indent'>".$m08['desc']."</td>
	  <td class='indent'>".$m08ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m09.png' /></td>
	  <td style='text-align:left' class='indent'>".$m09['name']."</td>
	  <td style='text-align:left' class='indent'>".$m09['desc']."</td>
	  <td class='indent'>".$m09ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m10.png' /></td>
	  <td style='text-align:left' class='indent'>".$m10['name']."</td>
	  <td style='text-align:left' class='indent'>".$m10['desc']."</td>
	  <td class='indent'>".$m10ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m11.png' /></td>
	  <td style='text-align:left' class='indent'>".$m11['name']."</td>
	  <td style='text-align:left' class='indent'>".$m11['desc']."</td>
	  <td class='indent'>".$m11ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m12.png' /></td>
	  <td style='text-align:left' class='indent'>".$m12['name']."</td>
	  <td style='text-align:left' class='indent'>".$m12['desc']."</td>
	  <td class='indent'>".$m12ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m13.png' /></td>
	  <td style='text-align:left' class='indent'>".$m13['name']."</td>
	  <td style='text-align:left' class='indent'>".$m13['desc']."</td>
	  <td class='indent'>".$m13ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m14.png' /></td>
	  <td style='text-align:left' class='indent'>".$m14['name']."</td>
	  <td style='text-align:left' class='indent'>".$m14['desc']."</td>
	  <td class='indent'>".$m14ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m15.png' /></td>
	  <td style='text-align:left' class='indent'>".$m15['name']."</td>
	  <td style='text-align:left' class='indent'>".$m15['desc']."</td>
	  <td class='indent'>".$m15ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m16.png' /></td>
	  <td style='text-align:left' class='indent'>".$m16['name']."</td>
	  <td style='text-align:left' class='indent'>".$m16['desc']."</td>
	  <td class='indent'>".$m16ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m17.png' /></td>
	  <td style='text-align:left' class='indent'>".$m17['name']."</td>
	  <td style='text-align:left' class='indent'>".$m17['desc']."</td>
	  <td class='indent'>".$m17ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m18.png' /></td>
	  <td style='text-align:left' class='indent'>".$m18['name']."</td>
	  <td style='text-align:left' class='indent'>".$m18['desc']."</td>
	  <td class='indent'>".$m18ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m19.png' /></td>
	  <td style='text-align:left' class='indent'>".$m19['name']."</td>
	  <td style='text-align:left' class='indent'>".$m19['desc']."</td>
	  <td class='indent'>".$m19ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m20.png' /></td>
	  <td style='text-align:left' class='indent'>".$m20['name']."</td>
	  <td style='text-align:left' class='indent'>".$m20['desc']."</td>
	  <td class='indent'>".$m20ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m21.png' /></td>
	  <td style='text-align:left' class='indent'>".$m21['name']."</td>
	  <td style='text-align:left' class='indent'>".$m21['desc']."</td>
	  <td class='indent'>".$m21ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m22.png' /></td>
	  <td style='text-align:left' class='indent'>".$m22['name']."</td>
	  <td style='text-align:left' class='indent'>".$m22['desc']."</td>
	  <td class='indent'>".$m22ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m23.png' /></td>
	  <td style='text-align:left' class='indent'>".$m23['name']."</td>
	  <td style='text-align:left' class='indent'>".$m23['desc']."</td>
	  <td class='indent'>".$m23ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m24.png' /></td>
	  <td style='text-align:left' class='indent'>".$m24['name']."</td>
	  <td style='text-align:left' class='indent'>".$m24['desc']."</td>
	  <td class='indent'>".$m24ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m25.png' /></td>
	  <td style='text-align:left' class='indent'>".$m25['name']."</td>
	  <td style='text-align:left' class='indent'>".$m25['desc']."</td>
	  <td class='indent'>".$m25ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m26.png' /></td>
	  <td style='text-align:left' class='indent'>".$m26['name']."</td>
	  <td style='text-align:left' class='indent'>".$m26['desc']."</td>
	  <td class='indent'>".$m26ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m27.png' /></td>
	  <td style='text-align:left' class='indent'>".$m27['name']."</td>
	  <td style='text-align:left' class='indent'>".$m27['desc']."</td>
	  <td class='indent'>".$m27ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m28.png' /></td>
	  <td style='text-align:left' class='indent'>".$m28['name']."</td>
	  <td style='text-align:left' class='indent'>".$m28['desc']."</td>
	  <td class='indent'>".$m28ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m29.png' /></td>
	  <td style='text-align:left' class='indent'>".$m29['name']."</td>
	  <td style='text-align:left' class='indent'>".$m29['desc']."</td>
	  <td class='indent'>".$m29ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/medals/m30.png' /></td>
	  <td style='text-align:left' class='indent'>".$m30['name']."</td>
	  <td style='text-align:left' class='indent'>".$m30['desc']."</td>
	  <td class='indent'>".$m30ach."</td>
	  </tr>
";

$text .= "</table></div>";



?>