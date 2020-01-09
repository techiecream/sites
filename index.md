<!DOCTYPE html >
<head>
<title>Robins</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="Kizige Stephen"/>
<meta name="copyright" content="Copyright &#169; 2017"/>
<meta name="version" content="Version 2.0"/>
<style>
#currentTime {
  text-align: center;
  font-family: 'Oswald';
  color: #f05b19;
}
#mats {
  /*font-size: 10em;*/
  text-align: center;
  font-family: 'Oswald';
  /*font-weight: 10pt;*/
  color: #f05b19;
  /*margin: 100px auto;*/
}
body {
  background: #eee;
  color: #444;
  font-family: 'Helvetica', arial, sans-serif;
}

.container {
  background: #fff;
  max-width: 600px;
  width: 90%;
  display: table;
  /*margin: 0 auto;
  margin-top: 40px;*/
  border: 1px solid #cfcbcc;
  text-align: left;
  font-family: 'Oswald';
}

.ctext {
  text-align: left;
  font-family: 'Oswald';
}
.container input {
  border: none;
  display: block;
  width: 98.4%;
  line-height: 1.5;
  padding: 8px 0 8px 10px;
  border-bottom: 1px solid #cfcbcc;
  outline:0;
}

.container h1,h2 {
  text-align: center;
  margin-bottom: 0px;
  line-height: 1;
}
h2 {
  color: gray;
}

.container ul {
  list-style: none;
  margin: 0;
  padding: 0;
  .container li {
    color: #899098;
    font-weight: 400;
    border-bottom: 1px solid #cfcbcc;
    line-height: 1.5;
    padding: 8px 0;
    &:before {
      content: "\25A1";
      padding: 10px 10px;
      font-size: 20px;
    }
    &:hover {
      text-decoration: line-through;
      cursor: pointer;
    }
    &:last-child {
      border-bottom: none;
    }
  }
}

.checked {
  color:green;
    &:before {
      content: "\2713";
      padding: 10px 10px;
      font-size: 20px;
    }
    &:hover {
      text-decoration: none;
      &:after {
        content: "(remove)";
        color: tomato;
        text-align: right;
      }
    }
}

.formLayout
{
font-family:arial;
 size:14px;
background-color: lightgreen;
border: solid 2px #a1a1a1;
padding: 30px;
width: 250px;
}
.formLayout label, .formLayout input
{
display: block;
width: 250px;
float: left;
margin-bottom: 20px;
}
 .formLayout label
{
text-align: left;
}
br
{
clear: left;
}


.formcase
{
font-family:arial;
 size:14px;
background-color: blue;
border: solid 2px #a1a1a1;
padding: 30px;
width: 250px;
}
.formcase label, .formcase input
{
display: block;
width: 250px;
float: left;
margin-bottom: 20px;
}
 .formLayout label
{
text-align: left;
}
br
{
clear: left;
}
</style>

</head>
<body>
<div id="wrapper"><!--this is for the wrapper that is will be the holder of our stuff-->

<div id="header" style="text-align:center"><!--this is for the words that will appear first on the page-->

<a name="tile" ></a><h1>Welcome</h1>

</div><!--end #header--><!--this makes the end of the header-->

<div id="nave" style="text-align:center">
|&nbsp; &nbsp;<a name="devel" href="javascript:void(0);" onClick="progr();">Dev</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="inews" href="JavaScript:void(0)" Onclick="news();">News</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="bonus" href="JavaScript:void(0)" Onclick="bonus();">Bonus</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="email" href="JavaScript:void(0)" Onclick="email();">Email and Search</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="search" href="JavaScript:void(0)" Onclick="searcho();">SportsBooks</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="download" href="JavaScript:void(0)" Onclick="downloads();" >Download</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="freebies" href="JavaScript:void(0)" Onclick="freebies();" >Freebies</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="browserdetails" href="JavaScript:void(0)" OnClick="browser();" >Browser</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name="social" href="JavaScript:void(0)" Onclick="social();" >Social</a>&nbsp; &nbsp;
|&nbsp; &nbsp;<a name ="tinfl" href="javascript:void(0);" onClick="infoc();">TICF</a>&nbsp; &nbsp;

</div><!--end #nav-->

<div id="content"><!--this is for the the content basically the body of the page-->
<br/>
<div id="dd"></div>
<!--quotes section-->
<div id ="random" font-face="verdana" font-size="10" style="text-align:center;" >
<SCRIPT LANGUAGE="JavaScript">
function getMessage() {
var ar = new Array(20)
ar[0] = "Nothing is as easy as it looks."
ar[1] = "Everything takes longer than you think."
ar[2] = "Anything that can go wrong will go wrong."
ar[3] = "If there is a possibility of several things going wrong, the one that will cause the most damage will be the one to go wrong."
ar[4] = "If there is a worse time for something to go wrong, it will happen then."
ar[5] = "If anything simply cannot go wrong, it will anyway."
ar[6] = "If you perceive that there are four possible ways in which a procedure can go wrong, and circumvent these, then a fifth way, unprepared for, will promptly develop."
ar[7] = "Left to themselves, things tend to go from bad to worse."
ar[8] = "If everything seems to be going well, you have obviously overlooked something."
ar[9] = "Nature always sides with the hidden flaw."
ar[10] = "Mother nature is a bitch."
ar[11] = "It is impossible to make anything foolproof because fools are so ingenious."
ar[12] = "Whenever you set out to do something, something else must be done first."
ar[13] = "Every solution breeds new problems."
ar[14] = "Trust everybody ... then cut the cards."
ar[15] = "Two wrongs are only the beginning."
ar[16] = "If at first you don't succeed, destroy all evidence that you tried."
ar[17] = "To succeed in politics, it is often necessary to rise above your principles."
ar[18] = "Exceptions prove the rule ... and wreck the budget."
ar[19] = "Success always occurs in private, and failure in full view."
ar[20] ="The smaller your reality, the more convinced you are that you know everything."
ar[21] ="If the facts don't fit the theory, change the facts."
ar[22] ="The past has no power over the present moment."
ar[23] ="You will not be punished for your anger, you will be punished by your anger."
ar[24] ="Peace comes from within. Do not seek it without."
ar[25] ="The most important moment of your life is now."
ar[26] ="The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."
ar[27] ="As providence rules the universe, so virtue in the soul must rule man."
ar[28] ="One should never increase, beyond what is necessary, the number of entities required to explain anything."
ar[29] ="Waking up at 04:00 everyday make you wiser and richer."
ar[30]='There are some people who live in a dream world, and there are some who face reality; and then there are those who turn one into the other. <i>-By Douglas Everett</i>'

ar[31]='Whether you think you can or whether you think you can\'t, you\'re right! <i>-Henry Ford</i>'

ar[32]='I know of no more encouraging fact than the unquestionable ability of man to elevate his life by conscious endeavor. <i>-Henry David Thoreau</i>'

ar[33]='Do not let what you cannot do interfere with what you can do. <i>-John Wooden</i>'

ar[34]='Accept everything about yourself - I mean everything, You are you and that is the beginning and the end - no apologies, no regrets. <i>-Clark Moustakas</i>'

ar[35]='We must accept life for what it actually is - a challenge to our quality without which we should never know of what stuff we are made, or grow to our full stature. <i>-Ida R. Wylie</i>'

ar[36]='High achievement always takes place in the framework of high expectation. <i>-Jack Kinder</i>'

ar[37]='The measure of a man is the way he bears up under misfortune. <i>-Plutarch</i>'

ar[38]='Don\'t wait for your ship to come in, swim out to it. <i>-Anon</i>'

ar[39]='As I grow older, I pay less attention to what men say. I just watch what they do. <i>-Andrew Carnegie</i>'

ar[40]='No steam or gas ever drives anything until it is confined. No Niagara is ever turned into light and power until it is tunneled. No life ever grows until it is focused, dedicated, disciplined. <i>-Harry Emerson Fosdick</i>'

ar[41]='The words printed here are concepts. You must go through the experiences. <i>-Carl Frederick</i>'

ar[42]='Man cannot discover new oceans unless he has the courage to lose sight of the shore. <i>-Andre Gide</i>'

ar[43]='The wise man does at once what the fool does finally. <i>-Baltasar Gracian</i>'

ar[44]='The world has the habit of making room for the man whose actions show that he knows where he is going. <i>-Napoleon Hill</i>'

ar[45]='Success seems to be connected with action. Successful men keep moving. They make mistakes, but they don\'t quit. <i>-Conrad Hilton</i>'

ar[46]='Do the things you know, and you shall learn the truth you need to know. <i>-George Macdonald</i>'

ar[47]='I have never heard anything about the resolutions of the apostles, but a good deal about their acts. <i>-Horace Mann</i>'

ar[48]='Let us not be content to wait and see what will happen, but give us the determination to make the right things happen. <i>-Peter Marshall</i>'

ar[49]='I hear and I forget, I see and I remember. I do and I understand. <i>-Chinese Proverb</i>'

ar[50]='One may walk over the highest mountain one step at a time. <i>-John Wanamaker</i>'

ar[51]='Every action is either strong or weak, and when every action is strong we are successful. <i>-Wallace D. Wattles</i>'

ar[52]='If we do what is necessary, all the odds are in our favor. <i>-Henry Kissinger</i>'

ar[53]='Little minds are tamed and subdued by misfortune; but great minds rise above them. <i>-Washington Irving</i>'

ar[54]='When an affliction happens to you, you either let it defeat you, or you defeat it... <i>-Rosalind Russell</i>'

ar[55]='There\'s a basic human weakness inherent in all people which tempts them to want what they can\'t have and not want what is readily available to them. <i>-Robert J. Ringer</i>'

ar[56]='If there is something to gain and nothing to lose by asking, by all means ask! <i>-W. Clement Stone</i>'

ar[57]='It\'s not the situation ... It\'s your reaction to the situation <i>-Robert Conklin</i>'

ar[58]='Life at any time can become difficult: life at any time can become easy.  It all depends upon how one adjusts oneself to life. <i>-Morarji Desai</i>'

ar[59]='What happens is not as important as how you react to what happens. <i>-Thaddeus Golas</i>'

ar[60]='To hell with circumstances; I create opportunities. <i>-Bruce Lee</i>'

var now = new Date()
var sec = now.getSeconds()
document.getElementById("random").innerHTML=ar[sec % 61]
}
getMessage()
</script>
    <br/>
    <!--display time-->
<div id="currentTime"></div>

<!--introduction-->
<div id="intro">
About this Page.<a href="javascript:void(0);" onClick="intro();">Click</a>
</div>
<div>
<!--Google Search-->
<form name="search" method = "get" action ="http://www.google.com/search" style="text-align:center;">
<p>Search:<br/></p><input type="text" name="q" />
<br />
<input type="submit" value="Search" />
</form>
</div>
<!--Javascript content display-->
<a name="ticf" ></a>
<div id="techicf" style="text-align:left;"> </div>
<br>

<br/>
<!--To-do List display-->
<div class="container">
  <form  action="#">
    <input type="text" name="item" id="item" placeholder="Add New Task" />
</form>
<ul id="list"></ul>

</div>

<!--Calculator display-->
  <div id="mats">
<table>
    <tr><td align ='center'><b>Calculator:</b></td></tr>
    <tr><td><input type='text' id='fff' placeholder='Enter Number'></td></tr>
        <tr><td><input type='text' id='ffff' placeholder='Enter Number'></td></tr>
         <tr><td><button  onclick="ffffff()">Add</button>
          <button  onclick="fffffff()">Multiply</button>
          <button  onclick="ffffffff()">Subtract</button>
          <button  onclick="fffffffff()">Divide</button></td></tr>
          <tr id="answer"></tr>
    </table>
    </div>
	
  <div id="mats">
<table>
    <tr><td><b>Case Changer:</b></td></tr>
<form class="convertcase">
<tr><td><textarea placeholder="Paste it here" id="stringbox" > </textarea> </td></tr>
<tr><td><button onClick="return convertstring(stringbox, 'sentencecase')" title="Make everything lowercase except the first character and 'I'">Sentence Case</button>
<button onClick="return convertstring(stringbox, 'titlecase')" title="Capitalize the first character of each word, omitting common stop words like 'and', 'at' etc">Title Case</button>
<button onClick="return convertstring(stringbox, 'capitalcase')" title="Capitalize the first character of each word">Capital Case</button> 
<button onClick="return convertstring(stringbox, 'lowercase')"Lower Case everything inside the string.">Lower Case</button> 
<button onClick="return convertstring(stringbox, 'uppercase')" title="Upper Case everything inside the string.">Upper Case</button>
</td></tr>
</form>
<tr><td><p><b>Word Count:</b> <span id="wordcount"></span><br />
<b>Character Count:</b> <span id="charcount"></span></p></td></tr>
    </table>
    </div>
</div>
        <br/><br/>
    
</div><!--end #content--><!--This makes the end of our body-->

<!--#sidebar-->
<div id="sidebar">
<script type="text/javascript">

</script>

</div>
<!--end #sidebar-->
<div id="footer">
   
<script type="text/javascript">
    function doOddsConversions(e,t){var n,o=t.replace(/^txt/i,""),a=document.getElementById("txtUS"),r=document.getElementById("txtDec"),d=document.getElementById("txtFrac"),u=document.getElementById("txtProb"),c=document.getElementById("txtHK"),m=document.getElementById("txtIndo"),i=document.getElementById("txtMalay");if(e.match(/^Ev.*$/i)&&(e=2,o="Dec"),"US"==o)n=US2dec(e);else if("Dec"==o)0>1*e&&(e=Math.abs(1*e)),1>1*e&&(e=1),n=parseFloat(e).toFixed(4);else if("Frac"==o){var l=""+e;l.match(/\//)||(l+="/1"),n=frac2dec(l)}else if("Prob"==o){var l=""+e;e=fmtNumber(l),e>=1&&(e/=100),n=prob2dec(e)}else"HK"==o?n=HK2dec(e):"Indo"==o?n=Indo2dec(e):"Malay"==o&&(n=Malay2dec(e));a.value=dec2US(n),r.value=n,d.value=dec2frac(n),u.value=dec2prob(n),c.value=dec2HK(n),m.value=dec2Indo(n),i.value=dec2Malay(n)}function dec2US(e){var t;return e=parseFloat(e),t=1>=e||0/0==e?0/0:2>e?-100/(e-1):100*(e-1),(t>0?"+":"")+Math.round(100*t)/100}function US2dec(e){var t;return e=parseFloat(e),t=Math.abs(e)<100||0/0==e?0/0:e>0?1+e/100:1-100/e,t.toFixed(4)}function dec2frac(e){e=parseFloat(e-1);var t=Math.round(e)+"/1",n=Math.round(e),o=Math.abs(n-e);for(i=2;i<=200;i++){var a=Math.round(e*i)/i,r=Math.abs(a-e);if(o>r){if(t=Math.round(e*i)+"/"+i,n=a,0==r)break;o=r}}return t}function frac2dec(e){var t=e.split(/\//);return t[1]=void 0==t[1]?1:t[1],(t[0]/t[1]+1).toFixed(4)}function prob2dec(e){return(1/fmtNumber(e)).toFixed(4)}function dec2prob(e){return fmtPercent(1/e)}function HK2dec(e){var t;return e=parseFloat(e),t=0>=e||0/0==e?0/0:e+1,t.toFixed(4)}function dec2HK(e){var t;return e=parseFloat(e),t=1>=e||0/0==e?0/0:e-1,t.toFixed(4)}function Indo2dec(e){var t;return e=parseFloat(e),t=0/0==e||Math.abs(e)<1?0/0:e>=1?e+1:1-1/e,t.toFixed(4)}function dec2Indo(e){var t;return e=parseFloat(e),t=1>=e||0/0==e?0/0:e>=2?e-1:1/(1-e),t.toFixed(4)}function Malay2dec(e){var t;return e=parseFloat(e),t=0/0==e||e>1||0==e?0/0:e>0?e+1:1-1/e,t.toFixed(4)}function dec2Malay(e){var t;return e=parseFloat(e),t=1>=e||0/0==e?0/0:2>=e?e-1:1/(1-e),t.toFixed(4)}function fmtNumber(e){return e=""+e,e=e.replace(/\$/g,""),myNum=e.replace(/\,/g,""),e.match(/\%$/g,"")&&(myNum=e.replace(/\%$/g,""),mynum=parseFloat(myNum)/100),1*myNum}function fmtPercent(e){return(""+e).match(/\%$/g,"")&&(e=e.replace(/\%$/g,""),e/=100),(100*e).toFixed(2)+"%"}function addCommas(e){e+="";for(var t=e.split("."),n=t[0],o=t.length>1?"."+t[1]:"",a=/(\d+)(\d{3})/;a.test(n);)n=n.replace(a,"$1,$2");return n+o}function autofitIframe(e){return null==parent.document.getElementById(e)?-1:(!window.opera&&!document.mimeType&&document.all&&document.getElementById?parent.document.getElementById(e).style.height=this.document.body.offsetHeight+"px":document.getElementById&&(navigator.userAgent.indexOf("Firefox")>=0&&(parent.document.getElementById(e).style.height="1px"),parent.document.getElementById(e).style.height=this.document.body.scrollHeight+"px"),void("0px"==parent.document.getElementById(e).style.height&&setTimeout('autofitIframe("'+e+'")',250)))}function AutoFitMe(){-1==autofitIframe("OddsIFrame")&&autofitIframe("ToolIFrame")}function autofitIframe(e){return null==parent.document.getElementById(e)?-1:(!window.opera&&!document.mimeType&&document.all&&document.getElementById?parent.document.getElementById(e).style.height=this.document.body.offsetHeight+"px":document.getElementById&&(navigator.userAgent.indexOf("Firefox")>=0&&(parent.document.getElementById(e).style.height="1px"),parent.document.getElementById(e).style.height=this.document.body.scrollHeight+"px"),void("0px"==parent.document.getElementById(e).style.height&&setTimeout('autofitIframe("'+e+'")',250)))}</script>
<table id="tblMain" class="mainTable" style="max-width:500px">
<tbody>
<tr>
<td>
<table class="tableHeaders" style="width: 100%;">
<tbody>
<tr>
<td class="header">

<h1>Odds Converter Tool</h1>

</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>
<table class="table">
<tbody>
<tr class="border-bottom">
<td>
<p>Decimal Odds (e.g. 2.50):</p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtDec" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
</tr>
<tr class="border-bottom">
<td>
<p>Fractional Odds (e.g. 3/2):</p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtFrac" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
</tr>
<tr class="border-bottom">
<td>
<p>American Odds (e.g. +150):</p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtUS" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
</tr>
<tr class="border-bottom">
<td>
<p>Hong Kong Odds (e.g. 1.500):</p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtHK" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
</tr>
<tr class="border-bottom">
<td>
<p>Indonesian Odds (e.g. 1.500):</p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtIndo" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
</tr>
<tr class="border-bottom">
<td>
<p>Malay Odds (e.g. -0.6667):</p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtMalay" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
</tr>
<tr class="border-bottom">
<td>
<p><strong>Implied Probability (e.g. 40%):</strong></p>
</td>
<td style="text-align:right;padding-right:15px;">
<input id="txtProb" onchange="doOddsConversions(this.value,this.id);" class="formtext2"/>
</td>
<tr>
<td align="center" colspan="2">
<input type="button" value="Convert" onfocus="this.blur();" class="formtext2 button"/>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

  <br/> <br/>
    <br/><br/>
<form name="Mon Apr 16 2012 12:29:33 GMT-0700 (Pacific Daylight Time)">
  <table style="border: 1px solid #333333; margin-left: auto; margin-right: auto; width: 100%;" cellspacing="0">
    <tbody>
      <tr style="background: #333366;">
        <th style="text-align: center; vertical-align: center; font-size: larger; font-weight: bold; color: #ffffff; padding: 4px;" colspan="2">Kelly Criterion Input</th>
      </tr>
      <tr style="background: #9999CC;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Input Data</th>
        <th style="text-align: right; vertical-align: center; font-weight: bold; padding: 4px;">Values</th>
      </tr>
      <tr style="background: #FFFFFF;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Probability - Enter your odds of winning, say, '.5' for a coin flip, or '.1' for one number out of 10.</th>
        <td style="text-align: right; vertical-align: center; font-weight: bold; padding: 4px;"><input style="text-align: right; vertical-align: center;" name="PROB0" size="15" type="text" value=".5" /></td>
      </tr>
      <tr style="background: #CCCCFF;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Odds - Enter your net odds received, say '2' for 2 to 1 odds.</th>
        <td style="text-align: right; vertical-align: center; font-weight: bold; padding: 4px;"><input style="text-align: right; vertical-align: center;" name="ODDS1" size="15" type="text" value="2" /></td>
      </tr>
      <tr style="background: #FFFFFF;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Bankroll - Enter the amount of money you have to bet. (Dollars)</th>
        <td style="text-align: right; vertical-align: center; font-weight: bold; padding: 4px;"><input style="text-align: right; vertical-align: center;" name="BANK2" size="15" type="text" value="1000" /></td>
      </tr>
      <tr style="background: #CCCCFF;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Adjusted Kelly - Enter Your 'Kelly Adjustment' to divide. '1' for full, '.5' for Half-Kelly, '.25' for Quarter-Kelly, etc.</th>
        <td style="text-align: right; vertical-align: center; font-weight: bold; padding: 4px;"><input style="text-align: right; vertical-align: center;" name="HK3" size="15" type="text" value="1" /></td>
      </tr>
    </tbody>
  </table>
  <table style="border: none; margin-left: auto; margin-right: auto; width: 100%;" cellspacing="0">
    <tbody>
      <tr>
        <th style="text-align: center; vertical-align: center;"><input type="button" value="Calculate" onclick="kellyBet(this.form);" /><input type="reset" /></th>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid #333333; margin-left: auto; margin-right: auto; width: 100%;" cellspacing="0">
    <tbody>
      <tr style="background: #3B3A4A;">
        <th style="text-align: center; vertical-align: center; font-size: larger; font-weight: bold; color: #ffffff; padding: 4px;" colspan="2">Kelly Criterion Calculation</th>
      </tr>
      <tr style="background: #768597;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Calculated Results</th>
        <th style="text-align: right; vertical-align: center; font-weight: bold; padding: 4px;">Values</th>
      </tr>
      <tr style="background: #FFFFFF;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Kelly Criterion (Adjusted)</th>
        <td style="text-align: right; vertical-align: center; padding: 4px;"><input style="text-align: right; vertical-align: center;" name="KC" size="15" type="text" /></td>
      </tr>
      <tr style="background: #ECF1F4;">
        <th style="text-align: left; vertical-align: center; font-weight: bold; padding: 4px;">Bet This Much (Adjusted)</th>
        <td style="text-align: right; vertical-align: center; padding: 4px;"><input style="text-align: right; vertical-align: center;" name="F" size="15" type="text" /></td>
      </tr>
    </tbody>
  </table>

</form>
<br/>
 <div class="formLayout">
<form name=form_vowel>
<h4>Remove Vowels </h4>
<label>Enter a Word or String </label>
<input type="text" name="strings_remove" size=15>
<label>The Result </label>
<input type="text" name="answer" readonly="readonly" size=15><br>
<input type="button" value="Remove" onClick='execute_program()'>
</form>
</div>
<br/>

 <h1>Random Password Generator</h1>
		<form action="#" method="get" onsubmit="doGenerate(event);">
			<div id="charset" class="section" style="margin:0.8em 0em">
				<p style="margin:0.3em 0em">Character set:</p>
				<table style="line-height:1.5">
					<tbody>
						<tr>
							<td><input type="checkbox" id="custom"></td>
							<td><label for="custom"> Custom:</label> 
							<input type="text" id="customchars" value="" size="15" style="width:10em; font-size:80%" oninput="document.getElementById('custom').checked=true;"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="section">
				<table id="type">
					<tbody>
						<tr>
							<td><input type="radio" name="type" id="by-length" checked="checked"> <label for="by-length">Length:&#xA0;</label></td>
							<td><input type="number" min="0" value="10" step="1" id="length" style="width:4em" oninput="document.getElementById('by-length').checked=true;"> characters</td>
						</tr>
						<tr>
							<td><input type="radio" name="type" id="by-entropy"> <label for="by-entropy">Entropy:</label>&#xA0;</td>
							<td><input type="number" min="0" value="128" step="any" id="entropy" style="width:4em" oninput="document.getElementById('by-entropy').checked=true;"> bits</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p style="max-width:unset; line-height:1.35; word-break:break-all">
				<input type="submit" value="Generate">
				<input type="button" value="Copy" id="copy-button" onclick="doCopy();" disabled="disabled">
				Password: <span id="password"></span>
			</p>

	</form>

<div>
    <textarea name="text-to-copy" id="text-to-copy" cols="30" rows="10" placeholder="Paste it here"></textarea>
	    <button id="copy-text">Copy</button>
    <span id="copied-text" style="display: none;">Copied!</span>
</div>
		
		
		<!--==== JavaScript code ====-->
		
		<script type="text/javascript">
		"use strict";
		
		
		/*-- Configuration --*/
		
		var CHARACTER_SETS = [
			[true, "Numbers", "0123456789"],
			[true, "Lowercase", "abcdefghijklmnopqrstuvwxyz"],
			[false, "Uppercase", "ABCDEFGHIJKLMNOPQRSTUVWXYZ"],
			[false, "ASCII symbols", "!\"#$%" + String.fromCharCode(38) + "'()*+,-./:;" + String.fromCharCode(60) + "=>?@[\\]^_`{|}~"],
			[false, "Space", " "],
		];
		
		
		
		/*-- Global variables --*/
		
		var passwordElem   = document.getElementById("password"   );
		var statisticsElem = document.getElementById("statistics" );
		var copyElem       = document.getElementById("copy-button")
		var cryptoObject    = null;
		var currentPassword = null;
		
		
		
		/*-- Initialization --*/
		
		function initCharsets() {
			function createElem(tagName, attribs) {
				var result = document.createElement(tagName);
				if (attribs !== undefined) {
					for (var key in attribs)
						result[key] = attribs[key];
				}
				return result;
			}
			
			var container = document.querySelector("#charset tbody");
			var endElem = document.querySelector("#charset tbody > tr:last-child");
			CHARACTER_SETS.forEach(function(entry, i) {
				var tr = createElem("tr");
				var td = tr.appendChild(createElem("td"));
				var input = td.appendChild(createElem("input", {
					type: "checkbox",
					checked: entry[0],
					id: "charset-" + i}));
				var td = tr.appendChild(createElem("td"));
				var label = td.appendChild(createElem("label", {
					htmlFor: "charset-" + i,
					textContent: " " + entry[1] + " "}));
				var small = label.appendChild(createElem("small", {
					textContent: "(" + entry[2] + ")"}));
				container.insertBefore(tr, endElem);
			});
		}
		
		
		function initCrypto() {
			var elem = document.getElementById("crypto-getrandomvalues-entropy");
			elem.textContent = "\u2717";  // X mark
			
			if ("crypto" in window)
				cryptoObject = crypto;
			else if ("msCrypto" in window)
				cryptoObject = msCrypto;
			else
				return;
			
			if (!("getRandomValues" in cryptoObject) || !("Uint32Array" in window) || typeof Uint32Array != "function")
				cryptoObject = null;
			else
				elem.textContent = "\u2713";
		}
		
		
		
		/*-- Entry points from HTML code --*/
		
		function doGenerate(ev) {
			ev.preventDefault();
			
			// Get and check character set
			var charset = getPasswordCharacterSet();
			if (charset.length == 0) {
				alert("Error: Character set is empty");
				return;
			} else if (document.getElementById("by-entropy").checked ? charset.length == 1 : false) {
				alert("Error: Need at least 2 distinct characters in set");
				return;
			}
			
			// Calculate desired length
			var length;
			if (document.getElementById("by-length").checked)
				length = parseInt(document.getElementById("length").value, 10);
			else if (document.getElementById("by-entropy").checked)
				length = Math.ceil(parseFloat(document.getElementById("entropy").value) * Math.log(2) / Math.log(charset.length));
			else
				throw "Assertion error";
			
			// Check length
			if (0 > length) {
				alert("Negative password length");
				return;
			} else if (length > 10000) {
				alert("Password length too large");
				return;
			}
			
			// Generate password
			currentPassword = generatePassword(charset, length);
			
			// Calculate and format entropy
			var entropy = Math.log(charset.length) * length / Math.log(2);
			var entropystr;
			if (70 > entropy)
				entropystr = entropy.toFixed(2);
			else if (200 > entropy)
				entropystr = entropy.toFixed(1);
			else
				entropystr = entropy.toFixed(0);
			
			// Set output elements
			passwordElem.textContent = currentPassword;
			statisticsElem.textContent = "Length = " + length + " chars, \u00A0\u00A0Charset size = " +
				charset.length + " symbols, \u00A0\u00A0Entropy = " + entropystr + " bits";
			copyElem.disabled = false;
		}
		
		
		function doCopy() {
			var container = document.querySelector("body");
			var textarea = document.createElement("textarea");
			textarea.style.position = "fixed";
			textarea.style.opacity = "0";
			container.insertBefore(textarea, container.firstChild);
			textarea.value = currentPassword;
			textarea.focus();
			textarea.select();
			document.execCommand("copy");
			container.removeChild(textarea);
		}
		
		
		
		/*-- Low-level functions --*/
		
		function getPasswordCharacterSet() {
			// Concatenate characters from every checked entry
			var rawCharset = "";
			CHARACTER_SETS.forEach(function(entry, i) {
				if (document.getElementById("charset-" + i).checked)
					rawCharset += entry[2];
			});
			if (document.getElementById("custom").checked)
				rawCharset += document.getElementById("customchars").value;
			rawCharset = rawCharset.replace(/ /g, "\u00A0");  // Replace space with non-breaking space
			
			// Parse UTF-16, remove duplicates, convert to array of strings
			var charset = [];
			for (var i = 0; rawCharset.length > i; i++) {
				var c = rawCharset.charCodeAt(i);
				if (0xD800 > c || c >= 0xE000) {  // Regular UTF-16 character
					var s = rawCharset.charAt(i);
					if (charset.indexOf(s) == -1)
						charset.push(s);
					continue;
				}
				if (0xDC00 > c ? rawCharset.length > i + 1 : false) {  // High surrogate
					var d = rawCharset.charCodeAt(i + 1);
					if (d >= 0xDC00 ? 0xE000 > d : false) {  // Low surrogate
						var s = rawCharset.substring(i, i + 2);
						i++;
						if (charset.indexOf(s) == -1)
							charset.push(s);
						continue;
					}
				}
				throw "Invalid UTF-16";
			}
			return charset;
		}
		
		
		function generatePassword(charset, len) {
			var result = "";
			for (var i = 0; len > i; i++)
				result += charset[randomInt(charset.length)];
			return result;
		}
		
		
		// Returns a random integer in the range [0, n) using a variety of methods.
		function randomInt(n) {
			var x = randomIntMathRandom(n);
			x = (x + randomIntBrowserCrypto(n)) % n;
			return x;
		}
		
		
		// Not secure or high quality, but always available.
		function randomIntMathRandom(n) {
			var x = Math.floor(Math.random() * n);
			if (0 > x || x >= n)
				throw "Arithmetic exception";
			return x;
		}
		
		
		// Uses a secure, unpredictable random number generator if available; otherwise returns 0.
		function randomIntBrowserCrypto(n) {
			if (cryptoObject == null)
				return 0;
			// Generate an unbiased sample
			var x = new Uint32Array(1);
			do cryptoObject.getRandomValues(x);
			while (x[0] - x[0] % n > 4294967296 - n);
			return x[0] % n;
		}
		
		
		
		/*-- Initialization --*/
		
		initCharsets();
		initCrypto();
		copyElem.disabled = true;
		</script> 
    <!--
For faster loading time we move all javascript to the footer
-->
<script type="text/javascript">
//In this section we setup the link for getting the browser details of the device.
function browser(){
var g;
g=navigator.appCodeName;
name=navigator.appName;
version=navigator.appVersion;
cooks=navigator.cookieEnabled;
os=navigator.platform;
agent=navigator.userAgent;
document.getElementById("intro").innerHTML="<b>Browser Name:</b>"+name +"<br/>"+"  "+"  " +"<b>Browser Version:</b>"+version +"<br/>"+" "+"<b>Cookie Status:</b>"+cooks +"<br/>"+" " +"<b>Operating System:</b>"+os+"<br/>" +" " +"<b>User Agent:</b>"+agent;
}
</script>

<script type="text/javascript">
function infoc(){
var pa="<br/><b><p style='text-align:center;'>TICF</p></b><br/>TICF stands for <b>T</b>echiecream <b>I</b>nformation <b>C</b>ollection <b>F</b>orm.<p>By clicking in the links on the form you will get detials on what to do and how to deal with the challenges.</p><br/>As of 20th/03/2019 TICF consists of 11 Forms that can be used to collect data, namely:<br/><br/><b><div id='techicfa'><a href='javascript:void(0);' onClick='formas();'>Form A</a></b> which is used when one wants to apply for a job online, it can be used to create job interview winning CVs. </div><br/><b><div id='techicfb'><a href='javascript:void(0);' onClick='formbs();'>Form B</a></b> which is used for profiling indivudial that if you need to know someone but can't seem to find a guide you can use it as a template.</div><br/><b><div id='techicfe'><a href='javascript:void(0);' onClick='formes();'>Form E</a></b> when some one is applying for a degree or any university or school online education application form. </div><br/><div id='techicfm'><b><a href='javascript:void(0);' onClick='formms();'>Form M</a></b> When called for a computer maintenance job you can use this as a guide to ensure that you do never missa point</div> <br/><div id='techicfp'><b><a href='javascript:void(0);' onClick='formps();'>Form P</a></b> For those who want to want to make money from Betting on soccer games and Prediction events</div><br/><div id='techicft'><b><a href='javascript:void(0);' onClick='formts();'>Form T</a></b> With the current re registration of teachers you use this form to capture information that can be used during the TMIS registration.</div><br/><div id='techicfw'><b><a href='javascript:void(0);' onClick='formws();'>Form W</a></b> To update the civil service details of any active or inactive civil servant.</div><br/><div id='techicfx'><b> <a href='javascript:void(0);' onClick='formxs();'>Form X</a></b> any company, group,asscoiation or club that needs a Tax Identification Number (TIN) can fill in this non individual tin </div><br/><div id='techicfy'><b><a href='javascript:void(0);' onClick='formys();'>Form Y</a></b> an individual who needs a Tax Identification Number (TIN) can fill in this form. </div><br/><div id='techicfz'><b><a href='javascript:void(0);' onClick='formzs();'>Form Z</a></b> for individual or companies that need email addresses.</div><br/><br/>";
document.getElementById("techicf").innerHTML=pa;
}
</script>

<script type="text/javascript">
function formas(){
var ffa="<b><a href='javascript:void(0);' onClick='formas();'>Form A<br/></a></b> <b>Guidelines for filling Form A</b><br/><p><b>YOU ASK TO HELP FIRST DO YOUR RESEARCH.</b></p><br/>For any online application to be successful, first do your research about the website and the type of technology they use, the requirements that are needed and most of all first make sure that you have set up the email for the individual who need to apply. If you haven't done so please check <a href='javascript:void(0);' onClick='formzs();'>Form Z</a>. <br/> <br/>Successful application also require high standards of patience and also understanding the exact respobilities that one is going to do, otherwise just copying and pasting work won't get you the aplication successful<br/><p>Take as much time as you may need and also make sure that you have at least 100MBS of data</p>.<p>The following are a must for all and before you begin any online application you must make sure that these are available:<br/> 1)Working and current Email address<br/>2)Scanned Copies of all their academic documents<br/>3).Current and updated CV<br/>4)Current and working phone numbers<br/> If any of the above is missing please create it using the available templates.<p>Make sure that you upload all the scanned documents to their email through your email for security purposes. ";
document.getElementById("techicfa").innerHTML=ffa;
}
</script>
	
<script type="text/javascript">
function formbs(){
var ffb="<b>Guidelines for filling Form B</b><br/><p>Just start with what you know and fill in the blanks, forexample using a phone number you can get their full names, get their facebook id, whatsapp and instagram.</p>";
document.getElementById("techicfb").innerHTML=ffb;
}
</script>

<script type="text/javascript">
function formes(){
var ffe="<b>Guidelines for filling Form E</b><br/><p><b>YOU ASK TO HELP FIRST DO YOUR RESEARCH.</b></p><br/>For any online application to be successful, first do your research about the website and the type of technology they use, the requirements that are needed and most of all first make sure that you have set up the email for the individual who need to apply. If you haven't done so please check <a href='javascript:void(0);' onClick='formzs();'>Form Z</a>. <br/> <br/>Successful application also require high standards of patience and also understanding the cut off point list of availavle cousres, fees structure otherwise just copying and pasting work won't get you the aplication successful<br/><p>Take as much time as you may need and also make sure that you have at least 100MBS of data</p>.<p>The following are a must for all and before you begin any online application you must make sure that these are available:<br/> 1)Working and current Email address<br/>2)Scanned Copies of all their academic documents<br/>3).Recommendation letter <br/>4)Current and working phone numbers<br/> If any of the above is missing please create it using the available templates.<p>Make sure that you upload all the scanned documents to their email through your email for security purposes. ";
document.getElementById("techicfe").innerHTML=ffe;
}
</script>
	
<script type="text/javascript">
function formms(){
var ffm="<b>Guidelines for filling Form M</b><br/><p>Computer repair and maintanance can be an uphill task, you can copy and paste this in notepad<br/></p><textarea rows='25' cols='25'>@echo off&#13del /s /f /q 'C:/Users/%username%/Links/*.*'&#13del /s /f /q c:/windows/temp/*.*&#13rmdir /s /q c:/windows/temp&#13md c:/windows/temp&#13rmdir /s /q C:/WINDOWS/Prefetch&#13del /s /f /q %temp%/*.*&#13rd /s /q %temp%&#13del C:/WINDOWS/Temp/*.*&#13del C:/DOCUME~1/ADMINI~1/LOCALS~1/Temp/*.tmp&#13del C:/WINDOWS/Prefetch/*.pf&#13del C:/Documents and Settings/Administrator/Recent/*.*&#13del C:/Documents and Settings/Administrator/Cookies/*.*&#13del /s /q /f 'C:/Users/%username%/AppData/Roaming/Microsoft/Windows/Start Menu/Programs/Startup/*.*'&#13del /s /q C:/users/%username%/AppData/Local/Microsoft/Windows/Temporary Internet Files/*.*&#13del /s /q C:/users/%username%/AppData/Local/Temp/*.*&#13del /s /q C:/users/%username%/AppData/Roaming/Microsoft/Office/Recent/*.*&#13echo Your Computer is Clean and Faster&#13pause.&#13.</textarea><br/>Don't forget to replace forward slice with a backward slice ";
document.getElementById("techicfm").innerHTML=ffm;
}
</script>
<script type="text/javascript">
function formps(){
var ffp="<b>Guidelines for filling Form P</b><br/>";
document.getElementById("techicfp").innerHTML=ffp;
}
</script>
	
<script type="text/javascript">
function formts(){
var fft="<b>Guidelines for filling Form T</b><br/>";
document.getElementById("techicft").innerHTML=fft;
}
</script>

<script type="text/javascript">
function formws(){
var ffw="<b>Guidelines for filling Form W</b><br/>";
document.getElementById("techicfw").innerHTML=ffw;
}
</script>
	
<script type="text/javascript">
function formxs(){
var ffx="<b>Guidelines for filling Form X</b><br/>";
document.getElementById("techicfx").innerHTML=ffx;
}
</script>
    
<script type="text/javascript">
function formys(){
var ffy="<b>Guidelines for filling Form Y</b><br/>";
document.getElementById("techicfy").innerHTML=ffy;
}
</script>
	
<script type="text/javascript">
function formzs(){
var ffz="<b>Guidelines for filling Form Z</b><br/>";
document.getElementById("techicfz").innerHTML=ffz;
}
</script>
<script type="text/javascript">
//In this section we setup the link for getting the browser details of the device.
function browser(){
var g;
g=navigator.appCodeName;
name=navigator.appName;
version=navigator.appVersion;
cooks=navigator.cookieEnabled;
os=navigator.platform;
agent=navigator.userAgent;
document.getElementById("techicf").innerHTML="<b>Browser Name:</b>"+name +"<br/>"+"  "+"  " +"<b>Browser Version:</b>"+version +"<br/>"+" "+"<b>Cookie Status:</b>"+cooks +"<br/>"+" " +"<b>Operating System:</b>"+os+"<br/>" +" " +"<b>User Agent:</b>"+agent;
}
</script>
<script type="text/javascript">
//In this section we setup the links for the news websites that we can commonly visit.
function news(){
var nc="<a href='http://www.cnn.com/'target='_blank'>CNN</a>";
var nm="<a href='http://mobile.monitor.co.ug/' target='_blank'>Monitor</a>";
var ni="<a href='http://www.investigator.co.ug/' target='_blank'>Investigator</a>";
var no="<a href='http://www.orange.ug/news' target='_blank'>Orange News</a>";
var ng="<a href='http://www.theguardian.com' target='_blank'>The Guardian</a>";
var nid="<a href='http://independent.co.ug' target='_blank'>The Independent</a>";
var nbb="<a href='http://m.bbc.com' target='_blank'>BBC</a>";
var nre="<a href='http://reddit.com' target='_blank'>Reddit</a>";
var nms="<a href='http://msn.com' target='_blank'>MSN</a>";
var nret="<a href='http://reuters.com' target='_blank'>Reuters</a>";
var niq="<a href='http://www.theinquirer.com' target='_blank'>The Inquirer</a>";
var nbi="<a href='http://www.bigeye.ug' target='_blank'>Bigeye</a>";
var nob="<a href='http://www.observer.ug' target='_blank'>Observer</a>";
var nal="<a href='http://www.aljazeera.com' target='_blank'>Al Jazeera</a>";
var ngn="<a href='http://news.google.com' target='_blank'>Google News</a>";
var nyn="<a href='http://news.yahoo.com' target='_blank'> Yahoo News </a>";

document.getElementById("techicf").innerHTML="<br/>"+nm+"<br/>"+ni+"<br/>"+no+"<br/>"+ng+"<br/>"+nid+"<br/>"+nbb+"<br/>"+nre+"<br/>"+nms+"<br/>"+nret+"<br/>"+niq+"<br/>"+nbi+"<br/>"+nob+"<br/>"+nal+"<br/>"+ngn+"<br/>"+nyn;
}
</script>
<script type="text/javascript">
//In this section we setup the links for  some of the common email service providers.
function email(){
var eg="<a href='http://mail.google.com/' target='_blank'>Gmail</a>";
var ey="<a href='http://mail.yahoo.com/' target='_blank'>Y!mail</a>";
var ep="<a href='http://privnote.com/' target='_blank'>Privnote</a>";
var ea="<a href='http://openinboxexperiment.com/send/' target='_blank'>Anon Mail</a>";
var sg="<a href='http://www.google.com' target='_blank'>Google</a>";
var sy="<a href='http://search.yahoo.com' target='_blank'>Yahoo</a>";
var sb="<a href='http://www.bing.com' target='_blank'>Bing</a>";
var sdp="<a href='http://m.dogpile.com' target='_blank'>Dogpile</a>";
var sak="<a href='http://ask.com' target='_blank'>Ask</a>";
var sao="<a href='http://search.aol.com' target='_blank'>AOL Search</a>";
var swo="<a href='http://wow.com' target='_blank'>wow</a>";
var swe="<a href='http://webcrawler.com' target='_blank'>Webcrawler</a>";
var smw="<a href='http://mywebsearch.com' target='_blank'>My Web Search</a>";
var sis="<a href='http://infospace.com' target='_blank'>lnfospace</a>";
var sifo="<a href='http://info.com' target='_blank'>info</a>";
var sddg="<a href='http://duckduckgo.com' target='_blank'>Duckduckgo</a>";
var sbk="<a href='http://blekko.com' target='_blank'> Blekko</a>";
document.getElementById("techicf").innerHTML=eg+"<br/>"+ep+"<br/>"+ea+sg+"<br/>"+sy+"<br/>"+sb+"<br/>"+sdp+"<br/>"+sak+"<br/>"+sao+"<br/>"+swo+"<br/>"+swe+"<br/>"+smw+"<br/>"+sis+"<br/>"+sifo+"<br/>"+sddg+"<br/>"+sbk+"<br/>";
}
</script>
<script type="text/javascript">
//In this section we setup the links for programming sites.
function progr(){
var ptp="<a href='http://www.tutorialspoint.com' target='_blank'>Tutorialspoint</a>";
var pahp="<a href='http://www.afterhoursprogramming.com' target='_blank'>After hours programming</a>";
var plp="<a href='http://www.learnpython.org' target='_blank'>Learn Python</a>";
var pps="<a href='http://www.pyschools.com' target='_blank'>Pyschools</a>";
var pca="<a href='http://www.codeacademy.com' target='_blank'>Code Academy</a>";
var pjs="<a href='http://www.jellyshell.com' target='_blank'>Jellyshell</a>";
document.getElementById("techicf").innerHTML=ptp+"<br/>"+pahp+"<br/>"+plp+"<br/>"+pps+"<br/>"+pca+"<br/>"+pjs;
}
</script>
<script type="text/javascript">
//In this section we setup the links of common internet resourceful links s.
function bonus(){
var bdt="<a href='http://www.dailytech.com' target='_blank'>Daily Tech</a>";
var btg="<a href='http://www.techgreetcom' target='_blank'>Tech Greet</a>";
var bniw="<a href='http://www.nowiknow.com' target='_blank'>Now I Know</a>";
var bjw="<a href='http://www.johnnywebber.com' target='_blank'>JohnnyWebber</a>";
var bdi="<a href='http://www.Iabnol.org' target='_blank'>Digital Inspirations</a>";
var bch="<a href='http://www.thechesswebsite.com' target='_blank'>Chess</a>";
var bso="<a href='http://www.sophos.com' target='_blank'>Sophos</a>";
var bcr="<a href='http://www,cronose.com' target='_blank'>Cronose</a>";
var bnt="<a href='http://www.netted.net' target='_blank'>Netted</a>";
var bthn="<a href='http://www.thehackernews.com' target='_blank'>The Hacker News</a>";
var blh="<a href='http://www.lifehacker.com' target='_blank'>Lifehacker</a>";
var bkt="<a href='http://kizigebabiger.blogspot.com' target='_blank'>Kinetic</a>";
var btc="<a href='http://techcrunch.com' target='_blank'>Techcrunch</a>";
var bms="<a href='http://mashable.com' target='_blank'>Mashable</a>";
var begd="<a href='http://engadget.com' target='_blank'>Engadget</a>";
var bwts="<a href ='http://w3school.com' target='_blank'>W3school</a>";
document.getElementById("techicf").innerHTML=bdt+"<br/>"+btg+"<br/>"+bniw+"<br/>"+bjw+"<br/>"+bdi+"<br/>"+bch+"<br/>"+bso+"<br/>"+bcr+"<br/>"+bnt+"<br/>"+bthn+"<br/>"+blh+"<br/>"+bkt+"<br/>"+btc+"<br/>"+bms+"<br/>"+begd+"<br/>"+bwts;
}
</script>
<script type="text/javascript">
//In this section we setup the links for  the downloading websites we can use on  any device.
function downloads(){
var dg="<a href='http://m.getjar.com' target='_blank'>GetJar</a>";
var dw="<a href='http://www.waptrick.com' target='_blank'>Waptrick</a>";
var dgg="<a href='http://gutenberg.org' target='_blank'>Gutenberg</a>";
var dnc="<a href='http://bit.ly/NokiaCertificate' target='_blank'>Nokia Certificates</a>";
var dwh="<a href='http://www.whatsapp.com/download/android/' target='_blank'>Whatsapp Apk</a>";
var daa="<a href='http://www.appsapk.com' target='_blank'>AppApks</a>";
var mpsk="<a href='http://www.mp3skull.com' target='_blank'>MP3 Skull</a>";
var tuby="<a href='http://tubidy.com' target='_blank'>Tubidy</a>";
var mpj="<a href='http://www.mp3juices.com' target='_blank'>MP3 Juices<a>";
var sof="<a href='http://soundcloud.com' target='_blank'>Souncloud</a>";
var bmpt="<a href='http://beemp3.com' target='_blank'>Bee mp3</a>";
var sgk="<a href='http://grooveshark.com' target='_blank'>Groove Shark</a>";
var mtiv="<a href='http://mtv.com' target='_blank'>MTV</a>";
var olin="<a href='http://allmusic.com' target='_blank'>All Music</a>";
var lasf="<a href='http://last.fm' target='_blank'>Last FM</a>";
var tpbf="<a href='http://www.thepiratebay.org' target='_blank'>The Pirate Bay</a>";
var f1="<a href='https://www.fortebet.ug/pdf/today_offer.pdf' target='_blank'>Today Offer</a>";
var f2="<a href='https://www.fortebet.ug/pdf/full_offer.pdf'target='_blank'>Full Offer</a>";
//var f3="<a href='https://www.kingssportsbet.com/SportsBettingService/Fixture/Fixture.xlsx'target='_blank'>Kings</a>";
document.getElementById("techicf").innerHTML=dg+"<br/>"+dw+"<br/>"+dgg+"<br/>"+dnc+"<br/>"+dwh+"<br/>"+daa+"<br/>"+mpsk+"<br/>"+tuby+"<br/>"+mpj+"<br/>"+sof+"<br/>"+bmpt+"<br/>"+sgk+"<br/>"+mtiv+"<br/>"+olin+"<br/>"+lasf+"<br/>"+tpbf+"<br/>"+f1+"<br/>"+f2+"<br/>";
}
</script>
<script type="text/javascript">
//In this section we setup the links for the search engines that can be used.
function searcho(){
var sg="<a href='http://www.betway.ug' target='_blank'>Betway</a>";
var sy="<a href='http://www.betpawa.ug' target='_blank'>BetPawa</a>";
var sb="<a href='http://www.kingssportsbet.com' target='_blank'>KingsSport Bet</a>";
var sdp="<a href='http://www.fortebet.ug' target='_blank'>Fortbet</a>";
document.getElementById("techicf").innerHTML=sg+"<br/>"+sy+"<br/>"+sb+"<br/>"+sdp+"<br/>";
}
</script>

    
<script type="text/javascript">
//In this section we setup the links for some of the common free service from ISP.
function freebies(){
var fo="<a href='http://www.orange.ug' target='_blank'>Orange</a>";
var ff="<a href='http://O.facebook.com' target='_blank'>Zero Facebook</a>";
var fw="<a href='http://en.m.wikipedia.org' target='_blank'>Wikipedia</a>";
var fm="<a href='http://www.mtn.co.ug/mobile' target='_blank'>MTN Mobile</a>";
var fmp="<a href='http://www.mtnplay.co.ug' target='_blank'>MTNPlay</a>";
var fcc="<a href='http://www.cokeconnect.ug/' target='_blank'>Coke Connect</a>";
//var fby="<a href='https://developer.facebook.com/tools/debug/og/echo?q=www.google.com'>Bypass</a>";
document.getElementById("techicf").innerHTML=fo+"<br/>"+fw+"<br/>"+fm+"<br/>"+fmp+"<br/>"+fcc+"<br/>"+ff+"<br/>";
}
</script>
<script type="text/javascript">
//In this section we setup the links for the social services we commonly use
function social (){
var st="<a href='https://mobile.twitter.com/' target='_blank'>Twitter</a>";
var sf="<a href='https://m.facebook.com/' target='_blank'>Facebook </a>";
var stu="<a href='http://tumblr.com' target='_blank'>Tumblr</a>";
var smy="<a href='http://myspace.com' target='_blank'>Myspace</a>";
var spi="<a href='http://pinterestcom' target='_blank'>Pinterest</a>";
var stel="<a href='http://web.telegram.org' target='_blank'>Telegram</a>";
document.getElementById("techicf").innerHTML=st+"<br/>"+sf+"<br/>"+stu+"<br/>"+smy+"<br/>"+spi+"<br/>"+stel+"<br/>";
}
</script>
<script type="text/javascript">
function intro(){
var pa="<br/>Welcome to my one page template, l have been working on this simple page for over two years and I must admit that it's been exciting much as it was exhausting. I can't remember how i got started but all i can remember is that i have been adding new feature to it since.This single page is capable of lots of things. I have built it as a single complete webpage of my choice. <br/>The quick sexy brown fox jumped over the lazy dog<br/><br/>";
document.getElementById("intro").innerHTML=pa;
}
</script>

    <script>
    window.onload = function() {
  clock();
    function clock() {
    var now = new Date();
    var TwentyFourHour = now.getHours();
    var hour = now.getHours();
    var min = now.getMinutes();
    var secs = now.getSeconds();
    var ddd = now.getDate();
    var mid = 'pm';
    if (min < 10) {
      min = "0" + min;
    }
    if (hour < 10) {
      hour = "0"+ hour;
   
    }
    if(hour==0){
      hour=12;
    }
    if(TwentyFourHour < 12) {
       mid = 'am';
    }
    if (secs < 10) {
      secs = "0" + secs;
    }
  document.getElementById('currentTime').innerHTML = hour +':'+min +':' +secs;
    setTimeout(clock, 1000);
    }
}
</script>
    <script>
    (function(){
  
  var list = document.querySelector('#list'),
      form = document.querySelector('form'),
      item = document.querySelector('#item');
  
  form.addEventListener('submit',function(e){
    e.preventDefault();
    list.innerHTML += '<li>' + item.value + '</li>';
    store();
    item.value = "";
  },false)
  
  list.addEventListener('click',function(e){
    var t = e.target;
    if(t.classList.contains('checked')){
      t.parentNode.removeChild(t);
    } else {
      t.classList.add('checked');
    }
    store();
  },false)
  
  function store() {
    window.localStorage.myitems = list.innerHTML;
  }
  
  function getValues() {
    var storedValues = window.localStorage.myitems;
    if(!storedValues) {
      list.innerHTML = '<li>Here is your to do list</li><br/>'+
                       '<li>Execrise</li><br/>'+
                       '<li>Take a bath</li><br/>'+
                       '<li>Take breakfast</li><br/>'+
                       '<li>Schedule days Activity</li><br/>'+
                       '<li>Check email</li><br/>'+
                       '<li>Check social Media Accounts</li><br/>'+
                       '<li>Check results and downloads todays offer</li><br/>'+
                       '<li>Reward yourself with a nap</li><br/>';
    }
    else {
      list.innerHTML = storedValues;
    }
  }
  getValues();
})();
</script>

    <script type="text/javascript">



function ffffff()
    {
        var sv1= document.getElementById("fff").value;
        var sd1= document.getElementById("ffff").value;
        var scv1= parseFloat(sv1);
        var scd1= parseFloat(sd1);
        var spv=parseFloat(scv1+scd1);
        document.getElementById("answer").innerHTML="Sum: "+spv;
    }
function fffffffff()
    {
        var sv1= document.getElementById("fff").value;
        var sd1= document.getElementById("ffff").value;
        var scv1= parseFloat(sv1);
        var scd1= parseFloat(sd1);
        var spv=parseFloat(scv1/scd1);
        document.getElementById("answer").innerHTML="Division: "+spv;
    }
function ffffffff()
    {
        var sv1= document.getElementById("fff").value;
        var sd1= document.getElementById("ffff").value;
        var scv1= parseFloat(sv1);
        var scd1= parseFloat(sd1);
        var spv=parseFloat(scv1-scd1);

        document.getElementById("answer").innerHTML="Difference: "+spv;
    }
function fffffff()
    {
        var sv1= document.getElementById("fff").value;
        var sd1= document.getElementById("ffff").value;
        var scv1= parseFloat(sv1);
        var scd1= parseFloat(sd1);
        var spv=parseFloat(scv1*scd1);

        document.getElementById("answer").innerHTML="Product: "+spv;
    }
    
    </script>
    <!--Charchter counter -->
    <script type="text/javascript">
function count()
{
  var total=document.getElementById("text").value;
  total=total.replace(/\s/g, '');
  document.getElementById("total").innerHTML="Total Characters:"+total.length;
}
</script>

  <script type="text/javascript">
  function kellyBet(form) {
// Convert Input Variables to Numeric Values
  PROB = eval(form.PROB0.value); // Probability - Enter your odds of winning, say, '.5' for a coin flip, or '.1' for one number out of 10.
  ODDS = eval(form.ODDS1.value); // Odds - Enter your net odds received, say '2' for 2 to 1 odds.
  BANK = eval(form.BANK2.value); // Bankroll - Enter the amount of money you have to bet. (Dollars)
  HK = eval(form.HK3.value); // Adjusted Kelly - Enter Your 'Kelly Adjustment' to divide.  '1' for full, '.5' for Half-Kelly, '.25' for Quarter-Kelly, etc.

// Calculate values
  KC = ((PROB*(ODDS+1)-1)/ODDS)*HK; // Kelly Criterion (Adjusted)
  F = KC*BANK; // Bet This Much (Adjusted)

// Output Calculated Values to Form
form.KC.value = decimalFP(KC, 4);
form.F.value = decimalFP(F, 2);

} // End kellyBet function.

function decimalFP(fpNum,d) {
// This function will format a floating point number to show the desired number of decimal places.

fpNum = Math.round(fpNum*Math.pow(10,d))/Math.pow(10,d);
str = fpNum.toString();
i = str.indexOf(".");
if (i>-1) {
  dif = str.length - i;
  while (dif<(d+1)) {
    str += "0";
    dif = str.length - i;
  }
} else {
  str += ".";
  for (k=0;k<d;k++) {
    str += "0";
  }
}
return str;
} // End decimalFP function.
</script>


    <script>
    window.onload = function()
    clck();
    function clck() {
    var now = new Date();
    var ddid = now.getDate();
    document.getElementById('dd').innerHTML = ddid;
    }
}
</script>
<script language="JavaScript">
function execute_program(){
var inputStr=document.form_vowel.strings_remove.value;
var result = Remove_Vowels_Str(inputStr);
document.form_vowel.answer.value = result;
}
function Remove_Vowels_Str(str) {
 return str.replace(/[aeiouAEIOU]/gi, '');
}
</script>




<script>
// LowerCase, Title And Sentence Case Converter Tool- by javascriptkit.com
// Visit JavaScript Kit (http://javascriptkit.com) for script

var stringbox = document.getElementById('stringbox')
var wordcountspan = document.getElementById('wordcount')
var charcountspan = document.getElementById('charcount')


function convertstring(textarea, action){
	if (action == 'sentencecase'){
		textarea.value = sentenceCase(textarea.value)
	}
	else if (action == 'titlecase'){
		textarea.value = toTitleCase(textarea.value)
	}
	else if (action == 'capitalcase'){
		textarea.value = CapitalCase(textarea.value)
	}
	else if (action == 'lowercase'){
		textarea.value = lowerCase(textarea.value)
	}
	else if (action == 'uppercase'){
		textarea.value = upperCase(textarea.value)
	}
	return false
}

function sentenceCase(str){
	var str = str.toLowerCase().replace(/\si\s/g, ' I ');
	str = str.charAt(0).toUpperCase() + str.slice(1);
	return str
}

//reference: https://github.com/gouch/to-title-case
function toTitleCase(str){
  var smallWords = /^(a|an|and|as|at|but|by|en|for|if|in|nor|of|on|or|per|the|to|vs?\.?|via)$/i;
	var str = str.toLowerCase()
  return str.replace(/[A-Za-z0-9\u00C0-\u00FF]+[^\s-]*/g, function(match, index, title){
    if (index > 0 && index + match.length !== title.length &&
      match.search(smallWords) > -1 && title.charAt(index - 2) !== ":" &&
      (title.charAt(index + match.length) !== '-' || title.charAt(index - 1) === '-') &&
      title.charAt(index - 1).search(/[^\s-]/) < 0) {
      return match.toLowerCase();
    }

    if (match.substr(1).search(/[A-Z]|\../) > -1) {
      return match;
    }

    return match.charAt(0).toUpperCase() + match.substr(1);
  });
};

//reference: https://medium.freecodecamp.com/three-ways-to-title-case-a-sentence-in-javascript-676a9175eb27
function CapitalCase(str){
  return str.toLowerCase().split(' ').map(function(word) {
    return (word.charAt(0).toUpperCase() + word.slice(1));
  }).join(' ');
}

function lowerCase(str){
  return str.toLowerCase();
}

function upperCase(str){
  return str.toUpperCase();
}

function wordandcharcount(){
	wordcountspan.innerHTML = stringbox.value.split(' ').length
	charcountspan.innerHTML = stringbox.value.length
}


stringbox.addEventListener('input', function(){
	wordandcharcount()
}, false)

wordandcharcount()

</script>
<script>
document.getElementById('copy-text').addEventListener('click', function(e){
    // Click event
});

document.getElementById('text-to-copy').select();


copied = document.execCommand('copy');



// Add click event
document.getElementById('copy-text').addEventListener('click', function(e){
  e.preventDefault();

  // Select the text
  document.getElementById('text-to-copy').select();

  var copied;

  try
  {
      // Copy the text
      copied = document.execCommand('copy');
  } 
  catch (ex)
  {
      copied = false;  
  }

  if(copied)
  {
    // Display the copied text message
    document.getElementById('copied-text').style.display = 'block';    
  }

});
</script>
 
 
 
 
 
    <!--
    //bbc.com JSON.stringify([...document.querySelectorAll('a.media__link')].map(r => r.textContent))
//cnnn JSON.stringify([...document.querySelectorAll('h3.cd__headline')].map(r => r.textContent))-->

    <div id="navi">
<p style="text-align:center;"><a href="#tile">Top</a></p>
</div><!--end #navi-->
<p>&#169; 2019 Steith</p>
</div><!--end #footer-->
</div><!--end#wrapper-->
</body>
</html>