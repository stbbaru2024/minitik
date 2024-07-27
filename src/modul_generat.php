<?php 
error_reporting(0);
session_start();
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';
try {
    $util = new RouterOS\Util($client = new RouterOS\Client(base64_decode(base64_decode($_SESSION['username'])),$_SESSION['user'],base64_decode(base64_decode($_SESSION['password'])),$_SESSION['port']));
}catch (Exception $e) {
    $_SESSION['infopesan'] = 'Koneksi terputus, Silahkan coba login kembali..!';
    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('uc3bk5Wa35').strrev('2bpRXYj9Gb').strrev('0RHaiASPg4').strrev('50akwLvoDc').'tqka05tq')))).$_SERVER['HTTP_HOST'].'";</script>';
}
if ($_POST['bhsa'] <> ''){$_SESSION['bhsa'] = $_POST['bhsa']; $bahasa = $_POST['bhsa'];}
if ($bahasa <> ''){
    include('tools/bahasa/'.$bahasa.'.php');
}elseif ($_SESSION['bhsa'] <> ''){
    $bahasa = $_SESSION['bhsa'];
    include('tools/bahasa/'.$bahasa.'.php');
}else{
    include('tools/bahasa/default.php');
}
$anctgg = ['%3C','%3E','&lt','&gt','<','>'];
foreach ($util->setMenu('/ip hotspot user profile')->getAll() as $item) {
    $nmprofil = $item('name');
    if($nmprofil <> 'default' and strpos($item('on-login'),'MiniTik') == true){
        $prfilshw = $prfilshw.'<option value="'.str_replace($anctgg,'',$nmprofil).'">'.str_replace($anctgg,'',$nmprofil).'</option>';
    }
}
foreach ($util->setMenu('/ip hotspot profile')->getAll() as $item) {
    if($item('dns-name') <> ''){
        $situsname = $item('dns-name');
    }
}
$svrname = '<option value="all" selected>Semua Server</option>';
foreach ($util->setMenu('/ip hotspot')->getAll() as $stem) {
    $servername = $stem('name');
    if($servername <> ''){
        $svrname = $svrname.'<option>'.str_replace($anctgg,'',$servername).'</option>';
    }
}

if($_GET["id"] == 'tema1'){
	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('2c8kQCJkQC').strrev('gogP0BXayN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3YuVnZoQCI').strrev('7BSKo42bpR').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0xWdtNiIoQ').strrev('XZzVXZsBXa').strrev('pISby9mZgI').strrev('Cdp1mY1NnL').strrev('vlGdj5Wdmh').strrev('CIKsHIpgib').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('1buBichZHI').strrev('yV2c19lZv9').strrev('2YuVGI9Ayc').strrev('kgSSSVVZk9').strrev('Cd1BnbpJCK').strrev('19lZv91buN').strrev('nLpIycyV2c').strrev('lJnLpgCbhZ').strrev('yLoU2YhxGc').strrev('p1ba3wnJ8N').strrev('Ln9iI8xDfm').strrev('owOpkiIiAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BHIyFmdgAC').strrev('ZuVGbfN3ch').strrev('5WZg0DIoR3').strrev('KJJVVlR2bj').strrev('VGblNnIoQC').strrev('XzNXYwNCdj').strrev('ICa0dmblx2').strrev('LpgCbhZnLp').strrev('U2YhxGclJn').strrev('a3wnJ8NyLo').strrev('iI8xDfmp1b').strrev('pkiIiACLn9').strrev('CIgACIgowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('yFmdgACIgA').strrev('WYfVGcpRHI').strrev('uVGI9AyahN').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('VZwlGdjQ3Y').strrev('ukiIrF2Yh9').strrev('mcukCKsFmd').strrev('vgSZjFGbwV').strrev('HP85Dfmw3I').strrev('iICIsc2Liw').strrev('CIgAiC7kSK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('XatlGbgIXY').strrev('l1Wa0BXdfR').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('CdjVGblNnI').strrev('19Fdp1WasN').strrev('SKiUWbpRHc').strrev('y5SKowWY25').strrev('CKlNWYsBXZ').strrev('8wnP8ZCfj8').strrev('iIgwyZvICf').strrev('gACIKsTKpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIgACIgACI').strrev('p1WasBichZ').strrev('yclRXei9Fd').strrev('k92YuVGI9A').strrev('CKkgSSSVVZ').strrev('jQ3YlxWZzJ').strrev('nYfRXatlGb').strrev('25SKiMXZ0l').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('Wam9mcwBic').strrev('j5WZg0DIlx').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('Wam9mcwNCd').strrev('sFmdukiIlx').strrev('GbwVmcukCK').strrev('mw3IvgSZjF').strrev('2LiwHP85Df').strrev('7kSKiICIsc').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('XYw9VZtF2c').strrev('j5WZg0DIzN').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('3Xl1WYzNCd').strrev('25SKiM3chB').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('3ZrNWYiBic').strrev('g0DIk5WdvJ').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('WYiNCdjVGb').strrev('k5WdvJ3ZrN').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XcgIXY2BCI').strrev('g0DIlR2bjJ').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('mcxNCdjVGb').strrev('25SKiUGZvN').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('nbpd2bsBic').strrev('g0DIzVHdpN').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('2bsNCdjVGb').strrev('zVHdpNnbpd').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GagIXY2BCI').strrev('g0DIyVGZhV').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('WZoNCdjVGb').strrev('25SKiIXZkF').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('3bytWatBic').strrev('uVGI9AyapR').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('mcrlWbjQ3Y').strrev('25SKisWa09').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('XZ2JXZzBic').strrev('g0DI09GczJ').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('XZzNCdjVGb').strrev('09GczJXZ2J').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GbgIXY2BCI').strrev('hRncrJXYiV').strrev('2YuVGI9Ayc').strrev('kgSSSVVZk9').strrev('3YlxWZzJCK').strrev('rJXYiVGbjQ').strrev('nLpIychRnc').strrev('lJnLpgCbhZ').strrev('yLoU2YhxGc').strrev('p1ba3wnJ8N').strrev('Ln9iI8xDfm').strrev('owOpkiIiAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('dHIyFmdgAC').strrev('I9ACelRnch').strrev('VVZk92YuVG').strrev('ZzJCKkgSSS').strrev('F2djQ3YlxW').strrev('d4VGdfFmby').strrev('gCbhZnLpIC').strrev('YhxGclJnLp').strrev('wnJ8NyLoU2').strrev('8xDfmp1ba3').strrev('iIiACLn9iI').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('mdgACIgACI').strrev('9ACbyVHIyF').strrev('ycphGdoQCI').strrev('igic0RXYuk').strrev('iIu9Wa0NWY').strrev('gACIgAiC7k').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('wlGdsVXbjI').strrev('2bs5SKiUGb').strrev('rACbyVHKkF').strrev('Y4e8i9uICI').strrev('VmbldWPkRW').strrev('ajV3b2RXYy').strrev('92Xv5mJyVG').strrev('PzJXZzV3Xm').strrev('91buByKgIS').strrev('cyV2c19lZv').strrev('FGcmICIrAy').strrev('dn5WZs91cz').strrev('BHIrAiI9gG').strrev('ZuVGbfN3ch').strrev('ZiIgsCIoR3').strrev('YjF2XlBXa0').strrev('RHIrAiI9sW').strrev('ahNWYfVGcp').strrev('lGbmICIrAy').strrev('a0BXdfRXat').strrev('ByKgISPl1W').strrev('c19Fdp1Was').strrev('AyKgUWbpRH').strrev('bpZ2byBnJi').strrev('BHIrAiI9UG').strrev('KgUGbpZ2by').strrev('VWbhNnJiAy').strrev('Ii0zczFGcf').strrev('9VZtF2cgsC').strrev('IgsCIzNXYw').strrev('9Fdp1WasZi').strrev('Ii0zclRXei').strrev('RXatlGbgsC').strrev('KgMXZ0lnYf').strrev('t2YhJmJiAy').strrev('I9Qmb19mcn').strrev('t2YhJGIrAi').strrev('KgQmb19mcn').strrev('92YyFnJiAy').strrev('cgsCIi0TZk').strrev('sCIlR2bjJX').strrev('bpd2bsZiIg').strrev('ISPzVHdpNn').strrev('bpd2bsByKg').strrev('sCIzVHdpNn').strrev('ZkFWZoZiIg').strrev('hGIrAiI9IX').strrev('IrAiclRWYl').strrev('9mcrlWbmIC').strrev('IrAiI9sWa0').strrev('lGdvJ3ap1G').strrev('ZzZiIgsCIr').strrev('9GczJXZ2JX').strrev('ZzByKgISP0').strrev('9GczJXZ2JX').strrev('ZsZiIgsCI0').strrev('FGdytmchJW').strrev('ZsByKgISPz').strrev('FGdytmchJW').strrev('Y3ZiIgsCIz').strrev('AiI9gXZ0JX').strrev('elRnchdHIr').strrev('hGdmICIrAC').strrev('OpISM9UWbl').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('d0VmcgACIg').strrev('NHbhZGIuJX').strrev('IgACIgowOl').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIKsTK9BC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ayN2cvwDIg').strrev('ACIgogP0BX').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BidpRGPgAC').strrev('bi0zczFGbj').strrev('QnbpJHcf9m').strrev('CJkQCJogPi').strrev('BidpRGPJkQ').strrev('Yi0zczFGbj').strrev('cTLtNXLs92').strrev('Lk1WLs92Yg').strrev('JWb1hGdgMT').strrev('dzBiIslWYu').strrev('9mYi0TZslH').strrev('buBiOyVGZy').strrev('1ba3IyOl52').strrev('JkQCJkgCmp').strrev('idpRGPJkQC').strrev('i0zczFGbjB').strrev('GcgwWZuFGc').strrev('pJHctwWZuF').strrev('ba3ISeyFWb').strrev('kQCJkgCmp1').strrev('akxTCJkQCJ').strrev('M3chx2YgYX').strrev('LsVmbhBnI9').strrev('cmbpRWYlhW').strrev('Z05WZjxjPi').strrev('GPmp1ba3IX').'I3ab1pm')))). $bhsa28.' '.$bhsa76.' Voucher</b></center></div>
									<div id="multipleuser" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">Total voucher</label>
												</div>
												<div class="col-sm-12">
													<input type="number" min="1" max="1000" id="no_of_users" name="no_of_users" value="2" class="form-control" autofocus >
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa15.'</label>
												</div>
												<div class="col-sm-12">
													<select id="profile" name="profile" class="form-control">'.$prfilshw.'</select>
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa18.'</label>
												</div>
												<div class="col-sm-12">
													<select id="limit_uptime" name="limit_uptime" class="form-control">
													<option value="0">'.$bhsa17.'</option>
													<option value="1h">1 '.$bhsa19.'</option>
													<option value="2h">2 '.$bhsa19.'</option>
													<option value="3h">3 '.$bhsa19.'</option>
													<option value="4h">4 '.$bhsa19.'</option>
													<option value="5h">5 '.$bhsa19.'</option>
													<option value="6h">6 '.$bhsa19.'</option>
													<option value="7h">7 '.$bhsa19.'</option>
													<option value="8h">8 '.$bhsa19.'</option>
													<option value="9h">9 '.$bhsa19.'</option>
													<option value="10h">10 '.$bhsa19.'</option>
													<option value="11h">11 '.$bhsa19.'</option>
													<option value="12h">12 '.$bhsa19.'</option>
													<option value="13h">13 '.$bhsa19.'</option>
													<option value="14h">14 '.$bhsa19.'</option>
													<option value="15h">15 '.$bhsa19.'</option>
													<option value="16h">16 '.$bhsa19.'</option>
													<option value="17h">17 '.$bhsa19.'</option>
													<option value="18h">18 '.$bhsa19.'</option>
													<option value="19h">19 '.$bhsa19.'</option>
													<option value="20h">20 '.$bhsa19.'</option>
													<option value="21h">21 '.$bhsa19.'</option>
													<option value="22h">22 '.$bhsa19.'</option>
													<option value="23h">23 '.$bhsa19.'</option>
													<option value="1d">1 '.$bhsa20.'</option>
													<option value="2d">2 '.$bhsa20.'</option>
													<option value="3d" selected>3 '.$bhsa20.'</option>
													<option value="4d">4 '.$bhsa20.'</option>
													<option value="5d">5 '.$bhsa20.'</option>
                                                    <option value="6d">6 '.$bhsa20.'</option>
                                                    <option value="7d">7 '.$bhsa20.'</option>
                                                    <option value="8d">8 '.$bhsa20.'</option>
                                                    <option value="9d">9 '.$bhsa20.'</option>
													<option value="10d">10 '.$bhsa20.'</option>
													<option value="11d">11 '.$bhsa20.'</option>
													<option value="12d">12 '.$bhsa20.'</option>
													<option value="13d">13 '.$bhsa20.'</option>
													<option value="14d">14 '.$bhsa20.'</option>
													<option value="15d">15 '.$bhsa20.'</option>
													<option value="20d">20 '.$bhsa20.'</option>
													<option value="30d">30 '.$bhsa20.'</option>
													</select>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">'.$bhsa16.'</label>
												</div>
												<div class="col-sm-12">
													<select id="limit_bytes" name="limit_bytes" class="form-control">
														<option value="0">'.$bhsa17.'</option>									
														<option value="1">1 Gb</option>
														<option value="2">2 Gb</option>
														<option value="3">3 Gb</option>
														<option value="4">4 Gb</option>
														<option value="5">5 Gb</option>
														<option value="6">6 Gb</option>
														<option value="7">7 Gb</option>
														<option value="8">8 Gb</option>
														<option value="9">9 Gb</option>
														<option value="10">10 Gb</option>
														<option value="15">15 Gb</option>
														<option value="20">20 Gb</option>
														<option value="25">25 Gb</option>
														<option value="30">30 Gb</option>
														<option value="35">35 Gb</option>
														<option value="40">40 Gb</option>
														<option value="45">45 Gb</option>
														<option value="50">50 Gb</option>
														<option value="100">100 Gb</option>
													</select>
												</div>
												<div class="col-sm-12" id="lfgnrtadva" hidden>
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lfgnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lfgnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Advanced menu ⇩⇩⇩</b></a></center>
												</div>
												<div class="col-sm-12" id="lfgnrtadvb">
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lfgnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Advanced menu ⇧⇧⇧</b></a></center>
												</div>
												<div id="lfgnrtadvn" hidden>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa3.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="same_pass" name="same_pass" class="form-control">
                                                            <option value="0">'.$bhsa24.' (login 2 column)</option>
    														<option value="1">'.$bhsa79.' (login 1 column)</option>
    														<option value="2">'.$bhsa80.' (login 2 column)</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa21.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="tipe_acak" name="tipe_acak" class="form-control">
    													    <option value="0">ABCD1234</option>
                                                            <option value="1" selected>AbCd1234</option>
    														<option value="2">Abcd1234</option>
    														<option value="3">abcd1234</option>
    														<option value="4">ABCDEFGH</option>
    														<option value="5">AbCdEfGh</option>
    														<option value="6">Abcdefgh</option>
    														<option value="7">abcdefgh</option>
    														<option value="8">12345678</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa22.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="pass_length" name="pass_length" class="form-control">
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
    														<option value="5">5</option>
    														<option value="6" selected>6</option>
    														<option value="7">7</option>
    														<option value="8">8</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa23.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="qrcode" name="qrcode" class="form-control">
    													    <option value="00Kosong.png">Kosong 0% (Kecil)</option>
    													    <option value="30Kosong.png">Kosong 30%</option>
                                                            <option value="50Kosong.png">Kosong 50%</option>
                                                            <option value="70Kosong.png">Kosong 70%</option>
                                                            <option value="90Kosong.png">Kosong 90%</option>';
    													    include_once('gambar/file.txt');
                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBTN').strrev('k92QyFlPiU').strrev('2L8UCM1ASZ').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBzN').strrev('k92QyFlPiU').strrev('2L8UCM3ASZ').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBTO').strrev('jVGblNHIiU').strrev('2QyFlPkVGd').strrev('8UCM5ASZk9').strrev('jbvlGdw92L').strrev('JkAIgACIK4').strrev('QCJkQCJkQC').strrev('lN3L8kQCJk').strrev('CIK4DdjVGb').strrev('JkQCJkAIgA').strrev('TCJkQCJkQC').strrev('gogP2lGZvw').strrev('QCJkQCgACI').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('jIyETLtNXL').strrev('JkAIgACIK4').strrev('QCJkQCJkQC').strrev('iFGb8kQCJk').strrev('3chx2YgwWZ').strrev('yRnbvNmI9M').strrev('WZiFGbtw2b').strrev('qt50akgPiw').'ka05tq')))).$bhsa25.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="background" name="background" class="form-control">';
    													    include_once('background/file.txt');
    														echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('CdsVXYmVGZ').strrev('0NWZsV2cgI').strrev('Rmp1ba3QWZ').strrev('wDdsVXYmVG').strrev('Pu9Wa0B3bv').strrev('kQCgACIgog').strrev('CJkQCJkQCJ').strrev('V2cvwTCJkQ').strrev('IgogP0NWZs').strrev('kQCJkQCgAC').strrev('PJkQCJkQCJ').strrev('1ba3YXak9C').strrev('JACIgAiCmp').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('CIgogPiITM').strrev('JkQCJkQCgA').strrev('TCJkQCJkQC').strrev('jBCblJWYsx').strrev('2Yi0zczFGb').strrev('s1CbvJHdu9').strrev('ba3ICblJWY').'1pm')))).$bhsa26.'</label>
    												</div>
    												<div class="col-sm-12">
    												    <select id="header" name="header" class="form-control">
    													    <option value="4">'.$bhsa27.'-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="3">MikroTik-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="2">'.$bhsa15.'-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="5">'.$bhsa27.'-'.$bhsa18.'</option>
    													    <option value="6">MikroTik-'.$bhsa18.'</option>
    													    <option value="7">'.$bhsa15.'-'.$bhsa18.'</option>
    													    <option value="1" selected>'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="9">'.$bhsa27.'</option>
    													    <option value="10">MikroTik</option>
    													    <option value="11">'.$bhsa15.'</option>
    													    <option value="8">'.$bhsa18.'</option>
    													    <option value="0">'.$bhsa24.'</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa81.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="warna_text" name="warna_text" class="form-control">
                                                            <option value="black">'.$bhsa82.'</option>
    														<option value="red">'.$bhsa83.'</option>
    														<option value="yellow">'.$bhsa84.'</option>
    														<option value="green">'.$bhsa85.'</option>
    														<option value="blue">'.$bhsa86.'</option>
    														<option value="cyan">Cyan</option>
    														<option value="magenta">Magenta</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa77.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="lebarkrtas" name="lebarkrtas" class="form-control">
                                                            <option value="1">'.$bhsa78.' 1 voucher</option>
    														<option value="2">'.$bhsa78.' 2 voucher</option>
    														<option value="3">'.$bhsa78.' 3 voucher</option>
    														<option value="4">'.$bhsa78.' 4 voucher</option>
    														<option value="5">'.$bhsa78.' 5 voucher</option>
    														<option value="6" selected>'.$bhsa78.' 6 voucher</option>
    														<option value="7">'.$bhsa78.' 7 voucher</option>
    														<option value="8">'.$bhsa78.' 8 voucher</option>
    														<option value="9">'.$bhsa78.' 9 voucher</option>
    														<option value="10">'.$bhsa78.' 10 voucher</option>
    														<option value="11">'.$bhsa78.' 11 voucher</option>
    														<option value="12">'.$bhsa78.' 12 voucher</option>
    														<option value="13">'.$bhsa78.' 13 voucher</option>
    														<option value="14">'.$bhsa78.' 14 voucher</option>
    														<option value="15">'.$bhsa78.' 15 voucher</option>
    														<option value="16">'.$bhsa78.' 16 voucher</option>
    														<option value="17">'.$bhsa78.' 17 voucher</option>
    														<option value="18">'.$bhsa78.' 18 voucher</option>
    														<option value="19">'.$bhsa78.' 19 voucher</option>
    														<option value="20">'.$bhsa78.' 20 voucher</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Server LAN</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="serverspot" name="serverspot" class="form-control">'.$svrname.'</select>
    												</div>
    											</div>
												<div class="col-sm-12" hidden>
													<select id="loginsitus" name="loginsitus" class="form-control"><option>'.$situsname.'</option></select>
													<select id="mikrotik" name="mikrotik" class="form-control"><option>'.$_SESSION['namamikrotik'].'</option></option></select>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
												    <div class="col-sm-3 col-sm-offset-3">
													    <div class="pull-right">
														    <button type="submit" class="btn btn-success">
														        <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
														    </button>
													    </div>
												    </div>
												    <div class="col-sm-3">
													    <div class="pull-left">
														    <button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/3kALShfTj78'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
													    </div>
												    </div>
                                                </div>
											</div>	
										</div>
									</form>
									</div>	
								</div>
							</div>
                            </div>
				            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
					            <div class="panel panel-primary" style="border: none;">
								    <div id="multiple">
								        <div class="hidden-xs">
								            <table width="100%" style="border:solid 1px #337ab7;"><tr style="border: none;"><td class="panel-heading" style="border: none; background-color:#337ab7; color:#FFF;"><center><b>'.$bhsa13.' Generat Voucher</b></center></td></tr>
								            <tr><td style="border: none; padding: 0;">
								                <table class="table table-bordered" style="border: none;">
											        <tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="2" style="border: none;">
                                                                <b>Quick set</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;" id="ldgnrtadva">
                                                                <a href="#" onclick="document.getElementById('."'".'ldgnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'ldgnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'ldgnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Max 18 set ⇩⇩⇩</b></a>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;" id="ldgnrtadvb" hidden>
                                                                <a href="#" onclick="document.getElementById('."'".'ldgnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'ldgnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'ldgnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Max 18 set ⇧⇧⇧</b></a>
                                                            </td>
												        </tr>
                                                        <tr id="ldgnrtadvn">
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    if ($_SESSION['vpnexpired'] <> "OK"){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('vZGI5xmbP5').strrev('GVp5WaNBic').strrev('1BiTQZFIrl').strrev('GPg4ycyV2c').strrev('i0jZlJHagE').strrev('yL6MHc0RHa').strrev('t5yapRXat9').strrev('ba3ICZp5Se').strrev('1ba3IGPmp1').strrev('gIXZkJ3Tmp').strrev('TIu4SZyVGa').strrev('3E2L84jYvw').strrev('Zj9CPmp1ba').strrev('1ba3IXZ05W').'pm'))));
                                									}elseif (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'quick1-minitik')))){
                                									    $ox = 1;
                                									    $oy = 1;
                                									    $getqk1 = $util->get(RouterOS\Query::where('name', 'quick1-minitik'),'source');
                                                                        foreach (explode('|',$getqk1) as $gqtqk1){
                                                                            if(strpos($gqtqk1,'&&') <> '' and $ox < 18){
                                                                                $gqnoofusers = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'nu=')+3),(strpos($gqtqk1,'&pl=')-(strpos($gqtqk1,'nu=')+3))));
                                                                                $gqpasslength = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&pl=')+4),(strpos($gqtqk1,'&ta=')-(strpos($gqtqk1,'&pl=')+4))));
                                                                                $gqtipeacak = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&ta=')+4),(strpos($gqtqk1,'&lu=')-(strpos($gqtqk1,'&ta=')+4))));
                                                                                $gqlimituptime = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&lu=')+4),(strpos($gqtqk1,'&pr=')-(strpos($gqtqk1,'&lu=')+4))));
                                                                                $gqprofile = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&pr=')+4),(strpos($gqtqk1,'&sp=')-(strpos($gqtqk1,'&pr=')+4))));
                                                                                $gqsamepass = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&sp=')+4),(strpos($gqtqk1,'&lb=')-(strpos($gqtqk1,'&sp=')+4))));
                                                                                $gqlimitbytes = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&lb=')+4),(strpos($gqtqk1,'&bg=')-(strpos($gqtqk1,'&lb=')+4))));
                                                                                $gqbackground = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&bg=')+4),(strpos($gqtqk1,'&qr=')-(strpos($gqtqk1,'&bg=')+4))));
                                                                                $gqqrcode = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&qr=')+4),(strpos($gqtqk1,'&ls=')-(strpos($gqtqk1,'&qr=')+4))));
                                                                                $gqsite = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&ls=')+4),(strpos($gqtqk1,'&hd=')-(strpos($gqtqk1,'&ls=')+4))));
                                                                                $gqheader = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&hd=')+4),(strpos($gqtqk1,'&ss=')-(strpos($gqtqk1,'&hd=')+4))));
                                                                                $gqserverspot = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&ss=')+4),(strpos($gqtqk1,'&lk=')-(strpos($gqtqk1,'&ss=')+4))));
                                                                                $gqlebarkrtas = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&lk=')+4),(strpos($gqtqk1,'&wt=')-(strpos($gqtqk1,'&lk=')+4))));
                                                                                $gqwartex = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&wt=')+4),(strpos($gqtqk1,'&&')-(strpos($gqtqk1,'&wt=')+4))));
                                                                                if (!empty($gqlimitbytes)){$gqfddswdf = $gqlimitbytes.'Gb / '.$gqlimituptime;}else{$gqfddswdf = $gqlimituptime;}
                                                                                if (substr($gqqrcode,2) <> 'QrCode'){$qgprn = 'gambar/'.substr($gqqrcode,2);}else{$qgprn = 'images/vqrcode.png';}
                                                                                if ($oy < 7){
                                                                                    $oy = $oy + 1;
                                                                                    $ox = $ox + 1;
                                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').'I3ab1pm'))));
                                                                                }else{
                                                                                    $oy = 2;
                                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Hd84jc09CP').strrev('9UGb5R3cgI').strrev('jclRmcvJmI').strrev('isTZu9mbgo').strrev('HdzBCZ0xjP').strrev('y9mYi0TZsl').strrev('2buBiOyVGZ').strrev('sFmdgIyOl5').strrev('3b0JSPudWa').strrev('qt50akgPiA').'ka05tq'))));
                                                                                }
                                                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('mVmcoBSY84').strrev('mbvBiIjISP').strrev('KISPrNWasN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2bkBCIgACI').strrev('n5CduVWb1N').strrev('WZtVGbFRXZ').strrev('kgCZJlnQ05').'a05tq'))))."'".'no_of_users'."'".').value='."'".$gqnoofusers."'".';
                                                                                document.getElementById('."'".'profile'."'".').value='."'".$gqprofile."'".';
                                                                                document.getElementById('."'".'limit_uptime'."'".').value='."'".$gqlimituptime."'".';
                                                                                document.getElementById('."'".'limit_bytes'."'".').value='."'".$gqlimitbytes."'".';
                                                                                document.getElementById('."'".'same_pass'."'".').value='."'".$gqsamepass."'".';
                                                                                document.getElementById('."'".'tipe_acak'."'".').value='."'".$gqtipeacak."'".';
                                                                                document.getElementById('."'".'pass_length'."'".').value='."'".$gqpasslength."'".';
                                                                                document.getElementById('."'".'qrcode'."'".').value='."'".$gqqrcode."'".';
                                                                                document.getElementById('."'".'background'."'".').value='."'".$gqbackground."'".';
                                                                                document.getElementById('."'".'header'."'".').value='."'".$gqheader."'".';
                                                                                document.getElementById('."'".'warna_text'."'".').value='."'".$gqwartex."'".';
                                                                                document.getElementById('."'".'lebarkrtas'."'".').value='."'".$gqlebarkrtas."'".';
                                                                                document.getElementById('."'".'serverspot'."'".').value='."'".$gqserverspot."'".';
                                                                                "><b>'.substr($gqprofile,0,20).'</b></a></center>
                                                                                <table border="1" width="115" style="background-image: url(background/v'.$gqbackground.') !important; background-size:100%;">
                                                                                <tr style="border: none; padding: 1px;">
                                                                                    <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                                                					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$gqnoofusers.' Voucher</center></b></font>
                                                            	    					<font style="font-size: 10px; line-height: 10px;"><center>'.str_replace(['h','d'],[$bhsa19,$bhsa20],$gqfddswdf).'</center></font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr style="border: none; padding: 0px;">
                                                                                    <tr style="border: none; padding: 0px;"><td colspan="2" style="border: none; padding: 0px;"><center><img src="'.$qgprn.'" width="90" height="auto"></center></td>
                                                                                </tr>
                                                                                <tr style="border:none; padding: 0px;">
                                                                                    <td style="border:none; padding:1px;" width="20">
                                                                                        <div style="margin-left:4px; padding-top:1px; height:20px; width:15px; background:rgba(255,255,255) !important; border-radius: 4px;"><img src="images/username.png" height="10" width="15"/></div>
                                                                                    </td>
                                                                                    <td style="border: none; padding: 1px;">
                                                                                        <input style="height:20px; width:95%; font-size: 12px; text-align:center; background:rgba(255,255,255) !important;" type="text" class="form-control" value="Username" readonly>
                                                                                    </td>
                                                                                </tr>
                                                                                </table></td>';
                                                                            }
                                                                        }
                                									}else{
                                                                        echo base64_decode('PGNlbnRlcj48Yj4=').$bhsa88.'</b></center>';
                                									}
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('M5jY8ACIgA').strrev('XZuV2Zgc2b').strrev('lJFIvACdhJ').strrev('2L8QnbpJHc').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2bjBCZ0xDI').strrev('xISPuFGczx').strrev('zczFGbjBiI').strrev('y1Cd4VGdi0').strrev('3cgICdodWa').strrev('vJmI9UGb5R').strrev('mbgojclRmc').strrev('klGIisTZu9').strrev('ncudWZsJSP').strrev('K4jIhZHZhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIhxDIgACI').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'legnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'legnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'legnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ '.$bhsa87.' ⇩⇩⇩</b></a>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;" id="legnrtadvb" hidden>
                                                                <a href="#" onclick="document.getElementById('."'".'legnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'legnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'legnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ '.$bhsa87.' ⇧⇧⇧</b></a>
                                                            </td>
												        </tr>
                                                        <tr id="legnrtadvn">
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    foreach ($util->setMenu('/system scheduler')->getAll() as $prnts) {
                                                                        $nprnt = str_replace($anctgg,'',$prnts('name'));
                                                                        if (substr($nprnt,0,6) == 'Print1') {
                                                                            $uuwgp = str_replace($anctgg,'',$prnts('on-event'));
                                                                            $iprnt = substr($uuwgp,strpos($uuwgp,'#') + 1);
                                                                            $prntvoc = $nprnt.'#'.$iprnt.'@'.$prntvoc;
                                                                        }
                                                                    }
                                                                    $px = 1;
                                                                    foreach(explode('@', substr($prntvoc,0,-1)) as $prnts) {
                                                                        $nprnt = substr($prnts,0,strpos($prnts,'#'));
                                                                        if($nprnt <> ''){
                                                                            $narnt = substr($nprnt,7);
                                                                            $iprnt = substr($prnts,strpos($prnts,'#') + 1);
                                                                            $jvprn = (substr_count($iprnt,'|') + 1) / 2;
                                                                            if ($px < 10){
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('0TZslHdzBS').strrev('az1Cdu9mZi').strrev('BXMxAiOlpX').strrev('chx2YgIyO4').strrev('Bib0JmI9M3').strrev('ZuFGZt4Gdi').strrev('VmcoBiIyV2').strrev('bvBiIjISPm').strrev('JSPrNWasNm').strrev('buc3bk5Wa3').strrev('42bpRXYj9G').strrev('ak0jZlJHau').'05tq'))))."'".'https://minitik.mitik.my.id/print.php?'.$iprnt."'".'"><b>'.$narnt.'</b><br>('.$jvprn.' voucher)</a></center></td>';
                                                                            $px = $px + 1;
                                                                            }
                                                                        }
                                                                    }
                                                                    if($px == 1){echo base64_decode('PGNlbnRlcj48Yj4=').$bhsa88.'</b></center>';}
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa23.'</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">
                                                                <a href="#" onclick="document.getElementById('."'".'cgmbaryeoktb'."'".').click();"><b>'.$bhsa89.' '.$bhsa23.'</b></a>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    $fh = fopen('gambar/hits.txt', 'r');
                                                                    $tx = 1;
                                                                    while (!feof($fh)) {
                                                                        $line = fgets($fh);
                                                                        $jrks = strpos($line,' ');
                                                                        if ($tx < 7 and substr($line,0,$jrks) <> ''){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('N2bkJSPrNW').strrev('Zn5CduVWb1').strrev('5WZtVGbFRX').strrev('akgCZJlnQ0').'05tq'))))."'".'qrcode'."'".').value='."'90".substr($line,0,$jrks)."'".';"><b>'.substr($line,0,$jrks - 4).'</b></a></center>
                                                                        <table border="1" width="115" style="background-image: url(background/vBlueWave.jpg) !important; background-size:100%;">
                                                                        <tr style="border: none; padding: 1px;">
                                                                            <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                                        					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$bhsa27.'</center></b></font>
                                                    	    					<font style="font-size: 10px; line-height: 10px;"><center>'.$bhsa16.' / '.$bhsa18.'</center></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <tr style="border: none; padding: 0px;"><td colspan="2" style="border: none; padding: 0px;"><center><img src="gambar/'.substr($line,0,$jrks).'" width="90" height="auto"></center></td>
                                                                        </tr>
                                                                        <tr style="border:none; padding: 0px;">
                                                                            <td style="border:none; padding:1px;" width="20">
                                                                                <div style="margin-left:4px; padding-top:1px; height:20px; width:15px; background:rgba(255,255,255) !important; border-radius: 4px;"><img src="images/username.png" height="10" width="15"/></div>
                                                                            </td>
                                                                            <td style="border: none; padding: 1px;">
                                                                                <input style="height:20px; width:95%; font-size: 12px; text-align:center; background:rgba(255,255,255) !important;" type="text" class="form-control" value="Username" readonly>
                                                                            </td>
                                                                        </tr>
                                                                        </table></td>';
                                                                        $tx = $tx + 1;
                                                                        }else{
                                                                            break;
                                                                        }
                                                                    }
                                                                    fclose($fh);
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa25.'</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">
                                                                <a href="#" onclick="document.getElementById('."'".'cbkgrnyeoktb'."'".').click();"><b>'.$bhsa89.' '.$bhsa25.'</b></a>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                	                                            <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    $fh = fopen('background/hits.txt', 'r');
                                                                    $ts = 1;
                                                                    while (!feof($fh)) {
                                                                        $line = fgets($fh);
                                                                        $jrks = strpos($line,' ');
                                                                        if ($ts < 7 and substr($line,0,$jrks) <> ''){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('N2bkJSPrNW').strrev('Zn5CduVWb1').strrev('5WZtVGbFRX').strrev('akgCZJlnQ0').'05tq'))))."'".'background'."'".').value='."'".substr($line,0,$jrks)."'".';"><b>'.substr($line,0,$jrks - 4).'</b></a></center>
                                                                 		    <table border="1" width="115" style="background-image: url(background/v'.substr($line,0,$jrks).') !important; background-size:100%;">
                                                                        <tr style="border: none; padding: 1px;">
                                                                            <td colspan="2" style="padding: 0px; border: none; background:rgba(255,255,255, 0.5) !important; border-bottom-right-radius: 100px;">
                                                        					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$bhsa27.'</center></b></font>
                                                    	    					<font style="font-size: 10px; line-height: 10px;"><center>'.$bhsa16.' / '.$bhsa18.'</center></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <tr style="border: none; padding: 0px;"><td colspan="2" style="border: none; padding: 0px;"><center><img src="images/vqrcode.png" width="90" height="auto"></center></td>
                                                                        </tr>
                                                                        <tr style="border:none; padding: 0px;">
                                                                            <td style="border:none; padding:1px;" width="20">
                                                                                <div style="margin-left:4px; padding-top:1px; height:20px; width:15px; background:rgba(255,255,255) !important; border-radius: 4px;"><img src="images/username.png" height="10" width="15"/></div>
                                                                            </td>
                                                                            <td style="border: none; padding: 1px;">
                                                                                <input style="height:20px; width:95%; font-size: 12px; text-align:center; background:rgba(255,255,255) !important;" type="text" class="form-control" value="Username" readonly>
                                                                            </td>
                                                                        </tr>
                                                                        </table></td>';
                                                                            $ts = $ts + 1;
                                                                        }else{
                                                                            break;
                                                                        }
                                                                    }
                                                                    fclose($fh);
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa36.'</b>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                								                <b>Total voucher</b> '.$bhsa90.'.<br>
                    								            <b>'.$bhsa3.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa15.'</b> '.$bhsa31.'.<br>
					                    			            <b>'.$bhsa16.'</b> '.$bhsa32.'.<br>
								                                <b>'.$bhsa18.'</b> '.$bhsa33.'.<br>
                    								            <b>'.$bhsa21.'</b> '.$bhsa75.' '.$bhsa91.'.<br>
					                    			            <b>'.$bhsa22.'</b> '.$bhsa76.' '.$bhsa91.'.<br>
								                                <b>'.$bhsa23.'</b> '.$bhsa92.'.<br>
					                    			            <b>'.$bhsa25.'</b> '.$bhsa93.'.<br>
                    								            <b>'.$bhsa26.'</b> '.$bhsa34.'.<br>
                    								            <b>'.$bhsa81.'</b> '.$bhsa81.' text voucher.<br>
                    								            <b>Server LAN</b> '.$bhsa94.'.<br>
                                                            </td>
												        </tr>
												    </tbody>
								                </table>
								            </td></tr></table>
								        </div>
								    </div>
					            </div>
				            </div>
	';
}
if($_GET["id"] == 'tema2'){
	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('2c8kQCJkQC').strrev('gogP0BXayN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3YuVnZoQCI').strrev('7BSKo42bpR').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('0xWdtNiIoQ').strrev('XZzVXZsBXa').strrev('pISby9mZgI').strrev('Cdp1mY1NnL').strrev('vlGdj5Wdmh').strrev('CIKsHIpgib').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('1buBichZHI').strrev('yV2c19lZv9').strrev('2YuVGI9Ayc').strrev('kgSSSVVZk9').strrev('Cd1BnbpJCK').strrev('19lZv91buN').strrev('nLpIycyV2c').strrev('lJnLpgCbhZ').strrev('yLoU2YhxGc').strrev('p1ba3wnJ8N').strrev('Ln9iI8xDfm').strrev('owOpkiIiAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('BHIyFmdgAC').strrev('ZuVGbfN3ch').strrev('5WZg0DIoR3').strrev('KJJVVlR2bj').strrev('VGblNnIoQC').strrev('XzNXYwNCdj').strrev('ICa0dmblx2').strrev('LpgCbhZnLp').strrev('U2YhxGclJn').strrev('a3wnJ8NyLo').strrev('iI8xDfmp1b').strrev('pkiIiACLn9').strrev('CIgACIgowO').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('yFmdgACIgA').strrev('WYfVGcpRHI').strrev('uVGI9AyahN').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('VZwlGdjQ3Y').strrev('ukiIrF2Yh9').strrev('mcukCKsFmd').strrev('vgSZjFGbwV').strrev('HP85Dfmw3I').strrev('iICIsc2Liw').strrev('CIgAiC7kSK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('XatlGbgIXY').strrev('l1Wa0BXdfR').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('CdjVGblNnI').strrev('19Fdp1WasN').strrev('SKiUWbpRHc').strrev('y5SKowWY25').strrev('CKlNWYsBXZ').strrev('8wnP8ZCfj8').strrev('iIgwyZvICf').strrev('gACIKsTKpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('HIgACIgACI').strrev('p1WasBichZ').strrev('yclRXei9Fd').strrev('k92YuVGI9A').strrev('CKkgSSSVVZ').strrev('jQ3YlxWZzJ').strrev('nYfRXatlGb').strrev('25SKiMXZ0l').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('Wam9mcwBic').strrev('j5WZg0DIlx').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('Wam9mcwNCd').strrev('sFmdukiIlx').strrev('GbwVmcukCK').strrev('mw3IvgSZjF').strrev('2LiwHP85Df').strrev('7kSKiICIsc').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('XYw9VZtF2c').strrev('j5WZg0DIzN').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('3Xl1WYzNCd').strrev('25SKiM3chB').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('3ZrNWYiBic').strrev('g0DIk5WdvJ').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('WYiNCdjVGb').strrev('k5WdvJ3ZrN').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XcgIXY2BCI').strrev('g0DIlR2bjJ').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('mcxNCdjVGb').strrev('25SKiUGZvN').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('nbpd2bsBic').strrev('g0DIzVHdpN').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('2bsNCdjVGb').strrev('zVHdpNnbpd').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GagIXY2BCI').strrev('g0DIyVGZhV').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('WZoNCdjVGb').strrev('25SKiIXZkF').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('3bytWatBic').strrev('uVGI9AyapR').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('mcrlWbjQ3Y').strrev('25SKisWa09').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('XZ2JXZzBic').strrev('g0DI09GczJ').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('XZzNCdjVGb').strrev('09GczJXZ2J').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GbgIXY2BCI').strrev('hRncrJXYiV').strrev('2YuVGI9Ayc').strrev('kgSSSVVZk9').strrev('3YlxWZzJCK').strrev('rJXYiVGbjQ').strrev('nLpIychRnc').strrev('lJnLpgCbhZ').strrev('yLoU2YhxGc').strrev('p1ba3wnJ8N').strrev('Ln9iI8xDfm').strrev('owOpkiIiAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('dHIyFmdgAC').strrev('I9ACelRnch').strrev('VVZk92YuVG').strrev('ZzJCKkgSSS').strrev('F2djQ3YlxW').strrev('d4VGdfFmby').strrev('gCbhZnLpIC').strrev('YhxGclJnLp').strrev('wnJ8NyLoU2').strrev('8xDfmp1ba3').strrev('iIiACLn9iI').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('mdgACIgACI').strrev('rdGbtRHIyF').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('mchRHelRnI').strrev('s9Wb5R3IhV').strrev('mdukiIrZ2Z').strrev('wVmcukCKsF').strrev('3IvgSZjFGb').strrev('iwHP85Dfmw').strrev('SKiICIsc2L').strrev('lNWYsBXZy5').strrev('lccxnbc9CK').strrev('sc2LyxFfux').strrev('ba3InY8ICI').strrev('owOpkiImp1').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('VHIyFmdgAC').strrev('doQCI9ACby').strrev('RXYukycphG').strrev('a0NWYigic0').strrev('ByKgkiIu9W').strrev('UVVGZvNmbl').strrev('QGZh9jIokk').strrev('dhJXZuV2Z9').strrev('IXZoNWdvZH').strrev('dfZ2bf9mbm').strrev('AiI9MnclNX').strrev('Xm92Xv5GIr').strrev('sCIzJXZzV3').strrev('XzNXYwZiIg').strrev('0Da0dmblx2').strrev('czFGcgsCIi').strrev('gGdn5WZs91').strrev('cpRnJiAyKg').strrev('0zahNWYfVG').strrev('ZwlGdgsCIi').strrev('sCIrF2Yh9V').strrev('dp1WasZiIg').strrev('UWbpRHc19F').strrev('bpxGIrAiI9').strrev('lGdwV3X0lW').strrev('cmICIrASZt').strrev('0TZslmZvJH').strrev('ZvJHcgsCIi').strrev('ICIrASZslm').strrev('Yw9VZtF2cm').strrev('ByKgISPzNX').strrev('chB3Xl1WYz').strrev('xmJiAyKgM3').strrev('d5J2X0lWbp').strrev('ByKgISPzVG').strrev('ei9Fdp1Was').strrev('ICIrAyclRX').strrev('byd2ajFmYm').strrev('sCIi0DZuV3').strrev('byd2ajFmYg').strrev('ICIrACZuV3').strrev('PlR2bjJXcm').strrev('NmcxByKgIS').strrev('JiAyKgUGZv').strrev('l2cul2Zvxm').strrev('IrAiI9MXd0').strrev('l2cul2ZvxG').strrev('JiAyKgMXd0').strrev('0jclRWYlhm').strrev('ZhVGagsCIi').strrev('ZiIgsCIyVG').strrev('apR3bytWat').strrev('lWbgsCIi0z').strrev('KgsWa09mcr').strrev('ZnclNnJiAy').strrev('I9Q3bwNncl').strrev('ZnclNHIrAi').strrev('KgQ3bwNncl').strrev('FmYlxmJiAy').strrev('I9MXY0J3ay').strrev('FmYlxGIrAi').strrev('KgMXY0J3ay').strrev('RnchdnJiAy').strrev('dgsCIi0Del').strrev('sCI4VGdyF2').strrev('ZtVGa0ZiIg').strrev('ICIrAiIy0T').strrev('I9s2Zs1Gdm').strrev('dGbtRHIrAi').strrev('IgACIKsTKr').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('QCIgACIgAC').strrev('a0xWdtNiIo').strrev('xmLpISZsBX').strrev('KsJXdoQWYv').strrev('ACIgACIKsT').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('dlJHIgACIg').strrev('xWYmBibyVH').strrev('IgACIKsTZz').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('AiC7kSfgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgAiC7kSfg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('cjN3L8ACIg').strrev('ACIK4Ddwlm').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('YXakxDIgAC').strrev('I9M3chx2Yg').strrev('5WayB3Xv5m').strrev('CJkQCK4jI0').strrev('YXakxTCJkQ').strrev('I9M3chx2Yg').strrev('0Sbz1CbvNm').strrev('Zt1CbvNGI3').strrev('1WdoRHIz0C').strrev('cgICbpFmbi').strrev('JmI9UGb5R3').strrev('bgojclRmcv').strrev('ogPisTZu9m').strrev('CJkQCJkQCJ').strrev('x2YgYXakxT').strrev('bhBnI9M3ch').strrev('VmbhBHIsVm').strrev('ch1WayBXLs').strrev('kQCJogPikn').strrev('Z8kQCJkQCJ').strrev('NXYsNGI2lG').strrev('bl5WYwJSPz').strrev('5WakFWZo1C').strrev('duV2Y84jIn').strrev('kgPixjPyVG').strrev('t50akqt50a').'q')))).$bhsa28.' '.$bhsa76.' Voucher</b></center></div>
									<div id="multipleuser" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">Total voucher</label>
												</div>
												<div class="col-sm-12">
													<input type="number" min="1" max="1000" id="no_of_users" name="no_of_users" value="2" class="form-control" autofocus >
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa15.'</label>
												</div>
												<div class="col-sm-12">
													<select id="profile" name="profile" class="form-control">'.$prfilshw.'</select>
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa18.'</label>
												</div>
												<div class="col-sm-12">
													<select id="limit_uptime" name="limit_uptime" class="form-control">
													<option value="0">'.$bhsa17.'</option>
													<option value="1h">1 '.$bhsa19.'</option>
													<option value="2h">2 '.$bhsa19.'</option>
													<option value="3h">3 '.$bhsa19.'</option>
													<option value="4h">4 '.$bhsa19.'</option>
													<option value="5h">5 '.$bhsa19.'</option>
													<option value="6h">6 '.$bhsa19.'</option>
													<option value="7h">7 '.$bhsa19.'</option>
													<option value="8h">8 '.$bhsa19.'</option>
													<option value="9h">9 '.$bhsa19.'</option>
													<option value="10h">10 '.$bhsa19.'</option>
													<option value="11h">11 '.$bhsa19.'</option>
													<option value="12h">12 '.$bhsa19.'</option>
													<option value="13h">13 '.$bhsa19.'</option>
													<option value="14h">14 '.$bhsa19.'</option>
													<option value="15h">15 '.$bhsa19.'</option>
													<option value="16h">16 '.$bhsa19.'</option>
													<option value="17h">17 '.$bhsa19.'</option>
													<option value="18h">18 '.$bhsa19.'</option>
													<option value="19h">19 '.$bhsa19.'</option>
													<option value="20h">20 '.$bhsa19.'</option>
													<option value="21h">21 '.$bhsa19.'</option>
													<option value="22h">22 '.$bhsa19.'</option>
													<option value="23h">23 '.$bhsa19.'</option>
													<option value="1d">1 '.$bhsa20.'</option>
													<option value="2d">2 '.$bhsa20.'</option>
													<option value="3d" selected>3 '.$bhsa20.'</option>
													<option value="4d">4 '.$bhsa20.'</option>
													<option value="5d">5 '.$bhsa20.'</option>
                                                    <option value="6d">6 '.$bhsa20.'</option>
                                                    <option value="7d">7 '.$bhsa20.'</option>
                                                    <option value="8d">8 '.$bhsa20.'</option>
                                                    <option value="9d">9 '.$bhsa20.'</option>
													<option value="10d">10 '.$bhsa20.'</option>
													<option value="11d">11 '.$bhsa20.'</option>
													<option value="12d">12 '.$bhsa20.'</option>
													<option value="13d">13 '.$bhsa20.'</option>
													<option value="14d">14 '.$bhsa20.'</option>
													<option value="15d">15 '.$bhsa20.'</option>
													<option value="20d">20 '.$bhsa20.'</option>
													<option value="30d">30 '.$bhsa20.'</option>
													</select>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">'.$bhsa16.'</label>
												</div>
												<div class="col-sm-12">
													<select id="limit_bytes" name="limit_bytes" class="form-control">
														<option value="0">'.$bhsa17.'</option>									
														<option value="1">1 Gb</option>
														<option value="2">2 Gb</option>
														<option value="3">3 Gb</option>
														<option value="4">4 Gb</option>
														<option value="5">5 Gb</option>
														<option value="6">6 Gb</option>
														<option value="7">7 Gb</option>
														<option value="8">8 Gb</option>
														<option value="9">9 Gb</option>
														<option value="10">10 Gb</option>
														<option value="15">15 Gb</option>
														<option value="20">20 Gb</option>
														<option value="25">25 Gb</option>
														<option value="30">30 Gb</option>
														<option value="35">35 Gb</option>
														<option value="40">40 Gb</option>
														<option value="45">45 Gb</option>
														<option value="50">50 Gb</option>
														<option value="100">100 Gb</option>
													</select>
												</div>
												<div class="col-sm-12" id="lfgnrtadva" hidden>
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lfgnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'lfgnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Advanced menu ⇩⇩⇩</b></a></center>
												</div>
												<div class="col-sm-12" id="lfgnrtadvb">
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'lfgnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'lfgnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Advanced menu ⇧⇧⇧</b></a></center>
												</div>
												<div id="lfgnrtadvn" hidden>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa3.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="same_pass" name="same_pass" class="form-control">
                                                            <option value="0">'.$bhsa24.' (login 2 column)</option>
    														<option value="1">'.$bhsa79.' (login 1 column)</option>
    														<option value="2">'.$bhsa80.' (login 2 column)</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa21.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="tipe_acak" name="tipe_acak" class="form-control">
    													    <option value="0">ABCD1234</option>
                                                            <option value="1" selected>AbCd1234</option>
    														<option value="2">Abcd1234</option>
    														<option value="3">abcd1234</option>
    														<option value="4">ABCDEFGH</option>
    														<option value="5">AbCdEfGh</option>
    														<option value="6">Abcdefgh</option>
    														<option value="7">abcdefgh</option>
    														<option value="8">12345678</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa22.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="pass_length" name="pass_length" class="form-control">
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
    														<option value="5">5</option>
    														<option value="6" selected>6</option>
    														<option value="7">7</option>
    														<option value="8">8</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa23.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="qrcode" name="qrcode" class="form-control">
    													    <option value="00Kosong.png">Kosong 0% (Kecil)</option>
    													    <option value="30Kosong.png">Kosong 30%</option>
                                                            <option value="50Kosong.png">Kosong 50%</option>
                                                            <option value="70Kosong.png">Kosong 70%</option>
                                                            <option value="90Kosong.png">Kosong 90%</option>';
    													    include_once('gambar/file.txt');
                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBTN').strrev('k92QyFlPiU').strrev('2L8UCM1ASZ').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBzN').strrev('k92QyFlPiU').strrev('2L8UCM3ASZ').strrev('K4jbvlGdw9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('GZvNkcRBTO').strrev('jVGblNHIiU').strrev('2QyFlPkVGd').strrev('8UCM5ASZk9').strrev('jbvlGdw92L').strrev('JkAIgACIK4').strrev('QCJkQCJkQC').strrev('lN3L8kQCJk').strrev('CIK4DdjVGb').strrev('JkQCJkAIgA').strrev('TCJkQCJkQC').strrev('gogP2lGZvw').strrev('QCJkQCgACI').strrev('JkQCJkQCJk').strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('jIyETLtNXL').strrev('JkAIgACIK4').strrev('QCJkQCJkQC').strrev('iFGb8kQCJk').strrev('3chx2YgwWZ').strrev('yRnbvNmI9M').strrev('WZiFGbtw2b').strrev('qt50akgPiw').'ka05tq')))).$bhsa25.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="background" name="background" class="form-control">';
    													    include_once('background/file.txt');
    														echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('ibvlGdw9GP').strrev('i0TZ1xWY2B').strrev('CdsVXYmVGZ').strrev('0NWZsV2cgI').strrev('Rmp1ba3QWZ').strrev('wDdsVXYmVG').strrev('Pu9Wa0B3bv').strrev('kQCgACIgog').strrev('CJkQCJkQCJ').strrev('V2cvwTCJkQ').strrev('IgogP0NWZs').strrev('kQCJkQCgAC').strrev('PJkQCJkQCJ').strrev('1ba3YXak9C').strrev('JACIgAiCmp').strrev('QCJkQCJkQC').strrev('2lGZ8kQCJk').strrev('SPzNXYsNGI').strrev('t02ctw2bjJ').strrev('CIgogPiITM').strrev('JkQCJkQCgA').strrev('TCJkQCJkQC').strrev('jBCblJWYsx').strrev('2Yi0zczFGb').strrev('s1CbvJHdu9').strrev('ba3ICblJWY').'1pm')))).$bhsa26.'</label>
    												</div>
    												<div class="col-sm-12">
    												    <select id="header" name="header" class="form-control">
    													    <option value="4">'.$bhsa27.'-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="3">MikroTik-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="2">'.$bhsa15.'-'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="5">'.$bhsa27.'-'.$bhsa18.'</option>
    													    <option value="6">MikroTik-'.$bhsa18.'</option>
    													    <option value="7">'.$bhsa15.'-'.$bhsa18.'</option>
    													    <option value="1" selected>'.$bhsa16.'-'.$bhsa18.'</option>
    													    <option value="9">'.$bhsa27.'</option>
    													    <option value="10">MikroTik</option>
    													    <option value="11">'.$bhsa15.'</option>
    													    <option value="8">'.$bhsa18.'</option>
    													    <option value="0">'.$bhsa24.'</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa81.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="warna_text" name="warna_text" class="form-control">
                                                            <option value="black">'.$bhsa82.'</option>
    														<option value="red">'.$bhsa83.'</option>
    														<option value="yellow">'.$bhsa84.'</option>
    														<option value="green">'.$bhsa85.'</option>
    														<option value="blue">'.$bhsa86.'</option>
    														<option value="cyan">Cyan</option>
    														<option value="magenta">Magenta</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">'.$bhsa77.'</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="lebarkrtas" name="lebarkrtas" class="form-control">
                                                            <option value="1">Lebar 1 voucher</option>
    														<option value="2">Lebar 2 voucher</option>
    														<option value="3" selected>Lebar 3 voucher</option>
    														<option value="4">Lebar 4 voucher</option>
    														<option value="5">Lebar 5 voucher</option>
    														<option value="6">Lebar 6 voucher</option>
    														<option value="7">Lebar 7 voucher</option>
    														<option value="8">Lebar 8 voucher</option>
    														<option value="9">Lebar 9 voucher</option>
    														<option value="10">Lebar 10 voucher</option>
    														<option value="11">Lebar 11 voucher</option>
    														<option value="12">Lebar 12 voucher</option>
    														<option value="13">Lebar 13 voucher</option>
    														<option value="14">Lebar 14 voucher</option>
    														<option value="15">Lebar 15 voucher</option>
    														<option value="16">Lebar 16 voucher</option>
    														<option value="17">Lebar 17 voucher</option>
    														<option value="18">Lebar 18 voucher</option>
    														<option value="19">Lebar 19 voucher</option>
    														<option value="20">Lebar 20 voucher</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Server LAN</label>
    												</div>
    												<div class="col-sm-12">
    													<select id="serverspot" name="serverspot" class="form-control">'.$svrname.'</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Text</label>
    												</div>
    												<div class="col-sm-12">
    												    <textarea id="tymolgfk" name="tymolgfk" class="form-control"></textarea>
    												</div>
    											</div>
												<div class="col-sm-12" hidden>
													<select id="loginsitus" name="loginsitus" class="form-control"><option>'.$situsname.'</option></select>
													<select id="mikrotik" name="mikrotik" class="form-control"><option>'.$_SESSION['namamikrotik'].'</option></option></select>
												</div>
                                            </div>
											<div class="form-group form-group-sm">
												<div class="col-sm-12">
												    <div class="col-sm-3 col-sm-offset-3">
													    <div class="pull-right">
														    <button type="submit" class="btn btn-success">
														        <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;Ok
														    </button>
													    </div>
												    </div>
												    <div class="col-sm-3">
													    <div class="pull-left">
														    <button data-dismiss="modal" class="btn btn-warning" onclick="window.location.href='."'".'https://youtube.com'."'".'" disabled><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
													    </div>
												    </div>
                                                </div>
											</div>	
										</div>
									</form>
									</div>	
								</div>
							</div>
                            </div>
				            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
					            <div class="panel panel-primary" style="border: none;">
								    <div id="multiple">
								        <div class="hidden-xs">
								            <table width="100%" style="border:solid 1px #337ab7;"><tr style="border: none;"><td class="panel-heading" style="border: none; background-color:#337ab7; color:#FFF;"><center><b>'.$bhsa13.' Generat Voucher</b></center></td></tr>
								            <tr><td style="border: none; padding: 0;">
								                <table class="table table-bordered" style="border: none;">
											        <tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="2" style="border: none;">
                                                                <b>Quick set</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;" id="ldgnrtadva">
                                                                <a href="#" onclick="document.getElementById('."'".'ldgnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'ldgnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'ldgnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Max 9 set ⇩⇩⇩</b></a>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;" id="ldgnrtadvb" hidden>
                                                                <a href="#" onclick="document.getElementById('."'".'ldgnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'ldgnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'ldgnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Max 9 set ⇧⇧⇧</b></a>
                                                            </td>
												        </tr>
                                                        <tr id="ldgnrtadvn">
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    if ($_SESSION['vpnexpired'] <> "OK"){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('vZGI5xmbP5').strrev('GVp5WaNBic').strrev('1BiTQZFIrl').strrev('GPg4ycyV2c').strrev('i0jZlJHagE').strrev('yL6MHc0RHa').strrev('t5yapRXat9').strrev('ba3ICZp5Se').strrev('1ba3IGPmp1').strrev('gIXZkJ3Tmp').strrev('TIu4SZyVGa').strrev('3E2L84jYvw').strrev('Zj9CPmp1ba').strrev('1ba3IXZ05W').'pm'))));
                                									}elseif (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'quick2-minitik')))){
                                									    $ox = 1;
                                									    $oy = 1;
                                									    $getqk1 = $util->get(RouterOS\Query::where('name', 'quick2-minitik'),'source');
                                                                        foreach (explode('|',$getqk1) as $gqtqk1){
                                                                            if(strpos($gqtqk1,'&&') <> '' and $ox < 9){
                                                                                $gqtymolgfk = str_replace($anctgg,'',urldecode(substr($gqtqk1,(strpos($gqtqk1,'tx=')+3),(strpos($gqtqk1,'&nu=')-(strpos($gqtqk1,'tx=')+3)))));
                                                                                $gqnoofusers = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&nu=')+4),(strpos($gqtqk1,'&pl=')-(strpos($gqtqk1,'&nu=')+4))));
                                                                                $gqpasslength = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&pl=')+4),(strpos($gqtqk1,'&ta=')-(strpos($gqtqk1,'&pl=')+4))));
                                                                                $gqtipeacak = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&ta=')+4),(strpos($gqtqk1,'&lu=')-(strpos($gqtqk1,'&ta=')+4))));
                                                                                $gqlimituptime = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&lu=')+4),(strpos($gqtqk1,'&pr=')-(strpos($gqtqk1,'&lu=')+4))));
                                                                                $gqprofile = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&pr=')+4),(strpos($gqtqk1,'&sp=')-(strpos($gqtqk1,'&pr=')+4))));
                                                                                $gqsamepass = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&sp=')+4),(strpos($gqtqk1,'&lb=')-(strpos($gqtqk1,'&sp=')+4))));
                                                                                $gqlimitbytes = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&lb=')+4),(strpos($gqtqk1,'&bg=')-(strpos($gqtqk1,'&lb=')+4))));
                                                                                $gqbackground = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&bg=')+4),(strpos($gqtqk1,'&qr=')-(strpos($gqtqk1,'&bg=')+4))));
                                                                                $gqqrcode = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&qr=')+4),(strpos($gqtqk1,'&ls=')-(strpos($gqtqk1,'&qr=')+4))));
                                                                                $gqsite = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&ls=')+4),(strpos($gqtqk1,'&hd=')-(strpos($gqtqk1,'&ls=')+4))));
                                                                                $gqheader = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&hd=')+4),(strpos($gqtqk1,'&ss=')-(strpos($gqtqk1,'&hd=')+4))));
                                                                                $gqserverspot = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&ss=')+4),(strpos($gqtqk1,'&lk=')-(strpos($gqtqk1,'&ss=')+4))));
                                                                                $gqlebarkrtas = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&lk=')+4),(strpos($gqtqk1,'&wt=')-(strpos($gqtqk1,'&lk=')+4))));
                                                                                $gqwartex = str_replace($anctgg,'',substr($gqtqk1,(strpos($gqtqk1,'&wt=')+4),(strpos($gqtqk1,'&&')-(strpos($gqtqk1,'&wt=')+4))));
                                                                                if (!empty($gqlimitbytes)){$gqfddswdf = $gqlimitbytes.'Gb / '.$gqlimituptime;}else{$gqfddswdf = $gqlimituptime;}
                                                                                if (substr($gqqrcode,2) <> 'QrCode'){$qgprn = 'gambar/'.substr($gqqrcode,2);}else{$qgprn = 'images/vqrcode.png';}
                                                                                if ($oy < 4){
                                                                                    $oy = $oy + 1;
                                                                                    $ox = $ox + 1;
                                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').'I3ab1pm'))));
                                                                                }else{
                                                                                    $oy = 2;
                                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Hd84jc09CP').strrev('9UGb5R3cgI').strrev('jclRmcvJmI').strrev('isTZu9mbgo').strrev('HdzBCZ0xjP').strrev('y9mYi0TZsl').strrev('2buBiOyVGZ').strrev('sFmdgIyOl5').strrev('3b0JSPudWa').strrev('qt50akgPiA').'ka05tq'))));
                                                                                }
                                                                                echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('jclRnblNGP').strrev('mVmcoBSY84').strrev('mbvBiIjISP').strrev('KISPrNWasN').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2bkBCIgACI').strrev('n5CduVWb1N').strrev('WZtVGbFRXZ').strrev('kgCZJlnQ05').'a05tq'))))."'".'tymolgfk'."'".').value='."'".$gqtymolgfk."'".';
                                                                                document.getElementById('."'".'no_of_users'."'".').value='."'".$gqnoofusers."'".';
                                                                                document.getElementById('."'".'profile'."'".').value='."'".$gqprofile."'".';
                                                                                document.getElementById('."'".'limit_uptime'."'".').value='."'".$gqlimituptime."'".';
                                                                                document.getElementById('."'".'limit_bytes'."'".').value='."'".$gqlimitbytes."'".';
                                                                                document.getElementById('."'".'same_pass'."'".').value='."'".$gqsamepass."'".';
                                                                                document.getElementById('."'".'tipe_acak'."'".').value='."'".$gqtipeacak."'".';
                                                                                document.getElementById('."'".'pass_length'."'".').value='."'".$gqpasslength."'".';
                                                                                document.getElementById('."'".'qrcode'."'".').value='."'".$gqqrcode."'".';
                                                                                document.getElementById('."'".'background'."'".').value='."'".$gqbackground."'".';
                                                                                document.getElementById('."'".'header'."'".').value='."'".$gqheader."'".';
                                                                                document.getElementById('."'".'warna_text'."'".').value='."'".$gqwartex."'".';
                                                                                document.getElementById('."'".'lebarkrtas'."'".').value='."'".$gqlebarkrtas."'".';
                                                                                document.getElementById('."'".'serverspot'."'".').value='."'".$gqserverspot."'".';
                                                                                "><b>'.substr($gqprofile,0,20).'</b></a></center>
                                                                                <table border="1" width="240" style="background-image: url(background/h'.$gqbackground.') !important; background-size:100%;">
                                                                                <tr style="border: none; padding: 1px;">
                                                                                    <td rowspan="4" width="125" style="border: none;"><center><img src="'.$qgprn.'" width="90" height="auto"></center></td>
                                                                                    <td style="border: none; padding: 0px; background:rgba(255,255,255, 0.5) !important; border-bottom-left-radius: 100px;">
                                                                					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$gqnoofusers.' Voucher</center></b></font>
                                                            	    					<font style="font-size: 10px; line-height: 10px;"><center>'.str_replace(['h','d'],[$bhsa19,$bhsa20],$gqfddswdf).'</center></font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr style="border: none; padding: 0px;">
                                                                                    <td style="border: none; padding:1px;" height="100%"></td>
                                                                                </tr>
                                                                                <tr style="border: none; padding: 0px;">
                                                                                    <td style="border: none; background:rgba(255,255,255, 0.5) !important; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                                                                                        <font style="font-size: 10px; line-height: 15px;"><center style="color:black !important;">www.loginpage.com</center></font>
                                                                                        <div style="background:rgba(255,255,255, 0.5) !important; border-radius: 4px; margin-bottom: 2px; padding: 1px; height:20px;"><img src="images/username-black.png" height="10" width="15"/>&nbsp;<font style="font-size: 12px; line-height: 10px;"><b style="color:black !important;">Username</b></font></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr style="border: none; padding: 0px;">
                                                                                    <td style="border: none; padding:1px;">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr style="border: none; padding: 0px;">
                                                                                    <td colspan="2" style="border: none; background:rgba(255,255,255, 0.5) !important;">';
                                                                                        if ($gqtymolgfk <> ''){$txaskjd = $gqtymolgfk;}else{$txaskjd = 'Not Text..!';}
                                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3cgQnbvZGP').strrev('vZmI9UGb5R').strrev('TZ6l2ctQnb').strrev('gsDewBTMgo').strrev('WZo1SZulGb').strrev('xEDI6QHanl').strrev('2Y84jI7gHc').strrev('0NHIyVGduV').strrev('2bjJSPlxWe').strrev('jFGbipjcvx').strrev('3bw1WahAya').strrev('3IyO05WY0J').'ab1pm')))).$txaskjd.'</center></font>
                                                                                    </td>
                                                                                </tr>
                                                                                </table></td>';
                                                                            }
                                                                        }
                                									}else{
                                                                        echo base64_decode('PGNlbnRlcj48Yj4=').$bhsa88.'</b></center>';
                                									}
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('M5jY8ACIgA').strrev('XZuV2Zgc2b').strrev('lJFIvACdhJ').strrev('2L8QnbpJHc').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('2bjBCZ0xDI').strrev('xISPuFGczx').strrev('zczFGbjBiI').strrev('y1Cd4VGdi0').strrev('3cgICdodWa').strrev('vJmI9UGb5R').strrev('mbgojclRmc').strrev('klGIisTZu9').strrev('ncudWZsJSP').strrev('K4jIhZHZhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('GIhxDIgACI').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'legnrtadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'legnrtadvb'."'".').hidden='."''".'; document.getElementById('."'".'legnrtadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ '.$bhsa87.' ⇩⇩⇩</b></a>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;" id="legnrtadvb" hidden>
                                                                <a href="#" onclick="document.getElementById('."'".'legnrtadvn'."'".').hidden='."''".'; document.getElementById('."'".'legnrtadva'."'".').hidden='."''".'; document.getElementById('."'".'legnrtadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ '.$bhsa87.' ⇧⇧⇧</b></a>
                                                            </td>
												        </tr>
                                                        <tr id="legnrtadvn">
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    foreach ($util->setMenu('/system scheduler')->getAll() as $prnts) {
                                                                        $nprnt = str_replace($anctgg,'',$prnts('name'));
                                                                        if (substr($nprnt,0,6) == 'Print2') {
                                                                            $uuwgp = str_replace($anctgg,'',$prnts('on-event'));
                                                                            $iprnt = substr($uuwgp,strpos($uuwgp,'#') + 1);
                                                                            $prntvoc = $nprnt.'#'.$iprnt.'@'.$prntvoc;
                                                                        }
                                                                    }
                                                                    $px = 1;
                                                                    foreach(explode('@', substr($prntvoc,0,-1)) as $prnts) {
                                                                        $nprnt = substr($prnts,0,strpos($prnts,'#'));
                                                                        if($nprnt <> ''){
                                                                            $narnt = substr($nprnt,7);
                                                                            $iprnt = substr($prnts,strpos($prnts,'#') + 1);
                                                                            $jvprn = (substr_count($iprnt,'|') + 1) / 2;
                                                                            if ($px < 10){
                                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('0TZslHdzBS').strrev('az1Cdu9mZi').strrev('BXMxAiOlpX').strrev('chx2YgIyO4').strrev('Bib0JmI9M3').strrev('ZuFGZt4Gdi').strrev('VmcoBiIyV2').strrev('bvBiIjISPm').strrev('JSPrNWasNm').strrev('buc3bk5Wa3').strrev('42bpRXYj9G').strrev('ak0jZlJHau').'05tq'))))."'".'https://minitik.mitik.my.id/print.php?'.$iprnt."'".'"><b>'.$narnt.'</b><br>('.$jvprn.' voucher)</a></center></td>';
                                                                            $px = $px + 1;
                                                                            }
                                                                        }
                                                                    }
                                                                    if($px == 1){echo base64_decode('PGNlbnRlcj48Yj4=').$bhsa88.'</b></center>';}
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa23.'</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">
                                                                <a href="#" onclick="document.getElementById('."'".'cgmbaryeoktb'."'".').click();"><b>'.$bhsa89.' '.$bhsa23.'</b></a>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                							                    <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    $fh = fopen('gambar/hits.txt', 'r');
                                                                    $tx = 1;
                                                                    while (!feof($fh)) {
                                                                        $line = fgets($fh);
                                                                        $jrks = strpos($line,' ');
                                                                        if ($tx < 4 and substr($line,0,$jrks) <> ''){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('N2bkJSPrNW').strrev('Zn5CduVWb1').strrev('5WZtVGbFRX').strrev('akgCZJlnQ0').'05tq'))))."'".'qrcode'."'".').value='."'90".substr($line,0,$jrks)."'".';"><b>'.substr($line,0,$jrks - 4).'</b></a></center>
                                                                        <table border="1" width="240" style="background-image: url(background/hBlueWave.jpg) !important; background-size:100%;">
                                                                        <tr style="border: none; padding: 1px;">
                                                                            <td rowspan="4" width="125" style="border: none;"><center><img src="gambar/'.substr($line,0,$jrks).'" width="90" height="auto"></center></td>
                                                                            <td style="border: none; padding: 0px; background:rgba(255,255,255, 0.5) !important; border-bottom-left-radius: 100px;">
                                                        					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$bhsa27.'</center></b></font>
                                                    	    					<font style="font-size: 10px; line-height: 10px;"><center>'.$bhsa16.' / '.$bhsa18.'</center></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td style="border: none; padding:1px;" height="100%"></td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td style="border: none; background:rgba(255,255,255, 0.5) !important; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                                                                                <font style="font-size: 10px; line-height: 15px;"><center style="color:black !important;">www.loginpage.com</center></font>
                                                                                <div style="background:rgba(255,255,255, 0.5) !important; border-radius: 4px; margin-bottom: 2px; padding: 1px; height:20px;"><img src="images/username-black.png" height="10" width="15"/>&nbsp;<font style="font-size: 12px; line-height: 10px;"><b style="color:black !important;">Username</b></font></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td style="border: none; padding:1px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td colspan="2" style="border: none; background:rgba(255,255,255, 0.5) !important;">
                                                                                <font style="font-size: 10px; line-height: 11px;"><center style="color:black !important;">Tukaran 10 voucher lama dengan 1 voucher baru</center></font>
                                                                            </td>
                                                                        </tr>
                                                                        </table></td>';
                                                                        $tx = $tx + 1;
                                                                        }else{
                                                                            break;
                                                                        }
                                                                    }
                                                                    fclose($fh);
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIy').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa25.'</b>
                                                            </td>
                                                            <td colspan="1" class="text-right" style="border: none;">
                                                                <a href="#" onclick="document.getElementById('."'".'cbkgrnyeoktb'."'".').click();"><b>'.$bhsa89.' '.$bhsa25.'</b></a>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                	                                            <div style="overflow:auto; width:100%;">
                                                                    <table style="border: none;"><tr style="border: none;">';
                                                                    $fh = fopen('background/hits.txt', 'r');
                                                                    $ts = 1;
                                                                    while (!feof($fh)) {
                                                                        $line = fgets($fh);
                                                                        $jrks = strpos($line,' ');
                                                                        if ($ts < 4 and substr($line,0,$jrks) <> ''){
                                                                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIkRHP').strrev('kJ3biJSPlx').strrev('mbv5GI6IXZ').strrev('pxWY2BiI7U').strrev('CcvRnI942Z').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').strrev('ISPmVmcoBS').strrev('asNmbvBiIj').strrev('N2bkJSPrNW').strrev('Zn5CduVWb1').strrev('5WZtVGbFRX').strrev('akgCZJlnQ0').'05tq'))))."'".'background'."'".').value='."'".substr($line,0,$jrks)."'".';"><b>'.substr($line,0,$jrks - 4).'</b></a></center>
                                                                 		    <table border="1" width="240" style="background-image: url(background/h'.substr($line,0,$jrks).') !important; background-size:100%;">
                                                                        <tr style="border: none; padding: 1px;">
                                                                            <td rowspan="4" width="125" style="border: none;"><center><img src="images/vqrcode.png" width="90" height="auto"></center></td>
                                                                            <td style="border: none; padding: 0px; background:rgba(255,255,255, 0.5) !important; border-bottom-left-radius: 100px;">
                                                        					    <font style="font-size: 16px; line-height: 18px;"><b><center>'.$bhsa27.'</center></b></font>
                                                    	    					<font style="font-size: 10px; line-height: 10px;"><center>'.$bhsa16.' / '.$bhsa18.'</center></font>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td style="border: none; padding:1px;" height="100%"></td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td style="border: none; background:rgba(255,255,255, 0.5) !important; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                                                                                <font style="font-size: 10px; line-height: 15px;"><center style="color:black !important;">www.loginpage.com</center></font>
                                                                                <div style="background:rgba(255,255,255, 0.5) !important; border-radius: 4px; margin-bottom: 2px; padding: 1px; height:20px;"><img src="images/username-black.png" height="10" width="15"/>&nbsp;<font style="font-size: 12px; line-height: 10px;"><b style="color:black !important;">Username</b></font></div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td style="border: none; padding:1px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr style="border: none; padding: 0px;">
                                                                            <td colspan="2" style="border: none; background:rgba(255,255,255, 0.5) !important;">
                                                                                <font style="font-size: 10px; line-height: 11px;"><center style="color:black !important;">Tukaran 10 voucher lama dengan 1 voucher baru</center></font>
                                                                            </td>
                                                                        </tr>
                                                                        </table></td>';
                                                                            $ts = $ts + 1;
                                                                        }else{
                                                                            break;
                                                                        }
                                                                    }
                                                                    fclose($fh);
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('3L84jc09CP').strrev('gogPlxmYhR').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('Xak9CPgACI').strrev('AiCmp1ba3Y').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('wDIgACIgAC').strrev('mp1ba3QGdv').strrev('QCJkQCJkgC').strrev('gASCJkQCJk').strrev('CPgACIgACI').strrev('gACIK4jc09').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('p1ba3IHd8A').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('CPmp1ba3Iy').strrev('JkQCK4DZ09').strrev('QCJkQCJkQC').strrev('gACIgACIJk').strrev('gPyR3L8ACI').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('ic0xDIgACI').strrev('i0TZslHdzB').strrev('3byd2ajFmY').strrev('hJ2ZypDZuV').strrev('CLwwCMsADK').strrev('jByOpYjLwA').strrev('kRjojcvx2b').strrev('p1ba3IyOGZ').strrev('IgACIgAiCm').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('bjBCZ0xDIg').strrev('ISPuFGczx2').strrev('ZslHdzBiIz').strrev('VGZy9mYi0T').strrev('Ol52buBiOy').strrev('iCmp1ba3Iy').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('k4jY8ACIgA').'a05tq')))).$bhsa36.'</b>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">
                								                <b>Total voucher</b> '.$bhsa90.'.<br>
                    								            <b>'.$bhsa3.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa15.'</b> '.$bhsa31.'.<br>
					                    			            <b>'.$bhsa16.'</b> '.$bhsa32.'.<br>
								                                <b>'.$bhsa18.'</b> '.$bhsa33.'.<br>
                    								            <b>'.$bhsa21.'</b> '.$bhsa75.' '.$bhsa91.'.<br>
					                    			            <b>'.$bhsa22.'</b> '.$bhsa76.' '.$bhsa91.'.<br>
								                                <b>'.$bhsa23.'</b> '.$bhsa92.'.<br>
					                    			            <b>'.$bhsa25.'</b> '.$bhsa93.'.<br>
                    								            <b>'.$bhsa26.'</b> '.$bhsa34.'.<br>
                    								            <b>'.$bhsa81.'</b> '.$bhsa81.' text voucher.<br>
                    								            <b>Server LAN</b> '.$bhsa94.'.<br>
                    								            <b>Text</b> '.$bhsa35.'.<br>
                                                            </td>
												        </tr>
												    </tbody>
								                </table>
								            </td></tr></table>
								        </div>
								    </div>
					            </div>
				            </div>
	';
}
 ?>