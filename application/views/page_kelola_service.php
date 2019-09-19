<!doctype HTML>
<head>
<title>Menghitung nilai di checbox otomatis</title>
</head>
<script language="JavaScript">
    function checkChoice(whichbox){
        with (whichbox.form){
            if (whichbox.checked == false)
                hiddentotal.value = eval(hiddentotal.value) - eval(whichbox.value);
            else
                hiddentotal.value = eval(hiddentotal.value) + eval(whichbox.value);
                return(formatCurrency(hiddentotal.value));
        }
    }
    function formatCurrency(num){
    num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num)) num = "0";
    cents = Math.floor((num*100+0.5)%100);
    num = Math.floor((num*100+0.5)/100).toString();
    if(cents < 10) cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
    num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
    return ("Rp. " + num + "," + cents);
    }
</script>
<body>
<div class="container">
  <div class="box">
<center>
<form name=myform><table width="335" border="0">
  <tr>
    <td colspan="6" align="center"><strong>Service Umum</strong></td>
    </tr>
  <tr>
    <td width="156">Ganti Aki</td>
    <td width="29">Rp. </td>
    <td width="99" align="right">720.000</td>
    <td width="33" align="center"><input type=checkbox name=nasi value="720000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Ganti Oli Mesin</td>
    <td>Rp.</td>
    <td align="right">860.000</td>
    <td align="center"><input type=checkbox name=ikan value="860000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td colspan="4" align="right">Total :
      <input type="text" name="total" value=""  readonly>
      <input type=hidden name=hiddentotal value=0></td>
  </tr>
</table>
</form>
</center>
</div>
</div>
</body>
</html>