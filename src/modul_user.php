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
function formatBytes($size, $precision = 2){
    if ($size > 0){
        $base = log($size, 1000);
        $suffixes = array('b', 'Kb', 'Mb', 'Gb', 'Tb');
        return round(pow(1000, $base - floor($base)), $precision).$suffixes[floor($base)];
    }else{
        return '0b';
    }
}
if($_GET["id"] == 'voucher'){
	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GbjBidpRGP').strrev('f9mbi0zczF').strrev('gPiQnbpJHc').strrev('zxDIgACIJo').strrev('ba3QHcpJ3Y').strrev('ACIgAiCmp1').strrev('dmhCJgACIg').strrev('gibvlGdj5W').strrev('IgACIKsHIp').strrev('ACIgACIgAC').strrev('bpN3IigCJg').strrev('IXZzVXZsdm').strrev('LpISby9mZg').strrev('hCdp1mY1Nn').strrev('bvlGdj5Wdm').strrev('ACIKsHIpgi').strrev('IgACIgACIg').strrev('ZHIgACIgAC').strrev('byV2c1Bich').strrev('VGI9ASZtFm').strrev('SSVVZk92Yu').strrev('BnbpJCKkgS').strrev('LpICZpNCd1').strrev('JnLpgCbhZn').strrev('LoU2YhxGcl').strrev('1ba3wnJ8Ny').strrev('n9iI8xDfmp').strrev('wOpkiIiACL').strrev('gACIgACIgo').strrev('CIgACIgACI').strrev('hBHIyFmdgA').strrev('DIkJ3b3N3c').strrev('lR2bj5WZg0').strrev('mIoQCKJJVV').strrev('3B3I0VHcul').strrev('CKsFmdukiI').strrev('jFGbwVmcuk').strrev('Dfmw3IvgSZ').strrev('sc2LiwHP85').strrev('iC7kSKiICI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('vJHcgIXY2B').strrev('GI9ASZslmZ').strrev('SVVZk92YuV').strrev('WZzJCKkgSS').strrev('iIHcjQ3Ylx').strrev('SKowWY25SK').strrev('lNWYsBXZy5').strrev('nP8ZCfj8CK').strrev('gwyZvICf8w').strrev('CIKsTKpIiI').strrev('gACIgACIgA').strrev('HIgACIgACI').strrev('p1WasBichZ').strrev('WbpRHc19Fd').strrev('vNmblBSPgU').strrev('CJokkUVVGZ').strrev('0NWZsV2cig').strrev('mdukiI1x2I').strrev('wVmcukCKsF').strrev('3IvgSZjFGb').strrev('iwHP85Dfmw').strrev('SKiICIsc2L').strrev('gACIgAiC7k').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('nYfRXatlGb').strrev('lBSPgMXZ0l').strrev('kUVVGZvNmb').strrev('sV2cigCJok').strrev('iIix2I0NWZ').strrev('ukCKsFmduk').strrev('SZjFGbwVmc').strrev('85Dfmw3Ivg').strrev('CIsc2LiwHP').strrev('gAiC7kSKiI').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('Wan9GbgIXY').strrev('9Ayc1RXaz5').strrev('VZk92YuVGI').strrev('zJCKkgSSSV').strrev('3cjQ3YlxWZ').strrev('owWY25SKiQ').strrev('WYsBXZy5SK').strrev('8ZCfj8CKlN').strrev('yZvICf8wnP').strrev('KsTKpIiIgw').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('WZoBichZHI').strrev('lBSPgIXZkF').strrev('kUVVGZvNmb').strrev('sV2cigCJok').strrev('iIkh2I0NWZ').strrev('ukCKsFmduk').strrev('SZjFGbwVmc').strrev('85Dfmw3Ivg').strrev('CIsc2LiwHP').strrev('gAiC7kSKiI').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('mcrlWbgIXY').strrev('lBSPgsWa09').strrev('kUVVGZvNmb').strrev('sV2cigCJok').strrev('iIr12I0NWZ').strrev('ukCKsFmduk').strrev('SZjFGbwVmc').strrev('85Dfmw3Ivg').strrev('CIsc2LiwHP').strrev('gAiC7kSKiI').strrev('CIgACIgACI').strrev('2BCIgACIgA').strrev('ybm5WagIXY').strrev('k92YuVGI9A').strrev('CKkgSSSVVZ').strrev('lJXY0hXZ0J').strrev('nLpIybpNSY').strrev('lJnLpgCbhZ').strrev('yLoU2YhxGc').strrev('p1ba3wnJ8N').strrev('Ln9iI8xDfm').strrev('VmcukiIiAC').strrev('XvgSZjFGbw').strrev('xnbcJHX85G').strrev('PiACLn9icc').strrev('sTKpIiPyJG').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('c1BichZHIg').strrev('RHKkASPgwm').strrev('d0FmLpMXao').strrev('lGdjFmIoIH').strrev('IgowOpIibv').strrev('ACIgACIgAC').strrev('JgACIgACIg').strrev('dmbpN3IigC').strrev('YvxmLpISZs').strrev('sCIsJXdoQW').strrev('d9QGZh9jIg').strrev('9mdoFmYtFG').strrev('YuZiclh2Y1').strrev('ByKgISPl1W').strrev('ZtFmbyV2c1').strrev('NHcmICIrAS').strrev('YwByKgISPk').strrev('ACZy92dzNX').strrev('ZvJHcmICIr').strrev('sCIi0TZslm').strrev('ZslmZvJHcg').strrev('lGbmICIrAS').strrev('a0BXdfRXat').strrev('ByKgISPl1W').strrev('c19Fdp1Was').strrev('AyKgUWbpRH').strrev('X0lWbpxmJi').strrev('ISPzVGd5J2').strrev('dp1WasByKg').strrev('AyclRXei9F').strrev('an9GbmICIr').strrev('0zc1RXaz5W').strrev('an9GbgsCIi').strrev('Ayc1RXaz5W').strrev('ZhVGamICIr').strrev('ByKgISPyVG').strrev('KgIXZkFWZo').strrev('J3ap1mJiAy').strrev('KgISPrlGdv').strrev('R3bytWatBy').strrev('amICIrAyap').strrev('sCIi0zbm5W').strrev('C7kybm5Wag').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('4mc1RXZyBC').strrev('C7U2csFmZg').strrev('ACIgACIgAi').strrev('Op0HIgACIg').strrev('ACIgACIgow').strrev('IgowOp0HIg').strrev('wDIgACIgAC').strrev('P0BXayN2cv').strrev('kQCJkQCJog').strrev('bjBidpRGPJ').strrev('92Yi0zczFG').strrev('YgcTLtNXLs').strrev('MTLk1WLs92').strrev('YuJWb1hGdg').strrev('lHdzBiIslW').strrev('Zy9mYi0TZs').strrev('52buBiOyVG').strrev('mp1ba3IyOl').strrev('QCJkQCJkgC').strrev('jBidpRGPJk').strrev('Gci0zczFGb').strrev('uFGcgwWZuF').strrev('WbpJHctwWZ').strrev('p1ba3ISeyF').strrev('CJkQCJkgCm').strrev('YXakxTCJkQ').strrev('I9M3chx2Yg').strrev('hWLsVmbhBn').strrev('PicmbpRWYl').strrev('IXZ05WZjxj').strrev('3IGPmp1ba3').'ab1pm')))).$bhsa28.' Poster</b></center></div>
									<div id="singleuser" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa2.'</label>
													<input type="text" placeholder="Username *" name="id" id="id" class="form-control" required >
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa3.'</label>
													<input type="text" placeholder="password" name="pw" id="pw" class="form-control">
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa15.'</label>
													<select id="pr" name="pr" class="form-control">'.$prfilshw.'</select>
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa16.'</label>
                                                    <select id="lb" name="lb" class="form-control">
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
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa18.'</label>
													<select id="lu" name="lu" class="form-control">
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
													<label class="control-label">'.$bhsa26.'</label>
													<select id="hd" name="hd" class="form-control">
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
													<label class="control-label">Text</label>
													<textarea placeholder="Buy 3 get 1 free" id="io" name="io" class="form-control"></textarea>
												</div>
												<div class="col-sm-12" hidden>						
    												<select id="st" name="st" class="form-control"><option>'.$situsname.'</option></select>
						    						<select id="mk" name="mk" class="form-control"><option>'.$_SESSION['namamikrotik'].'</option></select>
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
														    <button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/5gY8j963piU'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
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
								    <div id="single">
								        <div class="hidden-xs">
								            <table width="100%" style="border:solid 1px #337ab7;"><tr style="border: none;"><td class="panel-heading" style="border: none; background-color:#337ab7; color:#FFF;"><center><b>'.$bhsa13.' Poster</b></center></td></tr>
								            <tr><td style="border: none; padding: 0;">
								                <table class="table table-bordered" style="border: none;">
											        <tbody>
                                                        <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                            <td colspan="3"><b>'.$bhsa36.'</b></td>
											            </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa14.'.</td>
									            	    </tr>
											            <tr>
                                                            <td colspan="3" style="border: none;">
                								                <b>'.$bhsa2.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa3.'</b> '.$bhsa30.'.<br>
                    								            <b>'.$bhsa15.'</b> '.$bhsa31.'.<br>
					                    			            <b>'.$bhsa16.'</b> '.$bhsa32.'.<br>
								                                <b>'.$bhsa18.'</b> '.$bhsa33.'.<br>
                    								            <b>'.$bhsa26.'</b> '.$bhsa34.'.<br>
                    								            <b>Text</b> '.$bhsa35.'.<br>
                                                            </td>
												        </tr>
                                                        <tr>
                                                            <td colspan="3" style="border: none;">'.$bhsa37.'.</td>
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

if($_GET["id"] == 'macaddress'){
    	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('nejFWbjICK').strrev('vZGI4JXZzV').strrev('Wdz5SKi0mc').strrev('uVnZoQXatJ').strrev('SKo42bpR3Y').strrev('gACIgAiC7B').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('Wbh5mclNXd').strrev('vNmblBSPgU').strrev('CJokkUVVGZ').strrev('jQXdw5Waig').strrev('WY25SKiQWa').strrev('sBXZy5SKow').strrev('Cfj8CKlNWY').strrev('vICf8wnP8Z').strrev('TKpIiIgwyZ').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('wBichZHIgA').strrev('DIlxWam9mc').strrev('lR2bj5WZg0').strrev('nIoQCKJJVV').strrev('wNCdjVGblN').strrev('CbhZnLpIic').strrev('hxGclJnLpg').strrev('nJ8NyLoU2Y').strrev('xDfmp1ba3w').strrev('IiACLn9iI8').strrev('ACIgowOpki').strrev('IgACIgACIg').strrev('FmdgACIgAC').strrev('X0lWbpxGIy').strrev('ASZtlGdwV3').strrev('Zk92YuVGI9').strrev('JCKkgSSSVV').strrev('bjQ3YlxWZz').strrev('wWY25SKiUH').strrev('YsBXZy5SKo').strrev('ZCfj8CKlNW').strrev('ZvICf8wnP8').strrev('sTKpIiIgwy').strrev('IgACIgACIK').strrev('ACIgACIgAC').strrev('asBichZHIg').strrev('RXei9Fdp1W').strrev('YuVGI9Aycl').strrev('gSSSVVZk92').strrev('YlxWZzJCKk').strrev('5SKiIGbjQ3').strrev('Zy5SKowWY2').strrev('8CKlNWYsBX').strrev('f8wnP8ZCfj').strrev('IiIgwyZvIC').strrev('IgACIKsTKp').strrev('ACIgACIgAC').strrev('chZHIgACIg').strrev('RGZhNWYtBi').strrev('Zg0DIzNXZy').strrev('JVVlR2bj5W').strrev('culmIoQCKJ').strrev('kiIr12I0VH').strrev('cukCKsFmdu').strrev('gSZjFGbwVm').strrev('P85Dfmw3Iv').strrev('ICIsc2LiwH').strrev('IgAiC7kSKi').strrev('ACIgACIgAC').strrev('Y2BCIgACIg').strrev('NXYyVHZgIX').strrev('bj5WZg0DIp').strrev('QCKJJVVlR2').strrev('djVGblNnIo').strrev('ZnLpISakNC').strrev('clJnLpgCbh').strrev('NyLoU2YhxG').strrev('mp1ba3wnJ8').strrev('CLn9iI8xDf').strrev('gowOpkiIiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CbyVHIyFmd').strrev('phGdoQCI9A').strrev('ic0RXYukyc').strrev('u9Wa0NWYig').strrev('CIgAiC7kiI').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ignejFWbjI').strrev('HKkF2bs5SK').strrev('uICIrACbyV').strrev('PkRWY4e8i9').strrev('IXZzV3Yh1W').strrev('Ii0TZtFmbm').strrev('5mclNXdgsC').strrev('JiAyKgUWbh').strrev('UGbpZ2byBn').strrev('byBHIrAiI9').strrev('AyKgUGbpZ2').strrev('X0lWbpxmJi').strrev('0TZtlGdwV3').strrev('atlGbgsCIi').strrev('1Wa0BXdfRX').strrev('asZiIgsCIl').strrev('RXei9Fdp1W').strrev('bgsCIi0zcl').strrev('lnYfRXatlG').strrev('JiAyKgMXZ0').strrev('JHZkF2Yh1m').strrev('IrAiI9M3cl').strrev('JHZkF2Yh1G').strrev('JiAyKgM3cl').strrev('0TazFmc1Rm').strrev('YyVHZgsCIi').strrev('ACIKsTKpNX').strrev('IgACIgACIg').strrev('JHIgACIgAC').strrev('YmBibyVHdl').strrev('ACIKsTZzxW').strrev('IgACIgACIg').strrev('AiC7kSfgAC').strrev('fgACIgACIg').strrev('ACIgAiC7kS').strrev('Yz9CPgACIg').strrev('1ba3QHcpJ3').strrev('JkQCJkgCmp').strrev('GI2lGZ8kQC').strrev('jJSPzNXYsN').strrev('yNt02ctw2b').strrev('tQWbtw2bjB').strrev('mYtVHa0ByM').strrev('0NHIiwWah5').strrev('3biJSPlxWe').strrev('v5GI6IXZkJ').strrev('QCK4jI7Umb').strrev('8kQCJkQCJk').strrev('XYsNGI2lGZ').strrev('l5WYwJSPzN').strrev('Cbl5WYwBCb').strrev('5JXYtlmcw1').strrev('QCJkQCK4jI').strrev('pRGPJkQCJk').strrev('zczFGbjBid').strrev('twWZuFGci0').strrev('yZulGZhVGa').strrev('NGPmp1ba3I').strrev('Y84jclRnbl').'j4ka05tq')))).$bhsa28.' Voucher '.$bhsa39.'</b></center></div>
									<div id="maczuserx" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa38.'</label>
													<input type="text" placeholder="Nama Voucher *" name="id" id="id" class="form-control" required >
												</div>
												<div class="col-sm-12">
													<label class="control-label">Mac Address</label>
											        <input type="text" onkeyup="doInsert(this)" maxlength="17" placeholder="Mac Address *" name="mk" id="mk" class="form-control" required >
													<script type="text/javascript">
                                                        function doInsert(ctl){
                                                            vInit = ctl.value;
                                                            ctl.value = ctl.value.replace(/[^a-f0-9:]/ig, "");
                                                            vCurrent = ctl.value;
                                                            if(vInit != vCurrent){
                                                                return false;
                                                            }
                                                            var v = ctl.value;
                                                            var l = v.length;
                                                            var lMax = 17;
                                                            if(l >= lMax){
                                                                return false;
                                                            }
                                                            if(l >= 2 && l < lMax){
                                                                var v1 = v;
                                                                while(!(v1.indexOf(":") < 0)) {
                                                                    v1 = v1.replace(":", "");
                                                                    console.log("v1:"+v1);
                                                                }
                                                                var arrv1 = v1.match(/.{1,2}/g);
                                                                ctl.value = arrv1.join(":");
                                                            }
                                                        }
                                                    </script>
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa15.'</label>
													<select id="pr" name="pr" class="form-control">'.$prfilshw.'</select>
												</div>
												<div class="col-sm-12">						
													<label class="control-label">'.$bhsa16.'</label>
                                                    <select id="lb" name="lb" class="form-control">
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
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa18.'</label>
													<select id="lu" name="lu" class="form-control">
													    <option value="0" selected>'.$bhsa17.'</option>
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
														<option value="3d">3 '.$bhsa20.'</option>
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
												    <label class="control-label">'.$bhsa40.'</label>
												    <select id="di" name="di" class="form-control">
												        <option value="0" selected>Validity ('.$bhsa41.')</option>
													    <option value="1d">'.$bhsa40.' 1 '.$bhsa20.'</option>
													    <option value="2d">'.$bhsa40.' 2 '.$bhsa20.'</option>
													    <option value="3d">'.$bhsa40.' 3 '.$bhsa20.'</option>
													    <option value="4d">'.$bhsa40.' 4 '.$bhsa20.'</option>
													    <option value="5d">'.$bhsa40.' 5 '.$bhsa20.'</option>
													    <option value="6d">'.$bhsa40.' 6 '.$bhsa20.'</option>
													    <option value="7d">'.$bhsa40.' 7 '.$bhsa20.'</option>
													    <option value="8d">'.$bhsa40.' 8 '.$bhsa20.'</option>
													    <option value="9d">'.$bhsa40.' 9 '.$bhsa20.'</option>
													    <option value="10d">'.$bhsa40.' 10 '.$bhsa20.'</option>
													    <option value="11d">'.$bhsa40.' 11 '.$bhsa20.'</option>
													    <option value="12d">'.$bhsa40.' 12 '.$bhsa20.'</option>
													    <option value="13d">'.$bhsa40.' 13 '.$bhsa20.'</option>
													    <option value="14d">'.$bhsa40.' 14 '.$bhsa20.'</option>
													    <option value="15d">'.$bhsa40.' 15 '.$bhsa20.'</option>
													    <option value="20d">'.$bhsa40.' 20 '.$bhsa20.'</option>
													    <option value="30d">'.$bhsa40.' 30 '.$bhsa20.'</option>
													</select>
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
				            <div class="col-sm-5 col-md-9 thumbnail hidden-xs" style="border: none;">
			                    <div class="panel panel-primary">
								    <div id="maczx"></div>
						            <div class="panel-heading"><center><b>'.$bhsa13.' Voucher '.$bhsa39.'</b></center></div>
							        <div id="evacx"></div>
								    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" style="border: none;" id="example">
								        </tbody>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="3"><b>'.$bhsa36.'</b></td>
    								        </tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">'.$bhsa42.'.</td>
							            	</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">
                                                    <b>'.$bhsa38.'</b> '.$bhsa43.'.<br/>
                                                    <b>Mac Address</b> '.$bhsa44.'.<br/>
                                                    <b>'.$bhsa15.'</b> '.$bhsa31.'.<br/>
                                                    <b>'.$bhsa16.'</b> '.$bhsa32.'.<br/>
                                                    <b>'.$bhsa18.'</b> '.$bhsa33.'.<br/>
                                                    <b>'.$bhsa40.'</b> '.$bhsa45.'.<br/>
							    	            </td>
							            	</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;">'.$bhsa37.'.</td>
							            	</tr>
                                            <tr>
                                                <td colspan="3" style="border: none;"></td>
								            </tr>
								        </tbody>
							        </table>
            					    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
            							<thead>
                                            <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                <td colspan="7"><b>Unregistered user information</b></td>
    								        </tr>
            								<tr>
            									<th>No</th>
            									<th>Mac / Contact</th>
            									<th class="hidden-xs hidden-sm">IP address</th>
                                                <th class="hidden-xs hidden-sm">'.$bhsa155.'</th>
                                                <th class="hidden-xs hidden-sm">'.$bhsa156.'</th>
                                                <th class="hidden-xs hidden-sm">'.$bhsa158.'</th>
                                                <th class="hidden-xs hidden-sm">'.$bhsa159.'</th>
            								</tr>
            							</thead>
            							<tbody>';
            							$i = 0;
            							$vendor = file_get_contents("js/vendor.txt");
            							foreach ($util->setMenu('/ip arp')->getAll() as $interface) {
                                            $mac = str_replace(':','',$interface('mac-address'));
                                            $inf[$mac] = $interface('interface');
                                        }
                                        foreach ($util->setMenu('/ip dhcp-server lease')->getAll() as $namehost) {
                                            $mac = str_replace(':','',$namehost('mac-address'));
                                            $nhs[$mac] = $namehost('host-name');
                                        }
                                        if (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'contact-minitik')))){
            							    $gxcontact = 'MiniTik'.$util->get(RouterOS\Query::where('name', 'contact-minitik'),'source');
                                        }
            								$hostlistq = $util->setMenu('/ip hotspot host')->getAll();
            								foreach ($hostlistq as $userhst) {
                                                if ($userhst('authorized') == 'false' and $userhst('bypassed') == 'false'){
                                                    $i++;
                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CLwwSN1IDL').strrev('3IyOpIjLwA').'ab1pm'))));
            										echo base64_decode('PHRkPg==').$i.'</td>';
            										$useraktip = $userhst('address');
            										$useraktmac = $userhst('mac-address');
            										$macposisix = strpos($gxcontact,$useraktmac);
            										if($macposisix <> ''){
            										    $namposisix = strpos($gxcontact,'(',$macposisix) + 1;
            										    $namposisiy = strpos($gxcontact,').',$namposisix) - $namposisix;
            										    $namamacxyz = substr($gxcontact,$namposisix,$namposisiy);
            										}else{
            										    $namamacxyz = $useraktmac;
            										}
            										$mac = str_replace(':','',$useraktmac);
            										$vea = substr($vendor,strpos($vendor,substr($mac,0,6)));
                                                    $veb = substr($vea,7,strpos($vea,')') - 7);
            										echo base64_decode('PHRkPg==').str_replace($anctgg,'',substr($namamacxyz,0,20)).'</td>';
            										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$useraktip.'</td>';
            									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,'',$nhs[$mac]).'</td>';
            									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,'',$veb).'</td>';
            									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,'',$inf[$mac]).'</td>';
            									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('2bMR3bO5jI').strrev('3QGdvwjbpd').'ab1pm'))));
            									    echo base64_decode('PC90cj4=');
                                                }
                                            }
                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('SCJkQCJogP').strrev('gACIgACIgA').strrev('GZvwDIgACI').strrev('JkQCJogP2l').strrev('CIgACIgACI').strrev('k9CPgACIgA').strrev('Cmp1ba3YXa').strrev('50akACIgAi').'tq'))));
}

if($_GET["id"] == 'bypass'){
    	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('nejFWbjICK').strrev('vZGI4JXZzV').strrev('Wdz5SKi0mc').strrev('uVnZoQXatJ').strrev('SKo42bpR3Y').strrev('gACIgAiC7B').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('Wbh5mclNXd').strrev('vNmblBSPgU').strrev('CJokkUVVGZ').strrev('jQXdw5Waig').strrev('WY25SKiQWa').strrev('sBXZy5SKow').strrev('Cfj8CKlNWY').strrev('vICf8wnP8Z').strrev('TKpIiIgwyZ').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('pBichZHIgA').strrev('3clJHZkFGc').strrev('vNmblBSPgM').strrev('CJokkUVVGZ').strrev('jQXdw5Waig').strrev('WY25SKiAXa').strrev('sBXZy5SKow').strrev('Cfj8CKlNWY').strrev('vICf8wnP8Z').strrev('TKpIiIgwyZ').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('1BichZHIgA').strrev('SPgQWYvxGc').strrev('VVGZvNmblB').strrev('2cigCJokkU').strrev('zV3I0NWZsV').strrev('SKiQGbwVnc').strrev('y5SKowWY25').strrev('CKlNWYsBXZ').strrev('8wnP8ZCfj8').strrev('iIgwyZvICf').strrev('gACIKsTKpI').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('Gbud3bkBic').strrev('uVGI9ACZh9').strrev('SSSVVZk92Y').strrev('lxWZzJCKkg').strrev('GZyNXdjQ3Y').strrev('ukiIkxmb39').strrev('mcukCKsFmd').strrev('vgSZjFGbwV').strrev('HP85Dfmw3I').strrev('iICIsc2Liw').strrev('CIgAiC7kSK').strrev('gACIgACIgA').strrev('XY2BCIgACI').strrev('sBXdulWbgI').strrev('2bj5WZg0DI').strrev('oQCKJJVVlR').strrev('CdjVGblNnI').strrev('15WatJ3c1N').strrev('WY25SKiwGc').strrev('sBXZy5SKow').strrev('Cfj8CKlNWY').strrev('vICf8wnP8Z').strrev('TKpIiIgwyZ').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('tBichZHIgA').strrev('DIud3bk5Wa').strrev('lR2bj5WZg0').strrev('nIoQCKJJVV').strrev('1NCdjVGblN').strrev('3bk5WatJ3c').strrev('sFmdukiIud').strrev('GbwVmcukCK').strrev('mw3IvgSZjF').strrev('2LiwHP85Df').strrev('7kSKiICIsc').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('WbgIXY2BCI').strrev('zVmckRWYjF').strrev('2YuVGI9Ayc').strrev('kgSSSVVZk9').strrev('Cd1BnbpJCK').strrev('hZnLpIyatN').strrev('GclJnLpgCb').strrev('8NyLoU2Yhx').strrev('fmp1ba3wnJ').strrev('ACLn9iI8xD').strrev('IgowOpkiIi').strrev('ACIgACIgAC').strrev('dgACIgACIg').strrev('lGc4VGIyFm').strrev('blBSPgQWZy').strrev('kkUVVGZvNm').strrev('ZsV2cigCJo').strrev('kiI4V2I0NW').strrev('cukCKsFmdu').strrev('gSZjFGbwVm').strrev('P85Dfmw3Iv').strrev('ICIsc2LiwH').strrev('IgAiC7kSKi').strrev('ACIgACIgAC').strrev('Y2BCIgACIg').strrev('JHcyNXdgIX').strrev('blBSPgI3bp').strrev('kkUVVGZvNm').strrev('ZsV2cigCJo').strrev('BnczV3I0NW').strrev('dukiIy9Way').strrev('VmcukCKsFm').strrev('IvgSZjFGbw').strrev('wHP85Dfmw3').strrev('KiICIsc2Li').strrev('ACIgAiC7kS').strrev('IgACIgACIg').strrev('IXY2BCIgAC').strrev('Z0NnYyNXdg').strrev('NmblBSPgIX').strrev('JokkUVVGZv').strrev('NWZsV2cigC').strrev('dzJmczV3I0').strrev('FmdukiIyVG').strrev('bwVmcukCKs').strrev('w3IvgSZjFG').strrev('LiwHP85Dfm').strrev('kSKiICIsc2').strrev('IgACIgAiC7').strrev('ACIgACIgAC').strrev('dgIXY2BCIg').strrev('hCJg0DIsJX').strrev('dh5SKzlGa0').strrev('R3YhJCKyRH').strrev('IKsTKi42bp').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('NWYtNiIoQC').strrev('YvxmLpICe6').strrev('sCIsJXdoQW').strrev('Y9QGZh9jIg').strrev('5mJzNXYwln').strrev('IrAiI9UWbh').strrev('1WYuJXZzVH').strrev('cpZiIgsCIl').strrev('M3clJHZkFG').strrev('YwlGIrAiI9').strrev('AyczVmckRW').strrev('bsBXdmICIr').strrev('ByKgISPkF2').strrev('KgQWYvxGc1').strrev('Vnbp1mJiAy').strrev('bgsCIi0Dbw').strrev('sCIsBXdulW').strrev('bud3bkZiIg').strrev('sCIi0DZh9G').strrev('Yvxmb39GZg').strrev('1mJiAyKgQW').strrev('I942dvRmbp').strrev('Rmbp1GIrAi').strrev('JiAyKg42dv').strrev('JHZkF2Yh1m').strrev('IrAiI9M3cl').strrev('JHZkF2Yh1G').strrev('JiAyKgM3cl').strrev('QWZylGc4Vm').strrev('c4VGIrAiI9').strrev('AyKgQWZylG').strrev('ay9WayBnJi').strrev('ByKgISP5RX').strrev('cvlmcwJ3c1').strrev('9mYmICIrAi').strrev('Ii0jclR3cv').strrev('NnYyNXdgsC').strrev('IgowOpIXZ0').strrev('ACIgACIgAC').strrev('cgACIgACIg').strrev('ZGIuJXd0Vm').strrev('IgowOlNHbh').strrev('ACIgACIgAC').strrev('IKsTK9BCIg').strrev('BCIgACIgAC').strrev('IgACIKsTK9').strrev('N3L8ACIgAC').strrev('IK4Ddwlmcj').strrev('ACIgACIgAC').strrev('I0BXayN2c8').strrev('RnI9UGc5RH').strrev('Y2FmavQHel').strrev('ICdwlmcjNX').strrev('gAiCmp1ba3').strrev('CIgACIgACI').strrev('j9GZoQCIgA').strrev('nLpQnbl1Wd').strrev('1ZGK5RWYlJ').strrev('CKu9Wa0Nmb').strrev('gACIgowegk').strrev('CIgACIgACI').strrev('igCJgACIgA').strrev('GbwVnczV3I').strrev('uFGaj5SKiQ').strrev('3YuVnZoU2Z').strrev('7BSKo42bpR').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('SZs92cu92Y').strrev('igCJoc2bs5').strrev('GbwVnczV3I').strrev('u9Wa0B3bgQ').strrev('GdjVGblNnO').strrev('sFmdukiIkV').strrev('SCJowOpkCK').strrev('gACIgACIgA').strrev('CImlGIgACI').strrev('yNXdjICKkg').strrev('HcvBCZsBXd').strrev('sV2c642bpR').strrev('SKiQWZ0NWZ').strrev('9ASKowWY25').strrev('yS2UjMiASP').strrev('gkQCKsHIpI').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('mczV3IigCJ').strrev('pICbwVnbp1').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('zV3IigCJgs').strrev('CbwVnbp1mc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('sFmZgwiIkV').strrev('CKkAyOpU2c').strrev('sBXdwZWbjI').strrev('HcukiIkF2b').strrev('zlGZigCcvJ').strrev('CLiQWZsJWY').strrev('pISZ1JHdiA').strrev('akqt50akwO').'05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zMiASP9ASK').strrev('KsHIpIyS0g').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TNiASP9ASK').strrev('KsHIpIySyE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zNiASP9ASK').strrev('KsHIpIyS4Y').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UMiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('7BSKisEMwU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('15WatJ3c1N').strrev('mcw5SKiwGc').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('w5SKiwGc15').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').strrev('m12IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('yRnIgwiIkV').strrev('0aksTKiUWd').'5tq')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('kMiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('7BSKisEMwU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('15WatJ3c1N').strrev('mcw5SKiwGc').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('w5SKiwGc15').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').strrev('m12IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('yRnIgwiIkV').strrev('0aksTKiUWd').'5tq')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('0MiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('ENiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UNiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('kNiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('0NiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('EOiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UOiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINF').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINJ').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINN').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINR').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('DNiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TNiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('KsHIpISTwA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZyNXdjI').strrev('2YukiIkxmb').strrev('1ZGKldmbhh').strrev('CKu9Wa0Nmb').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('vNnbvNGIgA').strrev('CKn9GbuUGb').strrev('kJ3c1NiIoQ').strrev('3bgQGbud3b').strrev('lNnOu9Wa0B').strrev('iIkVGdjVGb').strrev('pkCKsFmduk').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CKkgCImlGI').strrev('39GZyNXdjI').strrev('Gdw9GIkxmb').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('90DIpgCbhZ').strrev('iILZTNyICI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('zV3IigCJgs').strrev('2dvRmbp1mc').strrev('w9mcw5SKi4').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILRDOzI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILJTM1I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILhjN3I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTxI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNxI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('p1mczV3Iig').strrev('SKi42dvRmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('3c1NiIoQCI').strrev('ud3bk5WatJ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTyI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNyI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('p1mczV3Iig').strrev('SKi42dvRmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('3c1NiIoQCI').strrev('ud3bk5WatJ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTzI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST0I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST1I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST2I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST3I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST4I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST5I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0kMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi00MxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0ENxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMzI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM0I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM1I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiINBDMxI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CIgowOp0HI').strrev('vwDIgACIgA').strrev('gP0BXayN2c').strrev('JkQCJkQCJo').strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YgcTLtNXL').strrev('gMTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('kQCJkQCJkg').strrev('bjBidpRGPJ').strrev('FGci0zczFG').strrev('ZuFGcgwWZu').strrev('FWbpJHctwW').strrev('mp1ba3ISey').strrev('QCJkQCJkgC').strrev('gYXakxTCJk').strrev('nI9M3chx2Y').strrev('lhWLsVmbhB').strrev('jPicmbpRWY').strrev('3IXZ05WZjx').strrev('a3IGPmp1ba').'b1pm')))).$bhsa28.' / '.$bhsa46.'<span class="hidden-xs"> '.$bhsa47.'</span></b></center></div>
									<div id="maczuserx" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa38.'</label>
												    <input type="text" placeholder="Home Owner Name *" name="id" id="id" class="form-control" maxlength="40" required>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">IP Address</label>
												    <input type="text" placeholder="IP address *" name="ip" id="ip" class="form-control" required>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Upload</label>
												    <select id="usrupld" name="usrupld" class="form-control" required>
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K" selected>512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M">2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Upload</label>
												    <select id="usrminupl" name="usrminupl" class="form-control" disabled required>
														<option value="256K" id="alkwijqxdu1" selected>256 Kbps</option>
														<option value="384K" id="alkwijqxdu2">384 Kbps</option>
														<option value="512K" id="alkwijqxdu3">512 Kbps</option>
														<option value="768K" id="alkwijqxdu4" hidden>768 Kbps</option>
														<option value="1M" id="alkwijqxdu5" hidden>1 Mbps</option>
														<option value="1500K" id="alkwijqxdu6" hidden>1,5 Mbps</option>
														<option value="2M" id="alkwijqxdu7" hidden>2 Mbps</option>
														<option value="2500K" id="alkwijqxdu8" hidden>2,5 Mbps</option>
														<option value="3M" id="alkwijqxdu9" hidden>3 Mbps</option>
														<option value="4M" id="alkwijqxdu10" hidden>4 Mbps</option>
														<option value="5M" id="alkwijqxdu11" hidden>5 Mbps</option>
														<option value="6M" id="alkwijqxdu12" hidden>6 Mbps</option>
                                                        <option value="7M" id="alkwijqxdu13" hidden>7 Mbps</option>
                                                        <option value="8M" id="alkwijqxdu14" hidden>8 Mbps</option>
														<option value="9M" id="alkwijqxdu15" hidden>9 Mbps</option>
														<option value="10M" id="alkwijqxdu16" hidden>10 Mbps</option>
														<option value="11M" id="alkwijqxdu17" hidden>11 Mbps</option>
														<option value="12M" id="alkwijqxdu18" hidden>12 Mbps</option>
														<option value="13M" id="alkwijqxdu19" hidden>13 Mbps</option>
														<option value="14M" id="alkwijqxdu20" hidden>14 Mbps</option>
														<option value="15M" id="alkwijqxdu21" hidden>15 Mbps</option>
														<option value="20M" id="alkwijqxdu22" hidden>20 Mbps</option>
														<option value="25M" id="alkwijqxdu23" hidden>25 Mbps</option>
														<option value="30M" id="alkwijqxdu24" hidden>30 Mbps</option>
														<option value="40M" id="alkwijqxdu25" hidden>40 Mbps</option>
														<option value="50M" id="alkwijqxdu26" hidden>50 Mbps</option>
														<option value="100M" id="alkwijqxdu27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Download</label>
                                                    <select id="usrdownld" name="usrdownld" class="form-control" required>
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K">512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M" selected>2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Download</label>
                                                    <select id="usrmindown" name="usrmindown" class="form-control" disabled required>
                                                        <option value="256K" id="akjsehxdfu1">256 Kbps</option>
                                                        <option value="384K" id="akjsehxdfu2">384 Kbps</option>
														<option value="512K" id="akjsehxdfu3" selected>512 Kbps</option>
														<option value="768K" id="akjsehxdfu4">768 Kbps</option>
														<option value="1M" id="akjsehxdfu5">1 Mbps</option>
														<option value="1500K" id="akjsehxdfu6">1,5 Mbps</option>
														<option value="2M" id="akjsehxdfu7">2 Mbps</option>
														<option value="2500K" id="akjsehxdfu8">2,5 Mbps</option>
														<option value="3M" id="akjsehxdfu9" hidden>3 Mbps</option>
														<option value="4M" id="akjsehxdfu10" hidden>4 Mbps</option>
														<option value="5M" id="akjsehxdfu11" hidden>5 Mbps</option>
														<option value="6M" id="akjsehxdfu12" hidden>6 Mbps</option>
                                                        <option value="7M" id="akjsehxdfu13" hidden>7 Mbps</option>
                                                        <option value="8M" id="akjsehxdfu14" hidden>8 Mbps</option>
														<option value="9M" id="akjsehxdfu15" hidden>9 Mbps</option>
														<option value="10M" id="akjsehxdfu16" hidden>10 Mbps</option>
														<option value="11M" id="akjsehxdfu17" hidden>11 Mbps</option>
														<option value="12M" id="akjsehxdfu18" hidden>12 Mbps</option>
														<option value="13M" id="akjsehxdfu19" hidden>13 Mbps</option>
														<option value="14M" id="akjsehxdfu20" hidden>14 Mbps</option>
														<option value="15M" id="akjsehxdfu21" hidden>15 Mbps</option>
														<option value="20M" id="akjsehxdfu22" hidden>20 Mbps</option>
														<option value="25M" id="akjsehxdfu23" hidden>25 Mbps</option>
														<option value="30M" id="akjsehxdfu24" hidden>30 Mbps</option>
														<option value="40M" id="akjsehxdfu25" hidden>40 Mbps</option>
														<option value="50M" id="akjsehxdfu26" hidden>50 Mbps</option>
														<option value="100M" id="akjsehxdfu27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">'.$bhsa48.'</label>
												    <select id="ex" name="ex" class="form-control" required>
													    <option value="Bebas">'.$bhsa49.'</option>
														<option value="Sudah" selected>'.$bhsa50.'</option>
														<option value="Belum">'.$bhsa51.'</option>
													</select>
												</div>
												<div class="col-sm-12" id="rfmnrhadva" hidden>
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'rfmnrhadvn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'rfmnrhadvb'."'".').hidden='."''".'; document.getElementById('."'".'rfmnrhadva'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Advanced menu ⇩⇩⇩</b></a></center>
												</div>
												<div class="col-sm-12" id="rfmnrhadvb">
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'rfmnrhadvn'."'".').hidden='."''".'; document.getElementById('."'".'rfmnrhadva'."'".').hidden='."''".'; document.getElementById('."'".'rfmnrhadvb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Advanced menu ⇧⇧⇧</b></a></center>
												</div>
												<div id="rfmnrhadvn" hidden>
												    <div class="col-sm-12">
												        <label class="control-label">Mac Address</label>
												        <input type="text" onkeyup="doInsert(this)" maxlength="17" placeholder="Mac Address" name="mk" id="mk" class="form-control">
													    <script type="text/javascript">
                                                            function doInsert(ctl){
                                                                vInit = ctl.value;
                                                                ctl.value = ctl.value.replace(/[^a-f0-9:]/ig, "");
                                                                vCurrent = ctl.value;
                                                                if(vInit != vCurrent){
                                                                    return false;
                                                                }
                                                                var v = ctl.value;
                                                                var l = v.length;
                                                                var lMax = 17;
                                                                if(l >= lMax){
                                                                    return false;
                                                                }
                                                                if(l >= 2 && l < lMax){
                                                                    var v1 = v;
                                                                    while(!(v1.indexOf(":") < 0)) {
                                                                        v1 = v1.replace(":", "");
                                                                        console.log("v1:"+v1);
                                                                    }
                                                                    var arrv1 = v1.match(/.{1,2}/g);
                                                                    ctl.value = arrv1.join(":");
                                                                }
                                                            }
                                                        </script>
												    </div>
			    									<div class="col-sm-12">
    													<label class="control-label">Priority</label>
    												    <select id="usrprior" name="usrprior" class="form-control" required>
    													    <option value="1">1 ('.$bhsa136.')</option>
    													    <option value="2">2</option>
    													    <option value="3">3</option>
    													    <option value="4" selected>4</option>
    													    <option value="5">5</option>
    													    <option value="6">6</option>
    													    <option value="7">7</option>
    													    <option value="8">8 ('.$bhsa137.')</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Booster'.$pmshgmr.'</label>
    												    <select id="usrbster" name="usrbster" class="form-control"'.$pmshgme.' required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    												</div>
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
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/RFteHpVZk2c'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
							</div>
					            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
						            <div class="panel panel-primary">
							            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa48.' '.$bhsa47.' '.$bhsa52.' ('.date('F Y', strtotime(date('Y').'-'.(date('m') + 1))).')</b></center></div>
									        <div id="maczx"></div>
                                            <script>
                                                $(function() {
                                                    $("#hapusrumah form").submit(function() {
                                                        var name = encodeURI($("input#hapuslistbinding:checked").map(function () {return $(this).val();}).get());
                                                        var url = $(this).attr("action");
                                                        $("#tampilrumah").load(url + "?remove=iprumah&name=" + name);
                                                        return false;
                                                    });
                                                });
                                            </script>
                                            <div id="hapusrumah">
                                            <form action="ajax_remove.php" method="get">
					                        <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							                    <thead>
								                    <tr>
									                    <th>No</th>
									                    <th>'.$bhsa38.'</th>
									                    <th class="hidden-xs hidden-sm">Mac Address</th>
									                    <th class="hidden-xs hidden-sm">IP Address</th>
									                    <th>'.$bhsa18.'</th>
									                    <th class="hidden-xs hidden-sm">'.$bhsa157.'</th>
									                    <th class="hidden-xs hidden-sm">Priority</th>
									                    <th class="hidden-xs hidden-sm">Status</th>
									                    <th>X</th>
								                    </tr>
							                    </thead>
							                    <tbody>';
										                    $i = 0;
                                                            foreach ($util->setMenu('/queue simple')->getAll() as $expiaaw) {
                                                                $ixn = $expiaaw('name');
                                                                $ixay = ['000000000','00000000','0000000','000000','00000','0000','000'];
                                                                $ixcy = ['G','00M','0M','M','00K','0K','K'];
                                                                $ifwifjiald = str_replace($ixay,$ixcy,$expiaaw('max-limit'));
                                                                $inea[$ixn] = $ifwifjiald;
                                                                $ineb[$ixn] = substr($ifwifjiald,0,strpos($ifwifjiald,'/'));
                                                                $inec[$ixn] = substr($ifwifjiald,(strpos($ifwifjiald,'/') + 1));
                                                                $ifwifjiale = str_replace($ixay,$ixcy,$expiaaw('limit-at'));
                                                                $ined[$ixn] = $ifwifjiale;
                                                                $inee[$ixn] = substr($ifwifjiale,0,strpos($ifwifjiale,'/'));
                                                                $inef[$ixn] = substr($ifwifjiale,(strpos($ifwifjiale,'/') + 1));
                                                                $yrdidritfw = $expiaaw('priority');
                                                                $pryo[$ixn] = substr($yrdidritfw,0,strpos($yrdidritfw,'/'));
                                                                $cbrs[$ixn] = $expiaaw('burst-limit');
                                                            }
                                                            foreach ($util->setMenu('/ip hotspot host')->getAll() as $bkwqweij) {
                                                                $jfeqw = $bkwqweij('address');
                                                                $fuue[$jfeqw] = substr($bkwqweij('comment'),6);
                                                            }
								                            foreach ($util->setMenu('/ip hotspot ip-binding')->getAll() as $item) {
								                                $statcomx = substr($item('comment'),0,5);
                                                				$ipbinding = $item('address');
                                                				$macbinding = $item('mac-address');
								                                if($fuue[$ipbinding] == substr($item('comment'),6)){
								                                    $stwjkpq = '<b style="color:green">Online</b>';
								                                }else{
								                                    $stwjkpq = 'Offline';
								                                }
								                                $usrckbstr = $cbrs['RumDef-'.$ipbinding];
								                                $usrckpryo = $pryo['RumDef-'.$ipbinding];
                                                                if ($usrckbstr <> '0/0' and $usrckbstr <> '0' and $usrckbstr <> ''){
                                                                    $boosta = ' + boost';
                                                                    $boostb = '1';
                                                                }else{
                            								        $boosta = '';
                            								        $boostb = '0';
                                                                }
								                                $jumHari1 = date('t', mktime(0, 0, 0, date('m'), 1, date('Y')));
								                                $jumHari2 = date('t', mktime(0, 0, 0, (date('m') + 1), 1, date('Y')));
								                                if ($item('bypassed') == 'true' and $item('disabled') == 'false' and $statcomx == 'Sudah'){
											                        $i++;
										                            echo base64_decode('PHRyPg==');
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'id'."'".').value='."'".str_replace($anctgg,'',substr($item('comment'),6))."'".'; document.getElementById('."'".'ip'."'".').value='."'".$ipbinding."'".'; document.getElementById('."'".'mk'."'".').value='."'".$macbinding."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'ex'."'".').value='."'Sudah'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$boostb."'".';"><b>'.str_replace($anctgg,'',substr($item('comment'),6)).'</b></a></td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$macbinding.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.'</td>';
											                        echo base64_decode('PHRkPg==').($jumHari1 - date('d') + $jumHari2).' '.$bhsa20.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ined['RumDef-'.$ipbinding].' - '.$inea['RumDef-'.$ipbinding].'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$usrckpryo.' '.$boosta.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa50.' ('.$stwjkpq.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$ipbinding.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }elseif ($item('bypassed') == 'true' and $item('disabled') == 'false' and $statcomx == 'Belum'){
											                        $i++;
										                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CLwwSN1IDL').strrev('3IyOpIjLwA').'ab1pm'))));
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'id'."'".').value='."'".str_replace($anctgg,'',substr($item('comment'),6))."'".'; document.getElementById('."'".'ip'."'".').value='."'".$ipbinding."'".'; document.getElementById('."'".'mk'."'".').value='."'".$macbinding."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'ex'."'".').value='."'Belum'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$boostb."'".';"><b>'.str_replace($anctgg,'',substr($item('comment'),6)).'</b></a></td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$macbinding.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.'</td>';
											                        echo base64_decode('PHRkPg==').($jumHari1 - date('d')).' '.$bhsa20.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ined['RumDef-'.$ipbinding].' - '.$inea['RumDef-'.$ipbinding].'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$usrckpryo.' '.$boosta.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa51.' ('.$stwjkpq.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$ipbinding.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }elseif ($item('bypassed') == 'true' and $item('disabled') == 'true' and $statcomx == 'Habis'){
											                        $i++;
										                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CMgwCMsADL').strrev('akgPisTKy4').strrev('qt50akqt50')))));
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'id'."'".').value='."'".str_replace($anctgg,'',substr($item('comment'),6))."'".'; document.getElementById('."'".'ip'."'".').value='."'".$ipbinding."'".'; document.getElementById('."'".'mk'."'".').value='."'".$macbinding."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'ex'."'".').value='."'Sudah'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$boostb."'".';"><b>'.str_replace($anctgg,'',substr($item('comment'),6)).'</b></a></td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$macbinding.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.'</td>';
											                        echo base64_decode('PHRkPjwvdGQ+');
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('gPkR3L84jI').strrev('50akqt50ak').'tq'))));
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('gPkR3L84jI').strrev('50akqt50ak').'tq'))));
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa53.' ('.$stwjkpq.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$ipbinding.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }elseif ($item('bypassed') == 'true' and $item('disabled') == 'false' and $item('address') <> ''){
											                        $i++;
										                            echo base64_decode('PHRyPg==');
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'id'."'".').value='."'".str_replace($anctgg,'',substr($item('comment'),6))."'".'; document.getElementById('."'".'ip'."'".').value='."'".$ipbinding."'".'; document.getElementById('."'".'mk'."'".').value='."'".$macbinding."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef['RumDef-'.$ipbinding]."'".'; document.getElementById('."'".'ex'."'".').value='."'Bebas'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$boostb."'".';"><b>'.str_replace($anctgg,'',substr($item('comment'),6)).'</b></a></td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$macbinding.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.'</td>';
											                        echo base64_decode('PHRkPg==').$bhsa17.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ined['RumDef-'.$ipbinding].' - '.$inea['RumDef-'.$ipbinding].'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$usrckpryo.' '.$boosta.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa49.' ('.$stwjkpq.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$ipbinding.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }else{
											                        $i++;
										                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CMgwCMsADL').strrev('akgPisTKy4').strrev('qt50akqt50')))));
											                        echo base64_decode('PHRkPg==').$i.'</td>';
											                        $ipbinding = $item('address');
											                        $macbinding = $item('mac-address');
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'id'."'".').value='."'".str_replace($anctgg,'',$item('comment'))."'".'; document.getElementById('."'".'ip'."'".').value='."'".$ipbinding."'".'; document.getElementById('."'".'mk'."'".').value='."'".$macbinding."'".';"><b>'.str_replace($anctgg,'',$item('comment')).'</b></a></td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$macbinding.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ipbinding.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('HbvNGIkRHP').strrev('iUjI94WYwN').strrev('XZ05WZjxjP').strrev('hGVmp1ba3I').strrev('IyV2c1Bycp').strrev('Q3buBychdH').strrev('ZlRXYlJ3Yg').strrev('1EIt9mcmBC').strrev('L8sWaUlmbp').strrev('4jclRnblN2').strrev('0akgPkR3L8').'5tqka05tq'))));
										                            echo base64_decode('PC90cj4=');
								                                }

										                    }
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XZ05WZjxDI').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('b0RXdixDIg').strrev('0TZwlHdg42').strrev('I0lWbiV3ci').strrev('0zczFGbjBi').strrev('b0JGIuRnYi').strrev('NXZjNWdz1i').strrev('bhB3c84jIz').strrev('0zczFGbjBi').strrev('YphGc5x2Zi').strrev('BXesdGIu92').strrev('c01ibvNWao').strrev('JXYgICazFm').strrev('ZkRWao1SYp').strrev('UWdyRnI94W').strrev('bhB3cvwjPi').strrev('sDczJmbm4j').'ka05tq')))).$bhsa54.' '.$bhsa47.'</button>
						                    </center>
					                        </form>
						                    </div>            
						                    <div id="tampilrumah"></div><br><br>
										    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
	    								        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
		    								        </tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa55.'</td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>'.$bhsa38.'</b> '.$bhsa43.'.<br/>
                                                            <b>Mac Address</b> Mac address '.$bhsa56.'.<br/>
                                                            <b>IP Address</b> IP address '.$bhsa56.'.<br/>
                                                            <b>Upload</b> '.$bhsa57.' upload.<br/>
                                                            <b>Download</b> '.$bhsa57.' download.<br/>
									    	                <b>'.$bhsa48.'</b> '.$bhsa58.'.<br/>
									    	            </td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa59.'</td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
										            </tr>
										        </tbody>
    								        </table>
                    					    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
                    							<thead>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="7"><b>Unregistered user information</b></td>
            								        </tr>
                    								<tr>
                    									<th>No</th>
                    									<th>Mac / Contact</th>
                    									<th class="hidden-xs hidden-sm">IP address</th>
                                                        <th class="hidden-xs hidden-sm">'.$bhsa155.'</th>
                                                        <th class="hidden-xs hidden-sm">'.$bhsa156.'</th>
                                                        <th class="hidden-xs hidden-sm">'.$bhsa158.'</th>
                                                        <th class="hidden-xs hidden-sm">'.$bhsa159.'</th>
                    								</tr>
                    							</thead>
                    							<tbody>';
                    							$i = 0;
                    							$vendor = file_get_contents("js/vendor.txt");
                    							foreach ($util->setMenu('/ip arp')->getAll() as $interface) {
                                                    $mac = str_replace(':','',$interface('mac-address'));
                                                    $inf[$mac] = $interface('interface');
                                                }
                                                foreach ($util->setMenu('/ip dhcp-server lease')->getAll() as $namehost) {
                                                    $mac = str_replace(':','',$namehost('mac-address'));
                                                    $nhs[$mac] = $namehost('host-name');
                                                }
                                                if (!empty($util->setMenu('/system script')->find(RouterOS\Query::where('name', 'contact-minitik')))){
                    							    $gxcontact = 'MiniTik'.$util->get(RouterOS\Query::where('name', 'contact-minitik'),'source');
                                                }
                    								$hostlistq = $util->setMenu('/ip hotspot host')->getAll();
                    								foreach ($hostlistq as $userhst) {
                                                        if ($userhst('authorized') == 'false' and $userhst('bypassed') == 'false'){
                                                            $i++;
                                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CLwwSN1IDL').strrev('3IyOpIjLwA').'ab1pm'))));
                    										echo base64_decode('PHRkPg==').$i.'</td>';
                    										$useraktip = $userhst('address');
                    										$useraktmac = $userhst('mac-address');
                    										$macposisix = strpos($gxcontact,$useraktmac);
                    										if($macposisix <> ''){
                    										    $namposisix = strpos($gxcontact,'(',$macposisix) + 1;
                    										    $namposisiy = strpos($gxcontact,').',$namposisix) - $namposisix;
                    										    $namamacxyz = substr($gxcontact,$namposisix,$namposisiy);
                    										}else{
                    										    $namamacxyz = $useraktmac;
                    										}
                    										$mac = str_replace(':','',$useraktmac);
                    										$vea = substr($vendor,strpos($vendor,substr($mac,0,6)));
                                                            $veb = substr($vea,7,strpos($vea,')') - 7);
                    										echo base64_decode('PHRkPg==').str_replace($anctgg,'',substr($namamacxyz,0,20)).'</td>';
                    										echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$useraktip.'</td>';
                    									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,'',$nhs[$mac]).'</td>';
                    									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,'',$veb).'</td>';
                    									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace($anctgg,'',$inf[$mac]).'</td>';
                    									    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('2bMR3bO5jI').strrev('3QGdvwjbpd').'ab1pm'))));
                    									    echo base64_decode('PC90cj4=');
                                                        }
                                                    }
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('QCJkQCJogP').strrev('gACIgACIgk').strrev('2L8ACIgACI').strrev('JkQCK4jdpR').strrev('CIgACIgkQC').strrev('8ACIgACIgA').strrev('CIK4jdpR2L').strrev('qt50akAIgA').'ka05tq'))));
}

if($_GET["id"] == 'event'){
    	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('nblZXZjICK').strrev('ggXYyF2YhR').strrev('nLpISby9mZ').strrev('mhCdp1mY1N').strrev('ibvlGdj5Wd').strrev('gACIKsHIpg').strrev('CIgACIgACI').strrev('hZHIgACIgA').strrev('SPgMHZpBic').strrev('VVGZvNmblB').strrev('WaigCJokkU').strrev('iQWajQXdw5').strrev('SKowWY25SK').strrev('lNWYsBXZy5').strrev('nP8ZCfj8CK').strrev('gwyZvICf8w').strrev('CIKsTKpIiI').strrev('gACIgACIgA').strrev('HIgACIgACI').strrev('gMXb0BichZ').strrev('GZvNmblBSP').strrev('igCJokkUVV').strrev('3I0NWZsV2c').strrev('sFmdukiItR').strrev('GbwVmcukCK').strrev('mw3IvgSZjF').strrev('2LiwHP85Df').strrev('7kSKiICIsc').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('magIXY2BCI').strrev('j5WZg0DIz1').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('nLpISbqNCd').strrev('lJnLpgCbhZ').strrev('yLoU2YhxGc').strrev('p1ba3wnJ8N').strrev('Ln9iI8xDfm').strrev('owOpkiIiAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('ciRHIyFmdg').strrev('92YuVGI9Ay').strrev('KkgSSSVVZk').strrev('Q3YlxWZzJC').strrev('Y25SKiIGdj').strrev('BXZy5SKowW').strrev('fj8CKlNWYs').strrev('ICf8wnP8ZC').strrev('KpIiIgwyZv').strrev('ACIgACIKsT').strrev('IgACIgACIg').strrev('BichZHIgAC').strrev('blBSPgMnYq').strrev('kkUVVGZvNm').strrev('ZsV2cigCJo').strrev('kiIip2I0NW').strrev('cukCKsFmdu').strrev('gSZjFGbwVm').strrev('P85Dfmw3Iv').strrev('ICIsc2LiwH').strrev('IgAiC7kSKi').strrev('ACIgACIgAC').strrev('Y2BCIgACIg').strrev('0DI1hXbgIX').strrev('VlR2bj5WZg').strrev('NnIoQCKJJV').strrev('c1NCdjVGbl').strrev('kiIkxGc1J3').strrev('cukCKsFmdu').strrev('gSZjFGbwVm').strrev('P85Dfmw3Iv').strrev('ICIsc2LiwH').strrev('IgAiC7kSKi').strrev('ACIgACIgAC').strrev('Y2BCIgACIg').strrev('0DI15WbgIX').strrev('VlR2bj5WZg').strrev('NnIoQCKJJV').strrev('c1NCdjVGbl').strrev('wGc15WatJ3').strrev('KowWY25SKi').strrev('NWYsBXZy5S').strrev('P8ZCfj8CKl').strrev('wyZvICf8wn').strrev('IKsTKpIiIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('QGetBichZH').strrev('ZvNmblBSPg').strrev('gCJokkUVVG').strrev('I0NWZsV2ci').strrev('52dvRmczV3').strrev('bhZnLpICZs').strrev('xGclJnLpgC').strrev('J8NyLoU2Yh').strrev('Dfmp1ba3wn').strrev('iACLn9iI8x').strrev('CIgowOpkiI').strrev('gACIgACIgA').strrev('mdgACIgACI').strrev('9ACZu1GIyF').strrev('VZk92YuVGI').strrev('zJCKkgSSSV').strrev('XdjQ3YlxWZ').strrev('39GZulWbyN').strrev('CbhZnLpIib').strrev('hxGclJnLpg').strrev('nJ8NyLoU2Y').strrev('xDfmp1ba3w').strrev('IiACLn9iI8').strrev('ACIgowOpki').strrev('IgACIgACIg').strrev('FmdgACIgAC').strrev('I9AyYzRHIy').strrev('VVZk92YuVG').strrev('ZzJCKkgSSS').strrev('NHdjQ3YlxW').strrev('Y25SKi4WYj').strrev('BXZy5SKowW').strrev('fj8CKlNWYs').strrev('ICf8wnP8ZC').strrev('KpIiIgwyZv').strrev('ACIgACIKsT').strrev('IgACIgACIg').strrev('BichZHIgAC').strrev('KkASPgwmc1').strrev('FmLpMXaoRH').strrev('djFmIoIHd0').strrev('owOpIibvlG').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('Y2V2IigCJg').strrev('9GbukiI4NW').strrev('Kgwmc1hCZh').strrev('1DZkF2PiAy').strrev('a4ZCduVmdl').strrev('ByKgISPzRW').strrev('JiAyKgMHZp').strrev('AiI9MXb0hn').strrev('IrAyctRHIr').strrev('0zctpGemIC').strrev('Iz1magsCIi').strrev('JGd4ZiIgsC').strrev('Y0ByKgISPz').strrev('hnJiAyKgMn').strrev('IrAiI9MnYq').strrev('ICIrAycipG').strrev('Ii0Td41Gem').strrev('sCI1hXbgsC').strrev('P15Wb4ZiIg').strrev('UnbtByKgIS').strrev('ethnJiAyKg').strrev('1GIrAiI9QG').strrev('emICIrACZ4').strrev('sCIi0DZu1G').strrev('IgsCIk5Wbg').strrev('ISPjNHd4Zi').strrev('OpM2c0ByKg').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('JXd0VmcgAC').strrev('OlNHbhZGIu').strrev('ACIgACIgow').strrev('K9BCIgACIg').strrev('ACIgACIKsT').strrev('IKsTK9BCIg').strrev('ACIgACIgAC').strrev('dwlmcjN3L8').strrev('ACIgACIK4D').strrev('ayN2c8ACIg').strrev('UGc5RHI0BX').strrev('avQHelRnI9').strrev('lmcjNXY2Fm').strrev('mp1ba3ICdw').strrev('CIgACIgAiC').strrev('oQCIgACIgA').strrev('nbl1Wdj9GZ').strrev('5RWYlJnLpQ').strrev('Wa0Nmb1ZGK').strrev('gowegkCKu9').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nczV3IigCJ').strrev('j5SKiQGbwV').strrev('nZoU2ZuFGa').strrev('o42bpR3YuV').strrev('CIJkgC7BSK').strrev('gACIgACIgA').strrev('2cu92YgACI').strrev('oc2bs5SZs9').strrev('nczV3IigCJ').strrev('0B3bgQGbwV').strrev('GblNnOu9Wa').strrev('ukiIkVGdjV').strrev('wOpkCKsFmd').strrev('gACIgASCJo').strrev('GIgACIgACI').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('KsHIpIyS2U').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zMiASP9ASK').strrev('KsHIpIyS0g').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TNiASP9ASK').strrev('KsHIpIySyE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zNiASP9ASK').strrev('KsHIpIyS4Y').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UMiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('7BSKisEMwU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('15WatJ3c1N').strrev('mcw5SKiwGc').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('w5SKiwGc15').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').strrev('m12IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('yRnIgwiIkV').strrev('0aksTKiUWd').'5tq')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('kMiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('7BSKisEMwU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('15WatJ3c1N').strrev('mcw5SKiwGc').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('w5SKiwGc15').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').strrev('m12IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('yRnIgwiIkV').strrev('0aksTKiUWd').'5tq')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('0MiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('ENiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UNiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('kNiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('0NiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('EOiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UOiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINF').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINJ').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINN').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINR').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('DNiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TNiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('KsHIpISTwA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZyNXdjI').strrev('2YukiIkxmb').strrev('1ZGKldmbhh').strrev('CKu9Wa0Nmb').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('vNnbvNGIgA').strrev('CKn9GbuUGb').strrev('kJ3c1NiIoQ').strrev('3bgQGbud3b').strrev('lNnOu9Wa0B').strrev('iIkVGdjVGb').strrev('pkCKsFmduk').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CKkgCImlGI').strrev('39GZyNXdjI').strrev('Gdw9GIkxmb').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('90DIpgCbhZ').strrev('iILZTNyICI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('zV3IigCJgs').strrev('2dvRmbp1mc').strrev('w9mcw5SKi4').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILRDOzI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILJTM1I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILhjN3I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTxI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNxI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('p1mczV3Iig').strrev('SKi42dvRmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('3c1NiIoQCI').strrev('ud3bk5WatJ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTyI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNyI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('p1mczV3Iig').strrev('SKi42dvRmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('3c1NiIoQCI').strrev('ud3bk5WatJ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTzI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST0I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST1I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST2I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST3I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST4I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST5I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0kMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi00MxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0ENxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMzI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM0I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM1I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiINBDMxI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CIgowOp0HI').strrev('vwDIgACIgA').strrev('gP0BXayN2c').strrev('JkQCJkQCJo').strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YgcTLtNXL').strrev('gMTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('kQCJkQCJkg').strrev('bjBidpRGPJ').strrev('FGci0zczFG').strrev('ZuFGcgwWZu').strrev('FWbpJHctwW').strrev('mp1ba3ISey').strrev('QCJkQCJkgC').strrev('gYXakxTCJk').strrev('nI9M3chx2Y').strrev('lhWLsVmbhB').strrev('jPicmbpRWY').strrev('3IXZ05WZjx').strrev('a3IGPmp1ba').'b1pm')))).$bhsa28.' / '.$bhsa46.'<span class="hidden-xs"> '.$bhsa60.'</span></b></center></div>
									<div id="eventacarax" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa38.'</label>
												    <input type="text" placeholder="the title of an event *" name="id" id="id" class="form-control" maxlength="40" required >
												</div>
												<div class="col-sm-6">
												    <label class="control-label">'.$bhsa61.' '.$bhsa63.'</label>
												    <select id="tm" name="tm" class="form-control">
												        <option value="'.date('M-d-Y').'">'.date('d M Y').'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24)).'">'.date('d M Y', time() + (60 * 60 * 24)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 2)).'">'.date('d M Y', time() + (60 * 60 * 24 * 2)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 3)).'" selected>'.date('d M Y', time() + (60 * 60 * 24 * 3)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 4)).'">'.date('d M Y', time() + (60 * 60 * 24 * 4)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 5)).'">'.date('d M Y', time() + (60 * 60 * 24 * 5)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 6)).'">'.date('d M Y', time() + (60 * 60 * 24 * 6)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 7)).'">'.date('d M Y', time() + (60 * 60 * 24 * 7)).'</option>
													</select>
												</div>
												<div class="col-sm-6">
												    <label class="control-label">'.$bhsa62.' '.$bhsa63.'</label>
												    <select id="jm" name="jm" class="form-control">
												        <option value="00-00-00">00:00 (Jam 12 malam)</option>
														<option value="01-00-00">01:00 (Jam 1 malam)</option>
														<option value="02-00-00">02:00 (Jam 2 malam)</option>
														<option value="03-00-00">03:00 (Jam 3 malam)</option>
														<option value="04-00-00">04:00 (Jam 4 malam)</option>
														<option value="05-00-00">05:00 (Jam 5 pagi)</option>
														<option value="06-00-00" selected>06:00 (Jam 6 pagi)</option>
														<option value="07-00-00">07:00 (Jam 7 pagi)</option>
														<option value="08-00-00">08:00 (Jam 8 pagi)</option>
														<option value="09-00-00">09:00 (Jam 9 pagi)</option>
														<option value="10-00-00">10:00 (Jam 10 pagi)</option>
														<option value="11-00-00">11:00 (Jam 11 siang)</option>
														<option value="12-00-00">12:00 (Jam 12 siang)</option>
														<option value="13-00-00">13:00 (Jam 1 siang)</option>
														<option value="14-00-00">14:00 (Jam 2 siang)</option>
														<option value="15-00-00">15:00 (Jam 3 sore)</option>
														<option value="16-00-00">16:00 (Jam 4 sore)</option>
														<option value="17-00-00">17:00 (Jam 5 sore)</option>
														<option value="18-00-00">18:00 (Jam 6 sore)</option>
														<option value="19-00-00">19:00 (Jam 7 petang)</option>
														<option value="20-00-00">20:00 (Jam 8 petang)</option>
														<option value="21-00-00">21:00 (Jam 9 malam)</option>
														<option value="22-00-00">22:00 (Jam 10 malam)</option>
														<option value="23-00-00">23:00 (Jam 11 malam)</option>
													</select>
												</div>
												<div class="col-sm-6">
												    <label class="control-label">'.$bhsa61.' '.$bhsa64.'</label>
												    <select id="tb" name="tb" class="form-control">
												        <option value="'.date('M-d-Y').'">'.date('d M Y').'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24)).'">'.date('d M Y', time() + (60 * 60 * 24)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 2)).'">'.date('d M Y', time() + (60 * 60 * 24 * 2)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 3)).'" selected>'.date('d M Y', time() + (60 * 60 * 24 * 3)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 4)).'">'.date('d M Y', time() + (60 * 60 * 24 * 4)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 5)).'">'.date('d M Y', time() + (60 * 60 * 24 * 5)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 6)).'">'.date('d M Y', time() + (60 * 60 * 24 * 6)).'</option>
														<option value="'.date('M-d-Y', time() + (60 * 60 * 24 * 7)).'">'.date('d M Y', time() + (60 * 60 * 24 * 7)).'</option>
													</select>
												</div>
												<div class="col-sm-6">
												    <label class="control-label">'.$bhsa62.' '.$bhsa64.'</label>
												    <select id="jb" name="jb" class="form-control">
												        <option value="00-00-00">00:00 (Jam 12 malam)</option>
														<option value="01-00-00">01:00 (Jam 1 malam)</option>
														<option value="02-00-00">02:00 (Jam 2 malam)</option>
														<option value="03-00-00">03:00 (Jam 3 malam)</option>
														<option value="04-00-00">04:00 (Jam 4 malam)</option>
														<option value="05-00-00">05:00 (Jam 5 pagi)</option>
														<option value="06-00-00">06:00 (Jam 6 pagi)</option>
														<option value="07-00-00">07:00 (Jam 7 pagi)</option>
														<option value="08-00-00">08:00 (Jam 8 pagi)</option>
														<option value="09-00-00">09:00 (Jam 9 pagi)</option>
														<option value="10-00-00">10:00 (Jam 10 pagi)</option>
														<option value="11-00-00">11:00 (Jam 11 siang)</option>
														<option value="12-00-00" selected>12:00 (Jam 12 siang)</option>
														<option value="13-00-00">13:00 (Jam 1 siang)</option>
														<option value="14-00-00">14:00 (Jam 2 siang)</option>
														<option value="15-00-00">15:00 (Jam 3 sore)</option>
														<option value="16-00-00">16:00 (Jam 4 sore)</option>
														<option value="17-00-00">17:00 (Jam 5 sore)</option>
														<option value="18-00-00">18:00 (Jam 6 sore)</option>
														<option value="19-00-00">19:00 (Jam 7 petang)</option>
														<option value="20-00-00">20:00 (Jam 8 petang)</option>
														<option value="21-00-00">21:00 (Jam 9 malam)</option>
														<option value="22-00-00">22:00 (Jam 10 malam)</option>
														<option value="23-00-00">23:00 (Jam 11 malam)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Upload</label>
												    <select id="usrupld" name="usrupld" class="form-control">
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K" selected>512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M">2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Upload</label>
												    <select id="usrminupl" name="usrminupl" class="form-control" disabled>
														<option value="256K" id="alkwijqxdu1" selected>256 Kbps</option>
														<option value="384K" id="alkwijqxdu2">384 Kbps</option>
														<option value="512K" id="alkwijqxdu3">512 Kbps</option>
														<option value="768K" id="alkwijqxdu4" hidden>768 Kbps</option>
														<option value="1M" id="alkwijqxdu5" hidden>1 Mbps</option>
														<option value="1500K" id="alkwijqxdu6" hidden>1,5 Mbps</option>
														<option value="2M" id="alkwijqxdu7" hidden>2 Mbps</option>
														<option value="2500K" id="alkwijqxdu8" hidden>2,5 Mbps</option>
														<option value="3M" id="alkwijqxdu9" hidden>3 Mbps</option>
														<option value="4M" id="alkwijqxdu10" hidden>4 Mbps</option>
														<option value="5M" id="alkwijqxdu11" hidden>5 Mbps</option>
														<option value="6M" id="alkwijqxdu12" hidden>6 Mbps</option>
                                                        <option value="7M" id="alkwijqxdu13" hidden>7 Mbps</option>
                                                        <option value="8M" id="alkwijqxdu14" hidden>8 Mbps</option>
														<option value="9M" id="alkwijqxdu15" hidden>9 Mbps</option>
														<option value="10M" id="alkwijqxdu16" hidden>10 Mbps</option>
														<option value="11M" id="alkwijqxdu17" hidden>11 Mbps</option>
														<option value="12M" id="alkwijqxdu18" hidden>12 Mbps</option>
														<option value="13M" id="alkwijqxdu19" hidden>13 Mbps</option>
														<option value="14M" id="alkwijqxdu20" hidden>14 Mbps</option>
														<option value="15M" id="alkwijqxdu21" hidden>15 Mbps</option>
														<option value="20M" id="alkwijqxdu22" hidden>20 Mbps</option>
														<option value="25M" id="alkwijqxdu23" hidden>25 Mbps</option>
														<option value="30M" id="alkwijqxdu24" hidden>30 Mbps</option>
														<option value="40M" id="alkwijqxdu25" hidden>40 Mbps</option>
														<option value="50M" id="alkwijqxdu26" hidden>50 Mbps</option>
														<option value="100M" id="alkwijqxdu27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Download</label>
                                                    <select id="usrdownld" name="usrdownld" class="form-control">
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K">512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M" selected>2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Download</label>
                                                    <select id="usrmindown" name="usrmindown" class="form-control" disabled>
                                                        <option value="256K" id="akjsehxdfu1">256 Kbps</option>
                                                        <option value="384K" id="akjsehxdfu2">384 Kbps</option>
														<option value="512K" id="akjsehxdfu3" selected>512 Kbps</option>
														<option value="768K" id="akjsehxdfu4">768 Kbps</option>
														<option value="1M" id="akjsehxdfu5">1 Mbps</option>
														<option value="1500K" id="akjsehxdfu6">1,5 Mbps</option>
														<option value="2M" id="akjsehxdfu7">2 Mbps</option>
														<option value="2500K" id="akjsehxdfu8">2,5 Mbps</option>
														<option value="3M" id="akjsehxdfu9" hidden>3 Mbps</option>
														<option value="4M" id="akjsehxdfu10" hidden>4 Mbps</option>
														<option value="5M" id="akjsehxdfu11" hidden>5 Mbps</option>
														<option value="6M" id="akjsehxdfu12" hidden>6 Mbps</option>
                                                        <option value="7M" id="akjsehxdfu13" hidden>7 Mbps</option>
                                                        <option value="8M" id="akjsehxdfu14" hidden>8 Mbps</option>
														<option value="9M" id="akjsehxdfu15" hidden>9 Mbps</option>
														<option value="10M" id="akjsehxdfu16" hidden>10 Mbps</option>
														<option value="11M" id="akjsehxdfu17" hidden>11 Mbps</option>
														<option value="12M" id="akjsehxdfu18" hidden>12 Mbps</option>
														<option value="13M" id="akjsehxdfu19" hidden>13 Mbps</option>
														<option value="14M" id="akjsehxdfu20" hidden>14 Mbps</option>
														<option value="15M" id="akjsehxdfu21" hidden>15 Mbps</option>
														<option value="20M" id="akjsehxdfu22" hidden>20 Mbps</option>
														<option value="25M" id="akjsehxdfu23" hidden>25 Mbps</option>
														<option value="30M" id="akjsehxdfu24" hidden>30 Mbps</option>
														<option value="40M" id="akjsehxdfu25" hidden>40 Mbps</option>
														<option value="50M" id="akjsehxdfu26" hidden>50 Mbps</option>
														<option value="100M" id="akjsehxdfu27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">'.$bhsa67.' scan device</label>
												    <select id="tscan" name="tscan" class="form-control">
												        <option value="00:00:01">1 '.$bhsa66.'</option>
												        <option value="00:00:03">3 '.$bhsa66.'</option>
												        <option value="00:00:05">5 '.$bhsa66.'</option>
												        <option value="00:00:10">10 '.$bhsa66.'</option>
														<option value="00:00:20" selected>20 '.$bhsa66.'</option>
														<option value="00:00:30">30 '.$bhsa66.'</option>
														<option value="00:00:40">40 '.$bhsa66.'</option>
														<option value="00:00:50">50 '.$bhsa66.'</option>
														<option value="00:01:00">60 '.$bhsa66.'</option>
													</select>
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
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/Yx1uprNfsdw'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
							</div>
					            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
						            <div class="panel panel-primary">
							            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa60.'</b></center></div>
									        <div id="evacx"></div>
                                            <script>
                                                $(function() {
                                                    $("#hapusevent form").submit(function() {
                                                        var name = encodeURI($("input#hapuslistevent:checked").map(function () {return $(this).val();}).get());
                                                        var url = $(this).attr("action");
                                                        $("#tampilevent").load(url + "?remove=event&name=" + name);
                                                        return false;
                                                    });
                                                });
                                            </script>
                                            <div id="hapusevent">
                                            <form action="ajax_remove.php" method="get">
					                        <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							                    <thead>
								                    <tr>
									                    <th>No</th>
									                    <th>'.$bhsa38.'</th>
									                    <th>'.$bhsa61.' '.$bhsa63.'</th>
									                    <th class="hidden-xs">'.$bhsa62.' '.$bhsa63.'</th>
									                    <th class="hidden-xs hidden-sm">'.$bhsa61.' '.$bhsa64.'</th>
									                    <th class="hidden-xs hidden-sm">'.$bhsa62.' '.$bhsa64.'</th>
									                    <th class="hidden-xs hidden-sm">'.$bhsa157.'</th>
									                    <th>X</th>
								                    </tr>
							                    </thead>
							                    <tbody>';
										                    $i = 0;
										                    $allsystem = $util->setMenu('/system scheduler')->getAll();
								                            foreach ($allsystem as $item) {
								                                $nmeevent = $item('name');
								                                $tglevent = ucwords($item('start-date'));
								                                $jamevent = $item('start-time');
								                                if (substr($nmeevent,0,11) == '--EndEvent-'){
								                                    $nmx = substr($nmeevent,11,-2);
								                                    $tglb[$nmx] = $tglevent;
								                                    $jamb[$nmx] = $jamevent;
								                                }
								                            }
								                            foreach ($allsystem as $item) {
								                                $nmeevent = $item('name');
								                                $tglevent = ucwords($item('start-date'));
								                                $jamevent = $item('start-time');
								                                $spdevent = $item('on-event');
								                                if (substr($nmeevent,0,13) == '--StartEvent-'){
								                                    $nms = substr($nmeevent,13,-2);
								                                    $xsp = substr($spdevent,strpos($spdevent,'max-limit=') + 10);
								                                    $ysp = substr($xsp,0,strpos($xsp,' '));
								                                    $usp = substr($ysp,0,strpos($ysp,'/'));
								                                    $dsp = substr($ysp,strpos($ysp,'/') + 1);
								                                    $xsl = substr($spdevent,strpos($spdevent,'limit-at=') + 9);
								                                    $ysl = substr($xsl,0,strpos($xsl,' '));
								                                    $usl = substr($ysl,0,strpos($ysl,'/'));
								                                    $dsl = substr($ysl,strpos($ysl,'/') + 1);
								                                    $ssa = $tglb[$nms];
								                                    $ssb = $jamb[$nms];
											                        $i++;
										                            echo base64_decode('PHRyPg==');
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIhxjPkRHP').strrev('iMiI9YWZyh').strrev('2Ypx2Yu9GI').strrev('tV3YvRmI9s').strrev('EdldmL05WZ').strrev('CRnbl1WZsV').strrev('50akAKklUe').'tqka05tq'))))."'".'id'."'".').value='."'".str_replace($anctgg,'',$nms)."'".'; document.getElementById('."'".'tm'."'".').value='."'".str_replace('/','-',$tglevent)."'".'; document.getElementById('."'".'jm'."'".').value='."'".str_replace(':','-',$jamevent)."'".'; document.getElementById('."'".'tb'."'".').value='."'".str_replace('/','-',$ssa)."'".'; document.getElementById('."'".'jb'."'".').value='."'".str_replace(':','-',$ssb)."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$usp."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$dsp."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$usl."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$dsl."'".';"><b>'.str_replace($anctgg,'',$nms).'</b></a></td>';
											                        echo base64_decode('PHRkPg==').$tglevent.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('gPiMHet4WZ').strrev('50akqt50ak').'tq')))).$jamevent.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ssa.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ssb.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$ysp.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$nms.'" id="hapuslistevent"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }
										                    }
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XZ05WZjxDI').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('b0RXdixDIg').strrev('0TZwlHdg42').strrev('I0lWbiV3ci').strrev('0zczFGbjBi').strrev('b0JGIuRnYi').strrev('NXZjNWdz1i').strrev('bhB3c84jIz').strrev('0zczFGbjBi').strrev('YphGc5x2Zi').strrev('BXesdGIu92').strrev('c01ibvNWao').strrev('JXYgICazFm').strrev('ZkRWao1SYp').strrev('UWdyRnI94W').strrev('bhB3cvwjPi').strrev('sDczJmbm4j').'ka05tq')))).$bhsa54.' '.$bhsa60.'</button>
						                    </center>
					                        </form>
						                    </div>            
						                    <div id="tampilevent"></div><br><br>
										    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
	    								        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
		    								        </tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa65.'<br><a href="https://mitik.my.id/memberi_batas_speed">Learn..!</a></td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">
                                                            <b>'.$bhsa38.'</b> '.$bhsa43.'.<br/>
                                                            <b>'.$bhsa61.' '.$bhsa63.'</b> '.$bhsa61.' '.$bhsa63.' '.$bhsa60.'.<br/>
                                                            <b>'.$bhsa62.' '.$bhsa63.'</b> '.$bhsa62.' '.$bhsa63.' '.$bhsa60.'.<br/>
                                                            <b>'.$bhsa61.' '.$bhsa64.'</b> '.$bhsa61.' '.$bhsa64.' '.$bhsa60.'.<br/>
                                                            <b>'.$bhsa62.' '.$bhsa64.'</b> '.$bhsa62.' '.$bhsa64.' '.$bhsa60.'.<br/>
                                                            <b>Upload</b> '.$bhsa57.' upload.<br/>
                                                            <b>Download</b> '.$bhsa57.' download.<br/>
									    	            </td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa68.'</td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
										            </tr>
										        </tbody>
    								        </table>
						            </div>
					            </div>
    ';
}

if($_GET["id"] == 'ppp'){
    	echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('DdwlmcjNHP').strrev('gACIgACIK4').strrev('mb1ZGKkACI').strrev('gkCKu9Wa0N').strrev('CIgACIgowe').strrev('kACIgACIgA').strrev('newBHcjICK').strrev('vZGI4JXZzV').strrev('Wdz5SKi0mc').strrev('uVnZoQXatJ').strrev('SKo42bpR3Y').strrev('gACIgAiC7B').strrev('CIgACIgACI').strrev('gIXY2BCIgA').strrev('Wbh5mclNXd').strrev('vNmblBSPgU').strrev('CJokkUVVGZ').strrev('jQXdw5Waig').strrev('WY25SKiQWa').strrev('sBXZy5SKow').strrev('Cfj8CKlNWY').strrev('vICf8wnP8Z').strrev('TKpIiIgwyZ').strrev('gACIgACIKs').strrev('CIgACIgACI').strrev('wBichZHIgA').strrev('CZy92dzNXY').strrev('k92YuVGI9A').strrev('CKkgSSSVVZ').strrev('wNCd1BnbpJ').strrev('CbhZnLpIyd').strrev('hxGclJnLpg').strrev('nJ8NyLoU2Y').strrev('xDfmp1ba3w').strrev('IiACLn9iI8').strrev('ACIgowOpki').strrev('IgACIgACIg').strrev('FmdgACIgAC').strrev('Zh9GbwVHIy').strrev('92YuVGI9AC').strrev('KkgSSSVVZk').strrev('Q3YlxWZzJC').strrev('ZsBXdyNXdj').strrev('gCbhZnLpIC').strrev('YhxGclJnLp').strrev('wnJ8NyLoU2').strrev('8xDfmp1ba3').strrev('iIiACLn9iI').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('yFmdgACIgA').strrev('2bs52dvRGI').strrev('j5WZg0DIkF').strrev('CKJJVVlR2b').strrev('jVGblNnIoQ').strrev('3bkJ3c1NCd').strrev('25SKiQGbud').strrev('XZy5SKowWY').strrev('j8CKlNWYsB').strrev('Cf8wnP8ZCf').strrev('pIiIgwyZvI').strrev('CIgACIKsTK').strrev('gACIgACIgA').strrev('ichZHIgACI').strrev('gwGc15WatB').strrev('GZvNmblBSP').strrev('igCJokkUVV').strrev('3I0NWZsV2c').strrev('wVnbp1mczV').strrev('CbhZnLpICb').strrev('hxGclJnLpg').strrev('nJ8NyLoU2Y').strrev('xDfmp1ba3w').strrev('IiACLn9iI8').strrev('ACIgowOpki').strrev('IgACIgACIg').strrev('FmdgACIgAC').strrev('dvRmbp1GIy').strrev('NmblBSPg42').strrev('JokkUVVGZv').strrev('NWZsV2cigC').strrev('bp1mczV3I0').strrev('5SKi42dvRm').strrev('Zy5SKowWY2').strrev('8CKlNWYsBX').strrev('f8wnP8ZCfj').strrev('IiIgwyZvIC').strrev('IgACIKsTKp').strrev('ACIgACIgAC').strrev('chZHIgACIg').strrev('VmcpBHelBi').strrev('bj5WZg0DIk').strrev('QCKJJVVlR2').strrev('djVGblNnIo').strrev('ZnLpICelNC').strrev('clJnLpgCbh').strrev('NyLoU2YhxG').strrev('mp1ba3wnJ8').strrev('CLn9iI8xDf').strrev('gowOpkiIiA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('nczVHIyFmd').strrev('g0DIy9WayB').strrev('VVlR2bj5WZ').strrev('lNnIoQCKJJ').strrev('3c1NCdjVGb').strrev('pIicvlmcwJ').strrev('nLpgCbhZnL').strrev('oU2YhxGclJ').strrev('ba3wnJ8NyL').strrev('9iI8xDfmp1').strrev('OpkiIiACLn').strrev('ACIgACIgow').strrev('IgACIgACIg').strrev('VHIyFmdgAC').strrev('IyVGdzJmcz').strrev('R2bj5WZg0D').strrev('IoQCKJJVVl').strrev('NCdjVGblNn').strrev('clR3ciJ3c1').strrev('gCbhZnLpIi').strrev('YhxGclJnLp').strrev('wnJ8NyLoU2').strrev('8xDfmp1ba3').strrev('iIiACLn9iI').strrev('gACIgowOpk').strrev('CIgACIgACI').strrev('yFmdgACIgA').strrev('CI9ACbyVHI').strrev('ukycphGdoQ').strrev('WYigic0RXY').strrev('7kiIu9Wa0N').strrev('CIgACIgAiC').strrev('gACIgACIgA').strrev('WbjICKkACI').strrev('s5SKignejF').strrev('CbyVHKkF2b').strrev('e8i9uICIrA').strrev('cwBXPkRWY4').strrev('ISPl1WYuZC').strrev('byV2c1ByKg').strrev('ICIrASZtFm').strrev('cvd3czFGcm').strrev('BHIrAiI9Qm').strrev('IkJ3b3N3ch').strrev('xGc1ZiIgsC').strrev('IrAiI9QWYv').strrev('ACZh9GbwVH').strrev('dulWbmICIr').strrev('ByKgISPsBX').strrev('KgwGc15Wat').strrev('52dvRmJiAy').strrev('KgISPkF2bs').strrev('9Gbud3bkBy').strrev('bmICIrACZh').strrev('0jb39GZulW').strrev('ZulWbgsCIi').strrev('ICIrAib39G').strrev('ZlJXawhXZm').strrev('hXZgsCIi0D').strrev('IrACZlJXaw').strrev('J3bpJHcmIC').strrev('IrAiI9kHdp').strrev('9WayBnczVH').strrev('biZiIgsCIy').strrev('ISPyVGdz92').strrev('ciJ3c1ByKg').strrev('AiC7kiclR3').strrev('IgACIgACIg').strrev('BCIgACIgAC').strrev('Zg4mc1RXZy').strrev('AiC7U2csFm').strrev('IgACIgACIg').strrev('owOp0HIgAC').strrev('IgACIgACIg').strrev('ACIgowOp0H').strrev('cvwDIgACIg').strrev('ogP0BXayN2').strrev('IgACIgACIg').strrev('QHcpJ3YzxD').strrev('di0TZwlHdg').strrev('ZXYq9Cd4VG').strrev('I0BXayN2ch').strrev('ACIgACIK4j').strrev('JgACIgACIg').strrev('VWb1N2bkhC').strrev('ZhVmcukCdu').strrev('R3YuVnZokH').strrev('C7BSKo42bp').strrev('ACIgACIgAi').strrev('IgACIgACIg').strrev('NXdjICKkAC').strrev('LpICZsBXdy').strrev('hSZn5WYoNm').strrev('bvlGdj5Wdm').strrev('kQCKsHIpgi').strrev('IgACIgACIg').strrev('52bjBCIgAC').strrev('ZvxmLlx2bz').strrev('NXdjICKkgy').strrev('cvBCZsBXdy').strrev('V2c642bpRH').strrev('KiQWZ0NWZs').strrev('kSKowWY25S').strrev('IgACIJkgC7').strrev('ACIgACIgAC').strrev('IoQCKgYWag').strrev('xGc1J3c1Ni').strrev('bvlGdw9GIk').strrev('R3YlxWZzpj').strrev('bhZnLpICZl').strrev('ICI90DIpgC').strrev('egkiILZTNy').strrev('ACIgASCJow').strrev('IgACIgACIg').strrev('ICKkACIgAC').strrev('dulWbyNXdj').strrev('JHcukiIsBX').strrev('dsFmdigCcv').strrev('UjMiACLiUW').strrev('KkAyOpIyS2').strrev('lWbyNXdjIC').strrev('cukiIsBXdu').strrev('lGZigCcvJH').strrev('LiQWZsJWYz').strrev('kSZzxWYmBC').strrev('ZtNiIoQCI7').strrev('QWYvxGc1Bn').strrev('Kw9mcw5SKi').strrev('xmYhNXakJC').strrev('c0JCIsICZl').'nVlIik7')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zMiASP9ASK').strrev('KsHIpIyS0g').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TNiASP9ASK').strrev('KsHIpIySyE').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zNiASP9ASK').strrev('KsHIpIyS4Y').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UMiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('7BSKisEMwU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('15WatJ3c1N').strrev('mcw5SKiwGc').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('w5SKiwGc15').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').strrev('m12IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('yRnIgwiIkV').strrev('0aksTKiUWd').'5tq')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('kMiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('7BSKisEMwU').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('15WatJ3c1N').strrev('mcw5SKiwGc').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('w5SKiwGc15').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('TKlNHbhZGI').strrev('m12IigCJgs').strrev('CZh9GbwVHc').strrev('oA3byBnLpI').strrev('GbiF2cpRmI').strrev('yRnIgwiIkV').strrev('0aksTKiUWd').'5tq')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('0MiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('ENiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UNiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('kNiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('0NiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('EOiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('UOiASP9ASK').strrev('JkgC7BSKi0').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('3c1NiIoQCI').strrev('iwGc15WatJ').strrev('CKw9mcw5SK').strrev('sISZ1xWY2J').strrev('iILZTNyICI').strrev('1NiIoQCI7k').strrev('Gc15WatJ3c').strrev('w9mcw5SKiw').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('wVHcm12Iig').strrev('nLpICZh9Gb').strrev('pRmIoA3byB').strrev('iIkVGbiF2c').strrev('iUWdyRnIgw').'KTska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINF').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINJ').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINN').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINR').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('jMiASP9ASK').strrev('JowegkiINV').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('zMiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('DNiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TNiASP9ASK').strrev('JowegkiINB').strrev('CIgACIgASC').strrev('gACIgACIgA').strrev('XdjICKkACI').strrev('sBXdulWbyN').strrev('CcvJHcukiI').strrev('iUWdsFmdig').strrev('yS2UjMiACL').strrev('jICKkAyOpI').strrev('XdulWbyNXd').strrev('vJHcukiIsB').strrev('WYzlGZigCc').strrev('mBCLiQWZsJ').strrev('CI7kSZzxWY').strrev('1BnZtNiIoQ').strrev('SKiQWYvxGc').strrev('kJCKw9mcw5').strrev('CZlxmYhNXa').strrev('lVnc0JCIsI').'Iik7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('CZsBXdyNXd').strrev('642bpRHcvB').strrev('WZ0NWZsV2c').strrev('owWY25SKiQ').strrev('TMiASP9ASK').strrev('KsHIpISTwA').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('wVnbp1mczV').strrev('3byBnLpICb').strrev('lVHbhZnIoA').strrev('kN1IjIgwiI').strrev('igCJgsTKis').strrev('nbp1mczV3I').strrev('yBnLpICbwV').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('yOpU2csFmZ').strrev('wZWbjICKkA').strrev('iIkF2bsBXd').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2Fsa3dpanF4ZHU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('39GZyNXdjI').strrev('2YukiIkxmb').strrev('1ZGKldmbhh').strrev('CKu9Wa0Nmb').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('vNnbvNGIgA').strrev('CKn9GbuUGb').strrev('kJ3c1NiIoQ').strrev('3bgQGbud3b').strrev('lNnOu9Wa0B').strrev('iIkVGdjVGb').strrev('pkCKsFmduk').strrev('CIgASCJowO').strrev('gACIgACIgA').strrev('CKkgCImlGI').strrev('39GZyNXdjI').strrev('Gdw9GIkxmb').strrev('lxWZzpjbvl').strrev('nLpICZlR3Y').strrev('90DIpgCbhZ').strrev('iILZTNyICI').strrev('gASCJowegk').strrev('CIgACIgACI').strrev('kACIgACIgA').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('nIoA3byBnL').strrev('gwiIlVHbhZ').strrev('TKiskN1IjI').strrev('zV3IigCJgs').strrev('2dvRmbp1mc').strrev('w9mcw5SKi4').strrev('mYhNXakJCK').strrev('hZGIsICZlx').strrev('CJgsTKlNHb').strrev('vRGcm12Iig').strrev('iIkF2bs52d').strrev('igCcvJHcuk').strrev('WZsJWYzlGZ').strrev('1JHdiACLiQ').strrev('50akwOpISZ').'tqka05tq')))); for ($i = 2; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILRDOzI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 3; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 3; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		             echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILJTM1I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 4; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 4; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiILhjN3I').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 5; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 5; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTxI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 6; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 6; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNxI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('p1mczV3Iig').strrev('SKi42dvRmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('3c1NiIoQCI').strrev('ud3bk5WatJ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 7; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 7; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTyI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 8; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 8; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('pIySwATNyI').strrev('CIgkQCKsHI').strrev('gACIgACIgA').strrev('CJgACIgACI').strrev('p1mczV3Iig').strrev('SKi42dvRmb').strrev('2JCKw9mcw5').strrev('CIsISZ1xWY').strrev('7kiILZTNyI').strrev('3c1NiIoQCI').strrev('ud3bk5WatJ').strrev('CcvJHcukiI').strrev('sJWYzlGZig').strrev('WYmBCLiQWZ').strrev('oQCI7kSZzx').strrev('3bkBnZtNiI').strrev('pICZh9Gbud').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('WdyRnIgwiI').strrev('t50aksTKiU').'q')))); for ($i = 9; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 9; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpISTzI').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 10; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 10; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST0I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 11; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 11; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST1I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 12; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 12; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST2I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 13; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 13; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST3I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 14; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 14; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST4I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 15; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 15; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('KsHIpIST5I').strrev('CIgACIgkQC').strrev('gACIgACIgA').strrev('3IigCJgACI').strrev('vRmbp1mczV').strrev('mcw5SKi42d').strrev('1xWY2JCKw9').strrev('TNyICIsISZ').strrev('oQCI7kiILZ').strrev('WatJ3c1NiI').strrev('ukiIud3bk5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZzxWYmBCL').strrev('tNiIoQCI7k').strrev('Gbud3bkBnZ').strrev('yBnLpICZh9').strrev('2cpRmIoA3b').strrev('gwiIkVGbiF').strrev('TKiUWdyRnI').'ska05tq')))); for ($i = 16; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 16; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 17; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 17; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 18; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 18; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0kMxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 19; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 19; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi00MxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 20; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 20; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0ENxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 21; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 21; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNxI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 22; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 22; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 23; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 23; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0UNyI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 24; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 24; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EMzI').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 25; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 25; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM0I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 26; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 26; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('7BSKi0EM1I').strrev('CIgACIJkgC').strrev('gACIgACIgA').strrev('iIoQCIgACI').strrev('k5WatJ3c1N').strrev('HcukiIud3b').strrev('sFmdigCcvJ').strrev('jMiACLiUWd').strrev('kAyOpIyS2U').strrev('WbyNXdjICK').strrev('pIib39GZul').strrev('mIoA3byBnL').strrev('kVGbiF2cpR').strrev('2csFmZgwiI').strrev('jICKkAyOpU').strrev('mb39GZwZWb').strrev('w5SKiQWYvx').strrev('XakJCKw9mc').strrev('sICZlxmYhN').strrev('iIlVnc0JCI').'k7')))); for ($i = 27; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", "true");';} for ($i = 0; $i < 27; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('GIlNHblBSf').strrev('jICKkgCIml').strrev('mb39GZyNXd').strrev('vlGdw9GIkx').strrev('3YlxWZzpjb').strrev('hZnLpICZlR').strrev('CI90DIpgCb').strrev('gkiINBDMxI').strrev('CIgASCJowe').strrev('gACIgACIgA').strrev('CKkACIgACI').strrev('ulWbyNXdjI').strrev('nLpIib39GZ').strrev('hZnIoA3byB').strrev('jIgwiIlVHb').strrev('gsTKiskN1I').strrev('mczV3IigCJ').strrev('i42dvRmbp1').strrev('CKw9mcw5SK').strrev('lxmYhNXakJ').strrev('HbhZGIsICZ').strrev('igCJgsTKlN').strrev('2dvRGcm12I').strrev('ukiIkF2bs5').strrev('GZigCcvJHc').strrev('iQWZsJWYzl').strrev('SZ1JHdiACL').strrev('qt50akwOpI').'ka05tq')))); for ($i = 0; $i < 28; $i++){ echo base64_decode('JCgiI2FranNlaHhkZnU=').$i.'").prop("hidden", false);';}
		            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('CIgACIJoQf').strrev('gACIgACIgA').strrev('CIgAiC7kSf').strrev('gACIgACIgA').strrev('CIgowOp0HI').strrev('vwDIgACIgA').strrev('gP0BXayN2c').strrev('JkQCJkQCJo').strrev('GbjBidpRGP').strrev('s92Yi0zczF').strrev('2YgcTLtNXL').strrev('gMTLk1WLs9').strrev('WYuJWb1hGd').strrev('slHdzBiIsl').strrev('GZy9mYi0TZ').strrev('l52buBiOyV').strrev('Cmp1ba3IyO').strrev('kQCJkQCJkg').strrev('bjBidpRGPJ').strrev('FGci0zczFG').strrev('ZuFGcgwWZu').strrev('FWbpJHctwW').strrev('mp1ba3ISey').strrev('QCJkQCJkgC').strrev('gYXakxTCJk').strrev('nI9M3chx2Y').strrev('lhWLsVmbhB').strrev('jPicmbpRWY').strrev('3IXZ05WZjx').strrev('a3IGPmp1ba').'b1pm')))).$bhsa28.' / '.$bhsa46.'<span class="hidden-xs"> PPPoE</span></b></center></div>
									<div id="pppzuserx" class="panel-body">
                                    <form action="ajax_add.php" method="get">
										<div class="form-horizontal">
                                            <div class="form-group form-group-sm">
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa2.'</label>
													<input type="text" placeholder="Username *" name="id" id="id" class="form-control" required>
												</div>
												<div class="col-sm-12">
													<label class="control-label">'.$bhsa3.'</label>
													<input type="text" placeholder="password" name="pw" id="pw" class="form-control">
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Upload</label>
												    <select id="usrupld" name="usrupld" class="form-control" required>
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K" selected>512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M">2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Upload</label>
												    <select id="usrminupl" name="usrminupl" class="form-control" disabled required>
														<option value="256K" id="alkwijqxdu1" selected>256 Kbps</option>
														<option value="384K" id="alkwijqxdu2">384 Kbps</option>
														<option value="512K" id="alkwijqxdu3">512 Kbps</option>
														<option value="768K" id="alkwijqxdu4" hidden>768 Kbps</option>
														<option value="1M" id="alkwijqxdu5" hidden>1 Mbps</option>
														<option value="1500K" id="alkwijqxdu6" hidden>1,5 Mbps</option>
														<option value="2M" id="alkwijqxdu7" hidden>2 Mbps</option>
														<option value="2500K" id="alkwijqxdu8" hidden>2,5 Mbps</option>
														<option value="3M" id="alkwijqxdu9" hidden>3 Mbps</option>
														<option value="4M" id="alkwijqxdu10" hidden>4 Mbps</option>
														<option value="5M" id="alkwijqxdu11" hidden>5 Mbps</option>
														<option value="6M" id="alkwijqxdu12" hidden>6 Mbps</option>
                                                        <option value="7M" id="alkwijqxdu13" hidden>7 Mbps</option>
                                                        <option value="8M" id="alkwijqxdu14" hidden>8 Mbps</option>
														<option value="9M" id="alkwijqxdu15" hidden>9 Mbps</option>
														<option value="10M" id="alkwijqxdu16" hidden>10 Mbps</option>
														<option value="11M" id="alkwijqxdu17" hidden>11 Mbps</option>
														<option value="12M" id="alkwijqxdu18" hidden>12 Mbps</option>
														<option value="13M" id="alkwijqxdu19" hidden>13 Mbps</option>
														<option value="14M" id="alkwijqxdu20" hidden>14 Mbps</option>
														<option value="15M" id="alkwijqxdu21" hidden>15 Mbps</option>
														<option value="20M" id="alkwijqxdu22" hidden>20 Mbps</option>
														<option value="25M" id="alkwijqxdu23" hidden>25 Mbps</option>
														<option value="30M" id="alkwijqxdu24" hidden>30 Mbps</option>
														<option value="40M" id="alkwijqxdu25" hidden>40 Mbps</option>
														<option value="50M" id="alkwijqxdu26" hidden>50 Mbps</option>
														<option value="100M" id="alkwijqxdu27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Max Download</label>
                                                    <select id="usrdownld" name="usrdownld" class="form-control" required>
														<option value="256K">256 Kbps</option>
														<option value="384K">384 Kbps</option>
														<option value="512K">512 Kbps</option>
														<option value="768K">768 Kbps</option>
														<option value="1M">1 Mbps</option>
														<option value="1500K">1,5 Mbps</option>
														<option value="2M" selected>2 Mbps</option>
														<option value="2500K">2,5 Mbps</option>
														<option value="3M">3 Mbps</option>
														<option value="4M">4 Mbps</option>
														<option value="5M">5 Mbps</option>
														<option value="6M">6 Mbps</option>
                                                        <option value="7M">7 Mbps</option>
                                                        <option value="8M">8 Mbps</option>
														<option value="9M">9 Mbps</option>
														<option value="10M">10 Mbps</option>
														<option value="11M">11 Mbps</option>
														<option value="12M">12 Mbps</option>
														<option value="13M">13 Mbps</option>
														<option value="14M">14 Mbps</option>
														<option value="15M">15 Mbps</option>
														<option value="20M">20 Mbps</option>
														<option value="25M">25 Mbps</option>
														<option value="30M">30 Mbps</option>
														<option value="40M">40 Mbps</option>
														<option value="50M">50 Mbps</option>
														<option value="100M">100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label class="control-label">Min Download</label>
                                                    <select id="usrmindown" name="usrmindown" class="form-control" disabled required>
                                                        <option value="256K" id="akjsehxdfu1">256 Kbps</option>
                                                        <option value="384K" id="akjsehxdfu2">384 Kbps</option>
														<option value="512K" id="akjsehxdfu3" selected>512 Kbps</option>
														<option value="768K" id="akjsehxdfu4">768 Kbps</option>
														<option value="1M" id="akjsehxdfu5">1 Mbps</option>
														<option value="1500K" id="akjsehxdfu6">1,5 Mbps</option>
														<option value="2M" id="akjsehxdfu7">2 Mbps</option>
														<option value="2500K" id="akjsehxdfu8">2,5 Mbps</option>
														<option value="3M" id="akjsehxdfu9" hidden>3 Mbps</option>
														<option value="4M" id="akjsehxdfu10" hidden>4 Mbps</option>
														<option value="5M" id="akjsehxdfu11" hidden>5 Mbps</option>
														<option value="6M" id="akjsehxdfu12" hidden>6 Mbps</option>
                                                        <option value="7M" id="akjsehxdfu13" hidden>7 Mbps</option>
                                                        <option value="8M" id="akjsehxdfu14" hidden>8 Mbps</option>
														<option value="9M" id="akjsehxdfu15" hidden>9 Mbps</option>
														<option value="10M" id="akjsehxdfu16" hidden>10 Mbps</option>
														<option value="11M" id="akjsehxdfu17" hidden>11 Mbps</option>
														<option value="12M" id="akjsehxdfu18" hidden>12 Mbps</option>
														<option value="13M" id="akjsehxdfu19" hidden>13 Mbps</option>
														<option value="14M" id="akjsehxdfu20" hidden>14 Mbps</option>
														<option value="15M" id="akjsehxdfu21" hidden>15 Mbps</option>
														<option value="20M" id="akjsehxdfu22" hidden>20 Mbps</option>
														<option value="25M" id="akjsehxdfu23" hidden>25 Mbps</option>
														<option value="30M" id="akjsehxdfu24" hidden>30 Mbps</option>
														<option value="40M" id="akjsehxdfu25" hidden>40 Mbps</option>
														<option value="50M" id="akjsehxdfu26" hidden>50 Mbps</option>
														<option value="100M" id="akjsehxdfu27" hidden>100 Mbps</option>
													</select>
												</div>
												<div class="col-sm-12">
												    <label class="control-label">'.$bhsa48.'</label>
												    <select id="ex" name="ex" class="form-control" required>
													    <option value="Bebas">'.$bhsa49.'</option>
														<option value="Sudah" selected>'.$bhsa50.'</option>
														<option value="Belum">'.$bhsa51.'</option>
													</select>
												</div>
												<div class="col-sm-12" id="kwuersfada" hidden>
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'kwuersfadn'."'".').hidden='."'hidden'".'; document.getElementById('."'".'kwuersfadb'."'".').hidden='."''".'; document.getElementById('."'".'kwuersfada'."'".').hidden='."'hidden'".';"><b>⇩⇩⇩ Advanced menu ⇩⇩⇩</b></a></center>
												</div>
												<div class="col-sm-12" id="kwuersfadb">
												    <label class="control-label"></label>
												    <center><a href="#" onclick="document.getElementById('."'".'kwuersfadn'."'".').hidden='."''".'; document.getElementById('."'".'kwuersfada'."'".').hidden='."''".'; document.getElementById('."'".'kwuersfadb'."'".').hidden='."'hidden'".';"><b>⇧⇧⇧ Advanced menu ⇧⇧⇧</b></a></center>
												</div>
												<div id="kwuersfadn" hidden>
			    									<div class="col-sm-12">
    													<label class="control-label">Priority</label>
    												    <select id="usrprior" name="usrprior" class="form-control" required>
    													    <option value="1">1 ('.$bhsa136.')</option>
    													    <option value="2">2</option>
    													    <option value="3">3</option>
    													    <option value="4" selected>4</option>
    													    <option value="5">5</option>
    													    <option value="6">6</option>
    													    <option value="7">7</option>
    													    <option value="8">8 ('.$bhsa137.')</option>
    													</select>
    												</div>
    												<div class="col-sm-12">
    													<label class="control-label">Booster'.$pmshgmr.'</label>
    												    <select id="usrbster" name="usrbster" class="form-control"'.$pmshgme.' required>
    													    <option value="0" selected>Disable</option>
    													    <option value="1">Enable</option>
    													</select>
    												</div>
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
															<button data-dismiss="modal" class="btn btn-warning blinking" onclick="window.location.href='."'".'https://youtu.be/CB3vKK_l6SI'."'".'"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;'.$bhsa29.'</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
                                    </div>	
								</div>
							</div>
					            <div class="col-sm-5 col-md-9 thumbnail" style="border: none;">
						            <div class="panel panel-primary">
							            <div class="panel-heading"><center><b>'.$bhsa13.' '.$bhsa48.' PPPoE '.$bhsa52.' ('.date('F Y', strtotime(date('Y').'-'.(date('m') + 1))).')</b></center></div>
									        <div id="maczx"></div>
                                            <script>
                                                $(function() {
                                                    $("#hapusppp form").submit(function() {
                                                        var name = encodeURI($("input#hapuslistbinding:checked").map(function () {return $(this).val();}).get());
                                                        var url = $(this).attr("action");
                                                        $("#tampilppp").load(url + "?remove=nameppp&name=" + name);
                                                        return false;
                                                    });
                                                });
                                            </script>
                                            <div id="hapusppp">
                                            <form action="ajax_remove.php" method="get">
					                        <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="table-01">
							                    <thead>
								                    <tr>
									                    <th>No</th>
									                    <th>'.$bhsa38.'</th>
									                    <th>'.$bhsa18.'</th>
									                    <th class="hidden-xs hidden-sm">'.$bhsa157.'</th>
									                    <th class="hidden-xs hidden-sm">Priority</th>
									                    <th class="hidden-xs hidden-sm">Status</th>
									                    <th>X</th>
								                    </tr>
							                    </thead>
							                    <tbody>';
										                    $i = 0;
                                                            foreach ($util->setMenu('/ppp active')->getAll() as $acpiaaw) {
                                                                $icn = $acpiaaw('name');
                                                                $icip[$icn] = $acpiaaw('address');
                                                                $icmc[$icn] = $acpiaaw('caller-id');
                                                            }
                                                            foreach ($util->setMenu('/ppp profile')->getAll() as $pracaw) {
                                                                $pcn = $pracaw('name');
                                                                $pco = $pracaw('rate-limit');
                    								            //Mendapatkan informasi Rate-Limit
                    								            $npstaqwsx = 1;
                                                                foreach (explode(' ',$pco) as $rateextrak){
                                                                    if ($npstaqwsx == 1){
                                                                        $npstaqwsx = 2;
                                                                    }elseif ($npstaqwsx == 2){
                                                                        if ($rateextrak <> '0/0' and $rateextrak <> '0' and $rateextrak <> ''){
                                                                            $boosta[$pcn] = ' + boost';
                                                                            $boostb[$pcn] = '1';
                                                                        }else{
                                    								        $boosta[$pcn] = '';
                                    								        $boostb[$pcn] = '0';
                                                                        }
                                                                        $npstaqwsx = 3;
                                                                    }elseif ($npstaqwsx == 3){
                                                                        $npstaqwsx = 4;
                                                                    }elseif ($npstaqwsx == 4){
                                                                        $npstaqwsx = 5;
                                                                    }elseif ($npstaqwsx == 5){
                                                                        $proty[$pcn] = $rateextrak;
                                                                        $npstaqwsx = 6;
                                                                    }elseif ($npstaqwsx == 6){
                                                                        $npstaqwsx = 1;
                                                                    }
                                                                }
                                                            }
								                            foreach ($util->setMenu('/ppp secret')->getAll() as $item) {
								                                $statcomx = substr($item('comment'),0,5);
								                                $statcomz = $item('name');
								                                $statcomy = $item('password');
								                                $statcomw = $item('profile');
								                                $usrboosta = $boosta[$statcomw];
								                                $usrboostb = $boostb[$statcomw];
								                                $usrckpryo = $proty[$statcomw];
                                                                $ifwifjiald = substr($statcomw,(strpos($statcomw,'-') + 1));
                                                                $ineb = substr($ifwifjiald,0,strpos($ifwifjiald,'/'));
                                                                $inec = substr($ifwifjiald,(strpos($ifwifjiald,'/') + 1));
                                                                $ifwifjiale = substr($statcomw,0,strpos($statcomw,'-'));
                                                                $inee = substr($ifwifjiale,0,strpos($ifwifjiale,'/'));
                                                                $inef = substr($ifwifjiale,(strpos($ifwifjiale,'/') + 1));
								                                if($icip[$statcomz] <> ''){
								                                    $pppstst = '<b style="color:green">Online</b> '.$icmc[$statcomz].'/'.$icip[$statcomz];
								                                }else{
								                                    $pppstst = 'Offline';
								                                }
								                                $jumHari1 = date('t', mktime(0, 0, 0, date('m'), 1, date('Y')));
								                                $jumHari2 = date('t', mktime(0, 0, 0, (date('m') + 1), 1, date('Y')));
								                                if ($item('disabled') == 'false' and $statcomx == 'Sudah'){
											                        $i++;
										                            echo base64_decode('PHRyPg==');
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('9YWZyhGIhx').strrev('2Yu9GIiMiI').strrev('vRmI9s2Ypx').strrev('mL05WZtV3Y').strrev('l1WZsVEdld').strrev('AKklUeCRnb').strrev('50akqt50ak').'tq'))))."'".'id'."'".').value='."'".$statcomz."'".'; document.getElementById('."'".'pw'."'".').value='."'".$statcomy."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef."'".'; document.getElementById('."'".'ex'."'".').value='."'Sudah'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$usrboostb."'".';"><b>'.str_replace($anctgg,'',$statcomz).'</b></a></td>';
											                        echo base64_decode('PHRkPg==').($jumHari1 - date('d') + $jumHari2).' '.$bhsa20.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace('-',' - ',$statcomw).'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$usrckpryo.' '.$usrboosta.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa50.' ('.$pppstst.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$statcomz.'|'.$statcomw.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }elseif ($item('disabled') == 'false' and $statcomx == 'Belum'){
											                        $i++;
										                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CLwwSN1IDL').strrev('3IyOpIjLwA').'ab1pm'))));
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('9YWZyhGIhx').strrev('2Yu9GIiMiI').strrev('vRmI9s2Ypx').strrev('mL05WZtV3Y').strrev('l1WZsVEdld').strrev('AKklUeCRnb').strrev('50akqt50ak').'tq'))))."'".'id'."'".').value='."'".$statcomz."'".'; document.getElementById('."'".'pw'."'".').value='."'".$statcomy."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef."'".'; document.getElementById('."'".'ex'."'".').value='."'Belum'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$usrboostb."'".';"><b>'.str_replace($anctgg,'',$statcomz).'</b></a></td>';
											                        echo base64_decode('PHRkPg==').($jumHari1 - date('d')).' '.$bhsa20.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace('-',' - ',$statcomw).'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$usrckpryo.' '.$usrboosta.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa51.' ('.$pppstst.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$statcomz.'|'.$statcomw.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }elseif ($item('disabled') == 'true' and $statcomx == 'Habis'){
											                        $i++;
										                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CMgwCMsADL').strrev('akgPisTKy4').strrev('qt50akqt50')))));
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('9YWZyhGIhx').strrev('2Yu9GIiMiI').strrev('vRmI9s2Ypx').strrev('mL05WZtV3Y').strrev('l1WZsVEdld').strrev('AKklUeCRnb').strrev('50akqt50ak').'tq'))))."'".'id'."'".').value='."'".$statcomz."'".'; document.getElementById('."'".'pw'."'".').value='."'".$statcomy."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef."'".'; document.getElementById('."'".'ex'."'".').value='."'Sudah'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$usrboostb."'".';"><b>'.str_replace($anctgg,'',$statcomz).'</b></a></td>';
											                        echo base64_decode('PHRkPjwvdGQ+');
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('gPkR3L84jI').strrev('50akqt50ak').'tq'))));
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').strrev('gPkR3L84jI').strrev('50akqt50ak').'tq'))));
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa53.' ('.$pppstst.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$statcomz.'|'.$statcomw.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }elseif ($item('disabled') == 'false' and $statcomx == 'Bebas'){
											                        $i++;
										                            echo base64_decode('PHRyPg==');
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('9YWZyhGIhx').strrev('2Yu9GIiMiI').strrev('vRmI9s2Ypx').strrev('mL05WZtV3Y').strrev('l1WZsVEdld').strrev('AKklUeCRnb').strrev('50akqt50ak').'tq'))))."'".'id'."'".').value='."'".$statcomz."'".'; document.getElementById('."'".'pw'."'".').value='."'".$statcomy."'".'; document.getElementById('."'".'usrupld'."'".').value='."'".$ineb."'".'; document.getElementById('."'".'usrdownld'."'".').value='."'".$inec."'".'; document.getElementById('."'".'usrminupl'."'".').value='."'".$inee."'".'; document.getElementById('."'".'usrmindown'."'".').value='."'".$inef."'".'; document.getElementById('."'".'ex'."'".').value='."'Bebas'".'; document.getElementById('."'".'usrprior'."'".').value='."'".$usrckpryo."'".'; document.getElementById('."'".'usrbster'."'".').value='."'".$usrboostb."'".';"><b>'.str_replace($anctgg,'',$statcomz).'</b></a></td>';
											                        echo base64_decode('PHRkPg==').$bhsa17.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).str_replace('-',' - ',$statcomw).'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$usrckpryo.' '.$usrboosta.'</td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('GagMHet4WZ').strrev('tNXLuVGZkl').'Ij4ka05tq')))).$bhsa49.' ('.$pppstst.')</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('nbpxjPkRHP').strrev('slHdzBCd1B').strrev('nbhJHdi0TZ').strrev('zBiOtJ3bmN').strrev('TKygSZsF2Y').strrev('9UGc5RHIis').strrev('mYrNWZoNmI').strrev('1xWY2BiI49').'ZT0i')))).$statcomz.'|'.$statcomw.'" id="hapuslistbinding"/></td>';
										                            echo base64_decode('PC90cj4=');
								                                }else{
											                        $i++;
										                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('We0NHIyRHP').strrev('rNWYiJSPlx').strrev('nOk5WdvJ3Z').strrev('1UjMoEmYnJ').strrev('CMgwCMsADL').strrev('akgPisTKy4').strrev('qt50akqt50')))));
											                        echo base64_decode('PHRkPg==').$i.'</td>';
                                                                    echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('XYsNGIkRHP').strrev('kRWaoJSPzN').strrev('jPiMHet4WZ').strrev('9YWZyhGIhx').strrev('2Yu9GIiMiI').strrev('vRmI9s2Ypx').strrev('mL05WZtV3Y').strrev('l1WZsVEdld').strrev('AKklUeCRnb').strrev('50akqt50ak').'tq'))))."'".'id'."'".').value='."'".$statcomz."'".'; document.getElementById('."'".'pw'."'".').value='."'".$statcomy."'".';"><b>'.str_replace($anctgg,'',$statcomz).'</b></a></td>';
											                        echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('HbvNGIkRHP').strrev('iUjI94WYwN').strrev('XZ05WZjxjP').strrev('hGVmp1ba3I').strrev('IyV2c1Bycp').strrev('Q3buBychdH').strrev('ZlRXYlJ3Yg').strrev('1EIt9mcmBC').strrev('L8sWaUlmbp').strrev('4jclRnblN2').strrev('0akgPkR3L8').'5tqka05tq'))));
										                            echo base64_decode('PC90cj4=');
								                                }
										                    }
                                            echo base64_decode(str_replace('ka05tq','=',str_replace('3ab1pm','+',str_replace('u9i8e4','/',strrev('Tek9mY09CP').strrev('lxmYhR3L84').strrev('CIgACIgogP').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('CIgACIgACI').strrev('gACIgACIgA').strrev('XZ05WZjxDI').strrev('AiCmp1ba3I').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('IgACIgACIg').strrev('ACIgACIgAC').strrev('b0RXdixDIg').strrev('0TZwlHdg42').strrev('I0lWbiV3ci').strrev('0zczFGbjBi').strrev('b0JGIuRnYi').strrev('NXZjNWdz1i').strrev('bhB3c84jIz').strrev('0zczFGbjBi').strrev('YphGc5x2Zi').strrev('BXesdGIu92').strrev('c01ibvNWao').strrev('JXYgICazFm').strrev('ZkRWao1SYp').strrev('UWdyRnI94W').strrev('bhB3cvwjPi').strrev('sDczJmbm4j').'ka05tq')))).$bhsa54.' PPPoE</button>
						                    </center>
					                        </form>
						                    </div>            
						                    <div id="tampilppp"></div><br><br>
										    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered hidden-xs" style="border: none;" id="example">
	    								        </tbody>
                                                    <tr style="background:rgba(0,0,0, 0.6); color:#FFF;">
                                                        <td colspan="3"><b>'.$bhsa36.'</b></td>
		    								        </tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa55.'</td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">
                								            <b>'.$bhsa2.'</b> '.$bhsa30.'.<br>
                    								        <b>'.$bhsa3.'</b> '.$bhsa30.'.<br>
                                                            <b>Upload</b> '.$bhsa57.' upload.<br/>
                                                            <b>Download</b> '.$bhsa57.' download.<br/>
									    	                <b>'.$bhsa48.'</b> '.$bhsa58.'.<br/>
									    	            </td>
									            	</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">
        												    <b style="background:rgba(255,0,0, 0.2);">'.$bhsa83.'</b> '.$bhsa111.'.<br/>
        												    <b style="background:rgba(255,255,0, 0.2);">'.$bhsa84.'</b> '.$bhsa112.'.<br/>
        												</td>
        											</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;">'.$bhsa113.'</td>
        											</tr>
                                                    <tr>
                                                        <td colspan="3" style="border: none;"></td>
										            </tr>
										        </tbody>
    								        </table>
						            </div>
					            </div>
    ';
}
 ?>