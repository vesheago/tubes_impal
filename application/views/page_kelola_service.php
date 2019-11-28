<!doctype HTML>
<head>
<title>Kelola Service</title>
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
        <td width="300">Ganti Aki</td>
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
        <td>Tune Up Mesin</td>
        <td>Rp.</td>
        <td align="right">245.000</td>
        <td align="center"><input type=checkbox name=ikan value="245000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Ganti Oli Transmisi</td>
        <td>Rp.</td>
        <td align="right">150.000</td>
        <td align="center"><input type=checkbox name=ikan value="150000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Tune Up Mesin + Servis Rem</td>
        <td>Rp.</td>
        <td align="right">345.000</td>
        <td align="center"><input type=checkbox name=ikan value="345000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Pengecekan Masalah</td>
        <td>Rp.</td>
        <td align="right">100.000</td>
        <td align="center"><input type=checkbox name=ikan value="100000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Inspeksi 150 Poin</td>
        <td>Rp.</td>
        <td align="right">345.000</td>
        <td align="center"><input type=checkbox name=ikan value="345000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Kuras Air Radiator / Coolant</td>
        <td>Rp.</td>
        <td align="right">69.000</td>
        <td align="center"><input type=checkbox name=ikan value="69000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Kuras Minyak Rem</td>
        <td>Rp.</td>
        <td align="right">105.000</td>
        <td align="center"><input type=checkbox name=ikan value="105000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Pengecekan Masalah AC Mobil</td>
        <td>Rp.</td>
        <td align="right">100.000</td>
        <td align="center"><input type=checkbox name=ikan value="100000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td>Servis Rem</td>
        <td>Rp.</td>
        <td align="right">100.000</td>
        <td align="center"><input type=checkbox name=ikan value="100000" onClick="this.form.total.value=checkChoice(this);"></td>
      </tr>
      <tr>
        <td colspan="4" align="right">Total :
          <input type="text" name="total" value=""  readonly>
          <input type=hidden name=hiddentotal value=0></td>
      </tr>
    </table>
    </form>
    </center>
    <!-- <input type="button" value="Selanjutnya" style="float: right;" href="<?php echo base_url().'C_admin/total_tagihan'?>"> -->
    <!-- <button class="btn btn-lg btn-primary" href="<?php echo base_url().'C_admin/totalTagihan'?>">Selanjutnya</button> -->
    <a href="<?php echo base_url().'c_admin/totalTagihan'?>">Selanjutnya</a>
    <br>
  </div>
</div>
</body>
</html>