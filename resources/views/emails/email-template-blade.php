<!DOCTYPE html>
<html>
<head>
    <title>Selected Videos for Campaign</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" style="background:#6f0000;width:100%">
<tbody>
<tr>
<td width="33%" style="width:33.0%;background:#2a0000;padding:7.5pt 7.5pt 7.5pt 7.5pt">
<p class="MsoNormal">
<b>

<u></u>
<u></u>
</b>
</p>
</td>
<td width="33%" style="width:33.0%;background:#2a0000;padding:7.5pt 7.5pt 7.5pt 7.5pt">
<p class="MsoNormal" align="center" style="text-align:center">
<span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';font-size:11.5pt;color:#00aed6">Abaccus Studio <u></u><u></u></span>
</p>
</td>
<td width="33%" style="width:33.0%;background:#2a0000;padding:7.5pt 7.5pt 7.5pt 7.5pt">
<p class="MsoNormal" align="right" style="text-align:right">
<b>

<u></u><u></u>
</b>
</p>
</td>
</tr>
<tr>
<td colspan="3" style="padding:7.5pt 7.5pt 7.5pt 7.5pt"><span class="im">
<p class="MsoNormal" style="margin-bottom:12.0pt">
<span style="font-size:10.0pt;color:#dadada">
Hi, <br><br>I hope you will be fine...<br><br>Kindly download your videos from the given link
<u></u>
<u></u>
</span>
</p>
<p class="MsoNormal" style="margin-bottom:12.0pt">
<span style="font-size:10.0pt;font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><br><br>
<u></u>
<u></u>
</span>
</p>

</span>
{videos}
<table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
<tbody>
<tr>
<td width="6%" style="width:6.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 6.0pt">
<p class="MsoNormal">
<span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">OrderId<u></u><u></u></span>
</p>
</td>
<td width="10%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">Channel Name<u></u><u></u></span></p>
</td>
<td width="15%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">Client Name<u></u><u></u></span></p>
</td>
<td width="15%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">Brand Name<u></u><u></u></span></p>
</td>
<td width="10%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">Title<u></u><u></u></span></p>
</td>
<td width="10%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">Language<u></u><u></u></span></p>
</td>
<td width="10%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">Properties<u></u><u></u></span></p>
</td>
<td width="10%" style="width:10.0%;background:#2A0000;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#00aed6">TVC ID<u></u><u></u></span></p>
</td>
</tr>

@foreach($videos as $video)
<tr>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 6.0pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $order; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $channels; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $client; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $brand; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $videos[$i]["caption"]; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $videos[$i]["language"]; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"> 
			Length: <?php echo $videos[$i]["length"]; ?><br/>
            Frames: <?php echo $videos[$i]["frames"]; ?><br/>
            <?php $s=$videos[$i]["size"]; $size=0; if($s>1000000000) $size=round(($s/1000000000),3)." GM"; elseif ($s>1000000) $size=round(($s/1000000),3). " MB"; else $size=round(($s/1000),3). " KB"; ?>
            Size  : <?php echo $size; ?><u></u><u></u></span></p>
</td>
<td style="background:#A0522D;padding:1.5pt 1.5pt 1.5pt 1.5pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><?php echo $videos[$i]["beta_no"]; ?><u></u><u></u></span></p>
</td>
</tr>
@endforeach
</tbody>
</table>
<p class="MsoNormal" style="margin-bottom:12.0pt">
<span style="font-size:10.0pt;font-size:10.0pt;font-family:'Trebuchet MS','sans-serif';color:#dadada"><br>
</span>
</p>

<table cellspacing="0" width="100%">
<tbody>
<tr>
<th align="left" style="font-family:Trebuchet MS;font-weight:normal;font-size:12px;color:#00aed6">Agency Name</th>
<th align="left" style="font-family:Trebuchet MS;font-weight:normal;font-size:12px;color:#00aed6">File Name</th>
</tr>
<?php for($i=0; $i<count($videos); $i++ ): $filename = $videos[$i]["download_url"]; ?>
<tr>
<td align="left" style="font-family:Trebuchet MS;color:#dadada;font-size:11px"><?php echo $agency; ?></td>
<td align="left" style="font-family:Trebuchet MS;color:#dadada;font-size:11px"><?php echo $videos[$i]["download_url"]; ?></td>
</tr>
<?php endfor; ?>
</tbody>
</table>
{videos}
<span class="im">
<p class="MsoNormal">
<span style="font-size:10.0pt;color:#dadada"><br><br>Thanking You, <br></span>
<span style="font-size:10.0pt;color:#00aed6">Abaccus Studio </span>
<span style="font-size:10.0pt;color:#dadada"><u></u><u></u></span>
</p>
</span></td>
</tr>
<tr>
<td colspan="2" style="background:#2a0000;padding:7.5pt 7.5pt 7.5pt 7.5pt">
<p class="MsoNormal">
<span style="font-size:8.5pt;color:#cacaca">This is a system generated email. Please do not respond. <u></u><u></u></span>
</p>
</td>
<td style="background:#2a0000;padding:7.5pt 7.5pt 7.5pt 7.5pt">
<p class="MsoNormal" align="right" style="text-align:right">
<span style="font-size:8.5pt;color:#cacaca"> 2024, Abaccus Studio. <u></u><u></u></span>
</p>
</td>
</tr>
<tr>
<td colspan="3" style="background:#2a0000;padding:7.5pt 7.5pt 7.5pt 7.5pt">
<p class="MsoNormal">
<span style="font-size:8.5pt;color:#00aed6">
Contact Us :<br>MailId : <a style="font-size:8.5pt;color:#00aed6" href="mailto:studios@abaccusproductions.com" target="_blank">studios@abaccusproductions.com</a><br>PhoneNumber : +91 9810 23 5090/011 41734437 <u></u><u></u>
</span> 
</p>
</td>
</tr>
</tbody>
</table>
</body>
</html>